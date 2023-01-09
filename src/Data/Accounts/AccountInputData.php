<?php

namespace VenosT\Barsy\Data\Accounts;

/**
 * 
 *  */
class AccountInputData{

/**
 * ID на клиента по barsy - ако няма, търси се дали има обект client (виж по-надолу), ако го няма - записва се към Анонимен (ID:1)
 * @var integer
 */
  public $client_id;

/**
 * Данни за клиента (ако е нов или трябва да бъде разпознат)
 * @var \VenosT\Barsy\Data\Clients\ClientData
 */
  public $client;

/**
 * Данни за представителя (ако е нов или трябва да бъде разпознат)
 * @var object
 */
  public $person;

/**
 * ID на място/маса/стая/...
 * @var int
 */
  public $place_id;

/**
 * ID на представител
 * @var int
 */
  public $person_id;

/**
 * Отстъпка върху цялата сметка
 * @var float
 */
  public $discount;

/**
 * Дата на документално извършване на сделката
 * @var string
 */
  public $ref_date;

/**
 * Брой хора към тази сметка
 * @var int
 */
  public $persons;

/**
 * Адрес за доставка
 * @var \VenosT\Barsy\Data\DeliveryAddress\DeliveryAddressData
 */
  public $delivery_address;

/**
 * Телефон
 * @var string
 */
  public $phone;

/**
 * Заглавие на сметката
 * @var string
 */
  public $account_alias;

/**
 * Свободен текст. Може да съдържа някакви допълнително описание към цялата сметка - печати се на бележката
 * @var string
 */
  public $description;

/**
 * Свободен текст. Може да съдържа някакви допълнително описание към цялата сметка - НЕ се печати на бележката
 * @var string
 */
  public $notes;

/**
 * Номер на товарителница
 * @var string
 */
  public $tracking_number;

/**
 * ID на спедитор
 * @var int
 */
  public $speditor_id;

/**
 * ID на зона за доставка
 * @var int
 */
  public $delivery_zone_id;

/**
 * Отложено плащане до
 * @var string
 */
  public $paid_due_date;

/**
 * Данни за сторнираната сметка
 * @var InputStornoData
 */
  public $storno_data;

/**
 * ID на сделка по barsy
 * @var integer
 */
  public $deal_id;

}
