<?php

/**
 * Implements hook_drush_command().
 */
function custom_migrate_drush_command() {
  $items = array();

  $items['translation'] = array(
    'description' => "Translate all content in French",
    'options' => array(),
    'aliases' => array('tlfr'),
  );

  return $items;
}

function drush_custom_migrate_translation() {
  /*
   * EN by default to FR for all content
   * Remplacement de la langue anglaise en français.
   */

  $nids = \Drupal::entityQuery('node')->execute();
  $nodes =  \Drupal\node\Entity\Node::loadMultiple($nids);
  //print_r($nodes);
  foreach ($nodes as $node) {
    //$node->setPublished(TRUE);
    $node->set('langcode', "fr");
    $node->save();
  }

    drupal_flush_all_caches();

}
