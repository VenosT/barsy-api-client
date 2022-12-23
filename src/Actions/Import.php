<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Import
 */
class Import{

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
   * class Import_getdetails
   * @param int $import_id null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return mixed 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Import
   */
  public function getdetails($import_id, string $response_type = null){

    $bact = BarsyApiAction::create('Import_getdetails')
     ->setParam('import_id',$import_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * class Import_getlist
   * @param array $filters [] 
   * @param int $offset 0 
   * @param int $length 1000 
   * @param string $order_by null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return array 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Import
   */
  public function getlist($filters = [], $offset = 0, $length = 1000, $order_by = null, string $response_type = null){

    $bact = BarsyApiAction::create('Import_getlist')
     ->setParam('filters',$filters)
     ->setParam('offset',$offset)
     ->setParam('length',$length)
     ->setParam('order_by',$order_by);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Get documents from external barsy server
   * @param  $remote_id null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return stdClass 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Import
   */
  public function remote_getlist($remote_id, string $response_type = null){

    $bact = BarsyApiAction::create('Import_remote_getlist')
     ->setParam('remote_id',$remote_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
