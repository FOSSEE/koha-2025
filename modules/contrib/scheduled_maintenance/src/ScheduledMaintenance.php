<?php

namespace Drupal\scheduled_maintenance;

use Drupal\Core\Config\ConfigFactory;
use Drupal\Core\Session\AccountProxyInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Scheduled Maintenance Service.
 */
class ScheduledMaintenance {

  use StringTranslationTrait;

  /**
   * The config factory object.
   *
   * @var \Drupal\Core\Config\ConfigFactory
   */
  protected $configFactory;

  /**
   * The current user service.
   *
   * @var \Drupal\Core\Session\AccountProxyInterface
   */
  protected $currentUser;

  /**
   * Constructor.
   *
   * @param \Drupal\Core\Config\ConfigFactory $config_factory
   *   The config factory object.
   * @param \Drupal\Core\Session\AccountProxyInterface $current_user
   *   The current user object.
   */
  public function __construct(ConfigFactory $config_factory, AccountProxyInterface $current_user) {
    $this->configFactory = $config_factory;
    $this->currentUser = $current_user;
  }

  /**
   * Get configuration.
   *
   * @return \Drupal\Core\Config\Config|\Drupal\Core\Config\ImmutableConfig
   *   Returns the config.
   */
  public function getConfig() {
    return $this->configFactory->getEditable('scheduled_maintenance.settings');
  }

  /**
   * Check to see if user has proper permissions/access rights.
   *
   * @return bool
   *   Returns access right.
   */
  public function hasAccess(): bool {
    return $this->currentUser->hasPermission('scheduled maintenance');
  }

  /**
   * Get default date format.
   *
   * @return string
   *   Returns default datetime format.
   */
  public function getDefaultDateFormat(): string {
    return 'Y-m-d H:i:s';
  }

  /**
   * Get allowed units.
   *
   * @return array
   *   Returns array of allowed units.
   */
  public function getAllowedUnits(): array {
    return [
      'days' => $this->t('day(s)'),
      'hours' => $this->t('hour(s)'),
      'minutes' => $this->t('minute(s)'),
      'seconds' => $this->t('second(s)'),
    ];
  }

}
