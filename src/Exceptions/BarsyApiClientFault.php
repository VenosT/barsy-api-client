<?php

namespace VenosT\Barsy\Exceptions;

class BarsyApiClientFault extends BarsyApiClientError
{
  /**
   * @return string
   */
  public function getErrorPrefix(): string
  {
    return 'Barsy API Error: ';
  }

  protected function getErrorSuffix(): string
  {
    $info = "\n\n";
    $info .= "Content-Type: ".$this->getResponseData()->getContentType()."\n";
    $info .= "Body (".strlen($this->getResponseData()->getBody())." bytes):\n";
    $info .= substr($this->getResponseData()->getBody(),0,400);
    return $info;
  }


}
