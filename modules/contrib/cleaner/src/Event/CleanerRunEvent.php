<?php

namespace Drupal\cleaner\Event;

use Drupal\Component\EventDispatcher\Event;

/**
 * Describes a list of events.
 *
 * @package Drupal\cleaner\Event
 */
class CleanerRunEvent extends Event {

  /**
   * Event name.
   */
  public const CLEANER_RUN = 'cleaner.run';

}
