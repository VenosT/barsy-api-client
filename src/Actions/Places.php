<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Places
 */
class Places{

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
   * Изтегляне на списък с всички места 
   * @param \Barsy\Data\Places\PlacesListFiltersData $filters null Филтриране на списъка
   * @param array $extra_properties [] Допълнителни данни за всяка маса
   * @param int $offset 0 Начална стойност
   * @param int $length 10000 Брой върнати записи
   * @param string $order_by null Сортиране по
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\Salons\PlaceData[] списък от обекти
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Places
   */
  public function getlist($filters, $extra_properties = [], $offset = 0, $length = 10000, $order_by = null, string $response_type = null){

    $bact = BarsyApiAction::create('Places_getlist')
     ->setParam('filters',$filters)
     ->setParam('extra_properties',$extra_properties)
     ->setParam('offset',$offset)
     ->setParam('length',$length)
     ->setParam('order_by',$order_by);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща списък с местата, които имат поне една отворена сметка 
   * @param string $checksum null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\Salons\PlaceAccountsData[]
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Places
   */
  public function getlistwithaccountsonly($checksum = null, string $response_type = null){

    $bact = BarsyApiAction::create('Places_getlistwithaccountsonly')
     ->setParam('checksum',$checksum);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Изтегляне на списък с заетите времеви слотове 
   * @param int $place_id null ID на място
   * @param string $from_date null начална дата
   * @param string $to_date null крайна дата
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\Salons\PlaceData[] списък от обекти
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Places
   */
  public function getreservedslots($place_id, $from_date, $to_date, string $response_type = null){

    $bact = BarsyApiAction::create('Places_getreservedslots')
     ->setParam('place_id',$place_id)
     ->setParam('from_date',$from_date)
     ->setParam('to_date',$to_date);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Изтегляне на списък с всички свободни
   * @param string $from_date null начална дата
   * @param string $to_date null крайна дата
   * @param array $persons null брой потребители
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\Salons\PlaceData[] списък от обекти
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Places
   */
  public function searchavailable($from_date, $to_date, $persons, string $response_type = null){

    $bact = BarsyApiAction::create('Places_searchavailable')
     ->setParam('from_date',$from_date)
     ->setParam('to_date',$to_date)
     ->setParam('persons',$persons);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
