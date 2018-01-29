<?php

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class HelloJsonController extends ControllerBase {

  public function content() {
    return $response = new Response(
      'Content',
      Response::HTTP_OK,
      array('content-type' => 'application/json')
      );
  }
}
