<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Users
 */
class Users{

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
   * Създаване на нов потребител на системата
   * @param \VenosT\Barsy\Data\Users\UserInputData $user null Данни за потребителя
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на създадения потребител
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Users
   */
  public function create($user, string $response_type = null){

    $bact = BarsyApiAction::create('Users_create')
     ->setParam('user',$user);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Изтегляне на данни за потребител на системата
   * @param string $user_name null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\Users\UserData
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Users
   */
  public function getbyusername($user_name, string $response_type = null){

    $bact = BarsyApiAction::create('Users_getbyusername')
     ->setParam('user_name',$user_name);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща данни за текущия потребител
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\Users\UserCurrentData
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Users
   */
  public function getcurrent(string $response_type = null){

    $bact = BarsyApiAction::create('Users_getcurrent');

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Списък потребители на системата
   * @param array $filters [] 
   * @param array $extra_properties [] 
   * @param int $offset 0 
   * @param int $length 10000 
   * @param string $order_by null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return array 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Users
   */
  public function getlist($filters = [], $extra_properties = [], $offset = 0, $length = 10000, $order_by = null, string $response_type = null){

    $bact = BarsyApiAction::create('Users_getlist')
     ->setParam('filters',$filters)
     ->setParam('extra_properties',$extra_properties)
     ->setParam('offset',$offset)
     ->setParam('length',$length)
     ->setParam('order_by',$order_by);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Изтегляне на данни за потребител на системата
   * @param  $user_id null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\Users\UserData
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Users
   */
  public function get($user_id, string $response_type = null){

    $bact = BarsyApiAction::create('Users_get')
     ->setParam('user_id',$user_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща най-използваните страници за текущия потребител
   * @param string $start_date null Начална дата
   * @param string $end_date null Крайна дата
   * @param int $count 5 Брой върнати записи
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return array 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Users
   */
  public function getrecentvisited($start_date = null, $end_date = null, $count = 5, string $response_type = null){

    $bact = BarsyApiAction::create('Users_getrecentvisited')
     ->setParam('start_date',$start_date)
     ->setParam('end_date',$end_date)
     ->setParam('count',$count);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Създаване
   * @param int $id null 
   * @param \VenosT\Barsy\Data\Users\UserInputData $values null
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на създадения/актуализирания потребител на системата
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Users
   */
  public function save($id, $values, string $response_type = null){

    $bact = BarsyApiAction::create('Users_save')
     ->setParam('id',$id)
     ->setParam('values',$values);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
