<?php

namespace Drupal\Tests\scheduled_maintenance\Functional;

use Drupal\FunctionalJavascriptTests\WebDriverTestBase;

/**
 * Test the Scheduled Maintenance module install without errors.
 *
 * @group scheduled_maintenance
 */
class InstallTest extends WebDriverTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'scheduled_maintenance',
    'datetime',
    'field',
  ];

  /**
   * Assert that the scheduled_maintenance module installed correctly.
   */
  public function testModuleInstalls() {
    // If we get here, then the module was successfully installed during the
    // setUp phase without throwing any Exceptions. Assert that TRUE is true,
    // so at least one assertion runs, and then exit.
    $this->assertTrue(TRUE, 'Module installed correctly.');
  }

}
