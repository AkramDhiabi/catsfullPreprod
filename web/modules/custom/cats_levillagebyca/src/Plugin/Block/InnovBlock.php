<?php

namespace Drupal\cats_levillagebyca\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a ChiCleBlock block.
 *
 * @Block(
 *   id = "innov_block",
 *   admin_label = @Translation("Head innov bloc", context = "cats_innov_admin_page"), )
 *   category = @Translation("CATS", context = "cats_supart_admin_page"),
 * )
 */
class InnovBlock extends BlockBase {
    
  /**
  * {@inheritdoc}
  */
  public function build() {

    $config = \Drupal::config('cats_levillagebyca.innov');

    $innovation = $config->get('innovation');
    $descTitle = $config->get('desctitle');
    $desc = $config->get('desc');
    $innovationen = $config->get('en.innovationen');
    $descTitleen = $config->get('en.desctitleen');
    $descen = $config->get('en.descen');


    return array(
      '#theme' => 'cats_innov-block',
      '#innovation' => $innovation,
      '#descTitle' => $descTitle,
      '#desc' => $desc,
      '#innovationen' => $innovationen,
      '#desctitleen' => $descTitleen,
      '#descen' => $descen,
    );
  }
}
