<?php

namespace Drupal\hello\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;


class HelloColorBlock extends ConfigFormBase {
  public function getFormId() {
    return 'hello_color_block';
  }

  protected function getEditableConfigNames() {
    return ['hello.config'];
  }

  public function buildForm(array $form, FormStateInterface $form_state) {


  $form['color_block'] = [
  '#type' => 'select',
  '#title' => $this->t('Select color'),
  '#options' => [
    'green' => $this->t('green'),
    'orange' => $this->t('orange'),
    'blue' => $this->t('blue'),
    ],
  '#default_value' => $this->config('hello.config')->get('color_block'),
  ];

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => $this->t('changez la configuration'),
  );


    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    $color = $form_state->getvalue('color_block');
    if (empty($color)) {
      $form_state->setErrorByName('color_block', $this->t('choisissez une couleur !'));
    }
  }


  public function submitForm(array &$form, FormStateInterface $form_state) {

    $color = $form_state->getValue('color_block');
    $this->config('hello.config')
    ->set('color_block', $color)
    ->save();
    //->save();
   /* $this->config('hello.config')*/

   \Drupal::entityTypeManager()->getViewBuilder('block')->resetCache();

    return parent::submitForm($form, $form_state);

  }


}
