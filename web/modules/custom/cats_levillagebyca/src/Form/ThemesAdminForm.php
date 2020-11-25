<?php
/**
 * Created by Eclipse.
 * User: Fabien
 * Date: 20/11/2019
 * Time: 11:48
 */

namespace Drupal\cats_levillagebyca\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\file\Entity\File;
use Drupal\Core\Config\ConfigFactoryInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ThemesAdminForm extends ConfigFormBase {

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
    return 'cats_levillagebyca.theme_admin_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['#title'] = t('Theme administration page for LeVillageByCA', ['context'=>'cats_theme_admin_page']);
    $config_levillagebyca = \Drupal::config('cats_levillagebyca.theme');
    $config = \Drupal::config('system.site');

    // Favicon
    $form['favicon_upload'] = array(
      '#type' => 'managed_file',
      '#title' => $this->t('Site favicon', ['context'=>'cats_theme_admin_page']),
      '#default_value' => $config_levillagebyca->get('favicon_upload'),
      '#upload_location' => 'public://pictures/fav/',
      '#upload_validators' => array(
          'file_validate_extensions' => array('png jpg jpeg gif ico')
      ),
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

    if ($image2 = $form_state->getValue('favicon_upload')) {
      $file2 = File::load($image2[0]);
      $file2->setPermanent();
      $file2->save();
      $destination2 = 'public://pictures/fav/';
      file_move($file2, $destination2, FILE_EXISTS_RENAME);
    }

    $site_favicon = $form_state->getValue('favicon_upload');

    $config = $this->configFactory()->getEditable('cats_levillagebyca.theme');
    $config->set('favicon_upload', $site_favicon);
    $config->save();

    \Drupal::entityTypeManager()->getViewBuilder('block')->resetCache();

    parent::submitForm($form, $form_state);

  }
}