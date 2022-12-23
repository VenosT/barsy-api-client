<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Pricelists
 */
class Pricelists{

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
   * Изтриване на ценовото правило
   * @param int $id null ID на желаното ценово правило
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Pricelists
   */
  public function delete($id, string $response_type = null){

    $bact = BarsyApiAction::create('Pricelists_delete')
     ->setParam('id',$id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Редактиране на ценово правило - основни данни
   * @param string $action_type 'content' Тип на заявка
   * @param int $id null ID на обекта, който се обработва
   * @param eStructElements $values null Стойности за запис (при $action_type=save)
   * @param int $active_struct_id null ID на активната структура
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return mixed 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Pricelists
   */
  public function edit($action_type = 'content', $id = null, $values = null, $active_struct_id = null, string $response_type = null){

    $bact = BarsyApiAction::create('Pricelists_edit')
     ->setParam('action_type',$action_type)
     ->setParam('id',$id)
     ->setParam('values',$values)
     ->setParam('active_struct_id',$active_struct_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Взимане на статуса на избраното ценово праволо
   * @param  $pricelist_id null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\Pricelists\PricelistStatusData Информация за статуса на ценовото правило
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Pricelists
   */
  public function get_status($pricelist_id, string $response_type = null){

    $bact = BarsyApiAction::create('Pricelists_get_status')
     ->setParam('pricelist_id',$pricelist_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Списък с ценовите правила
   * @param string $action_type 'content' Тип на заявка
   * @param eStructFilters[] $filters [] масив от налични филтри за този списък. Всички са опционални
   * @param int $page_num 1 Номер на желана страница
   * @param int $rows 50 Брой реда на страница
   * @param string $order_by null Сортиране по (името на колоната като елемент)
   * @param string $order_dir 'asc' Посока на сортиране (възходящо/низходящо)
   * @param int $active_struct_id null ID на активната структура #ignore
   * @param array $columns null Списък от колоните, които да бъдат включени в отговора (ако е празен, показва избрани по подразбиране)
   * @param string $search null Бързо филтриране по главните колони #ignore
   * @param int $image_col_size null #ignore
   * @param object $params null #ignore
   * @param null $values null #ignore
   * @param int $copies 1 #ignore
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Lib\eStruct\Data\eStructListResultData Обект с данни за резултатите
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Pricelists
   */
  public function index($action_type = 'content', $filters = [], $page_num = 1, $rows = 50, $order_by = null, $order_dir = 'asc', $active_struct_id = null, $columns = null, $search = null, $image_col_size = null, $params = null, $values = null, $copies = 1, string $response_type = null){

    $bact = BarsyApiAction::create('Pricelists_index')
     ->setParam('action_type',$action_type)
     ->setParam('filters',$filters)
     ->setParam('page_num',$page_num)
     ->setParam('rows',$rows)
     ->setParam('order_by',$order_by)
     ->setParam('order_dir',$order_dir)
     ->setParam('active_struct_id',$active_struct_id)
     ->setParam('columns',$columns)
     ->setParam('search',$search)
     ->setParam('image_col_size',$image_col_size)
     ->setParam('params',$params)
     ->setParam('values',$values)
     ->setParam('copies',$copies);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Презаписване на ценови правила
   * @param int $pricelist_id null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Pricelists
   */
  public function presave($pricelist_id = null, string $response_type = null){

    $bact = BarsyApiAction::create('Pricelists_presave')
     ->setParam('pricelist_id',$pricelist_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Записване на темплейти за имена на артикули, за които да важи това ценово правило
   * @param int $id null ID на ценово правило
   * @param \Barsy\Data\Pricelists\PricelistArticleTemplateData[] $rows null Списък с темплейти за имената на артикули
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 1
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Pricelists
   */
  public function save_article_patterns($id, $rows, string $response_type = null){

    $bact = BarsyApiAction::create('Pricelists_save_article_patterns')
     ->setParam('id',$id)
     ->setParam('rows',$rows);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Записване на артикули към текущо ценово правило
   * @param int $id null ID на ценовото правило
   * @param \Barsy\Data\Pricelists\PricelistArticleData[] $rows null Списък с ID-та на артикули
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 1
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Pricelists
   */
  public function save_articles($id, $rows, string $response_type = null){

    $bact = BarsyApiAction::create('Pricelists_save_articles')
     ->setParam('id',$id)
     ->setParam('rows',$rows);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Записване на касите и търговските обекти, за които да важи текущото ценово првило
   * @param int $id null ID на текущото ценово правило
   * @param  $values null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 1
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Pricelists
   */
  public function save_barsys_poses($id, $values, string $response_type = null){

    $bact = BarsyApiAction::create('Pricelists_save_barsys_poses')
     ->setParam('id',$id)
     ->setParam('values',$values);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Записване на категории, за които да важи това ценово правило
   * @param  $pricelist_id null 
   * @param  $cats null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 1
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Pricelists
   */
  public function save_cats($pricelist_id, $cats, string $response_type = null){

    $bact = BarsyApiAction::create('Pricelists_save_cats')
     ->setParam('pricelist_id',$pricelist_id)
     ->setParam('cats',$cats);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Записване на клиентски групи, за които да важи това ценово правило
   * @param int $id null ID на ценово правило
   * @param \Barsy\Data\Pricelists\PricelistClientGroupData[] $rows null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 1
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Pricelists
   */
  public function save_client_groups($id, $rows, string $response_type = null){

    $bact = BarsyApiAction::create('Pricelists_save_client_groups')
     ->setParam('id',$id)
     ->setParam('rows',$rows);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Записване на клиенти, за които да важи това ценово правило
   * @param int $id null ID на ценово правило
   * @param \Barsy\Data\Pricelists\PricelistClientData[] $rows null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 1
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Pricelists
   */
  public function save_clients($id, $rows, string $response_type = null){

    $bact = BarsyApiAction::create('Pricelists_save_clients')
     ->setParam('id',$id)
     ->setParam('rows',$rows);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Записване на клиентски групи, за които да важи това ценово правило
   * @param int $id null ID на ценово правило
   * @param int[] $rows null Списък от ID на държави
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 1
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Pricelists
   */
  public function save_countries($id, $rows, string $response_type = null){

    $bact = BarsyApiAction::create('Pricelists_save_countries')
     ->setParam('id',$id)
     ->setParam('rows',$rows);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Записване на клиентски групи, за които да важи това ценово правило
   * @param int $id null ID на ценово правило
   * @param \Barsy\Data\Pricelists\PricelistSubscriptionData[] $rows null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 1
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Pricelists
   */
  public function save_subscriptions($id, $rows, string $response_type = null){

    $bact = BarsyApiAction::create('Pricelists_save_subscriptions')
     ->setParam('id',$id)
     ->setParam('rows',$rows);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Записване на клиентски групи, за които да важи това ценово правило
   * @param int $id null ID на ценово правило
   * @param \Barsy\Data\Pricelists\PricelistClientData[] $rows null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 1
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Pricelists
   */
  public function save_tax_regions($id, $rows, string $response_type = null){

    $bact = BarsyApiAction::create('Pricelists_save_tax_regions')
     ->setParam('id',$id)
     ->setParam('rows',$rows);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Задаване на статус на ценовото правило
   * @param int $pricelist_id null 
   * @param int $status null ID на желан сатус (1=активиране,0=деактивиране)
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\Pricelists\PricelistStatusData Информация за статуса на ценотовото правило
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Pricelists
   */
  public function set_status($pricelist_id, $status, string $response_type = null){

    $bact = BarsyApiAction::create('Pricelists_set_status')
     ->setParam('pricelist_id',$pricelist_id)
     ->setParam('status',$status);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
