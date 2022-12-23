<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Misc
 */
class Misc{

  /**
   * @var BarsyApiClient
   * @version 1.0.4
   */
  private $barsy_api_client;

  /**
   * Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @var string|null
   */
  private $response_type;

  public function __construct(BarsyApiClient $barsy_api_client, string $response_type = 'json'){
    $this->barsy_api_client = $barsy_api_client;
    $this->response_type = $response_type;
  }

  /**
   * Тестова заявка към Barsy API с клиентска ауторизация. При успех, връща 1
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return  
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Misc
   */
  public function ping_client(string $response_type = null){

    $bact = BarsyApiAction::create('Misc_ping_client');

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Тестова заявка към Barsy API. При успех, връща 1
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return  
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Misc
   */
  public function ping(string $response_type = null){

    $bact = BarsyApiAction::create('Misc_ping');

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
