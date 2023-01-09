<?php

namespace VenosT\Barsy\Data\Clients;

/**
 * 
 *  */
class ClientSaveData{

/**
 * Име на клиента - трябва да бъде уникално в цялата система. Може да бъде физическото име или друго синтетично име
 * @var string
 */
  public $client_name;

/**
 * Процент отстъпка/надценка за всички операции на клиента (ако числото е отрицателно-
 * @var float
 */
  public $discount;

/**
 * Флаг, дали потребителя е маркиран като изтрит
 * @var int
 */
  public $delete_flag;

/**
 * Описание - свободен текст
 * @var string
 */
  public $description;

/**
 * Телефон за контакт
 * @var string
 */
  public $tel;

/**
 * Факс за контакт
 * @var string
 */
  public $fax;

/**
 * Препоръчан от
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
 * Клиентски код (на карта)
 * @var string
 */
  public $client_code;

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
 * Основен email на клиента
 * @var string
 */
  public $email;

/**
 * Кредитен лимит на клиента (стойност до която може да задлъжнява)
 * @var float
 */
  public $credit_limit;

/**
 * Разрешено използване профила без карта
 * @var int
 */
  public $allow_client_nocard;

/**
 * Разрешено използване на клиентски портфейл без карта
 * @var int
 */
  public $allow_credit_nocard;

/**
 * Разрешено използване на отстъпка без карта
 * @var int
 */
  public $allow_discount_nocard;

/**
 * Клиентска група, към която принадлежи клиента
 * @var int
 */
  public $group_id;

/**
 * ID на предпочитан начин на плащане за този клиент
 * @var int
 */
  public $default_paymethod_id;

/**
 * ID за експорт към външни системи
 * @var string
 */
  public $export_id;

/**
 * Основна снимка от наличните за този клиент
 * @var string
 */
  public $client_picture;

/**
 * Клиентска парола за вход в клиентския профил
 * @var string
 */
  public $client_pass;

/**
 * Клиентско име за вход в клиентския профил
 * @var string
 */
  public $client_auth;

/**
 * ID на източника, от където е намерен този клиент/контакт.
 * @var int
 */
  public $client_source_id;

/**
 * ID на клиента, осигурил този клиент
 * @var int
 */
  public $recruit_client_id;

/**
 * Email за изпращане на фактури на клиента
 * @var string
 */
  public $email_invoices;

/**
 * ID на зона за доставка
 * @var int
 */
  public $delivery_zone_id;

/**
 * Флаг дали клиентът е абониран за maillist
 * @var int
 */
  public $ml_subscribed;

/**
 * Интервал от време(в минути) за отложено плащане по подразбиране
 * @var int
 */
  public $paid_period;

/**
 * Име на получател
 * @var string
 */
  public $receiver_name;

/**
 * Флаг за гост
 * @var int
 */
  public $is_guest;

/**
 * Адрес за доставка
 * @var \VenosT\Barsy\Data\DeliveryAddress\DeliveryAddressData
 */
  public $delivery_address;

/**
 * Масив от ID-та на обекти, в които този клиент може да се ползва
 * @var array
 */
  public $barsys;

/**
 * 
 * @var array
 */
  public $bank_accounts;

/**
 * Предпочитан език
 * @var string
 */
  public $lang_id;

}
