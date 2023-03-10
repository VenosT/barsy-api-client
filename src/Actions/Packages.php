<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Packages
 */
class Packages{

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
   * class Packages_edit
   * @param string $action_type 'content' Тип на заявка
   * @param int $id null ID на обекта, който се обработва
   * @param eStructElements $values null Стойности за запис (при $action_type=save)
   * @param int $active_struct_id null ID на активната структура
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return mixed 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Packages
   */
  public function edit($action_type = 'content', $id = null, $values = null, $active_struct_id = null, string $response_type = null){

    $bact = BarsyApiAction::create('Packages_edit')
     ->setParam('action_type',$action_type)
     ->setParam('id',$id)
     ->setParam('values',$values)
     ->setParam('active_struct_id',$active_struct_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * class Packages_index
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
   * @see Packages
   */
  public function index($action_type = 'content', $active_struct_id = null, $id = null, $filters = [], $page_num = 1, $rows = 50, $order_by = null, $order_dir = null, $columns = null, $values = null, $search = null, $params = null, $extra_elements = null, $image_col_size = null, $template_id = null, $copies = 1, string $response_type = null){

    $bact = BarsyApiAction::create('Packages_index')
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
