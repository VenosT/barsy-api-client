<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Clientorders
 */
class Clientorders{

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
   * Създаване на клиентска заявка с всичките й данни
   * @param\VenosT\Barsy\Data\ClientOrders\ClientOrderInputData $order null 
   * @param\VenosT\Barsy\Data\ClientOrders\ClientOrderInputRowData[] $rows null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на направената поръчка
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Clientorders
   */
  public function create($order, $rows, string $response_type = null){

    $bact = BarsyApiAction::create('Clientorders_create')
     ->setParam('order',$order)
     ->setParam('rows',$rows);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Информация за артикулите в клиентска заявка
   * @param int $client_order_id null ID на заявки
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\ClientOrders\ClientOrderRowData[] Списък с артикули в заявката
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Clientorders
   */
  public function getdetails($client_order_id, string $response_type = null){

    $bact = BarsyApiAction::create('Clientorders_getdetails')
     ->setParam('client_order_id',$client_order_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща списък на клиентски заявки по подадени критерии
   * @param\VenosT\Barsy\Data\ClientOrders\ClientOrdersListFiltersData $filters null Филтриране на поръчки
   * @param array $extra_properties [] Допълнителни данни за поръчки
   * @param int $offset 0 начало на списъка
   * @param int $length 10000 дължина на списъка
   * @param string $order_by null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\ClientOrders\ClientOrderData[] 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Clientorders
   */
  public function getlist($filters, $extra_properties = [], $offset = 0, $length = 10000, $order_by = null, string $response_type = null){

    $bact = BarsyApiAction::create('Clientorders_getlist')
     ->setParam('filters',$filters)
     ->setParam('extra_properties',$extra_properties)
     ->setParam('offset',$offset)
     ->setParam('length',$length)
     ->setParam('order_by',$order_by);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Информация за конкретна клиентска заявка
   * @param int $client_order_id null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\ClientOrders\ClientOrderData 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Clientorders
   */
  public function get($client_order_id, string $response_type = null){

    $bact = BarsyApiAction::create('Clientorders_get')
     ->setParam('client_order_id',$client_order_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Изтегляне на списък с наличните статуси на клиентски заявки
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\ClientOrders\ClientOrderStatus[] 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Clientorders
   */
  public function getstatuslistdata(string $response_type = null){

    $bact = BarsyApiAction::create('Clientorders_getstatuslistdata');

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Смяна на статус на клиентска заявка
   * @param  $client_order_id null 
   * @param  $status_id null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return mixed 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Clientorders
   */
  public function setstatus($client_order_id, $status_id, string $response_type = null){

    $bact = BarsyApiAction::create('Clientorders_setstatus')
     ->setParam('client_order_id',$client_order_id)
     ->setParam('status_id',$status_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Актуализиране на клиентска заявка с всичките й данни
   * @param int $client_order_id null Id на клиентската заявка, която трябва да бъде редактирана
   * @param\VenosT\Barsy\Data\ClientOrders\ClientOrderInputData $order null 
   * @param\VenosT\Barsy\Data\ClientOrders\ClientOrderInputRowData[] $rows null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на направената поръчка
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Clientorders
   */
  public function update($client_order_id, $order, $rows = null, string $response_type = null){

    $bact = BarsyApiAction::create('Clientorders_update')
     ->setParam('client_order_id',$client_order_id)
     ->setParam('order',$order)
     ->setParam('rows',$rows);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
