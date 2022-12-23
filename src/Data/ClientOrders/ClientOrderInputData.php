<?php

namespace VenosT\Barsy\Data\ClientOrders;

/**
 * 
 *  */
class ClientOrderInputData{

/**
 * ID на клиентската заявка. Ако не се подаде, ще се вземе следващия пореден (препоръчително)
 * @var int
 */
  public $client_order_id;

/**
 * Външен номер на клиентска заявка (различен от служебния)
 * @var string
 */
  public $order_num;

/**
 * Данни за нов клиент - ще бъде създаден или преизползван (ако съществува според настройката за уникалност на клиентите)
 * @var \Barsy\Data\Clients\ClientData
 */
  public $client;

/**
 * Id на клиент по номенклатурата на barsy (ако не са подадени данни за клиента)
 * @var int
 */
  public $client_id;

/**
 * Лице за контакт/получаване - може да се различава от името на клиента
 * @var string
 */
  public $contact_name;

/**
 * email на получателя - може да се различава от името на клиента
 * @var string
 */
  public $client_email;

/**
 * телефон на получателя - може да се различава от името на клиента
 * @var string
 */
  public $client_tel;

/**
 * Отстъпка върху цялата поръчка
 * @var float
 */
  public $discount;

/**
 * Търговски обект, в който трябва да се изпрати поръчката за обработка
 * @var int
 */
  public $barsy_id;

/**
 * ID на търговския обект, от който ще се вземе поръчката. Ако е пропуснато, се приема че ще се доставя до адрес, описан по-долу
 * @var integer
 */
  public $delivery_barsy_id;

/**
 * Адрес за доставка
 * @var \Barsy\Data\DeliveryAddress\DeliveryAddressData
 */
  public $delivery_address;

/**
 * Дата за доставка, може да съдържа и час
 * @var datetime
 */
  public $delivery_date;

/**
 * Крайна дата/час за доставка - оформя интервал за доставка - от
 * @var datetime
 */
  public $delivery_date_until;

/**
 * ID на начина на плащане по номенклатура на barsy
 * @var integer
 */
  public $paymethod_id;

/**
 * Свободен текст
 * @var string
 */
  public $description;

/**
 * Номер на товарителница
 * @var string
 */
  public $tracking_number;

/**
 * ID на статус на поръчката (по подразбиране - Нова)
 * @var int
 */
  public $status_id;

/**
 * Обект, съдържащ допълнителни данни за поръчката
 * @var object
 */
  public $extra_details;

/**
 * Флаг за това да се издава ли фактура след приключване на сметката от клиентската заявка
 * @var int
 */
  public $with_invoice;

/**
 * Публични бележки / коментар от клиента
 * @var string
 */
  public $public_notes;

/**
 * Дата/Сток за плащане
 * @var string
 */
  public $paid_due_date;

/**
 * ID на Спедитор
 * @var int
 */
  public $speditor_id;

/**
 * ID на валута, в която са подадени единичните цени на артикулите
 * @var int
 */
  public $currency_id;

}
