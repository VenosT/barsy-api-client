<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Accounts
 */
class Accounts{

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
   * Клониране на съществуваща сметка в нова
   * @param int $account_id null ID на желаната сметка
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на новата сметка
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Accounts
   */
  public function clone($account_id, string $response_type = null){

    $bact = BarsyApiAction::create('Accounts_clone')
     ->setParam('account_id',$account_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Приключване на сметка
   * @param int $account_id null ID на сметка
   * @param string $client_code null Клиентски код
   * @param bool $print_shipment false Печат на информация за доставка
   * @param array $payments [] Плащания
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return void 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Accounts
   */
  public function close($account_id, $client_code = null, $print_shipment = false, $payments = [], string $response_type = null){

    $bact = BarsyApiAction::create('Accounts_close')
     ->setParam('account_id',$account_id)
     ->setParam('client_code',$client_code)
     ->setParam('print_shipment',$print_shipment)
     ->setParam('payments',$payments);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Създаване на сметка от клиентска заявка
   * @param int $client_order_id null ID на клиентска заявка
   * @param \Barsy\Data\Accounts\AccountInputData $account_props null Опции на сметката, която ще се създава
   * @param bool $flag_close_account false Дали сметката директно да се затваря
   * @param \Barsy\Data\Payments\PaymentSaveData[] $payments null Списък с плащанията към сметката (приемат се само ако сметката се затваря)
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на създадена сметка
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Accounts
   */
  public function createfromclientorder($client_order_id, $account_props, $flag_close_account = false, $payments = null, string $response_type = null){

    $bact = BarsyApiAction::create('Accounts_createfromclientorder')
     ->setParam('client_order_id',$client_order_id)
     ->setParam('account_props',$account_props)
     ->setParam('flag_close_account',$flag_close_account)
     ->setParam('payments',$payments);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Създаване на нова сметка и поръчване по нея
   * @param \Barsy\Data\Accounts\AccountInputData $account null Обект със свойства, описващи основните данни на сметката
   * @param \Barsy\Data\Orders\OrderMakeData[] $rows [] Масив от обекти, описващи артикулите в поръчката  -
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int Id на създадената сметка
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Accounts
   */
  public function create($account, $rows = [], string $response_type = null){

    $bact = BarsyApiAction::create('Accounts_create')
     ->setParam('account',$account)
     ->setParam('rows',$rows);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Разделяне на сметката - създава нова и прехвърля желаните артикули в нея, като ги изважда от старата
   * @param int $old_account_id null ID на сметката за разделяне
   * @param \Barsy\Data\Orders\OrderMakeData[] $orders null списък на желаните артикули с техните количества
   * @param int $persons null Колко посетители да бъдат прехвърлени към новата сметка
   * @param int $client_id 1 ID на клиент за новата сметка. Ако не е подаден, ще бъде сложен Анонимен
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на новата сметка
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Accounts
   */
  public function divide($old_account_id, $orders, $persons = null, $client_id = 1, string $response_type = null){

    $bact = BarsyApiAction::create('Accounts_divide')
     ->setParam('old_account_id',$old_account_id)
     ->setParam('orders',$orders)
     ->setParam('persons',$persons)
     ->setParam('client_id',$client_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Получаване на данни за сметка по ID. Данните са групирани по данъчна група
   * @param int $account_id null ID на сметка @test_value 123
   * @param array $extra_properties null Допълнителни данни към сметката []
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\Accounts\AccountData[] данни за сметката
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Accounts
   */
  public function getbytaxes($account_id, $extra_properties = null, string $response_type = null){

    $bact = BarsyApiAction::create('Accounts_getbytaxes')
     ->setParam('account_id',$account_id)
     ->setParam('extra_properties',$extra_properties);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Списък със сметки
   * @param \Barsy\Data\Accounts\AccountsListFiltersData $filters [] Налични филтри за списъка със сметки
   * @param \Barsy\Data\Accounts\AccountsListExtraPropertiesData $extra_properties [] Искане на допълнителни данни за всяка сметка. Може да се подадат няколко елемента
   * @param int $offset 0 Номер на ред от който да бъде започнат списъка. Използва се при странициране, когато трябва да се прескочат Х записа
   * @param int $length 1000 Брой върнати редове в една заявка
   * @param string $order_by null Пореждане на резултатите - посочва се име на елемент на сметка (например ref_date)
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\Accounts\AccountData[] Списък от сметки с данни за тях според исканите ($extra_properties)
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Accounts
   */
  public function getlist($filters = [], $extra_properties = [], $offset = 0, $length = 1000, $order_by = null, string $response_type = null){

    $bact = BarsyApiAction::create('Accounts_getlist')
     ->setParam('filters',$filters)
     ->setParam('extra_properties',$extra_properties)
     ->setParam('offset',$offset)
     ->setParam('length',$length)
     ->setParam('order_by',$order_by);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Получаване на данни за сметка по ID
   * @param int $account_id null ID на сметка @test_value 123
   * @param array $extra_properties null Допълнителни данни към сметката
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\Accounts\AccountData данни за сметката
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Accounts
   */
  public function get($account_id, $extra_properties = null, string $response_type = null){

    $bact = BarsyApiAction::create('Accounts_get')
     ->setParam('account_id',$account_id)
     ->setParam('extra_properties',$extra_properties);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Сливане на сметки в обща сметка по клиент - всички артикули ще бъдат прехвърлени в най-старата сметка, останалите ще бъдат закрити празни
   * @param int $client_id null ID на клиент
   * @param array $accounts null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int номер на общата сметка
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Accounts
   */
  public function mergebyclientid($client_id, $accounts = null, string $response_type = null){

    $bact = BarsyApiAction::create('Accounts_mergebyclientid')
     ->setParam('client_id',$client_id)
     ->setParam('accounts',$accounts);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Сливане на сметки в обща сметка по номер на място - всички артикули ще бъдат прехвърлени в най-старата сметка, останалите ще бъдат закрити празни
   * @param int $place_id null ID на място
   * @param array $accounts null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на общата сметка
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Accounts
   */
  public function mergebyplaceid($place_id, $accounts = null, string $response_type = null){

    $bact = BarsyApiAction::create('Accounts_mergebyplaceid')
     ->setParam('place_id',$place_id)
     ->setParam('accounts',$accounts);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Сливане на сметки в обща сметка
   * @param array $accounts [] Списък от ID-та на сметка за сливане
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на общата сметка
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Accounts
   */
  public function merge($accounts = [], string $response_type = null){

    $bact = BarsyApiAction::create('Accounts_merge')
     ->setParam('accounts',$accounts);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Прехвърляне на сметка на друг потребител и
   * @param int $account_id null ID на желаната сметка
   * @param int $place_id null ID на желаната ново място
   * @param int $user_id null ID на желан нов обслужващ потребител ("притежател" на сметката). Ако липсва право "директно прехвърляне", новия потребител първо трявба да я приеме
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int Няма
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Accounts
   */
  public function move($account_id, $place_id, $user_id, string $response_type = null){

    $bact = BarsyApiAction::create('Accounts_move')
     ->setParam('account_id',$account_id)
     ->setParam('place_id',$place_id)
     ->setParam('user_id',$user_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Създаване на нова сметка, поръчване на артикули по нея и опционално затваряне. Връща номер на сметката
   * @param int $account_id null ID на сметката. Ако бъде пропуснато - ще бъде създадена нова сметка
   * @param \Barsy\Data\Accounts\AccountInputData $account null Обект със свойства, описващи основните данни на сметката
   * @param \Barsy\Data\Orders\OrderMakeData[] $orders null Масив от обекти, описващи артикулите в поръчката  -
   * @param bool $print_receipt false Локален печат на бележка за поръчката
   * @param int $reason_id -1 ID на причина за поръчката (необходимо при откази)
   * @param int $flag_close_account 0 Флаг дали сметката да бъде приключена или оставена отворена
   * @param string $client_code null Код на клиентска карта
   * @param \Barsy\Data\Invoices\InvoiceMakeData $invoice_data null Данни за създаване на фактура към сметката
   * @param bool $print_shipment false Флаг за отпечатване на адреса за доствка в бележката
   * @param \Barsy\Data\Payments\PaymentSaveData[] $payments null Списък с данни за плащанията към тази сметка
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int номер на сметката
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Accounts
   */
  public function place($account_id, $account, $orders, $print_receipt = false, $reason_id = -1, $flag_close_account = 0, $client_code = null, $invoice_data = null, $print_shipment = false, $payments = null, string $response_type = null){

    $bact = BarsyApiAction::create('Accounts_place')
     ->setParam('account_id',$account_id)
     ->setParam('account',$account)
     ->setParam('orders',$orders)
     ->setParam('print_receipt',$print_receipt)
     ->setParam('reason_id',$reason_id)
     ->setParam('flag_close_account',$flag_close_account)
     ->setParam('client_code',$client_code)
     ->setParam('invoice_data',$invoice_data)
     ->setParam('print_shipment',$print_shipment)
     ->setParam('payments',$payments);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Създаване на нова сметка, поръчване на артикули по нея и опционално затваряне. Връща номер на сметката
   * @param int $account_id null ID на сметката. Ако бъде пропуснато - ще бъде създадена нова сметка
   * @param \Barsy\Data\Orders\OrderMakeData[] $orders null Масив от обекти, описващи артикулите в поръчката  -
   * @param null $place_code null 
   * @param array $account [] 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int номер на сметката
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Accounts
   */
  public function place_public($account_id, $orders, $place_code = null, $account = [], string $response_type = null){

    $bact = BarsyApiAction::create('Accounts_place_public')
     ->setParam('account_id',$account_id)
     ->setParam('orders',$orders)
     ->setParam('place_code',$place_code)
     ->setParam('account',$account);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Запис на сметка
   * @param  $id null 
   * @param  $values null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return  
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Accounts
   */
  public function save_notes($id, $values, string $response_type = null){

    $bact = BarsyApiAction::create('Accounts_save_notes')
     ->setParam('id',$id)
     ->setParam('values',$values);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Запис на сметка
   * @param int $id null 
   * @param object $values null 
   * @param  $rows null 
   * @param string $action_type 'save' 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Accounts
   */
  public function save($id, $values, $rows, $action_type = 'save', string $response_type = null){

    $bact = BarsyApiAction::create('Accounts_save')
     ->setParam('id',$id)
     ->setParam('values',$values)
     ->setParam('rows',$rows)
     ->setParam('action_type',$action_type);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Създава сторно сметка
   * @param int $account_id null Номер на сметката от която ще се сторнира
   * @param array $article_ids [] Списък от артикул ID-та, които да бъдат сторнирани. Ако не се подаде, всички артикули се сторнират.
   * @param array $payments [] Списък от плащания, които да бъдат възстановени на клиента след сторнирането. Ако не се подаде, счита се че всичко е върнато.
   * @param \Barsy\Data\Accounts\InputStornoData $storno_data null Данни за сторно бележката
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int Номер на сторниращата сметка
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Accounts
   */
  public function storno($account_id, $article_ids = [], $payments = [], $storno_data = null, string $response_type = null){

    $bact = BarsyApiAction::create('Accounts_storno')
     ->setParam('account_id',$account_id)
     ->setParam('article_ids',$article_ids)
     ->setParam('payments',$payments)
     ->setParam('storno_data',$storno_data);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
