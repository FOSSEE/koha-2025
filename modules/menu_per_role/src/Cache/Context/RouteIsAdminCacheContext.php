<?php

declare(strict_types=1);

namespace Drupal\menu_per_role\Cache\Context;

use Drupal\Core\Cache\CacheableMetadata;
use Drupal\Core\Cache\Context\CacheContextInterface;
use Drupal\Core\Routing\AdminContext;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Defines a cache context depending if the route is an admin route or not.
 */
class RouteIsAdminCacheContext implements CacheContextInterface {

  /**
   * Context ID.
   */
  public const string CONTEXT_ID = 'route.is_admin';

  public function __construct(
    protected readonly AdminContext $adminContext,
  ) {}

  /**
   * {@inheritdoc}
   */
  public static function getLabel(): string|TranslatableMarkup {
    return new TranslatableMarkup('Route is admin');
  }

  /**
   * {@inheritdoc}
   */
  public function getContext(): string {
    return $this->adminContext->isAdminRoute() ? '1' : '0';
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheableMetadata(): CacheableMetadata {
    return new CacheableMetadata();
  }

}
