<?php

namespace VenosT\Barsy\Data\ClientOrders;

/**
 * 
 *  */
class ClientOrderData{

/**
 * ID на клиентска заявка
 * @var int
 */
  public $client_order_id;

/**
 * Външен номер на клиентска заявка (различен от служебния)
 * @var string
 */
  public $order_num;

/**
 * Id на клиент по номенклатурата на barsy
 * @var int
 */
  public $client_id;

/**
 * Име на клиента от заявката
 * @var string
 */
  public $client_name;

/**
 * Телефонен номер на клиента
 * @var string
 */
  public $client_tel;

/**
 * Email адрес на клиента
 * @var string
 */
  public $client_email;

/**
 * Лице за контакт/получаване - може да се различава от името на клиента
 * @var string
 */
  public $contact_name;

/**
 * ID на клиентска група, към която принадлежи клиента
 * @var int
 */
  public $group_id;

/**
 * Дата на създаване на заявката
 * @var string
 */
  public $create_date;

/**
 * Дата на последна промяна на заявката
 * @var string
 */
  public $last_update;

/**
 * Търговски обект, в който трябва да се изпрати поръчката за обработка
 * @var int
 */
  public $barsy_id;

/**
 * Име на търговския обект, в който трябва да се изпрати поръчката за обработка
 * @var 
 */
  public $barsy_name;

/**
 * ID на търговския обект, в който е създадена заявката
 * @var int
 */
  public $from_barsy_id;

/**
 * Име на търговския обект, в който е създадена заявката
 * @var string
 */
  public $from_barsy_name;

/**
 * ID на търговския обект, от който ще се вземе поръчката. Ако е пропуснато, се приема че ще се доставя до адрес за доставка
 * @var integer
 */
  public $delivery_barsy_id;

/**
 * Име на търговския обект, от който ще се вземе поръчката. Ако е пропуснато, се приема че ще се доставя до адрес за доставка
 * @var string
 */
  public $delivery_barsy_name;

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
 * @var string
 */
  public $delivery_date_until;

/**
 * 
 * @var string
 */
  public $delivery_interval;

/**
 * ID на потребител, създал заявката
 * @var int
 */
  public $user_id;

/**
 * Потребителско име на създателя на заявката
 * @var string
 */
  public $user_name;

/**
 * Обща сума на заявката (преди отстъпката)
 * @var float
 */
  public $total_sum;

/**
 * Обща сума на заявката (след отстъпката)
 * @var float
 */
  public $total_real;

/**
 * Платена сума по заявката
 * @var float
 */
  public $total_paid_sum;

/**
 * Оставаща сума за плащане
 * @var float
 */
  public $total_remain_sum;

/**
 * Отстъпка на цялата сметка
 * @var float
 */
  public $discount;

/**
 * ID на начина на плащане по номенклатура на barsy
 * @var integer
 */
  public $paymethod_id;

/**
 * Име на начина на плащане на заявката
 * @var string
 */
  public $paymethod_name;

/**
 * Публично име на начина на плащане на заявката
 * @var string
 */
  public $paymethod_public_name;

/**
 * Описание на метода на плащане
 * @var string
 */
  public $paymethod_description;

/**
 * Допълнителни детайли
 * @var string
 */
  public $extra_details;

/**
 * ID на текущ статус на заявката
 * @var int
 */
  public $status_id;

/**
 * Текущ статус на заявката
 * @var string
 */
  public $status_name;

/**
 * ID на сметка, създадена от тази клиентска заявка
 * @var int
 */
  public $account_id;

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
 * ID на спедитора, избран за тази заявка
 * @var int
 */
  public $speditor_id;

/**
 * Брой артикули в заявката
 * @var int
 */
  public $article_count;

/**
 * 
 * @var int
 */
  public $can_edit_rows;

/**
 * IP адрес, от който е създадена заявката
 * @var string
 */
  public $ip_address;

/**
 * УНП на заявката
 * @var string
 */
  public $unp;

/**
 * 
 * @var ClientOrderUserRightsData
 */
  public $user_rights;

/**
 * Флаг, дали клиента желае фактура за заявката
 * @var int
 */
  public $with_invoice;

/**
 * Бележки към заявката, публично видими от клиента
 * @var string
 */
  public $public_notes;

/**
 * Предпочитан език за клиента
 * @var string
 */
  public $client_lang_id;

/**
 * 
 * @var int
 */
  public $currency_id;

/**
 * 
 * @var float
 */
  public $currency_rate;

}
