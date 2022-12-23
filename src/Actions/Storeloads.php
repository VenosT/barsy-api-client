<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Storeloads
 */
class Storeloads{

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
   * Приключване на операция Зареждане
   * @param int $id null ID на зареждането
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Storeloads
   */
  public function close($id, string $response_type = null){

    $bact = BarsyApiAction::create('Storeloads_close')
     ->setParam('id',$id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Създаване на нова операция Зареждане от доставчик
   * @param \Barsy\Data\StoreLoads\StoreLoadInputData $store_load null Инфорамция за зареждането
   * @param \Barsy\Data\StoreLoads\StoreLoadInputRowData[] $articles null Информация за артикулите в зареждането
   * @param string $action_type 'save' 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на създаденото зареждане
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Storeloads
   */
  public function create($store_load, $articles, $action_type = 'save', string $response_type = null){

    $bact = BarsyApiAction::create('Storeloads_create')
     ->setParam('store_load',$store_load)
     ->setParam('articles',$articles)
     ->setParam('action_type',$action_type);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща списък с наличните типове документи за опреация зареждане от доставчик
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return mixed 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Storeloads
   */
  public function getdocumenttypes(string $response_type = null){

    $bact = BarsyApiAction::create('Storeloads_getdocumenttypes');

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Списък на складови зареждания
   * @param \Barsy\Data\StoreLoads\StoreLoadsListFiltersData $filters null 
   * @param array $extra_properties [] 
   * @param int $offset 0 
   * @param int $length 10000 
   * @param string $order_by null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\StoreLoads\StoreLoadData[] 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Storeloads
   */
  public function getlist($filters, $extra_properties = [], $offset = 0, $length = 10000, $order_by = null, string $response_type = null){

    $bact = BarsyApiAction::create('Storeloads_getlist')
     ->setParam('filters',$filters)
     ->setParam('extra_properties',$extra_properties)
     ->setParam('offset',$offset)
     ->setParam('length',$length)
     ->setParam('order_by',$order_by);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Редактиране на съществуваща операция Зареждане от доставчик
   * @param int $id null ID на зареждането, което ще се редактира
   * @param \Barsy\Data\StoreLoads\StoreLoadInputData $store_load null Инфорамция за зареждането
   * @param \Barsy\Data\StoreLoads\StoreLoadInputRowData[] $articles null Информация за артикулите в зареждането
   * @param string $action_type 'save' 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на създаденото зареждане
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Storeloads
   */
  public function update($id, $store_load, $articles, $action_type = 'save', string $response_type = null){

    $bact = BarsyApiAction::create('Storeloads_update')
     ->setParam('id',$id)
     ->setParam('store_load',$store_load)
     ->setParam('articles',$articles)
     ->setParam('action_type',$action_type);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
