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

class ChiffresClesAdminForm extends ConfigFormBase {

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
    return 'cats_levillagebyca.chicle_admin_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['#title'] = t('Numbers\'s site administration page', ['context'=>'cats_chicle_admin_page']);
    $config_levillagebyca = \Drupal::config('cats_levillagebyca.chicle');
    $config = \Drupal::config('system.site');

    $form['description'] = array(
      '#type' => 'item',
      '#markup' => "<div>Ceci est le formulaire d'administration pour la définition des chiffres clés.<br><br>
                    Vous pouvez modifier pour chaque partie, les chiffres et les textes apparants.<br><br></div>",
      '#weight' => 0,
    );

    $form['entete'] = array(
      '#type' => 'fieldset',
      '#title' => "Entête du block",
      '#attributes' => array(
        'class' => array('fieldset_legend'),
      ),
    );

      $form['entete']['upTitle'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Up title', ['context'=>'cats_supart_admin_page']),
        '#default_value' => $config_levillagebyca->get('entete.uptitle'),
      );

      $form['entete']['downColoredTitle'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Main down colored title', ['context'=>'cats_supart_admin_page']),
        '#default_value' => $config_levillagebyca->get('entete.downcoloredtitle'),
      );

      $form['entete']['downTitle'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Main down title', ['context'=>'cats_supart_admin_page']),
        '#default_value' => $config_levillagebyca->get('entete.downtitle'),
      );

    $form['enteteSU'] = array(
      '#type' => 'fieldset',
      '#title' => "Entête des Start-ups",
      '#attributes' => array(
        'class' => array('fieldset_legend'),
      ),
    );

      $form['enteteSU']['chiffreSU'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Number', ['context'=>'cats_chicle_admin_page']),
        '#default_value' => $config_levillagebyca->get('startups.chiffresu'),
      );

      $form['enteteSU']['textSU'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Text description', ['context'=>'cats_chicle_admin_page']),
        '#default_value' => $config_levillagebyca->get('startups.textsu'),
      );

    $form['entetePART'] = array(
      '#type' => 'fieldset',
      '#title' => "Entête des Partenaires",
      '#attributes' => array(
        'class' => array('fieldset_legend'),
      ),
    );

      $form['entetePART']['chiffrePart'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Number', ['context'=>'cats_chicle_admin_page']),
        '#default_value' => $config_levillagebyca->get('partenaires.chiffrepart'),
      );

      $form['entetePART']['textPart'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Text description', ['context'=>'cats_chicle_admin_page']),
        '#default_value' => $config_levillagebyca->get('partenaires.textpart'),
      );

    $form['enteteVi'] = array(
      '#type' => 'fieldset',
      '#title' => "Entête des Villages",
      '#attributes' => array(
        'class' => array('fieldset_legend'),
      ),
    );

      $form['enteteVi']['chiffreVi'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Number', ['context'=>'cats_chicle_admin_page']),
        '#default_value' => $config_levillagebyca->get('villages.chiffrevi'),
      );

      $form['enteteVi']['textVi'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Text description', ['context'=>'cats_chicle_admin_page']),
        '#default_value' => $config_levillagebyca->get('villages.textvi'),
      );

    $form['enteteFo'] = array(
      '#type' => 'fieldset',
      '#title' => "Entête des Fonds",
      '#attributes' => array(
        'class' => array('fieldset_legend'),
      ),
    );

      $form['enteteFo']['chiffreFo'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Number', ['context'=>'cats_chicle_admin_page']),
        '#default_value' => $config_levillagebyca->get('fonds.chiffrefo'),
      );

      $form['enteteFo']['textFo'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Text description', ['context'=>'cats_chicle_admin_page']),
        '#default_value' => $config_levillagebyca->get('fonds.textfo'),
      );


    $form['ENChiffreCles'] = array(
      '#type' => 'fieldset',
      '#title' => "Traduction anglaise",
      '#attributes' => array(
        'class' => array('fieldset_legend'),
      ),
    );

      $form['ENChiffreCles']['entete'] = array(
        '#type' => 'fieldset',
        '#title' => "Entête du block",
        '#attributes' => array(
          'class' => array('fieldset_legend'),
        ),
      );

        $form['ENChiffreCles']['entete']['upTitleen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Up title', ['context'=>'cats_supart_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.entete.uptitle'),
        );

        $form['ENChiffreCles']['entete']['downColoredTitleen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Main down colored title', ['context'=>'cats_supart_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.entete.downcoloredtitle'),
        );

        $form['ENChiffreCles']['entete']['downTitleen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Main down title', ['context'=>'cats_supart_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.entete.downtitle'),
        );

      $form['ENChiffreCles']['enteteSU'] = array(
        '#type' => 'fieldset',
        '#title' => "Entête des Start-ups",
        '#attributes' => array(
          'class' => array('fieldset_legend'),
        ),
      );

        $form['ENChiffreCles']['enteteSU']['chiffreSUen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Number', ['context'=>'cats_chicle_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.startups.chiffresu'),
        );

        $form['ENChiffreCles']['enteteSU']['textSUen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Text description', ['context'=>'cats_chicle_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.startups.textsu'),
        );

      $form['ENChiffreCles']['entetePART'] = array(
        '#type' => 'fieldset',
        '#title' => "Entête des Partenaires",
        '#attributes' => array(
          'class' => array('fieldset_legend'),
        ),
      );

        $form['ENChiffreCles']['entetePART']['chiffreParten'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Number', ['context'=>'cats_chicle_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.partenaires.chiffrepart'),
        );

        $form['ENChiffreCles']['entetePART']['textParten'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Text description', ['context'=>'cats_chicle_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.partenaires.textpart'),
        );

      $form['ENChiffreCles']['enteteVi'] = array(
        '#type' => 'fieldset',
        '#title' => "Entête des Villages",
        '#attributes' => array(
          'class' => array('fieldset_legend'),
        ),
      );

        $form['ENChiffreCles']['enteteVi']['chiffreVien'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Number', ['context'=>'cats_chicle_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.villages.chiffrevi'),
        );

        $form['ENChiffreCles']['enteteVi']['textVien'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Text description', ['context'=>'cats_chicle_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.villages.textvi'),
        );

      $form['ENChiffreCles']['enteteFo'] = array(
        '#type' => 'fieldset',
        '#title' => "Entête des Fonds",
        '#attributes' => array(
          'class' => array('fieldset_legend'),
        ),
      );

        $form['ENChiffreCles']['enteteFo']['chiffreFoen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Number', ['context'=>'cats_chicle_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.fonds.chiffrefo'),
        );

        $form['ENChiffreCles']['enteteFo']['textFoen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Text description', ['context'=>'cats_chicle_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.fonds.textfo'),
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
    $chiffreSU = $form_state->getValue('chiffreSU');
    $textSU = $form_state->getValue('textSU');
    $chiffrePart = $form_state->getValue('chiffrePart');
    $textPart = $form_state->getValue('textPart');
    $chiffreVi = $form_state->getValue('chiffreVi');
    $textVi = $form_state->getValue('textVi');
    $chiffreFo = $form_state->getValue('chiffreFo');
    $textFo = $form_state->getValue('textFo');
    $upTitle = $form_state->getValue('upTitle');
    $downColoredTitle = $form_state->getValue('downColoredTitle');
    $downTitle = $form_state->getValue('downTitle');

    $chiffreSUen = $form_state->getValue('chiffreSUen');
    $textSUen = $form_state->getValue('textSUen');
    $chiffreParten = $form_state->getValue('chiffreParten');
    $textParten = $form_state->getValue('textParten');
    $chiffreVien = $form_state->getValue('chiffreVien');
    $textVien = $form_state->getValue('textVien');
    $chiffreFoen = $form_state->getValue('chiffreFoen');
    $textFoen = $form_state->getValue('textFoen');
    $upTitleen = $form_state->getValue('upTitleen');
    $downColoredTitleen = $form_state->getValue('downColoredTitleen');
    $downTitleen = $form_state->getValue('downTitleen');

    $config = $this->configFactory()->getEditable('cats_levillagebyca.chicle');
    $config->set('startups.chiffresu', $chiffreSU);
    $config->set('startups.textsu', $textSU);
    $config->set('partenaires.chiffrepart', $chiffrePart);
    $config->set('partenaires.textpart', $textPart);
    $config->set('villages.chiffrevi', $chiffreVi);
    $config->set('villages.textvi', $textVi);
    $config->set('fonds.chiffrefo', $chiffreFo);
    $config->set('fonds.textfo', $textFo);
    $config->set('entete.uptitle', $upTitle);
    $config->set('entete.downcoloredtitle', $downColoredTitle);
    $config->set('entete.downtitle', $downTitle);
    $config->set('en.startups.chiffresu', $chiffreSUen);
    $config->set('en.startups.textsu', $textSUen);
    $config->set('en.partenaires.chiffrepart', $chiffreParten);
    $config->set('en.partenaires.textpart', $textParten);
    $config->set('en.villages.chiffrevi', $chiffreVien);
    $config->set('en.villages.textvi', $textVien);
    $config->set('en.fonds.chiffrefo', $chiffreFoen);
    $config->set('en.fonds.textfo', $textFoen);
    $config->set('en.entete.uptitle', $upTitleen);
    $config->set('en.entete.downcoloredtitle', $downColoredTitleen);
    $config->set('en.entete.downtitle', $downTitleen);
    $config->save();

    \Drupal::entityTypeManager()->getViewBuilder('block')->resetCache();

    parent::submitForm($form, $form_state);

  }
}