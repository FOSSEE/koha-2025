<?php

declare(strict_types=1);

namespace Drupal\menu_per_role\Hook;

use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Hook entity_base_field_info.
 */
class EntityBaseFieldInfo {

  use StringTranslationTrait;

  /**
   * Implements hook_entity_base_field_info().
   *
   * Adds two fields to menu_link_content, so access restrictions can be set.
   */
  #[Hook('entity_base_field_info')]
  public function entityBaseFieldInfoHook(EntityTypeInterface $entity_type): array {
    $fields = [];
    if ($entity_type->id() !== 'menu_link_content') {
      return $fields;
    }
    $fields['menu_per_role__show_role'] = BaseFieldDefinition::create('entity_reference')
      ->setName('menu_per_role__show_role')
      ->setTargetEntityTypeId('menu_link_content')
      ->setLabel($this->t('Roles able to see the menu link'))
      ->setCardinality(FieldStorageDefinitionInterface::CARDINALITY_UNLIMITED)
      ->setSetting('target_type', 'user_role')
      ->setDisplayOptions('form', [
        'type' => 'options_buttons',
        'weight' => 0,
      ]);
    $fields['menu_per_role__hide_role'] = BaseFieldDefinition::create('entity_reference')
      ->setName('menu_per_role__hide_role')
      ->setTargetEntityTypeId('menu_link_content')
      ->setLabel($this->t('Roles not able see the menu link.'))
      ->setCardinality(FieldStorageDefinitionInterface::CARDINALITY_UNLIMITED)
      ->setSetting('target_type', 'user_role')
      ->setDisplayOptions('form', [
        'type' => 'options_buttons',
        'weight' => 0,
      ]);
    return $fields;
  }

}
