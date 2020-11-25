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

class SocialAdminForm extends ConfigFormBase {

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
    return 'cats_levillagebyca.ressoc_admin_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['#title'] = t('Social Network administration page', ['context'=>'cats_ressoc_admin_page']);
    $config_levillagebyca = \Drupal::config('cats_levillagebyca.ressoc');
    $config = \Drupal::config('system.site');

    // Title for webradio
  	$form['webradioTitle'] = array(
  		'#type' => 'textfield',
  	  '#title' => $this->t('Webradio title', ['context'=>'cats_ressoc_admin_page']),
  	  '#default_value' => $config_levillagebyca->get('webradiotitle'),
  	);

    // Title for player
    $form['playerTitle'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Player title', ['context'=>'cats_ressoc_admin_page']),
      '#default_value' => $config_levillagebyca->get('playertitle'),
    );

    // URL for webradio
    $form['webradioURL'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Webradio URL', ['context'=>'cats_ressoc_admin_page']),
      '#default_value' => $config_levillagebyca->get('webradiourl'),
    );

    // Title for webradio button
    $form['webradioTitleButton'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Webradio title button', ['context'=>'cats_ressoc_admin_page']),
      '#default_value' => $config_levillagebyca->get('webradiotitlebutton'),
    );

    // URL for icone
    $form['iconURL'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Icon URL', ['context'=>'cats_ressoc_admin_page']),
      '#default_value' => $config_levillagebyca->get('iconurl'),
      '#suffix' => "<div>Nous assumons que votre URI succède le chemin '/sites/default/files'</div>"
    );

    // Title for social network
    $form['rsTitle'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Social Network title', ['context'=>'cats_ressoc_admin_page']),
      '#default_value' => $config_levillagebyca->get('rstitle'),
    );

    $form['reseauxsociaux'] = array(
      '#type' => 'fieldset',
      '#title' => "Configuration",
      '#attributes' => array(
        'class' => array('fieldset_legend'),
      ),
    );

      $form['reseauxsociaux']['youtube'] = array(
        '#type' => 'fieldset',
        '#title' => "Youtube",
        '#attributes' => array(
          'class' => array('fieldset_legend'),
        ),
      );

        $form['reseauxsociaux']['youtube']['yTitle'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Youtube link title', ['context'=>'cats_ressoc_admin_page']),
          '#default_value' => $config_levillagebyca->get('ytitle'),
        );

        $form['reseauxsociaux']['youtube']['yURL'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Youtube link URL', ['context'=>'cats_ressoc_admin_page']),
          '#default_value' => $config_levillagebyca->get('yurl'),
        );

        $form['reseauxsociaux']['youtube']['yiconpath'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Icon path for Youtube', ['context'=>'cats_ressoc_admin_page']),
          '#default_value' => $config_levillagebyca->get('yiconpath'),
          '#suffix' => "<div>Nous assumons que votre URI succède le chemin '/sites/default/files'</div>"
        );

      $form['reseauxsociaux']['twitter'] = array(
        '#type' => 'fieldset',
        '#title' => "Twitter",
        '#attributes' => array(
          'class' => array('fieldset_legend'),
        ),
      );

        $form['reseauxsociaux']['twitter']['tTitle'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Twitter link title', ['context'=>'cats_ressoc_admin_page']),
          '#default_value' => $config_levillagebyca->get('ttitle'),
        );

        $form['reseauxsociaux']['twitter']['tURL'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Twitter link URL', ['context'=>'cats_ressoc_admin_page']),
          '#default_value' => $config_levillagebyca->get('turl'),
        );

        $form['reseauxsociaux']['twitter']['ticonpath'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Icon path for Twitter', ['context'=>'cats_ressoc_admin_page']),
          '#default_value' => $config_levillagebyca->get('ticonpath'),
          '#suffix' => "<div>Nous assumons que votre URI succède le chemin '/sites/default/files'</div>"
        );

      $form['reseauxsociaux']['linkedin'] = array(
        '#type' => 'fieldset',
        '#title' => "LinkedIn",
        '#attributes' => array(
          'class' => array('fieldset_legend'),
        ),
      );

        $form['reseauxsociaux']['linkedin']['lTitle'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('LinkedIn link title', ['context'=>'cats_ressoc_admin_page']),
          '#default_value' => $config_levillagebyca->get('ltitle'),
        );

        $form['reseauxsociaux']['linkedin']['lURL'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('LinkedIn link URL', ['context'=>'cats_ressoc_admin_page']),
          '#default_value' => $config_levillagebyca->get('lurl'),
        );

        $form['reseauxsociaux']['linkedin']['liconpath'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Icon path for Linkedin', ['context'=>'cats_ressoc_admin_page']),
          '#default_value' => $config_levillagebyca->get('liconpath'),
          '#suffix' => "<div>Nous assumons que votre URI succède le chemin '/sites/default/files'</div>"
        );

    // Title for Language
    $form['languageTitle'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Language title', ['context'=>'cats_ressoc_admin_page']),
      '#default_value' => $config_levillagebyca->get('languageTitle'),
    );


    $form['ENSocialNetwork'] = array(
      '#type' => 'fieldset',
      '#title' => "Traduction anglaise",
      '#attributes' => array(
        'class' => array('fieldset_legend'),
      ),
    );

        // Title for webradio
        $form['ENSocialNetwork']['webradioTitleen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Webradio title', ['context'=>'cats_ressoc_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.webradiotitle'),
        );

        // Title for player
        $form['ENSocialNetwork']['playerTitleen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Player title', ['context'=>'cats_ressoc_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.playertitle'),
        );

        // URL for webradio
        $form['ENSocialNetwork']['webradioURLen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Webradio URL', ['context'=>'cats_ressoc_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.webradiourl'),
        );

        // Title for webradio button
        $form['ENSocialNetwork']['webradioTitleButtonen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Webradio title button', ['context'=>'cats_ressoc_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.webradiotitlebutton'),
        );

        // URL for icone
        $form['ENSocialNetwork']['iconURLen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Icon URL', ['context'=>'cats_ressoc_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.iconurl'),
          '#suffix' => "<div>Nous assumons que votre URI succède le chemin '/sites/default/files'</div>"
        );

        // Title for social network
        $form['ENSocialNetwork']['rsTitleen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Social Network title', ['context'=>'cats_ressoc_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.rstitle'),
        );

        $form['ENSocialNetwork']['reseauxsociaux'] = array(
          '#type' => 'fieldset',
          '#title' => "Configuration",
          '#attributes' => array(
            'class' => array('fieldset_legend'),
          ),
        );

          $form['ENSocialNetwork']['reseauxsociaux']['youtube'] = array(
            '#type' => 'fieldset',
            '#title' => "Youtube",
            '#attributes' => array(
              'class' => array('fieldset_legend'),
            ),
          );

            $form['ENSocialNetwork']['reseauxsociaux']['youtube']['yTitleen'] = array(
              '#type' => 'textfield',
              '#title' => $this->t('Youtube link title', ['context'=>'cats_ressoc_admin_page']),
              '#default_value' => $config_levillagebyca->get('en.ytitle'),
            );

            $form['ENSocialNetwork']['reseauxsociaux']['youtube']['yURLen'] = array(
              '#type' => 'textfield',
              '#title' => $this->t('Youtube link URL', ['context'=>'cats_ressoc_admin_page']),
              '#default_value' => $config_levillagebyca->get('en.yurl'),
            );

            $form['ENSocialNetwork']['reseauxsociaux']['youtube']['yiconpathen'] = array(
              '#type' => 'textfield',
              '#title' => $this->t('Icon path for Youtube', ['context'=>'cats_ressoc_admin_page']),
              '#default_value' => $config_levillagebyca->get('en.yiconpath'),
              '#suffix' => "<div>Nous assumons que votre URI succède le chemin '/sites/default/files'</div>"
            );

          $form['ENSocialNetwork']['reseauxsociaux']['twitter'] = array(
            '#type' => 'fieldset',
            '#title' => "Twitter",
            '#attributes' => array(
              'class' => array('fieldset_legend'),
            ),
          );

            $form['ENSocialNetwork']['reseauxsociaux']['twitter']['tTitleen'] = array(
              '#type' => 'textfield',
              '#title' => $this->t('Twitter link title', ['context'=>'cats_ressoc_admin_page']),
              '#default_value' => $config_levillagebyca->get('en.ttitle'),
            );

            $form['ENSocialNetwork']['reseauxsociaux']['twitter']['tURLen'] = array(
              '#type' => 'textfield',
              '#title' => $this->t('Twitter link URL', ['context'=>'cats_ressoc_admin_page']),
              '#default_value' => $config_levillagebyca->get('en.turl'),
            );

            $form['ENSocialNetwork']['reseauxsociaux']['twitter']['ticonpathen'] = array(
              '#type' => 'textfield',
              '#title' => $this->t('Icon path for Twitter', ['context'=>'cats_ressoc_admin_page']),
              '#default_value' => $config_levillagebyca->get('en.ticonpath'),
              '#suffix' => "<div>Nous assumons que votre URI succède le chemin '/sites/default/files'</div>"
            );

          $form['ENSocialNetwork']['reseauxsociaux']['linkedin'] = array(
            '#type' => 'fieldset',
            '#title' => "LinkedIn",
            '#attributes' => array(
              'class' => array('fieldset_legend'),
            ),
          );

            $form['ENSocialNetwork']['reseauxsociaux']['linkedin']['lTitleen'] = array(
              '#type' => 'textfield',
              '#title' => $this->t('LinkedIn link title', ['context'=>'cats_ressoc_admin_page']),
              '#default_value' => $config_levillagebyca->get('en.ltitle'),
            );

            $form['ENSocialNetwork']['reseauxsociaux']['linkedin']['lURLen'] = array(
              '#type' => 'textfield',
              '#title' => $this->t('LinkedIn link URL', ['context'=>'cats_ressoc_admin_page']),
              '#default_value' => $config_levillagebyca->get('en.lurl'),
            );

            $form['ENSocialNetwork']['reseauxsociaux']['linkedin']['liconpathen'] = array(
              '#type' => 'textfield',
              '#title' => $this->t('Icon path for Linkedin', ['context'=>'cats_ressoc_admin_page']),
              '#default_value' => $config_levillagebyca->get('en.liconpath'),
              '#suffix' => "<div>Nous assumons que votre URI succède le chemin '/sites/default/files'</div>"
            );

        // Title for Language
        $form['ENSocialNetwork']['languageTitleen'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Language title', ['context'=>'cats_ressoc_admin_page']),
          '#default_value' => $config_levillagebyca->get('en.languageTitle'),
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
    $wrTitle = $form_state->getValue('webradioTitle');
    $plTitle = $form_state->getValue('playerTitle');
    $wrURL = $form_state->getValue('webradioURL');
    $wrTitleButton = $form_state->getValue('webradioTitleButton');
    $iconURL = $form_state->getValue('iconURL');
    $rsTitle = $form_state->getValue('rsTitle');
    $yTitle = $form_state->getValue('yTitle');
    $tTitle = $form_state->getValue('tTitle');
    $lTitle = $form_state->getValue('lTitle');
    $yURL = $form_state->getValue('yURL');
    $tURL = $form_state->getValue('tURL');
    $lURL = $form_state->getValue('lURL');
    $ypath = $form_state->getValue('yiconpath');
    $tpath = $form_state->getValue('ticonpath');
    $lpath = $form_state->getValue('liconpath');
    $lang = $form_state->getValue('languageTitle');

    $wrTitleen = $form_state->getValue('webradioTitleen');
    $plTitleen = $form_state->getValue('playerTitleen');
    $wrURLen = $form_state->getValue('webradioURLen');
    $wrTitleButtonen = $form_state->getValue('webradioTitleButtonen');
    $iconURLen = $form_state->getValue('iconURLen');
    $rsTitleen = $form_state->getValue('rsTitleen');
    $yTitleen = $form_state->getValue('yTitleen');
    $tTitleen = $form_state->getValue('tTitleen');
    $lTitleen = $form_state->getValue('lTitleen');
    $yURLen = $form_state->getValue('yURLen');
    $tURLen = $form_state->getValue('tURLen');
    $lURLen = $form_state->getValue('lURLen');
    $ypathen = $form_state->getValue('yiconpathen');
    $tpathen = $form_state->getValue('ticonpathen');
    $lpathen = $form_state->getValue('liconpathen');
    $langen = $form_state->getValue('languageTitleen');

    $config = $this->configFactory()->getEditable('cats_levillagebyca.ressoc');
    $config->set('webradiotitle', $wrTitle);
    $config->set('playertitle', $plTitle);
    $config->set('webradiourl', $wrURL);
    $config->set('webradiotitlebutton', $wrTitleButton);
    $config->set('iconurl', $iconURL);
    $config->set('rstitle', $rsTitle);
    $config->set('ytitle', $yTitle);
    $config->set('ttitle', $tTitle);
    $config->set('ltitle', $lTitle);
    $config->set('yurl', $yURL);
    $config->set('turl', $tURL);
    $config->set('lurl', $lURL);
    $config->set('yiconpath', $ypath);
    $config->set('ticonpath', $tpath);
    $config->set('liconpath', $lpath);
    $config->set('languageTitle', $lang);
    $config->set('en.webradiotitle', $wrTitleen);
    $config->set('en.playertitle', $plTitleen);
    $config->set('en.webradiourl', $wrURLen);
    $config->set('en.webradiotitlebutton', $wrTitleButtonen);
    $config->set('en.iconurl', $iconURLen);
    $config->set('en.rstitle', $rsTitleen);
    $config->set('en.ytitle', $yTitleen);
    $config->set('en.ttitle', $tTitleen);
    $config->set('en.ltitle', $lTitleen);
    $config->set('en.yurl', $yURLen);
    $config->set('en.turl', $tURLen);
    $config->set('en.lurl', $lURLen);
    $config->set('en.yiconpath', $ypathen);
    $config->set('en.ticonpath', $tpathen);
    $config->set('en.liconpath', $lpathen);
    $config->set('en.languageTitle', $langen);
    $config->save();

    \Drupal::entityTypeManager()->getViewBuilder('block')->resetCache();

    parent::submitForm($form, $form_state);

  }
}