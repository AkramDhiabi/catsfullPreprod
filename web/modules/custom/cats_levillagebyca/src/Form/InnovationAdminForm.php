<?php
/**
 * Created by Sublime Text 2.
 * User: Fabien
 * Date: 15/11/2019
 * Time: 11:48
 */

namespace Drupal\cats_levillagebyca\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class InnovationAdminForm extends ConfigFormBase {

  /**
   * Stores the configuration factory.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * Creates a SystemBrandingBlock instance.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The factory for configuration objects.
   */
  public function __construct(ConfigFactoryInterface $config_factory) {
    $this->configFactory = $config_factory;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory')
    );
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['cats_levillagebyca.site'];
  }

  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'cats_levillagebyca.innov_admin_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['#title'] = t('Innovation administration page', ['context'=>'cats_innov_admin_page']);
    $config_levillagebyca = \Drupal::config('cats_levillagebyca.innov');
    $config = \Drupal::config('system.site');

    $form['description'] = array(
      '#type' => 'item',
      '#markup' => "<div>Ceci est le formulaire d'administration pour la définition du texte descriptif innovation.<br><br>
                    Vous pouvez modifier d'une part le titre grisé INNOVATION puis le text du bloc et traduire le texte.<br><br></div>",
      '#weight' => 0,
    );

      $form['innovation'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Main title', ['context'=>'cats_innov_admin_page']),
        '#default_value' => $config_levillagebyca->get('innovation'),
      );

      $form['descTitle'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Text description title', ['context'=>'cats_innov_admin_page']),
        '#default_value' => $config_levillagebyca->get('desctitle'),
      );

      $form['desc'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Text description', ['context'=>'cats_innov_admin_page']),
        '#default_value' => $config_levillagebyca->get('desc'),
      );


    $form['ENInnovation'] = array(
      '#type' => 'fieldset',
      '#title' => "Traduction anglaise",
      '#attributes' => array(
        'class' => array('fieldset_legend'),
      ),
    );

      $form['ENInnovation']['innovationen'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Main title', ['context'=>'cats_innov_admin_page']),
        '#default_value' => $config_levillagebyca->get('en.innovationen'),
      );

      $form['ENInnovation']['descTitleen'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Text description title', ['context'=>'cats_innov_admin_page']),
        '#default_value' => $config_levillagebyca->get('en.desctitleen'),
      );

      $form['ENInnovation']['descen'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Text description', ['context'=>'cats_innov_admin_page']),
        '#default_value' => $config_levillagebyca->get('en.descen'),
      );

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {

  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $innovation = $form_state->getValue('innovation');
    $descTitle = $form_state->getValue('descTitle');
    $desc = $form_state->getValue('desc');
    $innovationen = $form_state->getValue('innovationen');
    $descTitleen = $form_state->getValue('descTitleen');
    $descen = $form_state->getValue('descen');

    $config = $this->configFactory()->getEditable('cats_levillagebyca.innov');
    $config->set('innovation', $innovation);
    $config->set('desctitle', $descTitle);
    $config->set('desc', $desc);
    $config->set('en.innovationen', $innovationen);
    $config->set('en.desctitleen', $descTitleen);
    $config->set('en.descen', $descen);
    $config->save();

    \Drupal::entityTypeManager()->getViewBuilder('block')->resetCache();

    parent::submitForm($form, $form_state);

  }
}