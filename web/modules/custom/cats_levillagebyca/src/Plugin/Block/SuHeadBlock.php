<?php

namespace Drupal\cats_levillagebyca\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a SuHeadBlock block.
 *
 * @Block(
 *   id = "su-head_block",
 *   admin_label = @Translation("Head Su/Part bloc", context = "cats_supart_admin_page"), )
 *   category = @Translation("CATS", context = "cats_supart_admin_page"),
 * )
 */
class SuHeadBlock extends BlockBase {
    
  /**
  * {@inheritdoc}
  */
  public function build() {

    $config = \Drupal::config('cats_levillagebyca.supart');

    $upTitle = $config->get('startups.uptitle');
    $downcoloredTitle = $config->get('startups.downcoloredtitle');
    $downTitle = $config->get('startups.downtitle');
    $descsu = $config->get('startups.descsu.value');

    $upTitleen = $config->get('en.startups.uptitle');
    $downcoloredTitleen = $config->get('en.startups.downcoloredtitle');
    $downTitleen = $config->get('en.startups.downtitle');
    $descsuen = $config->get('en.startups.descsu.value');

    return array(
      '#theme' => 'cats_su-head-block',
      '#upTitle' => $upTitle,
      '#downcoloredTitle' => $downcoloredTitle,
      '#downTitle' => $downTitle,
      '#descsu' => $descsu,
      '#upTitleen' => $upTitleen,
      '#downcoloredTitleen' => $downcoloredTitleen,
      '#downTitleen' => $downTitleen,
      '#descsuen' => $descsuen,
    );
  }
}
