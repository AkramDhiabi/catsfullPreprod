<?php

namespace Drupal\custom_migrate\Controller;

use Drupal\Core\Controller\ControllerBase;

class TestController extends ControllerBase {

  public function content() {

	$nids = \Drupal::entityQuery('node')->execute();
	//$nids = \Drupal::entityTypeManager()->getStorage("node")->loadByProperties(['type' => 'partenaire']);
	$nodes =  \Drupal\node\Entity\Node::loadMultiple($nids);
	//print_r($nodes);
	foreach ($nodes as $node) {
		//$node->setPublished(TRUE);
		$node->set('langcode', "fr");
		$node->save();
	}

    drupal_flush_all_caches();

      return array(
              '#markup' => 'test ici',
      );
  }
}