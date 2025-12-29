<?php

namespace Drupal\cleaner\EventSubscriber;

use Drupal\cleaner\Event\CleanerRunEvent;
use Drupal\Component\Utility\Xss;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Config\ImmutableConfig;
use Drupal\Core\Database\Connection;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;
use Drupal\Core\Logger\LoggerChannelInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Cleaner tables clear subscriber.
 *
 * @package Drupal\cleaner\EventSubscriber
 */
class CleanerTablesClearEventSubscriber implements EventSubscriberInterface, ContainerInjectionInterface {

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
   * Logger channel.
   *
   * @var \Drupal\Core\Logger\LoggerChannelInterface
   */
  protected LoggerChannelInterface $loggerChannel;

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents(): array {
    $events[CleanerRunEvent::CLEANER_RUN][] = ['clearTables', 100];
    return $events;
  }

  /**
   * CleanerTablesClearEventSubscriber constructor.
   *
   * @param \Drupal\Core\Database\Connection $database
   *   Database connection.
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   Config factory.
   * @param \Drupal\Core\Logger\LoggerChannelFactoryInterface $logger_channel_factory
   *   Logger channel factory.
   */
  public function __construct(
    Connection $database,
    ConfigFactoryInterface $config_factory,
    LoggerChannelFactoryInterface $logger_channel_factory
  ) {
    $this->database      = $database;
    $this->config        = $config_factory->get('cleaner.settings');
    $this->loggerChannel = $logger_channel_factory->get('cleaner');
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container): CleanerTablesClearEventSubscriber {
    return new static(
      $container->get('database'),
      $container->get('config.factory'),
      $container->get('logger.factory')
    );
  }

  /**
   * Cleaner tables clearing.
   */
  public function clearTables(): void {
    if ($this->config->get('cleaner_additional_tables') != '') {
      $cleared = 0;
      $tables = $this->getAdditionalTables();
      foreach ($tables as $table) {
        if (!$this->database->schema()?->tableExists($table)) {
          continue;
        }
        if ($this->database->query("TRUNCATE $table")?->execute()) {
          $cleared++;
        }
      }
      $this->loggerChannel
        ->info(
          'Cleaner cleared @count additional tables',
          ['@count' => $cleared]
        );
    }
  }

  /**
   * Get an additional tables for clearing.
   *
   * @return array
   *   Additional tables array.
   */
  protected function getAdditionalTables(): array {
    $tables = [];
    $additional = $this->config->get('cleaner_additional_tables');
    $additional = self::explode($additional);
    foreach ($additional as $table) {
      if ($this->database->schema()?->tableExists($table)) {
        $tables[] = $table;
      }
    }
    return $tables;
  }

  /**
   * Explode the string into the array.
   *
   * @param string $string
   *   String to be exploded.
   *
   * @return array
   *   Exploded string in array format.
   */
  private static function explode(string $string = ''): array {
    return (is_string($string) && !empty($string))
      ? explode(',', self::sanitize($string))
      : [];
  }

  /**
   * Sanitize the string.
   *
   * @param string $input
   *   Input to be sanitized.
   *
   * @return string|null
   *   Sanitized string.
   */
  private static function sanitize(string $input = ''): ?string {
    return !empty($input) && is_string($input)
      ? Xss::filter(trim($input))
      : NULL;
  }

}
