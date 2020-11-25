<?php

namespace Drupal\sync_bdd;
use Drupal\Core\Entity\EntityStorageException;
use Drupal\field\Entity\FieldConfig;
use Drupal\node\Entity\Node;
use Drupal\file\Entity\File;

class Sync_bdd{

  public function get_data($request_url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $request_url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLINFO_HEADER_OUT, TRUE);
    curl_setopt($curl, CURLOPT_TIMEOUT, 1200);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($curl);

    $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    if ($http_code == 200) {
      return [
        'code' => 200,
        'error_msg' => '',
        'url' => $request_url,
        'data' => $response
      ];
    }
    else {
      if (empty($msg)) {
        if (!empty($response)) {
          $response = json_decode($response, TRUE);

          if (isset($response['msg'])) {
            $msg = $response['msg'];
          }
          elseif (isset($response[0]['msg'])) {
            $msg = '';
            foreach ($response as $k => $v) {
              $msg .= $v['msg'] . "<br/>";
            }
          }
        }
        else {
          $msg = t('Error webservice code ' . $http_code);
        }

      }

      // Get error msg
      return [
        'code' => $http_code,
        'error_msg' => $msg,
        'data' => $response
      ];
    }

  }

  public function insert_data($url_img,$node) {
    $nid = \Drupal::entityQuery('node')
      ->condition('title', $node->title)
      ->sort('nid', 'DESC')
      ->execute();
      
      $file = $this->generateImg($url_img,$node);
      if ($node->langcode == "Anglais") {
        $lng = 'en';
      } else {
        $lng = 'fr';
      }
      $taxonomy =  explode(",", $node->field_thematiques_start_up);
      $new_node = Node::create([
        'type' => "start_up",
        'title' => $node->title,
        'body' => strip_tags($node->body),
        'langcode' => $lng,
        'uid' => 1,
        'promote' => 0,
        'sticky' => 0,
        'field_startup_thematique' => $node->field_startup_thematique,
        'field_village_url' => $node->field_village_url,
        'field_thematiques_start_up' => $taxonomy,
        'field_village_hote' => $node->field_village_hote,
        'field_village_taxonomie' => $node->field_village_taxonomie,
        'field_village_logo' =>[
          'target_id' => $file->id(),
        ],
      ]);
      try {
        $new_node->save();
      } catch (EntityStorageException $e) {
      }
    
  }


  public function edit_data($url_img,$title) {
    $nid = \Drupal::entityQuery('node')
      ->condition('field_id', $title->nid)
      ->sort('nid', 'DESC')
      ->execute();
    foreach ($nid as $key):
      $node = \Drupal\node\Entity\Node::load($key);
      $file =$this->generateImg($url_img,$title);
      $node->setTitle($title->title);
      $node->body->value =$title->body;
     // $node->set('field_startup_thematique', array(array($title->field_thematiques_start_up)));
      $node->set('field_village_url', ['uri' => $title->field_village_url,
        'title' => $title->field_village_url,
         'options' => [
            'attributes' => [
              'target' => '_blank',
            ],
          ],
        ]);

      $position = strpos($title->field_thematiques_start_up, ",");
      if( $position === false){
        $node->field_thematiques_start_up->target_id = $title->field_thematiques_start_up;
      }else{
        $taxonomy =  explode(",", $title->field_thematiques_start_up);
          $node->set('field_thematiques_start_up' , $taxonomy);

      }

  /*
      $node->field_village_hote->target_id = $title->field_village_hote;
      $node->field_village_taxonomie->target_id = $title->field_village_taxonomie;*/
      $node->field_village_logo->target_id =$file->id();

      try {
        $node->save();
        } catch (EntityStorageException $e) {
      }
    endforeach;
  }
  public function insert_data_P($url_img,$node) {
    $nid = \Drupal::entityQuery('node')
      ->condition('title', $node->title)
      ->sort('nid', 'DESC')
      ->execute();
     

      $file = $this->generateImgPartenaire($url_img,$node);
      if ($node->langcode == "Anglais") {
        $lng = 'en';
      } else {
        $lng = 'fr';
      }
      $taxonomy =  explode(",", $node->field_partenaire_village_taxonom);
      $partenaires = explode(",", $node->field_thematiques_partenaire);
      $villages = explode(",", $node->field_village_partenaire);
      $new_node = Node::create([
        'type' => "partenaire",
        'title' => $node->title,
        'body' => strip_tags($node->body),
        'langcode' => $lng,
        'uid' => 1,
        'promote' => 0,
        'sticky' => 0,
        'field_partenaire_thematique' => $node->field_partenaire_thematique,
        'field_partenaire_url' => $node->field_partenaire_url,
        'field_thematiques_partenaire' => $partenaires,
        'field_village_partenaire' => $villages,
        'field_partenaire_village_taxonom' => $taxonomy,
        'field_image' =>[
          'target_id' => $file->id(),
        ],
      ]);
      try {
        $new_node->save();
      } catch (EntityStorageException $e) {
      }
    
  }
  public function edit_data_P($url_img,$title) {
    $nid = \Drupal::entityQuery('node')
      ->condition('field_id', $title->nid)
      ->execute();
    foreach ($nid as $key):
      $node = Node::load($key);
      if ($node->langcode == "Anglais") {
        $lng = 'en';
      }
      else {
        $lng = 'fr';
      }
      $file =$this->generateImgPartenaire($url_img,$title);
      $node->setTitle($title->title);
      $node->body->value =$title->body;
      $node->set('langcode', $lng);
      $node->field_image->target_id =$file->id();
     // $node->set('field_partenaire_thematique', array(array($title->field_partenaire_thematique)));
      $node->set('field_partenaire_url', ['uri' => $title->field_partenaire_url,'title' => 'Title',
        'options' => [
          'attributes' => [
            'target' => '_blank',
          ],
        ],
      ]);
      /*$position_village = strpos($title->field_village_partenaire, ",");
      if( $position_village === false){
        $node->field_village_partenaire->target_id = $title->field_village_partenaire;
      }else{
        $taxonomy =  explode(",", $title->field_village_partenaire);
        $node->set('field_village_partenaire' , $taxonomy);

      }
      $position_taxonomy = strpos($title->field_partenaire_village_taxonom, ",");
      if( $position_taxonomy === false){
        $node->field_partenaire_village_taxonom->target_id = $title->field_partenaire_village_taxonom;
      }else{
        $taxonomys =  explode(",", $title->field_partenaire_village_taxonom);
        $node->set('field_partenaire_village_taxonom' , $taxonomys);
      }
      */
      $position_partners = strpos($title->field_thematiques_partenaire, ",");
      if( $position_partners === false){
        $node->field_thematiques_partenaire->target_id = $title->field_thematiques_partenaire;
      }else{
        $taxonomys =  explode(",", $title->field_thematiques_partenaire);
        $node->set('field_thematiques_partenaire' , $taxonomys);

      }
      try {
        $node->save();
      } catch (EntityStorageException $e) {
      }
    endforeach;
  }

  public function delete_data($value,$type) {
    $nid = \Drupal::entityQuery('node')
      ->condition('field_id', $value->nid)
      ->execute();
    foreach ($nid as $key):
      $node = Node::load($key);

     if ($type =="partenaire") {
      $position_partners = count($node->field_partenaire_village_taxonom->getValue());
      $position_village = count($node->field_village_partenaire->getValue());
      
      if (($position_partners < 2) && ($position_village < 2)) {
        try {

          $node->delete();
        } catch (EntityStorageException $e) {
        }
      }else {
        $list = $node->field_partenaire_village_taxonom->getValue();
        for ($i=0; $i < $position_partners ; $i++) { 
          if ($list[$i]["target_id"] == $value->field_partenaire_village_taxonom) {
            unset($list[$i]["target_id"]);
          }
        }
        $node->set('field_partenaire_village_taxonom', $list);
        $lists = $node->field_village_partenaire->getValue();
        for ($i=0; $i < $position_village ; $i++) { 
          if ($lists[$i]["target_id"] == $value->field_village_partenaire) {
            unset($lists[$i]["target_id"]);
          }
        }
         $node->set('field_village_partenaire', $lists);
        try {
          $node->save();
        } catch (EntityStorageException $e) {
        }
      }
    }else{      
        try {

          $node->delete();
        } catch (EntityStorageException $e) {
        }      
    }
   
    endforeach;
  }
  private function generateImg($url_img,$node){
    $urlImg = substr($url_img,0,-17).$node->field_village_logo;
    if($this->url_exists($urlImg)){
      //on récupère l'extension
      $filename = basename(parse_url($urlImg, PHP_URL_PATH));
      //on cancanne le pseuso et l'extension puis on l'ajoute au répertoire skins
      file_put_contents("public://". $filename, file_get_contents($urlImg));
    }
    $img = file_get_contents($urlImg);
    return file_save_data($img, "public://". $filename,FILE_EXISTS_RENAME);
  }
  private function generateImgPartenaire($url_img,$node){
    $urlImg = substr($url_img,0,-20).$node->field_image;
    //if($this->url_exists($urlImg)){
      //on récupère l'extension
      $filename = basename(parse_url($urlImg, PHP_URL_PATH));
      //on cancanne le pseuso et l'extension puis on l'ajoute au répertoire skins
      file_put_contents("public://". $filename, file_get_contents($urlImg));
    //}
    $img = file_get_contents($urlImg);
    return file_save_data($img, "public://". $filename,FILE_EXISTS_RENAME);
  }
  private function url_exists($url)  {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_NOBODY, true);
    $result = curl_exec($curl);
    if ($result !== false) {
      $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

      if ($statusCode == 404) return false;

      else return true;
    }
    else
    {
      return true;
    }
  }

}
