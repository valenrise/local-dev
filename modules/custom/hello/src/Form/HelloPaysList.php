<?php

  namespace Drupal\hello\Form;

  use SameerShelavale\PhpCountriesArray\CountriesArray;
  use Drupal\Core\Form\FormBase;
  use Drupal\Core\Form\FormStateInterface;


  class HelloPaysList extends FormBase {
    public function getFormId() {
    }


    public function buildForm(array $form, FormStateInterface $form_state) {
      $countries = CountriesArray::get(null, 'name'); // return array of country names
      $form['pays'] = [
        '#type' => 'select',
        '#title' => $this->t('pays'),
        '#options' => [
          'pays' => $countries,
        ],
      ];
      return $form;
    }

    public function validateForm(array &$form, FormStateInterface $form_state) {

    }

    public function submitForm(array &$form, FormStateInterface $form_state) {

    }



  }
