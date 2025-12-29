<?php

namespace Drupal\cleaner\EventSubscriber;

use Drupal\cleaner\Event\CleanerRunEvent;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Config\ImmutableConfig;
use Drupal\Core\Database\Connection;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;
use Drupal\Core\Logger\LoggerChannelInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Cleaner cache clear subscriber.
 *
 * @package Drupal\cleaner\EventSubscriber
 */
class CleanerCacheClearEventSubscriber implements EventSubscriberInterface, ContainerInjectionInterface {

  /**
   * Database connection.
   *
   * @var \Drupal\Core\Database\Connection
   */
  protected Connection $database;

  /**
   * Config object.
   *
   * @var \Drupal\Core\Config\ImmutableConfig
   */
  protected ImmutableConfig $config;

  /**
   * Cache backend.
   *
   * @var \Drupal\Core\Cache\CacheBackendInterface
   */
  protected CacheBackendInterface $cacheBackend;

  /**
   * Logger channel.
   *
   * @var \Drupal\Core\Logger\LoggerChannelInterface
   */
  protected LoggerChannelInterface $loggerChannel;

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents(): array {
    $events[CleanerRunEvent::CLEANER_RUN][] = ['clearCaches', 100];
    return $events;
  }

  /**
   * CleanerCacheClearEventSubscriber constructor.
   *
   * @param \Drupal\Core\Database\Connection $database
   *   Database connection.
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   Config factory.
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
   *   Cache backend.
   * @param \Drupal\Core\Logger\LoggerChannelFactoryInterface $logger_channel_factory
   *   Logger channel factory.
   */
  public function __construct(
    Connection $database,
    ConfigFactoryInterface $config_factory,
    CacheBackendInterface $cache_backend,
    LoggerChannelFactoryInterface $logger_channel_factory
  ) {
    $this->database      = $database;
    $this->config        = $config_factory->get('cleaner.settings');
    $this->cacheBackend  = $cache_backend;
    $this->loggerChannel = $logger_channel_factory->get('cleaner');
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container): CleanerCacheClearEventSubscriber {
    return new static(
      $container->get('database'),
      $container->get('config.factory'),
      $container->get('cache.default'),
      $container->get('logger.factory')
    );
  }

  /**
   * Cleaner caches clearing.
   */
  public function clearCaches(): void {
    if ($this->config->get('cleaner_clear_cache')) {
      $cleared = 0;
      // First clearing caches for the static caches.
      $this->cacheBackend->deleteAll();
      // Prepare cache tables list.
      $tables = $this->cleanerGetCacheTables();
      // Ensure tables exist.
      if (!empty($tables)) {
        // Clears the cache tables
        // and increments the cleared entries count.
        $cleared += $this->performClearing($tables);
      }
      $this->writeToLog($cleared);
    }
  }

  /**
   * Perform caches clearing work.
   *
   * @param array $tables
   *   Table names array.
   *
   * @return int
   *   Amount of cleared tables.
   */
  protected function performClearing(array $tables): int {
    $cleared = 0;
    foreach ($tables as $table) {
      if (!$this->database->schema()?->tableExists($table)) {
        continue;
      }
      if ($this->database->query("TRUNCATE $table")?->execute()) {
        $cleared++;
      }
    }
    return $cleared;
  }

  /**
   * Get cache tables list.
   *
   * @return array
   *   Cache tables list array.
   *
   * @throws \Exception
   */
  protected function cleanerGetCacheTables(): array {
    $tables  = [];
    $db_name = $this->getDatabaseName();
    if (!empty($db_name)) {
      $query = $this->database->select('INFORMATION_SCHEMA.TABLES', 'tables');
      $query->fields('tables', ['table_name', 'table_schema']);
      $query->condition('table_schema', $db_name);
      $query->condition('table_name', 'cache_%', 'LIKE');
      // Exclude cachetags table.
      $query->condition('table_name', 'cachetags', '<>');
      $tables = $query->execute()->fetchCol();
    }
    return $tables;
  }

  /**
   * Get active database name.
   *
   * @return string|null
   *   Database name.
   */
  protected function getDatabaseName(): ?string {
    $options = $this->database->getConnectionOptions();
    return $options['database'] ?? NULL;
  }

  /**
   * Write a message about successful or not cache tables clearing.
   *
   * @param int $count
   *   Count of tables cleared. Defaults to 0.
   */
  protected function writeToLog(int $count = 0): void {
    if ($count > 0) {
      $this->loggerChannel
        ->info(
          'Cleared @count cache tables by Cleaner.',
          ['@count' => $count]
        );
    }
    else {
      $this->loggerChannel
        ->error('There are no selected cache tables in the database.');
    }
  }

}
