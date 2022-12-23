<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Sittings
 */
class Sittings{

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
   * Списък с резервации
   * @param int $barsy_id null 
   * @param int $salon_id null 
   * @param int $place_id null 
   * @param string $date null 
   * @param int $sitting_group_id null 
   * @param int $sitting_id null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return  
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Sittings
   */
  public function getlist($barsy_id = null, $salon_id = null, $place_id = null, $date = null, $sitting_group_id = null, $sitting_id = null, string $response_type = null){

    $bact = BarsyApiAction::create('Sittings_getlist')
     ->setParam('barsy_id',$barsy_id)
     ->setParam('salon_id',$salon_id)
     ->setParam('place_id',$place_id)
     ->setParam('date',$date)
     ->setParam('sitting_group_id',$sitting_group_id)
     ->setParam('sitting_id',$sitting_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
