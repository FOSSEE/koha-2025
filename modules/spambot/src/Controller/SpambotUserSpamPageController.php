<?php

namespace Drupal\spambot\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Render\RendererInterface;
use Drupal\user\UserInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Returns a render-able array for a spam page.
 */
class SpambotUserSpamPageController extends ControllerBase {

  /**
   * Constructs the controller.
   *
   * @param \Drupal\Core\Render\RendererInterface $renderer
   *   The core renderer.
   */
  public function __construct(
    protected RendererInterface $renderer,
  ) {}

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('renderer')
    );
  }

  /**
   * Returns a render-able array for a spam page.
   *
   * @param \Drupal\user\UserInterface $user
   *   The user who can be reported.
   *
   * @return array
   *   Return form.
   */
  public function spambotUserSpam(UserInterface $user) {
    $myForm = $this->formBuilder()->getForm('Drupal\spambot\Form\SpambotUserspamForm', $user);
    $myFormHtml = $this->renderer->render($myForm);

    return [
      '#markup' => $myFormHtml,
    ];
  }

}
