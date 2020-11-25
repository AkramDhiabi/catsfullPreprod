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

class SuPartAdminForm extends ConfigFormBase {

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
    return 'cats_levillagebyca.supart_admin_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['#title'] = t('Su/Part head administration page', ['context'=>'cats_supart_admin_page']);
    $config_levillagebyca = \Drupal::config('cats_levillagebyca.supart');
    $config = \Drupal::config('system.site');

    $form['description'] = array(
      '#type' => 'item',
      '#markup' => "<div>Ceci est le formulaire d'administration pour la configuration des entêtes des pages Start-ups et Partenaires.<br><br>
                    Vous pouvez modifier d'une part les titres et textes d'introduction de la page start-ups et d'autre part celle de la page des Partenaires.<br><br></div>",
      '#weight' => 0,
    );

    $form['enteteSU'] = array(
      '#type' => 'fieldset',
      '#title' => "Entête des Start-ups",
      '#attributes' => array(
        'class' => array('fieldset_legend'),
      ),
    );

      // Up Title
      $form['enteteSU']['upTitle'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Up title', ['context'=>'cats_supart_admin_page']),
        '#default_value' => $config_levillagebyca->get('startups.uptitle'),
      );

      // Main down colored Title
      $form['enteteSU']['downColoredTitle'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Main down colored title', ['context'=>'cats_supart_admin_page']),
        '#default_value' => $config_levillagebyca->get('startups.downcoloredtitle'),
      );

      // Main down Title
      $form['enteteSU']['downTitle'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Main down title', ['context'=>'cats_supart_admin_page']),
        '#default_value' => $config_levillagebyca->get('startups.downtitle'),
      );

      // Head descritption
      $form['enteteSU']['descSU'] = array(
        '#title' => t('Head of the main Start-ups page',array(),['context'=>'cats_supart_admin_page']),
        '#type' => 'text_format',
        '#default_value' => $config_levillagebyca->get('startups.descsu.value'),
        '#weight' => 1,
        '#cols' => 60,
        '#rows' => 7,
      );

    $form['entetePART'] = array(
      '#type' => 'fieldset',
      '#title' => "Entête des Partenaires",
      '#attributes' => array(
        'class' => array('fieldset_legend'),
      ),
    );

      // Up Title
      $form['entetePART']['uppTitle'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Up title', ['context'=>'cats_supart_admin_page']),
        '#default_value' => $config_levillagebyca->get('partenaires.uptitle'),
      );

      // Main down colored Title
      $form['entetePART']['downpColoredTitle'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Main down colored title', ['context'=>'cats_supart_admin_page']),
        '#default_value' => $config_levillagebyca->get('partenaires.downcoloredtitle'),
      );

      // Main down Title
      $form['entetePART']['downpTitle'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Main down title', ['context'=>'cats_supart_admin_page']),
        '#default_value' => $config_levillagebyca->get('partenaires.downtitle'),
      );

      // Head descritption
      $form['entetePART']['descPART'] = array(
        '#title' => t('Head of the main Partner page',array(),['context'=>'cats_supart_admin_page']),
        '#type' => 'text_format',
        '#default_value' => $config_levillagebyca->get('partenaires.descpart.value'),
        '#weight' => 1,
        '#cols' => 60,
        '#rows' => 7,
      );


    $form['ENSUPART'] = array(
      '#type' => 'fieldset',
      '#title' => "Traduction anglaise",
      '#attributes' => array(
        'class' => array('fieldset_legend'),
      ),
    );

      $form['ENSUPART']['enteteSU'] = array(
        '#type' => 'fieldset',
        '#title' => "Entête des Start-ups",
        '#attributes' => array(
          'class' => array('fieldset_legend'),
        ),
      );

        // Up Title
        $form['ENSUPART']['enteteSU']['upTitleen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Up title', ['context'=>'cats_supart_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.startups.uptitle'),
        );

        // Main down colored Title
        $form['ENSUPART']['enteteSU']['downColoredTitleen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Main down colored title', ['context'=>'cats_supart_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.startups.downcoloredtitle'),
        );

        // Main down Title
        $form['ENSUPART']['enteteSU']['downTitleen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Main down title', ['context'=>'cats_supart_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.startups.downtitle'),
        );

        // Head descritption
        $form['ENSUPART']['enteteSU']['descSUen'] = array(
          '#title' => t('Head of the main Start-ups page',array(),['context'=>'cats_supart_admin_page']),
          '#type' => 'text_format',
          '#default_value' => $config_levillagebyca->get('en.startups.descsu.value'),
          '#weight' => 1,
          '#cols' => 60,
          '#rows' => 7,
        );

      $form['ENSUPART']['entetePART'] = array(
        '#type' => 'fieldset',
        '#title' => "Entête des Partenaires",
        '#attributes' => array(
          'class' => array('fieldset_legend'),
        ),
      );

        // Up Title
        $form['ENSUPART']['entetePART']['uppTitleen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Up title', ['context'=>'cats_supart_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.partenaires.uptitle'),
        );

        // Main down colored Title
        $form['ENSUPART']['entetePART']['downpColoredTitleen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Main down colored title', ['context'=>'cats_supart_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.partenaires.downcoloredtitle'),
        );

        // Main down Title
        $form['ENSUPART']['entetePART']['downpTitleen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Main down title', ['context'=>'cats_supart_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.partenaires.downtitle'),
        );

        // Head descritption
        $form['ENSUPART']['entetePART']['descPARTen'] = array(
          '#title' => t('Head of the main Partner page',array(),['context'=>'cats_supart_admin_page']),
          '#type' => 'text_format',
          '#default_value' => $config_levillagebyca->get('en.partenaires.descpart.value'),
          '#weight' => 1,
          '#cols' => 60,
          '#rows' => 7,
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
    $upTitle = $form_state->getValue('upTitle');
    $downcoloredTitle = $form_state->getValue('downColoredTitle');
    $downTitle = $form_state->getValue('downTitle');
    $descsu = $form_state->getValue('descSU');
    $uppTitle = $form_state->getValue('uppTitle');
    $downpcoloredTitle = $form_state->getValue('downpColoredTitle');
    $downpTitle = $form_state->getValue('downpTitle');
    $descpa = $form_state->getValue('descPART');

    $upTitleen = $form_state->getValue('upTitleen');
    $downcoloredTitleen = $form_state->getValue('downColoredTitleen');
    $downTitleen = $form_state->getValue('downTitleen');
    $descsuen = $form_state->getValue('descSUen');
    $uppTitleen = $form_state->getValue('uppTitleen');
    $downpcoloredTitleen = $form_state->getValue('downpColoredTitleen');
    $downpTitleen = $form_state->getValue('downpTitleen');
    $descpaen = $form_state->getValue('descPARTen');

    $config = $this->configFactory()->getEditable('cats_levillagebyca.supart');
    $config->set('startups.uptitle', $upTitle);
    $config->set('startups.downcoloredtitle', $downcoloredTitle);
    $config->set('startups.downtitle', $downTitle);
    $config->set('startups.descsu', $descsu);
    $config->set('partenaires.uptitle', $uppTitle);
    $config->set('partenaires.downcoloredtitle', $downpcoloredTitle);
    $config->set('partenaires.downtitle', $downpTitle);
    $config->set('partenaires.descpart', $descpa);

    $config->set('en.startups.uptitle', $upTitleen);
    $config->set('en.startups.downcoloredtitle', $downcoloredTitleen);
    $config->set('en.startups.downtitle', $downTitleen);
    $config->set('en.startups.descsu', $descsuen);
    $config->set('en.partenaires.uptitle', $uppTitleen);
    $config->set('en.partenaires.downcoloredtitle', $downpcoloredTitleen);
    $config->set('en.partenaires.downtitle', $downpTitleen);
    $config->set('en.partenaires.descpart', $descpaen);
    $config->save();

    \Drupal::entityTypeManager()->getViewBuilder('block')->resetCache();

    parent::submitForm($form, $form_state);

  }
}