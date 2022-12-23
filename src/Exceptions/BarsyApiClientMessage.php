<?php

namespace VenosT\Barsy\Exceptions;

class BarsyApiClientMessage extends BarsyApiClientError
{
  /**
   * @return string
   */
  public function getErrorPrefix(): string
  {
    return 'Barsy API Message: ';
  }
}
