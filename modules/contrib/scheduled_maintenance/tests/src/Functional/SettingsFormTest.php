<?php

namespace Drupal\Tests\scheduled_maintenance\Functional;

use Drupal\Core\Url;
use Drupal\Tests\BrowserTestBase;

/**
 * Settings form test.
 *
 * @group scheduled_maintenance
 */
class SettingsFormTest extends BrowserTestBase {

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
   * The test admin user.
   *
   * @var \Drupal\User\UserInterface
   */
  protected $adminUser;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    // Create an administrative user.
    $this->adminUser = $this->drupalCreateUser([
      'administer site configuration',
      'access site in maintenance mode',
      'scheduled maintenance',
    ]);

    // Login admin user.
    $this->drupalLogin($this->adminUser);
  }

  /**
   * Test the settings form and confirm fields.
   *
   * @throws \Behat\Mink\Exception\ExpectationException
   */
  public function testSettingsForm() {
    // Check and make sure settings page loads.
    $this->drupalGet(Url::fromRoute('system.site_maintenance_mode'));
    $this->assertSession()->statusCodeEquals(200);

    // Check time date field.
    $timeDateField = $this->getSession()->getPage()->findById('edit-time-date');
    $this->assertNotNull($timeDateField);

    // Check time field.
    $timeField = $this->getSession()->getPage()->findById('edit-time-time');
    $this->assertNotNull($timeField);

    // Check auto start field. Should be checked off by default.
    $autoStartField = $this->getSession()->getPage()->findById('edit-auto-start');
    $this->assertEquals(TRUE, $autoStartField->isChecked(), 'Auto start checkbox is not checked, but it should be.');

    // Check message field.
    $messageField = $this->getSession()->getPage()->findById('edit-message');
    $this->assertNotNull($messageField);

    // Check message offset field.
    $messageOffsetField = $this->getSession()->getPage()->findById('edit-message-offset-value');
    $this->assertNotNull($messageOffsetField);

    // Check message offset units field.
    $messageOffsetUnitsField = $this->getSession()->getPage()->findById('edit-message-offset-unit');
    $this->assertNotNull($messageOffsetUnitsField);

    // Maintenance date.
    $maintenanceDate = date('Y-m-d');
    // Maintenance time.
    $maintenanceTime = date('H:m:s', strtotime('+1 hour'));
    // Maintenance Message.
    $message = 'Site has been scheduled for maintenance.';

    // Submit form.
    $this->drupalGet(Url::fromRoute('system.site_maintenance_mode'));
    $this->submitForm([
      'maintenance_mode' => 0,
      'time[date]' => $maintenanceDate,
      'time[time]' => $maintenanceTime,
      'auto_start' => 1,
      'message' => $message,
      'message_offset_value' => '',
      'message_offset_unit' => 'days',
    ], 'Save configuration');

    // Reload page and confirm it still loads fine.
    $this->drupalGet(Url::fromRoute('system.site_maintenance_mode'));
    $this->assertSession()->statusCodeEquals(200);

    // Check fields.
    $this->assertTrue($timeDateField->getValue() == $maintenanceDate);
    $this->assertTrue($timeField->getValue() == $maintenanceTime);
    $this->assertTrue($autoStartField->isChecked());
    $this->assertTrue($messageField->getValue() == $message);
    $this->assertTrue($messageOffsetField->getValue() == '');
    $this->assertTrue($messageOffsetUnitsField->getValue() == 'days');
  }

}
