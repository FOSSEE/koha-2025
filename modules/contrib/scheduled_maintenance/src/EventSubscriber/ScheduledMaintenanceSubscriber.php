<?php

namespace Drupal\scheduled_maintenance\EventSubscriber;

use Drupal\Component\Datetime\TimeInterface;
use Drupal\Core\Messenger\MessengerTrait;
use Drupal\Core\State\StateInterface;
use Drupal\scheduled_maintenance\ScheduledMaintenance;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Scheduled Maintenance Event Subscriber.
 */
class ScheduledMaintenanceSubscriber implements EventSubscriberInterface {

  use MessengerTrait;

  /**
   * The time service.
   *
   * @var \Drupal\Component\Datetime\TimeInterface
   */
  protected $time;

  /**
   * The state service.
   *
   * @var \Drupal\Core\State\StateInterface
   */
  protected $state;

  /**
   * The scheduled maintenance service.
   *
   * @var \Drupal\scheduled_maintenance\ScheduledMaintenance
   */
  protected $scheduledMaintenance;

  /**
   * Constructor.
   *
   * @param \Drupal\Core\State\StateInterface $state
   *   The state service.
   * @param \Drupal\Component\Datetime\TimeInterface $time
   *   The time service.
   * @param \Drupal\scheduled_maintenance\ScheduledMaintenance $scheduled_maintenance
   *   The scheduled maintenance service.
   */
  public function __construct(
    StateInterface $state,
    TimeInterface $time,
    ScheduledMaintenance $scheduled_maintenance
  ) {
    $this->time = $time;
    $this->state = $state;
    $this->scheduledMaintenance = $scheduled_maintenance;
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents(): array {
    $events[KernelEvents::REQUEST][] = ['checkForScheduledMaintenance'];
    return $events;
  }

  /**
   * Checks if a scheduled maintenance should be started.
   *
   * @param \Symfony\Component\HttpKernel\Event\RequestEvent $event
   *   The request event.
   */
  public function checkForScheduledMaintenance($event) {
    // Get maintenance mode state.
    $maintenance_mode = $this->state->get('system.maintenance_mode');

    // Get auto-start.
    $auto_start = $this->scheduledMaintenance->getConfig()->get('auto_start');
    if (empty($auto_start)) {
      $auto_start = TRUE;
    }

    // Get scheduled maintenance time setting.
    $scheduled_time = $this->scheduledMaintenance->getConfig()->get('time');

    // Validate that maintenance mode is not enabled and that a scheduled
    // maintenance time is set.
    if ($maintenance_mode || !$scheduled_time) {
      return;
    }

    // Convert string to timestamp.
    $scheduled_time = strtotime($scheduled_time);

    // If auto start is enabled and the scheduled time is less than or equal
    // to the current time, enable maintenance mode and clear the scheduled
    // maintenance time setting.
    if ($auto_start && $scheduled_time <= $this->time->getRequestTime()) {
      $this->state->set('system.maintenance_mode', 1);
      $this->scheduledMaintenance->getConfig()->clear('time')->save();
    }
    elseif ($this->time->getRequestTime() >= $scheduled_time) {
      $this->state->set('system.maintenance_mode', 0);
      $this->scheduledMaintenance->getConfig()->clear('auto_start')->save();
    }
    else {
      // Get message setting.
      $message = $this->scheduledMaintenance->getConfig()->get('message');

      // Validate that there is a message.
      if (!$message) {
        return;
      }

      // Get time offset settings for message display.
      $offset_value = $this->scheduledMaintenance->getConfig()->get('offset.value');
      $offset_unit = $this->scheduledMaintenance->getConfig()->get('offset.unit');

      // Validate time offset unit to one of the allowed units.
      if (!$offset_unit || !array_key_exists($offset_unit, $this->scheduledMaintenance->getAllowedUnits())) {
        return;
      }

      // Validate time offset value to a positive integer.
      if ($offset_value === '' || (!is_numeric($offset_value) || intval($offset_value) != $offset_value || $offset_value <= 0)) {
        return;
      }

      // Convert time offset to a timestamp.
      $message_timestamp = strtotime("-$offset_value $offset_unit", $scheduled_time);

      // If message time is less than or equal to the current time, show the
      // message.
      if ($message_timestamp <= $this->time->getRequestTime()) {
        $this->messenger()->addMessage($message, 'warning', FALSE);
      }
    }
  }

}
