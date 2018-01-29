<?php

namespace Drupal\hello\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
*Provides a hello block.
*
*@Block(
*id = "HelloBlock",
*admin_label = @translation("Hello!")
*)
*/
class HelloBlock extends BlockBase {
  protected $currentUser;
  protected $dateFormatter;


  public function build() {

    $this->dateFormatter = \Drupal::service('date.formatter');
    $this->currentUser = \Drupal::service('current_user');

    $build = array(
      '#markup' => $this->t('Welcome %name. It is %time. ', array(
        '%name' => $this->currentUser->getAccountName(),
        '%time' => $this->dateFormatter->format(REQUEST_TIME, 'custom', 'H:i s\s'),
        )
      ),
      '#cache' => array(
        'keys' => ['hello_block'],
        'contextes' => ['user'],
        'tags' => ['user:'.$this->currentUser->id()],
        'max-age' => '1000',
        )
      );

    return $build;
  }
}


?>
