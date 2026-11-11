<?php

declare(strict_types=1);

namespace Drupal\Tests\menu_per_role\Functional;

use Drupal\Core\Session\AccountInterface;
use Drupal\menu_per_role\Form\MenuPerRoleAdminSettings;
use Drupal\user\UserInterface;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\RunTestsInSeparateProcesses;

/**
 * Test access control to menu links.
 */
#[Group('menu_per_role')]
#[RunTestsInSeparateProcesses]
class MenuPerRoleAccessTest extends MenuPerRoleFunctionalTestBase {

  /**
   * User 1.
   */
  protected UserInterface $user1;

  /**
   * User 2.
   */
  protected UserInterface $user2;

  /**
   * User 3.
   */
  protected UserInterface $user3;

  /**
   * User 4.
   */
  protected UserInterface $user4;

  /**
   * Admin user.
   */
  protected UserInterface $admin;

  /**
   * The machine name of the user 1's role.
   */
  protected string $user1Role = 'role1';

  /**
   * The machine name of the user 2's role.
   */
  protected string $user2Role = 'role2';

  /**
   * The machine name of the user 3's role.
   */
  protected string $user3Role = 'role3';

  /**
   * The machine name of the user 4's role.
   */
  protected string $user4Role = 'role4';

  /**
   * The machine name of the admin's role.
   */
  protected string $adminRole = 'admin_menu_per_role';

  /**
   * The list of user1 permissions.
   *
   * @var string[]
   */
  protected array $user1Permissions = [
    'access content',
  ];

  /**
   * The list of user2 permissions.
   *
   * @var string[]
   */
  protected array $user2Permissions = [
    'access content',
  ];

  /**
   * The list of user3 permissions.
   *
   * @var string[]
   */
  protected array $user3Permissions = [
    'access content',
    'bypass menu_per_role access front',
  ];

  /**
   * The list of user4 permissions.
   *
   * @var string[]
   */
  protected array $user4Permissions = [
    'access content',
    'bypass menu_per_role access admin',
  ];

  /**
   * The list of admin permissions.
   *
   * @var string[]
   */
  protected array $adminPermissions = [
    'access content',
    'administer menu',
  ];

  /**
   * The expectations per user.
   *
   * @var array<string, array<string, bool>>
   */
  protected $expectations = [];

  /**
   * The path used for tests.
   */
  protected string $testPath = '<front>';

  /**
   * The setting used for admin bypass.
   */
  protected string $adminBypassSetting = 'admin_bypass_access_front';

  /**
   * {@inheritdoc}
   *
   * @throws \Drupal\Core\Entity\EntityStorageException
   */
  protected function setUp(): void {
    parent::setUp();

    // User1.
    $user1Role = $this->drupalCreateRole($this->user1Permissions, $this->user1Role);
    $user1 = $this->drupalCreateUser([], 'user1');
    $this->user1 = $user1;
    $this->user1->addRole($user1Role);
    $this->user1->save();

    // User2.
    $user2Role = $this->drupalCreateRole($this->user2Permissions, $this->user2Role);
    $user2 = $this->drupalCreateUser([], 'user2');
    $this->user2 = $user2;
    $this->user2->addRole($user2Role);
    $this->user2->save();

    // User3.
    $user3Role = $this->drupalCreateRole($this->user3Permissions, $this->user3Role);
    $user3 = $this->drupalCreateUser([], 'user3');
    $this->user3 = $user3;
    $this->user3->addRole($user3Role);
    $this->user3->save();

    // User4.
    $user4Role = $this->drupalCreateRole($this->user4Permissions, $this->user4Role);
    $user4 = $this->drupalCreateUser([], 'user4');
    $this->user4 = $user4;
    $this->user4->addRole($user4Role);
    $this->user4->save();

    // Admin.
    $adminRole = $this->drupalCreateRole($this->adminPermissions, $this->adminRole);
    $admin = $this->drupalCreateUser([], 'admin_menu_per_role', TRUE);
    $this->admin = $admin;
    $this->admin->addRole($adminRole);
    $this->admin->save();
  }

  /**
   * Check if users have access to menu links.
   *
   * @throws \Drupal\Core\Entity\EntityStorageException
   * @throws \Behat\Mink\Exception\ExpectationException
   */
  public function testRoleAccess(): void {
    // Test "Show roles" by role.
    $this->prepareMenuLinkAndExpectations('link 1 - show anonymous', [AccountInterface::ANONYMOUS_ROLE], [], [
      'anonymous' => TRUE,
      'user1' => FALSE,
      'user2' => FALSE,
      'user3' => TRUE,
      'user4' => FALSE,
    ]);
    $this->prepareMenuLinkAndExpectations('link 2 - show role 1', [$this->user1Role], [], [
      'anonymous' => FALSE,
      'user1' => TRUE,
      'user2' => FALSE,
      'user3' => TRUE,
      'user4' => FALSE,
    ]);
    $this->prepareMenuLinkAndExpectations('link 3 - show role 2', [$this->user2Role], [], [
      'anonymous' => FALSE,
      'user1' => FALSE,
      'user2' => TRUE,
      'user3' => TRUE,
      'user4' => FALSE,
    ]);
    $this->prepareMenuLinkAndExpectations('link 4 - show role 3', [$this->user3Role], [], [
      'anonymous' => FALSE,
      'user1' => FALSE,
      'user2' => FALSE,
      'user3' => TRUE,
      'user4' => FALSE,
    ]);

    // Test "Hide roles" by role.
    $this->prepareMenuLinkAndExpectations('link 5 - hide anonymous', [], [AccountInterface::ANONYMOUS_ROLE], [
      'anonymous' => FALSE,
      'user1' => TRUE,
      'user2' => TRUE,
      'user3' => TRUE,
      'user4' => TRUE,
    ]);
    $this->prepareMenuLinkAndExpectations('link 6 - hide role 1', [], [$this->user1Role], [
      'anonymous' => TRUE,
      'user1' => FALSE,
      'user2' => TRUE,
      'user3' => TRUE,
      'user4' => TRUE,
    ]);
    $this->prepareMenuLinkAndExpectations('link 7 - hide role 2', [], [$this->user2Role], [
      'anonymous' => TRUE,
      'user1' => TRUE,
      'user2' => FALSE,
      'user3' => TRUE,
      'user4' => TRUE,
    ]);
    $this->prepareMenuLinkAndExpectations('link 8 - hide role 3', [], [$this->user3Role], [
      'anonymous' => TRUE,
      'user1' => TRUE,
      'user2' => TRUE,
      'user3' => TRUE,
      'user4' => TRUE,
    ]);

    // Test combinations of roles to show.
    $this->prepareMenuLinkAndExpectations(
      'link 9 - show anonymous and role 1',
      [
        AccountInterface::ANONYMOUS_ROLE,
        $this->user1Role,
      ],
      [],
      [
        'anonymous' => TRUE,
        'user1' => TRUE,
        'user2' => FALSE,
        'user3' => TRUE,
        'user4' => FALSE,
      ]
    );
    $this->prepareMenuLinkAndExpectations(
      'link 10 - show role 1 and role 2',
      [
        $this->user1Role,
        $this->user2Role,
      ],
      [],
      [
        'anonymous' => FALSE,
        'user1' => TRUE,
        'user2' => TRUE,
        'user3' => TRUE,
        'user4' => FALSE,
      ]
    );
    $this->prepareMenuLinkAndExpectations(
      'link 11 - show role 2 and role 3',
      [
        $this->user2Role,
        $this->user3Role,
      ],
      [],
      [
        'anonymous' => FALSE,
        'user1' => FALSE,
        'user2' => TRUE,
        'user3' => TRUE,
        'user4' => FALSE,
      ]
    );
    $this->prepareMenuLinkAndExpectations(
      'link 12 - show anonymous and role 3',
      [
        AccountInterface::ANONYMOUS_ROLE,
        $this->user3Role,
      ],
      [],
      [
        'anonymous' => TRUE,
        'user1' => FALSE,
        'user2' => FALSE,
        'user3' => TRUE,
        'user4' => FALSE,
      ]
    );

    // Test combinations of roles to hide.
    $this->prepareMenuLinkAndExpectations(
      'link 13 - hide anonymous and role 1',
      [],
      [
        AccountInterface::ANONYMOUS_ROLE,
        $this->user1Role,
      ],
      [
        'anonymous' => FALSE,
        'user1' => FALSE,
        'user2' => TRUE,
        'user3' => TRUE,
        'user4' => TRUE,
      ]
    );
    $this->prepareMenuLinkAndExpectations(
      'link 14 - hide role 1 and role 2',
      [],
      [
        $this->user1Role,
        $this->user2Role,
      ],
      [
        'anonymous' => TRUE,
        'user1' => FALSE,
        'user2' => FALSE,
        'user3' => TRUE,
        'user4' => TRUE,
      ]
    );
    $this->prepareMenuLinkAndExpectations(
      'link 15 - hide role 1 and role 3',
      [],
      [
        $this->user1Role,
        $this->user3Role,
      ],
      [
        'anonymous' => TRUE,
        'user1' => FALSE,
        'user2' => TRUE,
        'user3' => TRUE,
        'user4' => TRUE,
      ]
    );
    $this->prepareMenuLinkAndExpectations(
      'link 16 - hide anonymous and role 2',
      [],
      [
        AccountInterface::ANONYMOUS_ROLE,
        $this->user2Role,
      ],
      [
        'anonymous' => FALSE,
        'user1' => TRUE,
        'user2' => FALSE,
        'user3' => TRUE,
        'user4' => TRUE,
      ]
    );

    // Test combinations of roles to show and hide.
    $this->prepareMenuLinkAndExpectations('link 17 - show anonymous and hide role 1', [AccountInterface::ANONYMOUS_ROLE], [$this->user1Role], [
      'anonymous' => TRUE,
      'user1' => FALSE,
      'user2' => FALSE,
      'user3' => TRUE,
      'user4' => FALSE,
    ]);
    $this->prepareMenuLinkAndExpectations('link 18 - show role 2 and hide role 1', [$this->user2Role], [$this->user1Role], [
      'anonymous' => FALSE,
      'user1' => FALSE,
      'user2' => TRUE,
      'user3' => TRUE,
      'user4' => FALSE,
    ]);
    $this->prepareMenuLinkAndExpectations(
      'link 19 - show anonymous and hide role 1 and role 3',
      [AccountInterface::ANONYMOUS_ROLE],
      [
        $this->user1Role,
        $this->user3Role,
      ],
      [
        'anonymous' => TRUE,
        'user1' => FALSE,
        'user2' => FALSE,
        'user3' => TRUE,
        'user4' => FALSE,
      ]
    );
    $this->prepareMenuLinkAndExpectations(
      'link 20 - show anonymous and role 1 and role 3 and hide role 2',
      [
        AccountInterface::ANONYMOUS_ROLE,
        $this->user1Role,
        $this->user3Role,
      ],
      [$this->user2Role],
      [
        'anonymous' => TRUE,
        'user1' => TRUE,
        'user2' => FALSE,
        'user3' => TRUE,
        'user4' => FALSE,
      ]
    );

    $this->linksAccessTest();
  }

  /**
   * Check the admin bypass feature in front.
   *
   * @throws \Drupal\Core\Entity\EntityStorageException
   * @throws \Behat\Mink\Exception\ExpectationException
   */
  public function testAdminBypass(): void {
    // No bypass.
    $config = $this->configFactory->getEditable(MenuPerRoleAdminSettings::CONFIG_NAME);
    $config->set($this->adminBypassSetting, FALSE);
    $config->save();

    $this->prepareMenuLinkAndExpectations('link 1 - show anonymous', [AccountInterface::ANONYMOUS_ROLE], [], [
      'admin' => FALSE,
    ]);
    $this->prepareMenuLinkAndExpectations('link 2 - show role 1', [$this->user1Role], [], [
      'admin' => FALSE,
    ]);
    $this->prepareMenuLinkAndExpectations('link 3 - show admin', [$this->adminRole], [], [
      'admin' => TRUE,
    ]);
    $this->prepareMenuLinkAndExpectations('link 4 - hide anonymous', [], [AccountInterface::ANONYMOUS_ROLE], [
      'admin' => TRUE,
    ]);
    $this->prepareMenuLinkAndExpectations('link 5 - hide role 1', [], [$this->user1Role], [
      'admin' => TRUE,
    ]);
    $this->prepareMenuLinkAndExpectations('link 6 - hide admin', [], [$this->adminRole], [
      'admin' => FALSE,
    ]);
    $this->prepareMenuLinkAndExpectations('link 7 - show anonymous and hide role 1', [AccountInterface::ANONYMOUS_ROLE], [$this->user1Role], [
      'admin' => FALSE,
    ]);

    $this->linksAccessTest();
    // Avoid exception due to cache not flushed after editing settings.
    // Adding cache tag on the config in the menu link tree manipulator has
    // no effect.
    \drupal_flush_all_caches();

    // Bypass.
    $config = $this->configFactory->getEditable(MenuPerRoleAdminSettings::CONFIG_NAME);
    $config->set($this->adminBypassSetting, TRUE);
    $config->save();

    $this->prepareMenuLinkAndExpectations('link 1 - show anonymous', [AccountInterface::ANONYMOUS_ROLE], [], [
      'admin' => TRUE,
    ]);
    $this->prepareMenuLinkAndExpectations('link 2 - show role 1', [$this->user1Role], [], [
      'admin' => TRUE,
    ]);
    $this->prepareMenuLinkAndExpectations('link 3 - show admin', [$this->adminRole], [], [
      'admin' => TRUE,
    ]);
    $this->prepareMenuLinkAndExpectations('link 4 - hide anonymous', [], [AccountInterface::ANONYMOUS_ROLE], [
      'admin' => TRUE,
    ]);
    $this->prepareMenuLinkAndExpectations('link 5 - hide role 1', [], [$this->user1Role], [
      'admin' => TRUE,
    ]);
    $this->prepareMenuLinkAndExpectations('link 6 - hide admin', [], [$this->adminRole], [
      'admin' => TRUE,
    ]);
    $this->prepareMenuLinkAndExpectations('link 7 - show anonymous and hide role 1', [AccountInterface::ANONYMOUS_ROLE], [$this->user1Role], [
      'admin' => TRUE,
    ]);

    $this->linksAccessTest();
  }

  /**
   * Prepare expectations for more performant testing.
   *
   * @param string $menuLinkTitle
   *   The menu link title.
   * @param array $showMenuRoles
   *   The roles which can see menu link.
   * @param array $hideMenuRoles
   *   The roles which can't see menu link.
   * @param array<string, bool> $expectationsPerUser
   *   The list of expectations for this menu link. Keyed by user property.
   *
   * @throws \Drupal\Core\Entity\EntityStorageException
   */
  protected function prepareMenuLinkAndExpectations(string $menuLinkTitle, array $showMenuRoles, array $hideMenuRoles, array $expectationsPerUser): void {
    $this->createOrUpdateMenuLink($menuLinkTitle, $showMenuRoles, $hideMenuRoles);

    foreach ($expectationsPerUser as $userProperty => $expectationPerUser) {
      $this->expectations[$userProperty][$menuLinkTitle] = $expectationPerUser;
    }
  }

  /**
   * Test if the users can see the expected links.
   *
   * @throws \Behat\Mink\Exception\ExpectationException
   */
  protected function linksAccessTest(): void {
    foreach ($this->expectations as $userProperty => $expectations) {
      if ($userProperty === 'anonymous') {
        if ($this->loggedInUser) {
          $this->drupalLogout();
        }
      }
      else {
        // @phpstan-ignore-next-line
        $this->drupalLogin($this->{$userProperty});
      }

      $this->drupalGet($this->testPath);

      foreach ($expectations as $label => $expectation) {
        if ($expectation) {
          $this->assertSession()->linkExists($label);
        }
        else {
          $this->assertSession()->linkNotExists($label);
        }
      }
    }
  }

}
