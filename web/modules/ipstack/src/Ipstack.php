<?php

namespace Drupal\ipstack;

/**
 * @file
 * Contains \Drupal\ipstack\Ipstack.
 */

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;
use Drupal\Core\Render\Markup;
use Drupal\Core\Cache\CacheBackendInterface;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class Ipstack.
 *
 * Provides ipstack.com API.
 *
 * @ingroup ipstack
 */
class Ipstack extends ControllerBase {

  /**
   * IP address.
   *
   * @var string
   */
  protected $ip;

  /**
   * Ipstack options.
   *
   * @var array
   */
  protected $options;

  /**
   * Is ipstack data from cache?
   *
   * @var bool
   */
  protected $cacheData;

  /**
   * Ipstack constructor.
   *
   * @param string $ip
   *   IP address.
   * @param array $options
   *   Ipstack options.
   */
  public function __construct($ip = '', array $options = []) {
    $this->setIp($ip);
    $this->setOptions($options);
    $this->cacheData = FALSE;
  }

  /**
   * Set IP address.
   *
   * @param string $ip
   *   IP address.
   */
  public function setIp($ip) {
    $this->ip = trim($ip);
    if (empty($this->ip)) {
      $this->ip = $this->config('ipstack.settings')->get('ip') ?: \Drupal::request()->getClientIp();
    }

    return $this;
  }

  /**
   * Set ipstack options. (config value if empty).
   *
   * @param string $options
   *   Ipstack options.
   */
  public function setOptions($options) {
    if (empty($options['access_key'])) {
      $access_key = $this->config('ipstack.settings')->get('access_key');
      $options['access_key'] = $access_key;
    }
    $this->options = $options;

    return $this;
  }

  /**
   * Get ipstack URL.
   *
   * @return string
   *   Ipstack URL for data retrieving.
   */
  public function getUrl() {
    $prot = !empty($this->config('ipstack.settings')->get('use_https')) ? 'https' : 'http';
    $url_options = ['absolute' => TRUE, 'query' => $this->options];
    $url = Url::fromUri($prot . "://api.ipstack.com/" . $this->ip, $url_options);
    return $url->toString();
  }

  /**
   * Get ipstack data.
   *
   * @return array
   *   Ipstack data responce.
   */
  public function getData() {
    $use_cache = $this->config('ipstack.settings')->get('use_cache');
    $this->cacheData = FALSE;

    // Get data from cache.
    $cid = 'ipstack:ip_' . $this->ip;
    if ($use_cache) {
      $cache = $this->cache()->get($cid);
      if (!empty($cache)) {
        $this->cacheData = TRUE;
        return ['data' => $cache->data];
      }
    }

    // Get data from ipstack site.

    // Access Key is required.
    if (empty($this->options['access_key'])) {
      return ['error' => $this->t('Empty access_key')];
    }

    // Get data from api.ipstack.com .
    $client = \Drupal::service('http_client');
    $responce = $client->get($this->getUrl());
    $status = $responce->getStatusCode();
    if ($status != Response::HTTP_OK) {
      return ['error' => $this->t('Got responce status @status', ['@status' => $status])];
    }

    $data = (string) $responce->getBody();
    if ($use_cache) {
      // Set ipstack cache.
      $this->cache()->set($cid, $data, CacheBackendInterface::CACHE_PERMANENT, ['ipstack']);
    }

    return ['data' => $data];
  }

  /**
   * Show result.
   */
  public function showResult() {
    $url = $this->getUrl();
    $messenger = $this->messenger();
    $msg = $this->t("Request: <a href=':url' target='_new'>:url</a>", [':url' => $url]);
    $messenger->addMessage($msg);

    $data = $this->getData();

    if (!empty($data['error'])) {
      $msg = $data['error'];
      $messenger->addMessage($msg, 'error');
    }

    if (!empty($data['data'])) {
      $data = $data['data'];
      if ($this->cacheData) {
        $messenger->addMessage($this->t('From cache'));
      }

      // Decode JSON object.
      if (empty($this->options['output']) || $this->options['output'] == 'json') {
        $data = json_decode($data);
      }

      $status = 'status';
      if (!empty($data->error)) {
        $data = $data->error;
        $status = 'error';
      }

      $msg = $this->t('Responce:');
      if (is_array($data) || is_object($data)) {
        $msg .= ' <pre>' . print_r($data, 1) . '</pre>';
        $msg = Markup::create($msg);
      }
      else {
        $msg .= $data;
      }
      $messenger->addMessage($msg, $status);
    }

    $messenger->all();
  }

}
