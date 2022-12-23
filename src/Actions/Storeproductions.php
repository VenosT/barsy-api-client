<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Storeproductions
 */
class Storeproductions{

  /**
   * @var BarsyApiClient
   * @version 1.0.135
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
   * Списък на складови производства
   * @param \Barsy\Data\StoreProductions\StoreProductionsListFiltersData $filters null Филтриране по подадени критерии
   * @param array $extra_properties [] Включване на допълнителни данни
   * @param int $offset 0 Начален запис
   * @param int $length 1000 Брой върнати записи
   * @param string $order_by null Подреждане по
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\StoreProductions\StoreProductionData
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Storeproductions
   */
  public function getlist($filters, $extra_properties = [], $offset = 0, $length = 1000, $order_by = null, string $response_type = null){

    $bact = BarsyApiAction::create('Storeproductions_getlist')
     ->setParam('filters',$filters)
     ->setParam('extra_properties',$extra_properties)
     ->setParam('offset',$offset)
     ->setParam('length',$length)
     ->setParam('order_by',$order_by);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
