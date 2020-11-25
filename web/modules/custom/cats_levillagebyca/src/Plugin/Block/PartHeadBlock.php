<?php

namespace Drupal\cats_levillagebyca\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a PartHeadBlock block.
 *
 * @Block(
 *   id = "part-head_block",
 *   admin_label = @Translation("Head Su/Part bloc 2", context = "cats_supart_admin_page"), )
 *   category = @Translation("CATS", context = "cats_supart_admin_page"),
 * )
 */
class PartHeadBlock extends BlockBase {
    
  /**
  * {@inheritdoc}
  */
  public function build() {

    $config = \Drupal::config('cats_levillagebyca.supart');

    $uppTitle = $config->get('partenaires.uptitle');
    $downpcoloredTitle = $config->get('partenaires.downcoloredtitle');
    $downpTitle = $config->get('partenaires.downtitle');
    $descpa = $config->get('partenaires.descsu.value');
    
    $uppTitleen = $config->get('en.partenaires.uptitle');
    $downpcoloredTitleen = $config->get('en.partenaires.downcoloredtitle');
    $downpTitleen = $config->get('en.partenaires.downtitle');
    $descpaen = $config->get('en.partenaires.descpart.value');

    return array(
      '#theme' => 'cats_part-head-block',
      '#uppTitle' => $uppTitle,
      '#downpcoloredTitle' => $downpcoloredTitle,
      '#downpTitle' => $downpTitle,
      '#descpa' => $descpa,
      '#uppTitleen' => $uppTitleen,
      '#downpcoloredTitleen' => $downpcoloredTitleen,
      '#downpTitleen' => $downpTitleen,
      '#descpaen' => $descpaen,
    );
  }
}
