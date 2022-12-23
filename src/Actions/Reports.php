<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Reports
 */
class Reports{

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
   * Складови движения
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
   * @see Reports
   */
  public function lot_list_details($action_type = 'content', $filters = [], $page_num = 1, $rows = 50, $order_by = null, $order_dir = 'asc', $active_struct_id = null, $columns = null, $search = null, $image_col_size = null, $params = null, $values = null, $copies = 1, string $response_type = null){

    $bact = BarsyApiAction::create('Reports_lot_list_details')
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
   * Списък на извършените продажби, представени по сметки
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
   * @see Reports
   */
  public function sales_by_accounts($action_type = 'content', $filters = [], $page_num = 1, $rows = 50, $order_by = null, $order_dir = 'asc', $active_struct_id = null, $columns = null, $search = null, $image_col_size = null, $params = null, $values = null, $copies = 1, string $response_type = null){

    $bact = BarsyApiAction::create('Reports_sales_by_accounts')
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
   * Продажби по артикули
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
   * @see Reports
   */
  public function sales_by_articles($action_type = 'content', $filters = [], $page_num = 1, $rows = 50, $order_by = null, $order_dir = 'asc', $active_struct_id = null, $columns = null, $search = null, $image_col_size = null, $params = null, $values = null, $copies = 1, string $response_type = null){

    $bact = BarsyApiAction::create('Reports_sales_by_articles')
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
   * списък на извършените продажби, разбити по поръчки 
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
   * @see Reports
   */
  public function sales_by_orders_details($action_type = 'content', $filters = [], $page_num = 1, $rows = 50, $order_by = null, $order_dir = 'asc', $active_struct_id = null, $columns = null, $search = null, $image_col_size = null, $params = null, $values = null, $copies = 1, string $response_type = null){

    $bact = BarsyApiAction::create('Reports_sales_by_orders_details')
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
   * Справка за извършените продажби, разбити по поръчки 
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
   * @see Reports
   */
  public function sales_by_orders($action_type = 'content', $filters = [], $page_num = 1, $rows = 50, $order_by = null, $order_dir = 'asc', $active_struct_id = null, $columns = null, $search = null, $image_col_size = null, $params = null, $values = null, $copies = 1, string $response_type = null){

    $bact = BarsyApiAction::create('Reports_sales_by_orders')
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
   * Продажби по поръчки подробно
   * @param string $action_type 'content' Тип на заявка
   * @param int $active_struct_id null ID на активната структура
   * @param int $id null ID на обекта, който се обработва
   * @param array $filters [] масив от филтри
   * @param int $page_num 1 
   * @param int $rows 50 
   * @param string $order_by null 
   * @param string $order_dir null 
   * @param bool $columns null 
   * @param bool $values null Масив от стойности на обекта (при запис)
   * @param bool $search null 
   * @param bool $params null 
   * @param bool $extra_elements null 
   * @param bool $image_col_size null 
   * @param  $template_id null 
   * @param  $copies 1 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return mixed 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Reports
   */
  public function sales_by_tax_groups($action_type = 'content', $active_struct_id = null, $id = null, $filters = [], $page_num = 1, $rows = 50, $order_by = null, $order_dir = null, $columns = null, $values = null, $search = null, $params = null, $extra_elements = null, $image_col_size = null, $template_id = null, $copies = 1, string $response_type = null){

    $bact = BarsyApiAction::create('Reports_sales_by_tax_groups')
     ->setParam('action_type',$action_type)
     ->setParam('active_struct_id',$active_struct_id)
     ->setParam('id',$id)
     ->setParam('filters',$filters)
     ->setParam('page_num',$page_num)
     ->setParam('rows',$rows)
     ->setParam('order_by',$order_by)
     ->setParam('order_dir',$order_dir)
     ->setParam('columns',$columns)
     ->setParam('values',$values)
     ->setParam('search',$search)
     ->setParam('params',$params)
     ->setParam('extra_elements',$extra_elements)
     ->setParam('image_col_size',$image_col_size)
     ->setParam('template_id',$template_id)
     ->setParam('copies',$copies);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Складови наличности към дата по Търговски обект
   * @param string $action_type 'content' Тип на заявка
   * @param int $active_struct_id null ID на активната структура
   * @param int $id null ID на обекта, който се обработва
   * @param array $filters [] масив от филтри
   * @param int $page_num 1 
   * @param int $rows 50 
   * @param string $order_by null 
   * @param string $order_dir null 
   * @param bool $columns null 
   * @param bool $values null Масив от стойности на обекта (при запис)
   * @param bool $search null 
   * @param bool $params null 
   * @param bool $extra_elements null 
   * @param bool $image_col_size null 
   * @param  $template_id null 
   * @param  $copies 1 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return mixed 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Reports
   */
  public function store_amounts_by_barsys_and_depots($action_type = 'content', $active_struct_id = null, $id = null, $filters = [], $page_num = 1, $rows = 50, $order_by = null, $order_dir = null, $columns = null, $values = null, $search = null, $params = null, $extra_elements = null, $image_col_size = null, $template_id = null, $copies = 1, string $response_type = null){

    $bact = BarsyApiAction::create('Reports_store_amounts_by_barsys_and_depots')
     ->setParam('action_type',$action_type)
     ->setParam('active_struct_id',$active_struct_id)
     ->setParam('id',$id)
     ->setParam('filters',$filters)
     ->setParam('page_num',$page_num)
     ->setParam('rows',$rows)
     ->setParam('order_by',$order_by)
     ->setParam('order_dir',$order_dir)
     ->setParam('columns',$columns)
     ->setParam('values',$values)
     ->setParam('search',$search)
     ->setParam('params',$params)
     ->setParam('extra_elements',$extra_elements)
     ->setParam('image_col_size',$image_col_size)
     ->setParam('template_id',$template_id)
     ->setParam('copies',$copies);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Складови наличности към дата по Търговски обект
   * @param string $action_type 'content' Тип на заявка
   * @param int $active_struct_id null ID на активната структура
   * @param int $id null ID на обекта, който се обработва
   * @param array $filters [] масив от филтри
   * @param int $page_num 1 
   * @param int $rows 50 
   * @param string $order_by null 
   * @param string $order_dir null 
   * @param bool $columns null 
   * @param bool $values null Масив от стойности на обекта (при запис)
   * @param bool $search null 
   * @param bool $params null 
   * @param bool $extra_elements null 
   * @param bool $image_col_size null 
   * @param  $template_id null 
   * @param  $copies 1 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return mixed 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Reports
   */
  public function store_amounts_by_date_and_barsys($action_type = 'content', $active_struct_id = null, $id = null, $filters = [], $page_num = 1, $rows = 50, $order_by = null, $order_dir = null, $columns = null, $values = null, $search = null, $params = null, $extra_elements = null, $image_col_size = null, $template_id = null, $copies = 1, string $response_type = null){

    $bact = BarsyApiAction::create('Reports_store_amounts_by_date_and_barsys')
     ->setParam('action_type',$action_type)
     ->setParam('active_struct_id',$active_struct_id)
     ->setParam('id',$id)
     ->setParam('filters',$filters)
     ->setParam('page_num',$page_num)
     ->setParam('rows',$rows)
     ->setParam('order_by',$order_by)
     ->setParam('order_dir',$order_dir)
     ->setParam('columns',$columns)
     ->setParam('values',$values)
     ->setParam('search',$search)
     ->setParam('params',$params)
     ->setParam('extra_elements',$extra_elements)
     ->setParam('image_col_size',$image_col_size)
     ->setParam('template_id',$template_id)
     ->setParam('copies',$copies);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Складови движения
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
   * @see Reports
   */
  public function store_list_details($action_type = 'content', $filters = [], $page_num = 1, $rows = 50, $order_by = null, $order_dir = 'asc', $active_struct_id = null, $columns = null, $search = null, $image_col_size = null, $params = null, $values = null, $copies = 1, string $response_type = null){

    $bact = BarsyApiAction::create('Reports_store_list_details')
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
   * Складови зареждания - подробно
   * @param string $action_type 'content' Тип на заявка
   * @param int $active_struct_id null ID на активната структура
   * @param int $id null ID на обекта, който се обработва
   * @param array $filters [] масив от филтри
   * @param int $page_num 1 
   * @param int $rows 50 
   * @param string $order_by null 
   * @param string $order_dir null 
   * @param bool $columns null 
   * @param bool $values null Масив от стойности на обекта (при запис)
   * @param bool $search null 
   * @param bool $params null 
   * @param bool $extra_elements null 
   * @param bool $image_col_size null 
   * @param  $template_id null 
   * @param  $copies 1 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return mixed 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Reports
   */
  public function storeloads_details($action_type = 'content', $active_struct_id = null, $id = null, $filters = [], $page_num = 1, $rows = 50, $order_by = null, $order_dir = null, $columns = null, $values = null, $search = null, $params = null, $extra_elements = null, $image_col_size = null, $template_id = null, $copies = 1, string $response_type = null){

    $bact = BarsyApiAction::create('Reports_storeloads_details')
     ->setParam('action_type',$action_type)
     ->setParam('active_struct_id',$active_struct_id)
     ->setParam('id',$id)
     ->setParam('filters',$filters)
     ->setParam('page_num',$page_num)
     ->setParam('rows',$rows)
     ->setParam('order_by',$order_by)
     ->setParam('order_dir',$order_dir)
     ->setParam('columns',$columns)
     ->setParam('values',$values)
     ->setParam('search',$search)
     ->setParam('params',$params)
     ->setParam('extra_elements',$extra_elements)
     ->setParam('image_col_size',$image_col_size)
     ->setParam('template_id',$template_id)
     ->setParam('copies',$copies);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
