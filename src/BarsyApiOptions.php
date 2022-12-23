<?php
/**
 *
 * @category   barsy.test.git
 * @author     Barsy <dev@Barsy.com>
 * @since      21:13
 */


namespace VenosT\Barsy;


class BarsyApiOptions {

  public $auth_type = 'user';
  public $proxy_host;
  public $proxy_port = 8888;
  public $request_type = 'json';
  public $response_type = 'json';
  public $socket_timeout = 20;
  public $exec_time = false;
  public $response_size = false;
  public $file_name;
  public $debug = 0;
  public $result;
  public $max_redirects = 10;

  /**
   * BarsyApiOptions constructor.
   */
  public function __construct($options = [])
  {

    if (isset($options['auth_type'])) {
      $this->auth_type = $options['auth_type'];
    }
    if (isset($options['proxy_host'])) {
      $this->proxy_host = $options['proxy_host'];
    }
    if (isset($options['proxy_port'])) {
      $this->proxy_port = $options['proxy_port'];
    }
    if (isset($options['response_type'])) {
      $this->response_type = $options['response_type'];
    }
    if (isset($options['request_type'])) {
      $this->request_type = $options['request_type'];
    }
    if (isset($options['socket_timeout'])) {
      $this->socket_timeout = $options['socket_timeout'];
    }
    if (isset($options['max_redirects'])) {
      $this->max_redirects = $options['max_redirects'];
    }
    if (isset($options['debug'])) {
      $this->debug = $options['debug'];
    }
  }


}