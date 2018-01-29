<?php

namespace Drupal\annonce\Plugin\Condition;

use Drupal\Core\Condition\ConditionPluginBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\Context\ContextDefinition;

/**
* Provides a 'Date condition block' condition to enable a condition based in module selected status.
*
* @Condition(
*   id = "date_condition_block",
*   label = @Translation("Date condition block"),
*   context = {
*     "block" = @ContextDefinition("entity:block", required = FALSE , label = @Translation("block"))
*   }
* )
*
*/
class dateConditionBlock extends ConditionPluginBase {

/**
* {@inheritdoc}
*/
public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition)
{
    return new static(
    $configuration,
    $plugin_id,
    $plugin_definition
    );
}

/**
 * Creates a new dateConditionBlock object.
 *
 * @param array $configuration
 *   The plugin configuration, i.e. an array with configuration values keyed
 *   by configuration option name. The special key 'context' may be used to
 *   initialize the defined contexts by setting it to an array of context
 *   values keyed by context names.
 * @param string $plugin_id
 *   The plugin_id for the plugin instance.
 * @param mixed $plugin_definition
 *   The plugin implementation definition.
 */
 public function __construct(array $configuration, $plugin_id, $plugin_definition) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
 }

 /**
   * {@inheritdoc}
   */
 public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
     // Sort all modules by their names.
      $form['start'] = array(
        '#type' => 'date',
        '#title' => $this->t('starting date'),
      );

      $form['end'] = array(
        '#type' => 'date',
        '#title' => $this->t('end date'),
      );

    /*  $form['sumit'] = [
        '#type' => 'submit',
        '#value' => t('submit'),

      ];*/

     $form = parent::buildConfigurationForm($form, $form_state);

      //kint($form);

  return $form;
 }
/* public function validateConfigurationForm(array $form, FormStateInterface $form_state) {

 }
*/
/**
 * {@inheritdoc}
 */
 public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {

     $this->configuration['start'] = $form_state->getValue('start');
     kint(strtotime($form_state->getValue('start')));
     die();
     parent::submitConfigurationForm($form, $form_state);
 }

/**
 * {@inheritdoc}
 */
 public function defaultConfiguration() {
    return ['module' => ''] + parent::defaultConfiguration();
 }

/**
  * Evaluates the condition and returns TRUE or FALSE accordingly.
  *
  * @return bool
  *   TRUE if the condition has been met, FALSE otherwise.
  */
  public function evaluate() {

      /*if(strtotime($this->configuration['start']->getValue('start')) >= time()) {
        return FALSE;
      }*/

      if (empty($this->configuration['module']) && !$this->isNegated()) {
          return TRUE;
      }

      $module = $this->configuration['start'];
      $modules = system_rebuild_module_data();

      return $modules[$module]->status;
      kint($form);
  }

/**
 * Provides a human readable summary of the condition's configuration.
 */
 public function summary()
 {
     $module = $this->getContextValue('module');
     $modules = system_rebuild_module_data();

     $status = ($modules[$module]->status)?t('enabled'):t('disabled');

     return t('The module @module is @status.', ['@module' => $module, '@status' => $status]);
 }

}
