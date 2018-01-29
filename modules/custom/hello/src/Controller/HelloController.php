<?php

  namespace Drupal\hello\Controller;

  use Drupal\Core\Controller\ControllerBase;

  class HelloController extends ControllerBase {

    public function content($param) {
      $user = $this->currentUser()->getAccountName();
      if($param == null) {
        return ['#markup'=> $this->t('Hello ' . $user . ' !')];
      }
      else {
        return ['#markup'=> $this->t('Hello %nom  voici mon parametre: %param !',array('%nom'=>$user,'%param'=>$param))];
      }
    }
  }
