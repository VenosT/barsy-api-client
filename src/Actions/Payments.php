<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Payments
 */
class Payments{

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
   * Създаване на ново плащане
   * @param float $paid_sum null Платена сума @test_value 12.45
   * @param int $client_id null ID на клиент @test_value 23
   * @param int $paymethod_id null ID на начин на плащане @test_value 1
   * @param string $description null Свободен текст
   * @param string $ref_num null Референтен номер (свободен текст) @test_value N875
   * @param datetime $ref_date null Документална дата на събитието (Само ако се различава от текущата) @test_value 2015-01-30
   * @param array $accounts null Списък със сметки за свързване (само затворени сметки)
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на плащането
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Payments
   */
  public function create($paid_sum, $client_id, $paymethod_id, $description, $ref_num, $ref_date, $accounts = null, string $response_type = null){

    $bact = BarsyApiAction::create('Payments_create')
     ->setParam('paid_sum',$paid_sum)
     ->setParam('client_id',$client_id)
     ->setParam('paymethod_id',$paymethod_id)
     ->setParam('description',$description)
     ->setParam('ref_num',$ref_num)
     ->setParam('ref_date',$ref_date)
     ->setParam('accounts',$accounts);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Списък с направени плащания
   * @param \Barsy\Data\Payments\PaymentsListFiltersData $filters null Налични филтри за списъка
   * @param array $extra_properties [] 
   * @param int $offset 0 Начален запис
   * @param int $length 500 максимален брой върнати записи е един рекуест
   * @param string $order_by 'payment_id' Сортираране по
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return array Списък с направените плащания
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Payments
   */
  public function getlist($filters, $extra_properties = [], $offset = 0, $length = 500, $order_by = 'payment_id', string $response_type = null){

    $bact = BarsyApiAction::create('Payments_getlist')
     ->setParam('filters',$filters)
     ->setParam('extra_properties',$extra_properties)
     ->setParam('offset',$offset)
     ->setParam('length',$length)
     ->setParam('order_by',$order_by);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
