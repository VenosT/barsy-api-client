<?php

namespace VenosT\Barsy;

use VenosT\Barsy\Exceptions\BarsyApiClientError;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Class BarsyApiClient
 * Служи за връзка с Barsy API
 */
class BarsyApiClient implements BarsyApiClientInterface
{
  /**
   * @var string
   */
  private $host;
  /**
   * @var mixed
   */
  private $user;
  /**
   * @var mixed
   */
  private $password;

  private $addition_params;
  /**
   * @var array
   */
  private $headers;

  /**
   * @var BarsyApiOptions
   */
  private $options;

  public function __construct($host = null, $user = null, $password = null, $options = null)
  {
    $this->set_options($options);
    $this->headers['accept'] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
    if ($host !== null) {
      $this->host = rtrim($host, '/');
    }
    if ($user !== null) {
      $this->user = $user;
    }
    if ($password !== null) {
      $this->password = $password;
    }
  }


  public function set_options($options): void
  {
    if ($options instanceof BarsyApiOptions) {
      $this->options = $options;
    } else {
      $this->options = new BarsyApiOptions($options);
    }
  }

  /**
   * @param $body
   * @param bool $response_type
   * @param array $options
   * @return bool|mixed|string
   * @throws BarsyApiClientMessage
   * @throws BarsyApiClientFault
   * @deprecated
   */
  public function call($body, $response_type = 'json', $options = array())
  {
    $response_data = $this->execute($body, 'json', $response_type, $options);
    return $response_data->getBody();
  }

  /**
   * @param $action
   * @param string $response_type
   * @return bool|mixed|string
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @throws \JsonException
   */
  public function run($action, string $response_type = 'json',$options = [])
  {
    $response_data = $this->execute($action, 'json', $response_type, $options);
    $body = $response_data->getBody();
    if(is_object($body) && !\in_array($response_type, Array('res', 'pdf', 'html', 'xml', 'txt'))){
      $key = key((array)$body);
      return $body->$key;
    }
    return $body;
  }

  public function runMulti($actions, string $response_type = 'json',$options = [])
  {
    return $this->execute($actions, 'json', $response_type, $options)->getBody();
  }

  /**
   * @param $action
   * @param string $response_type
   * @return BarsyApiResponseData
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @throws \JsonException
   */
  public function runRaw($action, string $response_type = 'json'): BarsyApiResponseData
  {
    return $this->execute($action, 'json', $response_type);
  }

  /**
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @throws \JsonException
   */
  private function execute($body, string $request_type, string $response_type, array $options = null)
  {

    if(!$this->host){
      throw new \Exception('Missing barsy `host` configuration for barsyApiClient');
    }
    if ($request_type) {
      $this->headers['content-type'] = 'Content-Type: application/' . $request_type . '; charset=UTF-8';
    }
    if ($this->user) {
      if ($this->options->auth_type === 'user') {
        $this->headers['authorization'] = 'Authorization:Basic ' . base64_encode("$this->user:$this->password");
      } else {
        $this->headers['clientauthorization'] = 'ClientAuthorization:Basic ' . base64_encode($this->user . ':' . $this->password);
        unset($this->headers['authorization']);
      }
    } else {
      unset($this->headers['authorization']);
    }

    $headers = $this->headers;
    if ($options && isset($options['headers']) && $options['headers']) {
      foreach ($options['headers'] as $header => $hval) {
        $headers[$header] = $hval;
      }
    }
    if ($this->options->debug) {
      $headers['debug'] = 'Barsy_DEBUG: 1';
    }

    $time = microtime(true);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_URL, $this->host . '/endpoints/' . $response_type . $this->getAdditionParams());

    if ($body !== '') {
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body, JSON_THROW_ON_ERROR));
    }

    curl_setopt($ch, CURLOPT_TIMEOUT, $this->options->socket_timeout);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_PROTOCOLS, CURLPROTO_HTTP | CURLPROTO_HTTPS);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    if ($this->options->proxy_host) {
      curl_setopt($ch, CURLOPT_PROXY, $this->options->proxy_host . ':' . $this->options->proxy_port);
    }

    if ($options) {
      foreach ($options as $okey => $oval) {
        if (strncmp($okey, 'CURLOPT_', 8) === 0) {
          curl_setopt($ch, \constant($okey), $oval);
        }
      }
    }

    $response = curl_exec($ch);

    if ($response === false) {
      $error_message = 'Connection problem  with ' . $this->host . '/endpoints/' . $response_type . ' : ' . curl_error($ch);
      $error_code = '110' . sprintf('%02d', curl_errno($ch));
      throw new BarsyApiClientMessage($error_message, $error_code);
    }

    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $try = 0;
    while (in_array($http_code, array(301, 302, 303)) && $try < $this->options->max_redirects) { // Ако имаме редирект пробваме пак
      $try++;
      $new_location = curl_getinfo($ch, CURLINFO_REDIRECT_URL);
      if (!$new_location && preg_match('/Location: (.*)/', $response, $new_location)) {
        $new_location = $new_location[1];
      }
      if ($new_location) {
        curl_setopt($ch, CURLOPT_URL, trim($new_location));
        $response = curl_exec($ch);
        if ($response === false) {
          throw new BarsyApiClientMessage('Connection problem with ' . $new_location . ' : ' . curl_error($ch), '110' . sprintf("%02d", curl_errno($ch)));
        }
        // Get the code again
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      }
    }

    $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    curl_close($ch);

    $response_data = new BarsyApiResponseData($response, $header_size, $http_code, $time,$response_type);

    if ($http_code != 200) {
      $xerr = $response_data->getHeader('X-Error');
      $message_codes = array(501, 401);

      if (in_array($http_code, $message_codes, true)) {
        throw new BarsyApiClientMessage($response_data->getBody(), $xerr, $response_data);
      }
      throw new BarsyApiClientFault($response_data->getBody(), $xerr, $response_data);
    }

    return $response_data;
  }


  /**
   * @param $barsy_id
   */
  public function setBarsyId($barsy_id): void
  {
    $this->addition_params['bid'] = $barsy_id;
  }

  /**
   * @param $poskey
   */
  public function setPosKey($poskey): void
  {
    $this->addition_params['poskey'] = $poskey;
  }

  /**
   * @return string
   */
  private function getAdditionParams(): string
  {
    if ($this->addition_params) {
      return '?' . http_build_query($this->addition_params);
    }
    return '';
  }

  /**
   * @return BarsyApiOptions
   */
  public function getOptions(): BarsyApiOptions
  {
    return $this->options;
  }

}
