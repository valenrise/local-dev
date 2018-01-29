<?php


namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloNodeList extends ControllerBase {

  public function content($param) {

    $storage = \Drupal::entityTypeManager()->getStorage('node');
    //kint($storage);
    $ids = \Drupal::entityQuery('node')->condition('type', $param);

    $nids = $ids->pager('10')->execute();
    //kint($ids);
    $entity = $storage->loadMultiple($nids);
    //kint($entity);

    foreach ($entity as $node) {
      $title = $node->toLink();
      $items[] = $title;
    };

    $list = array(
        '#theme' => 'item_list',
        '#items' => $items,
      );

    $pager = array(
      '#type' => 'pager',
      );

    return array($list, $pager);
  }
}



