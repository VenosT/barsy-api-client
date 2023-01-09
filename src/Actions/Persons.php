<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Persons
 */
class Persons{

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
   * Връща информация за конкретна динамично поле на представител
   * @param int $person_id null ID на предтавител
   * @param int $value_id null ID на динамично поле
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return mixed 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Persons
   */
  public function getinfovalue($person_id, $value_id, string $response_type = null){

    $bact = BarsyApiAction::create('Persons_getinfovalue')
     ->setParam('person_id',$person_id)
     ->setParam('value_id',$value_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща списък с наличните представители
   * @param\VenosT\Barsy\Data\Persons\PersonsListFiltersData $filters []
   * @param array $extra_properties [] 
   * @param int $offset 0 
   * @param int $length 100 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return array 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Persons
   */
  public function getlist($filters = [], $extra_properties = [], $offset = 0, $length = 100, string $response_type = null){

    $bact = BarsyApiAction::create('Persons_getlist')
     ->setParam('filters',$filters)
     ->setParam('extra_properties',$extra_properties)
     ->setParam('offset',$offset)
     ->setParam('length',$length);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща всички налични информации за представител
   * @param int $person_id null ID на желания представител @test_value 123
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return object Обект с основните и динамичните данни за представителя
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Persons
   */
  public function get($person_id, string $response_type = null){

    $bact = BarsyApiAction::create('Persons_get')
     ->setParam('person_id',$person_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща списък с наличните полета за даден тип
   * @param  $type_id null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return array 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Persons
   */
  public function gettype($type_id, string $response_type = null){

    $bact = BarsyApiAction::create('Persons_gettype')
     ->setParam('type_id',$type_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
