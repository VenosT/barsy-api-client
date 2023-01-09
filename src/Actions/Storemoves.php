<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Storemoves
 */
class Storemoves{

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
   * Метод за приключване на прехвърляния между два склада
   * @param int $id null ID на прехвърлянето. При null, създава ново
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на прехвърлянето
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Storemoves
   */
  public function close($id, string $response_type = null){

    $bact = BarsyApiAction::create('Storemoves_close')
     ->setParam('id',$id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Създаване на прехвърляне от клиентска заявка
   * @param int $client_order_id null 
   * @param\VenosT\Barsy\Data\StoreMoves\StoreMoveCreateData $storemove null Данни за прехвърлянето
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на създаденото прехвърляне
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Storemoves
   */
  public function createfromclientorder($client_order_id, $storemove, string $response_type = null){

    $bact = BarsyApiAction::create('Storemoves_createfromclientorder')
     ->setParam('client_order_id',$client_order_id)
     ->setParam('storemove',$storemove);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Метод за редактиране на прехвърляния между два склада
   * @param\VenosT\Barsy\Data\StoreMoves\StoreMoveCreateData $storemove null Обект, съдържаш информация за прехвърлянето
   * @param \\Barsy\Data\StoreMoves\StoreMoveCreateRowData[] $rows null Масив от обекти, съдържащи информация за артикулите
   * @param string $action_type 'save' 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на прехвърлянето
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Storemoves
   */
  public function create($storemove, $rows, $action_type = 'save', string $response_type = null){

    $bact = BarsyApiAction::create('Storemoves_create')
     ->setParam('storemove',$storemove)
     ->setParam('rows',$rows)
     ->setParam('action_type',$action_type);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * class Storemoves_getlist
   * @param\VenosT\Barsy\Data\StoreMoves\StoreMovesListFiltersData $filters null
   * @param array $extra_properties [] 
   * @param int $offset 0 
   * @param int $length 1000 
   * @param string $order_by null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return array 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Storemoves
   */
  public function getlist($filters, $extra_properties = [], $offset = 0, $length = 1000, $order_by = null, string $response_type = null){

    $bact = BarsyApiAction::create('Storemoves_getlist')
     ->setParam('filters',$filters)
     ->setParam('extra_properties',$extra_properties)
     ->setParam('offset',$offset)
     ->setParam('length',$length)
     ->setParam('order_by',$order_by);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Метод за създаване а прехвърляния между два склада
   * @param int $id null ID на прехвърлянето. При null, създава ново
   * @param\VenosT\Barsy\Data\StoreMoves\StoreMoveCreateData $storemove null Обект, съдържаш информация за прехвърлянето
   * @param \\Barsy\Data\StoreMoves\StoreMoveCreateRowData[] $rows null Масив от обекти, съдържащи информация за артикулите
   * @param string $action_type 'save' 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на прехвърлянето
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Storemoves
   */
  public function update($id, $storemove, $rows, $action_type = 'save', string $response_type = null){

    $bact = BarsyApiAction::create('Storemoves_update')
     ->setParam('id',$id)
     ->setParam('storemove',$storemove)
     ->setParam('rows',$rows)
     ->setParam('action_type',$action_type);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
