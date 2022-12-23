<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Speditors
 */
class Speditors{

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
   * Списък куриерските фирми
   * @param int $speditor_id null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return array 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Speditors
   */
  public function getcontractslist($speditor_id, string $response_type = null){

    $bact = BarsyApiAction::create('Speditors_getcontractslist')
     ->setParam('speditor_id',$speditor_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Списък куриерските фирми
   * @param array $filters [] 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return array 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Speditors
   */
  public function getlist($filters = [], string $response_type = null){

    $bact = BarsyApiAction::create('Speditors_getlist')
     ->setParam('filters',$filters);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Списък куриерските фирми
   * @param int $speditor_id null 
   * @param int $dest_id null 
   * @param string $office_name null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return array 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Speditors
   */
  public function getofficelist($speditor_id, $dest_id, $office_name, string $response_type = null){

    $bact = BarsyApiAction::create('Speditors_getofficelist')
     ->setParam('speditor_id',$speditor_id)
     ->setParam('dest_id',$dest_id)
     ->setParam('office_name',$office_name);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
