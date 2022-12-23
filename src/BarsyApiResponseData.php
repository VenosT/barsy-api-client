<?php
/**
 *
 * @category   barsy.test.git
 * @author     Barsy <dev@Barsy.com>
 * @since      9:50
 */


namespace VenosT\Barsy;


use VenosT\Barsy\Exceptions\BarsyApiClientError;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;

class BarsyApiResponseData {
  private $body;
  private $headers;
  private $exec_time;
  private $response_size;
  private $file_name;
  private $http_code;
  private $content_type;


  /**
   * BarsyApiResponseData constructor.
   * @throws \JsonException
   * @throws BarsyApiClientFault
   */
  public function __construct(string $response, int $header_size, int $http_code, float $start_time, string $response_type)
  {

    $this->headers = substr($response, 0, $header_size);
    $this->body = substr($response, $header_size);
    $this->exec_time = round(microtime(true) - $start_time, 3);
    $this->response_size = strlen($this->body);
    $this->http_code = $http_code;

    if (preg_match('/Content-Disposition: inline; filename=(.*)/', $this->headers, $res)) {
      $this->file_name = trim($res[1]);
    }

    if (preg_match('/Content-Type: ([a-z\-]+)\/([a-z\-]+)/i', $this->headers, $res)) {
      $this->content_type = trim($res[2]);
    }
    $headers = [];
    foreach (explode(PHP_EOL, $this->headers) as $k => $header) {
      $t = explode(':', $header, 2);
      if (\count($t) > 1) {
        $headers[$t[0]] = trim($t[1]);
      }
    }
    $this->headers = $headers;
    if ($this->getContentType() === 'json') {
      try {
        $this->body = json_decode($this->body, false, 512, JSON_THROW_ON_ERROR);
      }catch (\JsonException $e){
        throw new BarsyApiClientFault($e->getMessage(),1000,$this);
      }
    }
  }

  /**
   * @return false|string
   */
  public function getBody()
  {
    return $this->body;
  }

  /**
   * @return array
   */
  public function getHeaders(): array
  {
    return $this->headers;
  }

  /**
   * @return float
   */
  public function getExecTime(): float
  {
    return $this->exec_time;
  }

  /**
   * @return int
   */
  public function getResponseSize(): int
  {
    return $this->response_size;
  }

  /**
   * @return string
   */
  public function getFileName(): string
  {
    return $this->file_name;
  }

  public function getHeader(string $name)
  {
    return $this->headers[$name] ?? null;
  }

  /**
   * @return string
   */
  public function getContentType(): ?string
  {
    return $this->content_type;
  }

  /**
   * @return int
   */
  public function getHttpCode(): int
  {
    return $this->http_code;
  }


}