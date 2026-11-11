<?php

declare(strict_types=1);

namespace Drupal\menu_per_role\Hook;

use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Hook help.
 */
class Help {

  use StringTranslationTrait;

  /**
   * Implements hook_help().
   */
  #[Hook('help')]
  public function helpHook(string $route_name, RouteMatchInterface $route_match): string {
    $output = '';
    switch ($route_name) {
      case 'help.page.menu_per_role':
        $output .= '<h3>' . $this->t('About') . '</h3>';
        $output .= '<p>' . $this->t('The Menu Per Role module allows you to restrict access of menu items per roles.') . '</p>';
        $output .= '<h3>' . $this->t('Limitation') . '</h3>';
        $output .= '<p>' . $this->t("Menu Per role only acts on content menu link (content entity). Menu links provided by configuration (example: Views) or by *.links.menu.yml files can't be managed by this module.") . '</p>';
        $output .= '<h3>' . $this->t('Configuration') . '</h3>';
        $output .= '<p>' . $this->t('Just activate the Menu Per Role module and edit a menu item as usual. There will be one or two fieldsets, depending on the configuration of the module, that allows you to restrict access by role.') . '</p>';
        $output .= '<p>' . $this->t("If you don't check any roles the default access permissions will be kept. Otherwise the module will additionally restrict access to the chosen user roles.") . '</p>';
    }
    return $output;
  }

}
