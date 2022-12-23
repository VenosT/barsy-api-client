<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Poses
 */
class Poses{

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
   * Информация за текущата каса
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return  
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Poses
   */
  public function getcurrent(string $response_type = null){

    $bact = BarsyApiAction::create('Poses_getcurrent');

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Списък от налични каси
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return  
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Poses
   */
  public function getlist(string $response_type = null){

    $bact = BarsyApiAction::create('Poses_getlist');

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Регистриране на каса и получаване на ключ
   * @param int $pos_id null ID на желаната каса
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return string Ключ за оторизиране
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Poses
   */
  public function register($pos_id, string $response_type = null){

    $bact = BarsyApiAction::create('Poses_register')
     ->setParam('pos_id',$pos_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
