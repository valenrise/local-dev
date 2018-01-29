<?php

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\NodeInterface;

/*class HelloNodeHistoryController extends ControllerBase {

  public function content(NodeInterface $node) {
    //return ['#markup'=> $this->t('Hello voici mon parametre')];
    //( intval($node->id()) < 0 || !is_int( intval($node->id()) ) )
    if(intval($node->id()) > 0 || !is_int( intval($node->id())) {
      $database = \Drupal::database();
      $history = $database->select('hello_node_history')
                        ->fields('hello_node_history', ['uid', 'update_time'])
                        ->condition('nid', $node)
                        ->execute();
        //kint($history);
                        if($history) {
                          foreach ($history as $nodes) {
                            kint($nodes);
                            $items = $nodes->uid;
                            $items2 = $nodes->update_time;
                            kint($items);
                          };

                        };

    }
    $headers = array('uid', 'date de modification');

$rows = array(
       array($items, $items2),
     );
return array(
 '#theme'  => 'table',
 '#header' => $headers,
 '#rows'   => $rows,

);

kint($rows);

  }
}*/

class HelloNodeHistoryController extends ControllerBase{


  public function content(NodeInterface $node) {

    if ( intval($node->id()) < 0 || !is_int( intval($node->id()) ) ) {
      //return $build[]['#markup'] = "Ce contenu n'existe pas !";

      return $build =  array(
        '#markup' => t("Ce contenu n'existe pas !")
      );
    }

      $database = \Drupal::database();

      $dbNodeHistory = $database->select('hello_node_history','hnh');

      $query = $dbNodeHistory
            ->fields('hnh', ['nid', 'uid', 'update_time'])
            ->condition( 'nid', intval($node->id()) )
            ->orderBy('update_time', 'DESC')
            ->execute();

      $histories = $query->fetchAll();

      if (empty($histories)) {
      return $build =  array(
        '#markup' => t("Ce contenu n'a subit aucune modification !")
      );
      }

    $header = ['#', $this->t('Author'), $this->t('Update Time')];
    $data = [];

    $id = 1;
      foreach($histories as $history){

        $data[] = [
          $id,
          user_load($history->uid)->getDisplayName(),
          format_date( $history->update_time, '', 'l j F Y - H:i:s')
        ];
        $id++;
      }

    $storage = \Drupal::entityTypeManager()->getStorage("node");
    $nodeTitle = $storage->load( $node->id() )->getTitle();


      $output[] = array(
      '#theme' => 'table',
      //'#cache' => ['disabled' => TRUE],
      '#caption' => $nodeTitle,
      '#header' => $header,
      '#rows' => $data,
    );



    return $output;
/*
    $header = ['#','Name', 'Mail'];
$data = [
  [1,'Name 1', 'Mail1@example.com'],
  [2,'Name N°2', 'second@example.com'],
];

$output[] = array(
  '#theme' => 'table',
  //'#cache' => ['disabled' => TRUE],
  '#caption' => 'The table caption / Title',
  '#header' => $header,
  '#rows' => $data,
);*/

 /*$database = \Drupal::database();
  $dbNodeHistory = $database->select('hello_node_history','hnh')->fields('hnh', ['hid'])->count();
  kint($dbNodeHistory);*/




//$output = ['#theme' => 'hello', '#data' => 'demo'];

  }


}

