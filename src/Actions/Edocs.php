<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Edocs
 */
class Edocs{

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
   * Изтегляне на документ от външни системи 
   * @param string $type null 
   * @param array $data null 
   * @param array $rows null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int Списък от данни за документ
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Edocs
   */
  public function create($type, $data, $rows, string $response_type = null){

    $bact = BarsyApiAction::create('Edocs_create')
     ->setParam('type',$type)
     ->setParam('data',$data)
     ->setParam('rows',$rows);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Изтегляне на документ в електронен вид по подаден SID
   * @param int $doc_sid null SID на документа
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\eDocs\eDocData Обект от данни за документ
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Edocs
   */
  public function get_by_sid($doc_sid, string $response_type = null){

    $bact = BarsyApiAction::create('Edocs_get_by_sid')
     ->setParam('doc_sid',$doc_sid);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Изтегляне на публичен каталог от външни системи
   * @param  $picture_content null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\Categories\CategoryFullTreeData Списък от данни за документ
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Edocs
   */
  public function get_catalog($picture_content, string $response_type = null){

    $bact = BarsyApiAction::create('Edocs_get_catalog')
     ->setParam('picture_content',$picture_content);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Взема списък от документи. Изисква клиентска ауторизация, тъй като е предназначен за използване от отдалечени системи
   * @param string $after_date null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\eDocs\eDocShortData[] Масив от данни за документи
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Edocs
   */
  public function getlist($after_date = null, string $response_type = null){

    $bact = BarsyApiAction::create('Edocs_getlist')
     ->setParam('after_date',$after_date);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Изтегляне на документ от външни системи 
   * @param int $doc_id null ID на документ
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\eDocs\eDocData Списък от данни за документ
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Edocs
   */
  public function get($doc_id, string $response_type = null){

    $bact = BarsyApiAction::create('Edocs_get')
     ->setParam('doc_id',$doc_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
