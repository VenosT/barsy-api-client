<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Clients
 */
class Clients{

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
   * Проверява дали дадения клиент може да се логне
   * @param string $client_auth null 
   * @param string $client_pass null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return Clients 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Clients
   */
  public function check_auth($client_auth, $client_pass, string $response_type = null){

    $bact = BarsyApiAction::create('Clients_check_auth')
     ->setParam('client_auth',$client_auth)
     ->setParam('client_pass',$client_pass);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Създава запис за клиентска активност
   * @param int $client_id null 
   * @param int $event_type null 
   * @param  $ref_date null 
   * @param int $description null 
   * @param int $status null 
   * @param  $event_signature null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на записа за активност
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Clients
   */
  public function createactivity($client_id, $event_type, $ref_date, $description, $status, $event_signature, string $response_type = null){

    $bact = BarsyApiAction::create('Clients_createactivity')
     ->setParam('client_id',$client_id)
     ->setParam('event_type',$event_type)
     ->setParam('ref_date',$ref_date)
     ->setParam('description',$description)
     ->setParam('status',$status)
     ->setParam('event_signature',$event_signature);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Създаване на нов клиент. Връща ID на клиента
   * @param \Barsy\Data\Clients\ClientSaveData $client null Данни за клиента. Записват се само подадените
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Clients
   */
  public function create($client, string $response_type = null){

    $bact = BarsyApiAction::create('Clients_create')
     ->setParam('client',$client);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща списък с клиентски групи
   * @param \Barsy\Data\Clients\ClientsGroupsListFiltersData $filters null Филтри
   * @param array $extra_properties [] допълнителни пропъртита
   * @param int $offset 0 
   * @param int $length 1000 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\ClientGroups\ClientGroupData[]
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Clients
   */
  public function getgroups($filters = null, $extra_properties = [], $offset = 0, $length = 1000, string $response_type = null){

    $bact = BarsyApiAction::create('Clients_getgroups')
     ->setParam('filters',$filters)
     ->setParam('extra_properties',$extra_properties)
     ->setParam('offset',$offset)
     ->setParam('length',$length);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща списък от клиенти по зададените критерии
   * @param \Barsy\Data\Clients\ClientsListFiltersData $filters null Филтриране на резултатите по зададени критерии
   * @param array $extra_properties [] 
   * @param int $offset 0 
   * @param int $length 1000 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\Clients\ClientData[]
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Clients
   */
  public function getlist($filters, $extra_properties = [], $offset = 0, $length = 1000, string $response_type = null){

    $bact = BarsyApiAction::create('Clients_getlist')
     ->setParam('filters',$filters)
     ->setParam('extra_properties',$extra_properties)
     ->setParam('offset',$offset)
     ->setParam('length',$length);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща списък от клиенти по зададените критерии
   * @param  $filters [] 
   * @param  $extra_properties [] 
   * @param  $offset 0 
   * @param  $length 50 
   * @param  $page 0 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return  
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Clients
   */
  public function getlistsmart($filters = [], $extra_properties = [], $offset = 0, $length = 50, $page = 0, string $response_type = null){

    $bact = BarsyApiAction::create('Clients_getlistsmart')
     ->setParam('filters',$filters)
     ->setParam('extra_properties',$extra_properties)
     ->setParam('offset',$offset)
     ->setParam('length',$length)
     ->setParam('page',$page);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща данните за клиент
   * @param int $client_id null 
   * @param int $delete_check 1 
   * @param array $extra_properties [] 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\Clients\ClientData
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Clients
   */
  public function get($client_id, $delete_check = 1, $extra_properties = [], string $response_type = null){

    $bact = BarsyApiAction::create('Clients_get')
     ->setParam('client_id',$client_id)
     ->setParam('delete_check',$delete_check)
     ->setParam('extra_properties',$extra_properties);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Актуализиране на данните на клиент
   * @param int $client_id null ID на клиента
   * @param \Barsy\Data\Clients\ClientSaveData $client null Нови данни за клиента. Ще бъдат актуализирани само подадените.
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на клиента
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Clients
   */
  public function update($client_id, $client, string $response_type = null){

    $bact = BarsyApiAction::create('Clients_update')
     ->setParam('client_id',$client_id)
     ->setParam('client',$client);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
