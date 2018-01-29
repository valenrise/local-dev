<?php

namespace Drupal\hello\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class drague.
 */
class drague extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'id_meuf';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['prenom'] = [
      '#type' => 'textfield',
      '#title' => $this->t('prenom'),
      '#description' => $this->t('prenom de la meuf'),
      '#maxlength' => 64,
      '#size' => 64,
    ];
    $form['age'] = [
      '#type' => 'number',
      '#title' => $this->t('age'),
      '#description' => $this->t('age de la meuf'),
    ];
    $form['phone_number'] = [
      '#type' => 'tel',
      '#title' => $this->t('phone number'),
      '#description' => $this->t('06 de la meuf'),
    ];
    $form['photo'] = [
      '#type' => 'file',
      '#title' => $this->t('photo'),
      '#description' => $this->t('photo de la meuf'),
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ': ' . $value);
    }

  }

}
