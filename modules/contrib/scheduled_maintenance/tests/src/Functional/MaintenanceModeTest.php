<?php

namespace Drupal\Tests\scheduled_maintenance\Functional;

use Drupal\Core\Url;
use Drupal\Tests\BrowserTestBase;

/**
 * Test out scheduled maintenance mode.
 *
 * @group scheduled_maintenance
 */
class MaintenanceModeTest extends BrowserTestBase {

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
    'node',
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

    // Configure 'node' as front page.
    $this->config('system.site')->set('page.front', '/node')->save();

    // Create a user allowed accessing site in maintenance mode.
    $this->user = $this->drupalCreateUser(['access site in maintenance mode']);

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
   * Test scheduled maintenance mode.
   *
   * @throws \Behat\Mink\Exception\ResponseTextException
   * @throws \Behat\Mink\Exception\ExpectationException
   */
  public function testMaintenanceMode() {
    $admin_message = 'Operating in maintenance mode. Go online.';
    $offline_message = $this->config('system.site')->get('name') . ' is currently under maintenance. We should be back shortly. Thank you for your patience.';

    // Check and make sure settings page loads.
    $this->drupalGet(Url::fromRoute('system.site_maintenance_mode'));
    $this->assertSession()->statusCodeEquals(200);

    // Current date.
    $currentDate = date('Y-m-d');
    // Current time.
    $currentTime = date('H:m:s');
    // Message.
    $message = 'Site has been scheduled for maintenance.';

    // Submit form.
    $this->drupalGet(Url::fromRoute('system.site_maintenance_mode'));
    $this->submitForm([
      'maintenance_mode' => 0,
      'time[date]' => $currentDate,
      'time[time]' => $currentTime,
      'auto_start' => 1,
      'message' => $message,
      'message_offset_value' => '',
      'message_offset_unit' => 'days',
    ], 'Save configuration');

    // Make sure admin message is appearing.
    $this->drupalGet(Url::fromRoute('user.page'));
    $this->assertSession()->pageTextContains($admin_message);
    $this->assertSession()->linkExists('Go online.');
    $this->assertSession()->linkByHrefExists(Url::fromRoute('system.site_maintenance_mode')->toString());

    // Logout and verify that offline message is displayed.
    $this->drupalLogout();
    $this->drupalGet('');
    $this->assertEquals('Site under maintenance', $this->cssSelect('main h1')[0]->getText());
    $this->assertSession()->pageTextContains($offline_message);
  }

}
