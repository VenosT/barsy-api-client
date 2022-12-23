<?php

namespace VenosT\Barsy\Exceptions;

use Exception;
use VenosT\Barsy\BarsyApiResponseData;

class BarsyApiClientError extends Exception
{
  /**
   * @var string
   */
  protected $clear_message;
  /**
   * @var BarsyApiResponseData|null
   */
  private $response_data;


  /**
   * BarsyApiClientError constructor.
   * @param $message
   * @param null $code
   */
  public function __construct($message, $code = null ,BarsyApiResponseData $response_data = null)
  {
    $this->clear_message = $message;
    $this->response_data = $response_data;
    parent::__construct($this->getErrorPrefix() . $message . $this->getErrorSuffix(), $code ?? 0);
  }

  /**
   * @return mixed
   */
  public function getClearMessage()
  {
    return $this->clear_message;
  }

  /**
   * @return string
   */
  public function getErrorPrefix(): string
  {
    return '';
  }

  protected function getErrorSuffix():string
  {
    return '';
  }

  /**
   * @return BarsyApiResponseData
   */
  public function getResponseData(): BarsyApiResponseData
  {
    return $this->response_data;
  }
}
