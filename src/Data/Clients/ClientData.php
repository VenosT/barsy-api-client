<?php

namespace VenosT\Barsy\Data\Clients;

/**
 * 
 *  */
class ClientData{

/**
 * ID на клиента
 * @var int
 */
  public $client_id;

/**
 * Име на клиента - трябва да бъде уникално в цялата система. Може да бъде физическото име или друго синтетично име
 * @var string
 */
  public $client_name;

/**
 * Процент отстъпка/надценка за всички операции на клиента (ако числото е отрицателно-
 * @var int
 */
  public $discount;

/**
 * Телефон за контакт
 * @var string
 */
  public $tel;

/**
 * 
 * @var string
 */
  public $recom;

/**
 * Име на юридическото лице
 * @var string
 */
  public $company_name;

/**
 * Адрес по регистрация
 * @var string
 */
  public $address;

/**
 * ЕИК номер (Булстат)
 * @var string
 */
  public $bulstat;

/**
 * ДДС номер
 * @var string
 */
  public $vat_num;

/**
 * МОЛ
 * @var string
 */
  public $mol;

/**
 * Град
 * @var string
 */
  public $town;

/**
 * Пощенски код
 * @var string
 */
  public $zip;

/**
 * Адрес за доставка
 * @var \VenosT\Barsy\Data\DeliveryAddress\DeliveryAddressData
 */
  public $delivery_address;

/**
 * ID на зона за доставка
 * @var string
 */
  public $delivery_zone_id;

/**
 * ID на зона за доствка (според външна система)
 * @var datetime
 */
  public $client_create_date;

/**
 * Основен email на клиента
 * @var string
 */
  public $email;

/**
 * email за изпращане на фактури на клиента
 * @var string
 */
  public $email_invoices;

/**
 * Клиентски код (на карта)
 * @var string
 */
  public $client_code;

/**
 * Текущ баланс на клиентския портфейл
 * @var float
 */
  public $total_balance;

/**
 * Кредитен лимит на клиента (стойност до която може да задлъжнява)
 * @var float
 */
  public $credit_limit;

/**
 * Интервал от време(в минути) за отложено плащане по подразбиране
 * @var int
 */
  public $paid_period;

/**
 * Разрешено използване профила без карта
 * @var bool
 */
  public $allow_client_nocard;

/**
 * Разрешено използване на клиентски портфейл без карта
 * @var bool
 */
  public $allow_credit_nocard;

/**
 * Разрешено използване на отстъпка без карта
 * @var bool
 */
  public $allow_discount_nocard;

/**
 * Клиентска група, към която принадлежи клиента
 * @var int
 */
  public $group_id;

/**
 * Основна снимка от наличните за този клиент
 * @var string
 */
  public $client_picture;

/**
 * Дата на последна актуализация на данните за клиента
 * @var datetime
 */
  public $last_update;

/**
 * Описание - свободен текст
 * @var string
 */
  public $description;

/**
 * ID на потребиетля, създал клиента
 * @var int
 */
  public $user_id;

/**
 * Флаг, дали потребителя е маркиран като изтрит
 * @var int
 */
  public $delete_flag;

/**
 * Клиентско име за вход в клиентския профил
 * @var string
 */
  public $client_auth;

/**
 * Клиентска парола за вход в клиентския профил
 * @var string
 */
  public $client_pass;

/**
 * ID за експорт към външни системи
 * @var int
 */
  public $export_id;

/**
 * ID на предпочитан начин на плащане за този клиент
 * @var int
 */
  public $default_paymethod_id;

/**
 * ID на източника, от където е намерен този клиент/контакт
 * @var int
 */
  public $client_source_id;

/**
 * ID на клиента, осигурил този клиент
 * @var int
 */
  public $recruit_client_id;

/**
 * Флаг дали клиентът е абониран за maillist
 * @var int
 */
  public $ml_subscribed;

/**
 * Обект с информация за доставката (key
 * @var object
 */
  public $delivery_data;

/**
 * Име на получател
 * @var string
 */
  public $receiver_name;

/**
 * Флаг за гост
 * @var bool
 */
  public $is_guest;

}
