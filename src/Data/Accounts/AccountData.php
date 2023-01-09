<?php

namespace VenosT\Barsy\Data\Accounts;

/**
 * 
 *  */
class AccountData{

/**
 * ID на сметка - уникално за системата
 * @var int
 */
  public $account_id;

/**
 * ID на търговските обект, в който е сметката
 * @var int
 */
  public $barsy_id;

/**
 * Име на търговските обект, в който е сметката
 * @var int
 */
  public $barsy_name;

/**
 * ID на каталог
 * @var int
 */
  public $menu_id;

/**
 * текстов индентификатор (ID) на сметка - уникално за системата
 * @var int
 */
  public $account_sid;

/**
 * Дата на създаване на сметката
 * @var string
 */
  public $create_date;

/**
 * ID на потребител, отговарящ текущо за сметката
 * @var int
 */
  public $user_id;

/**
 * Име на потребител, отговарящ текущо за сметката
 * @var string
 */
  public $user_name;

/**
 * ID на място, към което е сметката
 * @var int
 */
  public $place_id;

/**
 * Номер на място, към което е сметката
 * @var int
 */
  public $place_num;

/**
 * ID на тип на мястото, към което е сметката
 * @var int
 */
  public $place_type;

/**
 * Тип
 * @var string
 */
  public $place_type_name;

/**
 * Име на салона, спрямо мястото
 * @var string
 */
  public $salon_name;

/**
 * Статус на сметката (0
 * @var int
 */
  public $status;

/**
 * ID на клиент, асоциран със сметката
 * @var int
 */
  public $client_id;

/**
 * ID на представителя за клиента
 * @var int
 */
  public $person_id;

/**
 * Име на представителя за клиента
 * @var int
 */
  public $person_name;

/**
 * Име на клиент, асоциран със сметката
 * @var string
 */
  public $client_name;

/**
 * Пълен тотал на сметката
 * @var float
 */
  public $total_sum;

/**
 * Процент отстъпка/надбавка на сметката (
 * @var float
 */
  public $discount;

/**
 * Дата на приключване на сметката
 * @var string
 */
  public $close_date;

/**
 * FX
 * @var int
 */
  public $fx;

/**
 * ID на начин на плащане на сметката
 * @var string
 */
  public $paymethod_id;

/**
 * Общо платена сума по сметката спрямо плащанията
 * @var float
 */
  public $total_paid;

/**
 * Сума на сметката с включена отстъпка/надбавка (т.е. краен тотал)
 * @var float
 */
  public $total_real;

/**
 * Сума на оттаващо за плащане по тази сметка до този момент
 * @var float
 */
  public $total_remain;

/**
 * Сума на сторнирани артикули (вкл. отстъпки)
 * @var float
 */
  public $total_sum_storno;

/**
 * Сума на сторнирани плащания
 * @var float
 */
  public $total_paid_sum_storno;

/**
 * Пореден номер на последна поръчка
 * @var int
 */
  public $last_order_num;

/**
 * Флаг за времево отчитане на мястото
 * @var string
 */
  public $time_calculation;

/**
 * Документална дата на сметката
 * @var string
 */
  public $ref_date;

/**
 * Описание - свободен текст - видим в бележката към сметката
 * @var string
 */
  public $description;

/**
 * Бележки - свободен текст - не се вижда от клиента
 * @var string
 */
  public $notes;

/**
 * Име на сметката - свободен текст
 * @var string
 */
  public $account_alias;

/**
 * Данни за доставка
 * @var \VenosT\Barsy\Data\DeliveryAddress\DeliveryAddressData
 */
  public $delivery_address;

/**
 * Телефон
 * @var string
 */
  public $phone;

/**
 * Зона за доставка
 * @var string
 */
  public $delivery_zone_id;

/**
 * Номер на товарителница
 * @var string
 */
  public $tracking_number;

/**
 * Номер на товарителница от външна система
 * @var string
 */
  public $tracking_ref_id;

/**
 * ID на спедитора
 * @var int
 */
  public $speditor_id;

/**
 * Списък с поръчките към сметката (ако са поискани)
 * @var \VenosT\Barsy\Data\Orders\OrderData
 */
  public $orders;

/**
 * ID на клиентска група
 * @var int
 */
  public $client_group_id;

/**
 * 
 * @var int
 */
  public $pos_id;

/**
 * 
 * @var string
 */
  public $pos_name;

/**
 * 
 * @var int
 */
  public $period_id;

/**
 * Брой хора
 * @var int
 */
  public $persons;

/**
 * Продължителност на сметката hh:mm:ss
 * @var string
 */
  public $account_period;

/**
 * Име на плащането
 * @var string
 */
  public $payment_name;

/**
 * Срок за плащане
 * @var string
 */
  public $paid_due_date;

/**
 * Пореден номер за текущия касов период
 * @var string
 */
  public $account_num;

/**
 * Уникален номер на продажбата (УНП) XXXХХХХХ-ZZZZ-0000001
 * @var string
 */
  public $unp;

/**
 * Списък с плащанията към сметката  (ако са поискани)
 * @var \VenosT\Barsy\Data\Devices\ReceiptPaymentData
 */
  public $payments;

/**
 * 
 * @var int
 */
  public $deal_id;

/**
 * 
 * @var string
 */
  public $deal_title;

}
