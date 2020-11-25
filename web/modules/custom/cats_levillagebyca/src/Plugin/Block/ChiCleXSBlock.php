<?php

namespace Drupal\cats_levillagebyca\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a ChiCleXSBlock block.
 *
 * @Block(
 *   id = "chiclexs_block",
 *   admin_label = @Translation("Head chicle mobile bloc", context = "cats_chicle_admin_page"), )
 *   category = @Translation("CATS", context = "cats_supart_admin_page"),
 * )
 */
class ChiCleXSBlock extends BlockBase {
    
  /**
  * {@inheritdoc}
  */
  public function build() {

    $config = \Drupal::config('cats_levillagebyca.chicle');

    $chiffresu = $config->get('startups.chiffresu');
    $textsu = $config->get('startups.textsu');
    $chiffrepart = $config->get('partenaires.chiffrepart');
    $textpart = $config->get('partenaires.textpart');
    $chiffrevi = $config->get('villages.chiffrevi');
    $textvi = $config->get('villages.textvi');
    $chiffrefo = $config->get('fonds.chiffrefo');
    $textfo = $config->get('fonds.textfo');
    $uptitle = $config->get('entete.uptitle');
    $downcoloredtitle = $config->get('entete.downcoloredtitle');
    $downtitle = $config->get('entete.downtitle');

    $chiffresuen = $config->get('en.startups.chiffresu');
    $textsuen = $config->get('en.startups.textsu');
    $chiffreparten = $config->get('en.partenaires.chiffrepart');
    $textparten = $config->get('en.partenaires.textpart');
    $chiffrevien = $config->get('en.villages.chiffrevi');
    $textvien = $config->get('en.villages.textvi');
    $chiffrefoen = $config->get('en.fonds.chiffrefo');
    $textfoen = $config->get('en.fonds.textfo');
    $uptitleen = $config->get('en.entete.uptitle');
    $downcoloredtitleen = $config->get('en.entete.downcoloredtitle');
    $downtitleen = $config->get('en.entete.downtitle');

    return array(
      '#theme' => 'cats_chicle-head-xs-block',
      '#chiffresu' => $chiffresu,
      '#textsu' => $textsu,
      '#chiffrepart' => $chiffrepart,
      '#textpart' => $textpart,
      '#chiffrevi' => $chiffrevi,
      '#textvi' => $textvi,
      '#chiffrefo' => $chiffrefo,
      '#textfo' => $textfo,
      '#uptitle' => $uptitle,
      '#downcoloredtitle' => $downcoloredtitle,
      '#downtitle' => $downtitle,
      '#chiffresuen' => $chiffresuen,
      '#textsuen' => $textsuen,
      '#chiffreparten' => $chiffreparten,
      '#textparten' => $textparten,
      '#chiffrevien' => $chiffrevien,
      '#textvien' => $textvien,
      '#chiffrefoen' => $chiffrefoen,
      '#textfoen' => $textfoen,
      '#uptitleen' => $uptitleen,
      '#downcoloredtitleen' => $downcoloredtitleen,
      '#downtitleen' => $downtitleen,
    );
  }
}
