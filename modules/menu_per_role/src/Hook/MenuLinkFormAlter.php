<?php

declare(strict_types=1);

namespace Drupal\menu_per_role\Hook;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Session\AccountProxyInterface;
use Drupal\menu_per_role\Form\MenuPerRoleAdminSettings;

/**
 * Hook hook_form_menu_link_content_form_alter.
 */
class MenuLinkFormAlter {

  public function __construct(
    protected ConfigFactoryInterface $configFactory,
    protected AccountProxyInterface $currentUser,
    protected ModuleHandlerInterface $moduleHandler,
  ) {}

  /**
   * Implements hook_form_FORM_ID_alter().
   *
   * Alter menu_link_content fields to hide extra fields on content.
   */
  #[Hook('form_menu_link_content_form_alter')]
  public function formMenuLinkContentFormAlter(array &$form, FormStateInterface $form_state, string $form_id): void {
    $config = $this->configFactory->get(MenuPerRoleAdminSettings::CONFIG_NAME);
    // Get config properties.
    $hide_show_mode = $config->get('hide_show') ?? MenuPerRoleAdminSettings::MODE_DISPLAY_BOTH;
    $hide_on_content_mode = $config->get('hide_on_content') ?? MenuPerRoleAdminSettings::MODE_DISPLAY_ON_CONTENT_ALWAYS;
    // Check if content mode setting applies, and if fields should be hidden.
    $is_content = FALSE;
    if ($hide_on_content_mode !== MenuPerRoleAdminSettings::MODE_DISPLAY_ON_CONTENT_ALWAYS) {
      /** @var \Drupal\menu_link_content\Form\MenuLinkContentForm $form_obj */
      $form_obj = $form_state->getFormObject();
      /** @var \Drupal\menu_link_content\MenuLinkContentInterface $menu_link */
      $menu_link = $form_obj->getEntity();
      if (!$menu_link->isNew()) {
        $link_url = $menu_link->getUrlObject();
        if ($link_url->isRouted()) {
          $route_params = $link_url->getRouteParameters();
          if (\array_key_exists('node', $route_params)) {
            // Nodes routes will contain a 'node' with 'nid' value.
            if ($hide_on_content_mode === MenuPerRoleAdminSettings::MODE_DISPLAY_ON_CONTENT_NO_NODE_ACCESS) {
              // For the existence of any hook_node_grants() implementations.
              $is_content = $this->moduleHandler->hasImplementations('node_grants');
            }
            // If false, then check if the setting is display never.
            $is_content = $is_content || $hide_on_content_mode === MenuPerRoleAdminSettings::MODE_DISPLAY_ON_CONTENT_NEVER;
          }
        }
      }
    }
    // Check for the display of each field.
    $display_show_roles = !$is_content && $hide_show_mode !== MenuPerRoleAdminSettings::MODE_DISPLAY_ONLY_HIDE;
    $display_hide_roles = !$is_content && $hide_show_mode !== MenuPerRoleAdminSettings::MODE_DISPLAY_ONLY_SHOW;
    // Check if the user has permission to assign role visibility.
    if (!$this->currentUser->hasPermission('assign menu role visibility')) {
      // Hide role fields if the user does not have permission.
      if (isset($form['menu_per_role__show_role'])) {
        $form['menu_per_role__show_role']['#access'] = FALSE;
      }
      if (isset($form['menu_per_role__hide_role'])) {
        $form['menu_per_role__hide_role']['#access'] = FALSE;
      }
    }
    // Hide fields if they need to be.
    if (!$display_show_roles) {
      $form['menu_per_role__show_role']['#access'] = FALSE;
    }
    if (!$display_hide_roles) {
      $form['menu_per_role__hide_role']['#access'] = FALSE;
    }
  }

}
