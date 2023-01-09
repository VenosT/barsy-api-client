<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Depots
 */
class Depots{

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
   * Списък от складовете в системата, групирани по търговски обекти
   * @param  $filters [] 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return  
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Depots
   */
  public function getgrouplist($filters = [], string $response_type = null){

    $bact = BarsyApiAction::create('Depots_getgrouplist')
     ->setParam('filters',$filters);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща списък от складове, групирани по търговски обекти
   * @param \VenosT\Barsy\Data\Depots\DepotsListFiltersData $filters []
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return array 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Depots
   */
  public function getlistbybarsys($filters = [], string $response_type = null){

    $bact = BarsyApiAction::create('Depots_getlistbybarsys')
     ->setParam('filters',$filters);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща списък от складове за текущия търговски обект
   * @param \VenosT\Barsy\Data\Depots\DepotsListFiltersData $filters []
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\Depots\DepotType[]
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Depots
   */
  public function getlistcurrent($filters = [], string $response_type = null){

    $bact = BarsyApiAction::create('Depots_getlistcurrent')
     ->setParam('filters',$filters);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща списък от складове
   * @param \VenosT\Barsy\Data\Depots\DepotsListFiltersData $filters []
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\Depots\DepotType[]
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Depots
   */
  public function getlist($filters = [], string $response_type = null){

    $bact = BarsyApiAction::create('Depots_getlist')
     ->setParam('filters',$filters);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
