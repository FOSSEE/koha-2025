<?php

namespace Drupal\spambot\Plugin\WebformHandler;

use Drupal\Component\Render\FormattableMarkup;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\Url;
use Drupal\webform\Plugin\WebformElementManagerInterface;
use Drupal\webform\Plugin\WebformHandlerBase;
use Drupal\webform\WebformSubmissionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Webform validate handler.
 *
 * @WebformHandler(
 *   id = "spambot_validation",
 *   label = @Translation("Spambot Validation"),
 *   category = @Translation("Settings"),
 *   description = @Translation("Validate webform submissions with spambot service."),
 *   cardinality = \Drupal\webform\Plugin\WebformHandlerInterface::CARDINALITY_SINGLE,
 *   results = \Drupal\webform\Plugin\WebformHandlerInterface::RESULTS_PROCESSED,
 *   submission = \Drupal\webform\Plugin\WebformHandlerInterface::SUBMISSION_OPTIONAL,
 * )
 */
class SpamBotWebformHandler extends WebformHandlerBase {

  use StringTranslationTrait;

  /**
   * The webform element plugin manager.
   *
   * @var \Drupal\webform\Plugin\WebformElementManagerInterface
   */
  protected WebformElementManagerInterface $elementManager;

  /**
   * Current active request object.
   *
   * @var \Symfony\Component\HttpFoundation\Request
   */
  protected Request $request;

  /**
   * The module handler.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected ModuleHandlerInterface $moduleHandler;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    $instance = parent::create($container, $configuration, $plugin_id, $plugin_definition);
    $instance->elementManager = $container->get('plugin.manager.webform.element');
    $instance->request = $container->get('request_stack')->getCurrentRequest();
    $instance->moduleHandler = $container->get('module_handler');
    return $instance;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state, WebformSubmissionInterface $webform_submission) {
    $config = $this->configFactory->get('spambot.settings');
    if ($form_state->getErrors()) {
      return;
    }
    $email_threshold = $config->get('spambot_criteria_email');
    $username_threshold = $config->get('spambot_criteria_username');
    $ip_threshold = $config->get('spambot_criteria_ip');

    $data = $webform_submission->getData();

    $request = [];
    if ($this->configuration['email_field'] && $data[$this->configuration['email_field']]) {
      $request['email'] = $data[$this->configuration['email_field']];
    }

    if ($this->configuration['username_field'] && $data[$this->configuration['username_field']]) {
      $request['username'] = $data[$this->configuration['username_field']];
    }

    $ip = $this->request->getClientIp();
    if ($ip_threshold > 0 && $ip != '127.0.0.1' && !spambot_check_whitelist('ip', $config, $ip)) {
      // Make sure we have a valid IPv4 address (API doesn't support IPv6 yet).
      if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6) === FALSE) {
        $this->getLogger('spambot')->notice(
          'Invalid IP address on webform: @ip. Spambot will not rely on it.', [
            '@ip' => $ip,
          ]);
      }
      else {
        $request['ip'] = $ip;
      }
    }
    $data = [];
    if (spambot_sfs_request($request, $data)) {
      $substitutions = [
        '@email' => $request['email'] ?? '',
        '%email' => $request['email'] ?? '',
        '@username' => $request['username'] ?? '',
        '%username' => $request['username'] ?? '',
        '@ip' => $ip,
        '%ip' => $ip,
      ];
      $reasons = [];
      if ($email_threshold > 0 && !empty($data['email']['appears']) && $data['email']['frequency'] >= $email_threshold) {
        // phpcs:ignore
        $form_state->setErrorByName($this->configuration['email_field'], (string) $this->t($config->get('spambot_blocked_message_email'), $substitutions));
        $reasons[] = t('email=@value', ['@value' => $request['email']]);
      }

      if ($username_threshold > 0 && !empty($data['username']['appears']) && $data['username']['frequency'] >= $username_threshold) {
        // phpcs:ignore
        $form_state->setErrorByName($this->configuration['username_field'], (string) $this->t($config->get('spambot_blocked_message_username'), $substitutions));
        $reasons[] = t('username=@value', ['@value' => $request['username']]);
      }

      if ($ip_threshold > 0 && !empty($data['ip']['appears']) && $data['ip']['frequency'] >= $ip_threshold) {
        // phpcs:ignore
        $form_state->setErrorByName('', (string) $this->t($config->get('spambot_blocked_message_ip'), $substitutions));
        $reasons[] = t('ip=@value', ['@value' => $request['ip']]);
      }

      if ($reasons) {
        if ($config->get('spambot_log_blocked_registration')) {
          $this->getLogger('spambot')->notice('Blocked webform submission: @reasons', ['@reasons' => implode(',', $reasons)]);
          $hook_args = [
            'request' => $request,
            'reasons' => $reasons,
          ];
          $this->moduleHandler->invokeAll('spambot_registration_blocked', [$hook_args]);
        }
        if ($delay = $config->get('spambot_blacklisted_delay')) {
          sleep($delay);
        }
      }
    }

  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'email_field' => '',
      'username_field' => '',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form['test'] = [
      '#type' => 'markup',
      '#markup' => $this->t('Other spambot settings can be <a href="@url">configured globally</a>.', [
        '@url' => Url::fromRoute('spambot.settings_form')->toString(TRUE)->getGeneratedUrl(),
      ]),
    ];
    $form['email_field'] = [
      '#type' => 'select',
      '#options' => $this->getEmailFields(),
      '#title' => $this->t('Email Field to validate'),
      '#empty_option' => $this->t('- NONE -'),
      '#default_value' => $this->configuration['email_field'],
    ];
    $form['username_field'] = [
      '#type' => 'select',
      '#options' => $this->getUsernameFields(),
      '#empty_option' => $this->t('- NONE -'),
      '#title' => $this->t('Username Field to validate'),
      '#default_value' => $this->configuration['username_field'],
      '#description' => $this->t('Be careful about using this option as you may accidentally block genuine users who happen to choose the same username as a known spammer.'),
    ];
    return $this->setSettingsParents($form);
  }

  /**
   * Get potential email fields.
   *
   * @return string[]
   *   Potential email field titles keyed by machine name.
   */
  protected function getEmailFields(): array {
    $mail_elements = [];
    $elements = $this->webform->getElementsInitializedAndFlattened();
    foreach ($elements as $element_key => $element) {
      $element_plugin = $this->elementManager->getElementInstance($element);
      if (!$element_plugin->isInput($element) || !isset($element['#type'])) {
        continue;
      }
      if ($element_plugin->hasMultipleValues($element)) {
        continue;
      }

      if (!$element_plugin->isComposite()) {
        $email_field_types = [
          'email',
          'hidden',
          'value',
          'textfield',
          'webform_email_multiple',
          'webform_email_confirm',
        ];
        if (in_array($element['#type'], $email_field_types)) {
          $element_title = (isset($element['#title'])) ? new FormattableMarkup('@title (@key)', [
            '@title' => $element['#title'],
            '@key' => $element_key,
          ]) : $element_key;
          $mail_elements[$element_key] = $element_title;
        }
      }
    }
    return $mail_elements;
  }

  /**
   * Get potential username fields.
   *
   * @return string[]
   *   Potential username field titles keyed by machine name.
   */
  protected function getUsernameFields() {
    $username_elements = [];
    $elements = $this->webform->getElementsInitializedAndFlattened();
    foreach ($elements as $element_key => $element) {
      $element_plugin = $this->elementManager->getElementInstance($element);
      if (!$element_plugin->isInput($element) || !isset($element['#type'])) {
        continue;
      }
      if ($element_plugin->hasMultipleValues($element)) {
        continue;
      }

      if (!$element_plugin->isComposite()) {
        if (in_array($element['#type'], ['hidden', 'value', 'textfield'])) {
          $element_title = (isset($element['#title'])) ? new FormattableMarkup('@title (@key)', [
            '@title' => $element['#title'],
            '@key' => $element_key,
          ]) : $element_key;
          $username_elements[$element_key] = $element_title;
        }
      }
    }
    return $username_elements;
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);
    $this->configuration['email_field'] = $form_state->getValue('email_field');
    $this->configuration['username_field'] = $form_state->getValue('username_field');
  }

  /**
   * {@inheritdoc}
   */
  public function getSummary() {
    $summary = parent::getSummary();
    $email_fields = $this->getEmailFields();
    $username_fields = $this->getUsernameFields();

    $summary['#settings']['email_field'] = $email_fields[$this->configuration['email_field']] ?? $this->configuration['email_field'];
    $summary['#settings']['username_field'] = $username_fields[$this->configuration['username_field']] ?? $this->configuration['username_field'];
    return $summary;
  }

}
