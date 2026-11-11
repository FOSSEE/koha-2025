<?php

namespace Drupal\cleaner\EventSubscriber;

use Drupal\cleaner\Event\CleanerRunEvent;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Config\ImmutableConfig;
use Drupal\Core\Database\Connection;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;
use Drupal\Core\Logger\LoggerChannelInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Cleaner watchdog clear subscriber.
 *
 * @package Drupal\cleaner\EventSubscriber
 */
class CleanerWatchdogClearEventSubscriber implements EventSubscriberInterface, ContainerInjectionInterface {

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
    $events[CleanerRunEvent::CLEANER_RUN][] = ['clearWatchdog', 100];
    return $events;
  }

  /**
   * CleanerWatchdogClearEventSubscriber constructor.
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
  public static function create(ContainerInterface $container): CleanerWatchdogClearEventSubscriber {
    return new static(
      $container->get('database'),
      $container->get('config.factory'),
      $container->get('logger.factory')
    );
  }

  /**
   * Cleaner tables clearing.
   */
  public function clearWatchdog(): void {
    if ($this->config->get('cleaner_empty_watchdog')) {
      if (!$this->database->schema()?->tableExists('watchdog')) {
        $this->loggerChannel
          ->error("Something going wrong - watchdog logs cannot be cleared.");
      }
      else {
        $this->database->query('TRUNCATE {watchdog}')?->execute();
        $this->loggerChannel
          ->info('Watchdog logs has been successfully cleared.');
      }
    }
  }

}
