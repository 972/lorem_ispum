<?php

/**
 * @file
 * Contains \Drupal\lorem_ispum\Controller\LoremIspumController.
 */

namespace Drupal\lorem_ispum\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class LoremIspumController.
 *
 * @package Drupal\lorem_ispum\Controller
 */
class LoremIspumController extends ControllerBase {
  /**
   * Generate.
   *
   * @return string
   *   Return Hello string.
   */
  public function generate($para, $phrases) {

    $config = \Drupal::config('lorem_ispum.settings');
    $title  = $config->get('lorem_ispum.page_title');
    var_dump($title);

    return new Response($title);
  }

}
