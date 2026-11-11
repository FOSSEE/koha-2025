<?php

namespace Drupal\cleaner\Form;

use Drupal\Component\Datetime\TimeInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Database\Connection;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Markup;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\Theme\ThemeManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class CleanerSettingsForm.
 *
 * @package Drupal\cleaner\Form
 */
class CleanerSettingsForm extends ConfigFormBase {

  /**
   * Database connection.
   *
   * @var \Drupal\Core\Database\Connection
   */
  protected Connection $database;

  /**
   * Theme manager.
   *
   * @var \Drupal\Core\Theme\ThemeManagerInterface
   */
  protected ThemeManagerInterface $themeManager;

  /**
   * Date time service.
   *
   * @var \Drupal\Component\Datetime\TimeInterface
   */
  protected TimeInterface $dateTime;

  /**
   * Module handler.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected ModuleHandlerInterface $moduleHandler;

  /**
   * Static array with the time intervals.
   *
   * @var array
   */
  protected static array $intervals = [
    900    => '15 min',
    1800   => '30 min',
    3600   => '1 hour',
    7200   => '2 hour',
    14400  => '4 hours',
    21600  => '6 hours',
    43200  => '12 hours',
    86400  => '1 day',
    172800 => '2 days',
    259200 => '3 days',
    604800 => '1 week',
  ];

  /**
   * CleanerSettingsForm constructor.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The factory for configuration objects.
   * @param \Drupal\Core\Database\Connection $database
   *   Database connection.
   * @param \Drupal\Core\Theme\ThemeManagerInterface $theme_manager
   *   Theme manager.
   * @param \Drupal\Component\Datetime\TimeInterface $time
   *   Date time service.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   Module handler.
   */
  public function __construct(
    ConfigFactoryInterface $config_factory,
    Connection $database,
    ThemeManagerInterface $theme_manager,
    TimeInterface $time,
    ModuleHandlerInterface $module_handler
  ) {
    parent::__construct($config_factory);
    $this->database      = $database;
    $this->themeManager  = $theme_manager;
    $this->dateTime      = $time;
    $this->moduleHandler = $module_handler;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container): CleanerSettingsForm {
    return new static(
      $container->get('config.factory'),
      $container->get('database'),
      $container->get('theme.manager'),
      $container->get('datetime.time'),
      $container->get('module_handler')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId(): string {
    return 'cleaner_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames(): array {
    return ['cleaner.settings'];
  }

  /**
   * Get cache tables' table.
   */
  protected function getCacheTablesTable(): TranslatableMarkup|Markup {
    // Get all CACHE tables form database.
    $list = $this->getAllCacheTables();
    if (!empty($list)) {
      // Prepare table's rows.
      $rows = static::prepareRows($list);
      // Create theme table rendered HTML.
      $table = $this->themeTable($rows);
      $prefix = $this->t('The current cache tables are:');
      return Markup::create($prefix->render() . ' ' . $table);
    }
    return $this->t('There is no cache tables in the database.');
  }

  /**
   * Get list of all cache tables.
   *
   * @return array
   *   List of all cache tables.
   *
   * @throws \Exception
   */
  protected function getAllCacheTables(): array {
    $db_name = $this->database->getConnectionOptions()['database'];
    $query = $this->database->select('INFORMATION_SCHEMA.TABLES', 'tables');
    $query->fields('tables', ['table_name', 'table_schema']);
    $query->condition('table_schema', $db_name);
    // We need to do %... because of eventual table prefixes:
    $query->condition('table_name', '%cache_%', 'LIKE');
    $query->condition('table_name', '%cachetags', '<>');
    return $query->execute()->fetchCol();
  }

  /**
   * Prepare table rows array.
   *
   * @param array $list
   *   All cache tables form database.
   *
   * @return array
   *   Table rows array.
   */
  protected static function prepareRows(array $list): array {
    $table_rows = []; $cols = 4;
    $count  = count($list);
    $rows   = ceil($count / $cols);
    $list   = array_pad($list, $rows * $cols, ' ');
    for ($i = 0; $i < $count; $i += $cols) {
      $table_rows[] = array_slice($list, $i, $cols);
    }
    return $table_rows;
  }

  /**
   * Render the table.
   *
   * @param array $rows
   *   Table rows.
   *
   * @return string
   *   Rendered HTML.
   */
  protected function themeTable(array $rows = []): string {
    return $this->themeManager->render('table',
      [
        'rows'       => $rows,
        'attributes' => [
          'class' => ['cleaner-cache-tables'],
        ],
      ]
    );
  }

  /**
   * Gets the session lifetime and expired sessions count.
   *
   * @return array
   *   Session lifetime and expired sessions count.
   *
   * @throws \Exception
   */
  protected function getSessionSettings(): array {
    // Get cookies params array.
    $lifetime = (int) session_get_cookie_params()['lifetime'];
    // Select old sessions from the sessions db table.
    $timestamp = ($this->dateTime->getRequestTime() - $lifetime);
    $count = $this->database->select('sessions', 's')
      ->fields('s', ['sid', 'timestamp'])
      ->condition('timestamp', $timestamp, '<');
    $count = count($count->execute()->fetchCol());
    return ['lifetime' => $lifetime, 'old_sessions' => $count];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state): array {
    // Get config handler.
    $conf = $this->config('cleaner.settings');
    // Prepare Yes/No options array.
    $yes_no = [$this->t('No'), $this->t('Yes')];
    // Cron interval settings.
    $form['cleaner']['cleaner_cron'] = [
      '#type'           => 'select',
      '#title'          => $this->t('Run interval'),
      '#options'        => array_merge([0 => $this->t('Every time')], static::$intervals),
      '#default_value'  => (int) $conf->get('cleaner_cron'),
      '#description'    => $this->t('This is how often the options below will occur. <br> The actions will occur on the next Cron run after this interval expires. <br>"Every time" means on every Cron run.'),
    ];
    // Cache clearing settings.
    $form['cleaner']['cleaner_clear_cache'] = [
      '#type'           => 'checkbox',
      '#title'          => $this->t('Clean up cache'),
      '#default_value'  => (int) $conf->get('cleaner_clear_cache'),
      '#description'    => $this->getCacheTablesTable(),
    ];
    // Additional tables clearing settings.
    $form['cleaner']['cleaner_additional_tables'] = [
      '#type'           => 'textfield',
      '#title'          => $this->t('Additional tables to clear'),
      '#default_value'  => (string) $conf->get('cleaner_additional_tables'),
      '#description'    => $this->t('A comma separated list of table names which also needs to be cleared.'),
    ];
    // Watchdog clearing settings.
    if ($this->moduleHandler->moduleExists('dblog')) {
      $form['cleaner']['cleaner_empty_watchdog'] = [
        '#type'           => 'checkbox',
        '#title'          => $this->t('Clean up Watchdog'),
        '#default_value'  => (int) $conf->get('cleaner_empty_watchdog'),
        '#description'    => $this->t('There is a standard setting for controlling Watchdog contents. This is more useful for test sites.'),
      ];
    }
    else {
      // DBLog module not active, so make sure we don't try to clear it.
      $this->configFactory
        ->getEditable('cleaner.settings')
        ->set('cleaner_empty_watchdog', FALSE)
        ->save();
    }
    // Get session settings.
    $session_settings = $this->getSessionSettings();
    // Sessions clearing settings.
    $form['cleaner']['cleaner_clean_sessions'] = [
      '#type'           => 'checkbox',
      '#title'          => $this->t('Clean up Sessions table'),
      '#default_value'  => (int) $conf->get('cleaner_clean_sessions'),
      '#description'    => $this->t('The sessions table can quickly become full with old, abandoned sessions. <br>This will delete all sessions older than @interval (as set by your site administrator). <br>There are currently @count such sessions.',
        [
          '@interval' => $session_settings['lifetime'],
          '@count'    => $session_settings['old_sessions'],
        ]),
    ];
    // We can only offer OPTIMIZE to MySQL users.
    if ($this->database->driver() == 'mysql') {
      // Database(MySQL) optimizing settings.
      $form['cleaner']['cleaner_optimize_db'] = [
        '#type'           => 'radios',
        '#options'        => $yes_no + [2 => $this->t('Local only')],
        '#title'          => $this->t('Optimize tables with "overhead" space'),
        '#default_value'  => (int) $conf->get('cleaner_optimize_db'),
        '#description'    => $this->t('The module will compress (optimize) all database tables with unused space.<br><strong>NOTE</strong>: During an optimization, the table will locked against any other activity; on a high vloume site, this may be undesirable. "Local only" means do not replicate the optimization (if it is being done).'),
      ];
    }
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state): void {
    $config = $this->configFactory->getEditable('cleaner.settings');
    foreach ($form_state->getValues() as $name => $value) {
      if (stripos($name, 'cleaner') !== FALSE) {
        $config->set($name, $value);
      }
    }
    $config->save();
    parent::submitForm($form, $form_state);
  }

}
