<?php

namespace Drupal\hello\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
*Provides a session block.
*
*@Block(
*id = "SessionBlock",
*admin_label = @translation("Sessions actives")
*)
*/
class SessionBlock extends BlockBase {

 public function build() {
    $database = \Drupal::database();
    $session_num = $database->select('sessions')
                        ->fields('sessions', array('uid'))->countQuery()
                        ->execute()->fetchField();

  $session = array(
     '#markup'=> $this->t('il y a ' . $session_num . ' session(s) active(s) !')
      );
  return $session;

 }

 protected function blockAccess(AccountInterface $account) {
  $notAnonymous = $account->hasPermission('hello permission');
  //kint($notAnonymous);
  if($notAnonymous == TRUE) {
    return AccessResult::allowed();
  }else{
    return AccessResult::neutral();
  }
 }
}
