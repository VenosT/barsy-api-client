<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Reservations
 */
class Reservations{

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
   * Създаване на нова резервация
   * @param \VenosT\Barsy\Data\Reservations\ReservationSaveData $values null
   * @param \VenosT\Barsy\Data\Reservations\ReservationArticleSaveData[] $rows null Артикули към резервацията
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Reservations
   */
  public function create($values, $rows = null, string $response_type = null){

    $bact = BarsyApiAction::create('Reservations_create')
     ->setParam('values',$values)
     ->setParam('rows',$rows);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Списък с резервации
   * @param \VenosT\Barsy\Data\Reservations\ReservationsListFiltersData $filters null
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return array 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Reservations
   */
  public function getlist($filters, string $response_type = null){

    $bact = BarsyApiAction::create('Reservations_getlist')
     ->setParam('filters',$filters);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
