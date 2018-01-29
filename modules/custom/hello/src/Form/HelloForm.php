<?php

namespace Drupal\hello\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;


class HelloForm extends FormBase {
  public function getFormId() {
    return 'hello_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {


  $form['fstval'] = array(
    '#type' => 'number',
    '#min' => '0',
    '#title' => $this->t('first value'),
  );

  $form['operation'] = array(
    '#type' => 'radios',
    '#title' => $this->t('operations'),
    '#default_value' => 1,
    '#options' => array( 1 => $this->t('addition'), 2 => $this->t('soustraction'), 3 => $this->t('multiplication'), 4 => $this->t('division')),
  );

  $form['sdval'] = array(
    '#type' => 'number',
    '#min' => '0',
    '#title' => $this->t('second value'),
    '#ajax' => array(
      'callback' => [$this, 'validateTextAjax'],
      'event' => 'change',
      ),
    '#suffix' => '<span class="text-message"></span>',
    );

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => $this->t('Calculer'),
  );

  if(isset($form_state->getRebuildInfo()['result'])) {
      $form['result'] = ['#markup' => '<h2>' . $this->t('Resultat : ') . $form_state->getRebuildInfo()['result'] . '</h2>'];
      $resultat = $form;
    }


    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    $val_1 = $form_state->getvalue('fstval');
    $operator = $form_state->getvalue('operation');
    $val_2 = $form_state->getvalue('sdval');
    if ($operator == 4 && $val_2 == 0) {
      $form_state->setErrorByName('sdval', $this->t('on ne peut pas diviser par zero'));
    }
  }


  public function submitForm(array &$form, FormStateInterface $form_state) {

    $val_1 = $form_state->getvalue('fstval');
    $operator = $form_state->getvalue('operation');
    $val_2 = $form_state->getvalue('sdval');


    if($operator == 1) {
      $result = $val_1 + $val_2;
    }elseif ($operator == 2) {
      $result = $val_1 - $val_2;
    }elseif ($operator == 3) {
      $result = $val_1 * $val_2;
    }elseif ($operator == 4) {
      $result = $val_1 / $val_2;
    }

    $form_state->addRebuildInfo('result', $result);
    // reconstruction du formulaire avec les valeurs saisies.
    $form_state->setRebuild();

    unset($form);
    //drupal_set_message('le resultat de votre calcul est ' . $result);

  }

  public function validateTextAjax(array &$form, FormStateInterface $form_state) {
    $val_1 = $form_state->getvalue('fstval');
    $operator = $form_state->getvalue('operation');
    $val_2 = $form_state->getvalue('sdval');

    if(!empty($val_1) && !empty($val_2)) {
      if($operator == 4 && $val_2 == 0){
        $message = 'on ne peux pas diviser par zero ' . $val_2;

        $response = new AjaxResponse();
        $response->addCommand(new HtmlCommand('.text-message', $message));

        return $response;
      }else{
        if($operator == 1) {
          $result = $val_1 + $val_2;
        }elseif ($operator == 2) {
          $result = $val_1 - $val_2;
        }elseif ($operator == 3) {
          $result = $val_1 * $val_2;
        }elseif ($operator == 4) {
          $result = $val_1 / $val_2;
        }
        $message = 'le resultat est: ' . $result ;

        $response = new AjaxResponse();
        $response->addCommand(new HtmlCommand('.text-message', $message));

        return $response;
     }
    }


  }

}
