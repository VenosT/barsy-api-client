<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Invoices
 */
class Invoices{

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
   * Изтегляне на данни за дадена фактура. При смяна на тип "изход" може да се получи директно във вариант за печат 
   * @param int $inv_sid null ID на фактурата
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\Invoices\InvoiceData
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Invoices
   */
  public function get_by_sid($inv_sid, string $response_type = null){

    $bact = BarsyApiAction::create('Invoices_get_by_sid')
     ->setParam('inv_sid',$inv_sid);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Списък с издадени документи 
   * @param \VenosT\Barsy\Data\Invoices\InvoicesListFiltersData $filters null Налични филтри за списъка
   * @param array $extra_properties [] Списък на желаните допълнителни данни за всяка фактура
   * @param int $offset 0 
   * @param int $length 5000 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return array Списък с фактури
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Invoices
   */
  public function getlist($filters = null, $extra_properties = [], $offset = 0, $length = 5000, string $response_type = null){

    $bact = BarsyApiAction::create('Invoices_getlist')
     ->setParam('filters',$filters)
     ->setParam('extra_properties',$extra_properties)
     ->setParam('offset',$offset)
     ->setParam('length',$length);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Изтегляне на данни за дадена фактура. При смяна на тип "изход" може да се получи директно във вариант за печат 
   * @param int $inv_id null ID на фактурата
   * @param int $copy 0 
   * @param array $extra_elements null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\Invoices\InvoiceData
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Invoices
   */
  public function get($inv_id, $copy = 0, $extra_elements = null, string $response_type = null){

    $bact = BarsyApiAction::create('Invoices_get')
     ->setParam('inv_id',$inv_id)
     ->setParam('copy',$copy)
     ->setParam('extra_elements',$extra_elements);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща информация за списък от фактури
   * @param array $inv_ids null Списък от ID-та на фактури
   * @param Integer $copy 0 Казва дали ще покажем Оригинал(0), Копие(1) или Оригинал+Копие(-1), ползва се вътрешно
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return array Подробни данни за всяка фактура
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Invoices
   */
  public function gets($inv_ids, $copy = 0, string $response_type = null){

    $bact = BarsyApiAction::create('Invoices_gets')
     ->setParam('inv_ids',$inv_ids)
     ->setParam('copy',$copy);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
