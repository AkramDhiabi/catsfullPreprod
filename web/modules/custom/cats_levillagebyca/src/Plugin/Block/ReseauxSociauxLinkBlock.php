<?php

namespace Drupal\cats_levillagebyca\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a ReseauxSociauxLinkBlock block.
 *
 * @Block(
 *   id = "reseaux-sociaux-link_block",
 *   admin_label = @Translation("Social Network bloc", context = "cats_ressoc_admin_page"), )
 *   category = @Translation("CATS", context = "cats_ressoc_admin_page"),
 * )
 */
class ReseauxSociauxLinkBlock extends BlockBase {
    
  /**
  * {@inheritdoc}
  */
  public function build() {

    $config = \Drupal::config('cats_levillagebyca.ressoc');

    $webradiotitle = $config->get('webradiotitle');
    $playertitle = $config->get('playertitle');
    $webradiourl = $config->get('webradiourl');
    $webradiotitlebutton = $config->get('webradiotitlebutton');
    $iconurl = $config->get('iconurl');
    $rstitle = $config->get('rstitle');
    $ytitle = $config->get('ytitle');
    $ttitle = $config->get('ttitle');
    $ltitle = $config->get('ltitle');
    $yurl = $config->get('yurl');
    $turl = $config->get('turl');
    $lurl = $config->get('lurl');
    $yiconpath = $config->get('yiconpath');
    $ticonpath = $config->get('ticonpath');
    $liconpath = $config->get('liconpath');
    $languageTitle = $config->get('languageTitle');

    $webradiotitleen = $config->get('en.webradiotitle');
    $playertitleen = $config->get('en.playertitle');
    $webradiourlen = $config->get('en.webradiourl');
    $webradiotitlebuttonen = $config->get('en.webradiotitlebutton');
    $iconurlen = $config->get('en.iconurl');
    $rstitleen = $config->get('en.rstitle');
    $ytitleen = $config->get('en.ytitle');
    $ttitleen = $config->get('en.ttitle');
    $ltitleen = $config->get('en.ltitle');
    $yurlen = $config->get('en.yurl');
    $turlen = $config->get('en.turl');
    $lurlen = $config->get('en.lurl');
    $yiconpathen = $config->get('en.yiconpath');
    $ticonpathen = $config->get('en.ticonpath');
    $liconpathen = $config->get('en.liconpath');
    $languageTitleen = $config->get('en.languageTitle');

    return array(
      '#theme' => 'cats_reseaux-sociaux-link-block',
      '#webradiotitle' => $webradiotitle,
      '#playertitle' => $playertitle,
      '#webradiourl' => $webradiourl,
      '#webradiotitlebutton' => $webradiotitlebutton,
      '#iconurl' => $iconurl,
      '#rstitle' => $rstitle,
      '#ytitle' => $ytitle,
      '#ttitle' => $ttitle,
      '#ltitle' => $ltitle,
      '#yurl' => $yurl,
      '#turl' => $turl,
      '#lurl' => $lurl,
      '#yiconpath' => $yiconpath,
      '#ticonpath' => $ticonpath,
      '#liconpath' => $liconpath,
      '#languageTitle' => $webradiotitle,
      '#webradiotitleen' => $webradiotitleen,
      '#playertitleen' => $playertitleen,
      '#webradiourlen' => $webradiourlen,
      '#webradiotitlebuttonen' => $webradiotitlebuttonen,
      '#iconurlen' => $iconurlen,
      '#rstitleen' => $rstitleen,
      '#ytitleen' => $ytitleen,
      '#ttitleen' => $ttitleen,
      '#ltitleen' => $ltitleen,
      '#yurlen' => $yurlen,
      '#turlen' => $turlen,
      '#lurlen' => $lurlen,
      '#yiconpathen' => $yiconpathen,
      '#ticonpathen' => $ticonpathen,
      '#liconpathen' => $liconpathen,
      '#languageTitleen' => $webradiotitleen,
    );

  }

}
