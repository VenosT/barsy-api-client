<?php

namespace VenosT\Barsy\Data\Clients;

/**
 * 
 *  */
class ClientsListFiltersData{

/**
 * Филтър по ID на търговски обект
 * @var int
 */
  public $barsy_id;

/**
 * Филтър по ID на клиент
 * @var int
 */
  public $client_id;

/**
 * Филтър по име на клиент
 * @var string
 */
  public $client_name;

/**
 * Филтър по име на клиент
 * @var string
 */
  public $get_smart;

/**
 * Филтър по точно име на клиент
 * @var string
 */
  public $client_name_match_i;

/**
 * Филтър по ID на клиентска група
 * @var int
 */
  public $client_group_id;

/**
 * Филтър по "Export ID"
 * @var int
 */
  public $export_id;

/**
 * Филтър по телефон на клиент
 * @var string
 */
  public $tel;

/**
 * Филтър по дата на създаване на клиент
 * @var string
 */
  public $client_create_date;

/**
 * 
 * @var string
 */
  public $recommended;

/**
 * Филтър по описание на клиент
 * @var string
 */
  public $description;

/**
 * Филтър по отстъпка на клиент
 * @var int
 */
  public $discount;

/**
 * Филтър по клиентски код
 * @var string
 */
  public $client_code;

/**
 * Филтър по точно подаден клиентски код
 * @var string
 */
  public $client_code_match;

/**
 * Филтър по име на компания
 * @var string
 */
  public $company_name;

/**
 * Филтър по адрес
 * @var string
 */
  public $address;

/**
 * Филтър по БУЛСТАТ
 * @var string
 */
  public $bulstat;

/**
 * Филтър по ДДС номер
 * @var string
 */
  public $vat_num;

/**
 * Филтър по MOL
 * @var string
 */
  public $mol;

/**
 * Филтър по имейл. Намира и по част от името
 * @var string
 */
  public $email;

/**
 * Филтър по имейл по точно подадена стойност
 * @var string
 */
  public $email_match;

/**
 * Филтър по имейл за фактура
 * @var string
 */
  public $email_invoices;

/**
 * 
 * @var string
 */
  public $delivery_zone_id;

/**
 * Филтър по флаг за изтрит
 * @var int
 */
  public $delete_flag;

/**
 * Филтър по "Източник клиент"
 * @var int
 */
  public $recruit_client_id;

/**
 * Филтър по "Препоръчан от"
 * @var int
 */
  public $client_source_id;

/**
 * Филтър дали клиента е включен в "maillist абонамент"
 * @var int
 */
  public $ml_subscribed;

/**
 * Филтър по последен ъпдейт на клиент. Точна стойност.
 * @var string
 */
  public $last_update;

/**
 * Филтър по символ
 * @var string
 */
  public $index;

/**
 * Филтър по email за фактута
 * @var string
 */
  public $email_invoices_smart;

/**
 * Филтър по флаг за гост
 * @var int
 */
  public $is_guest;

/**
 * Филтър по потребителско име
 * @var string
 */
  public $client_auth;

/**
 * Филтър по точно потребителско име
 * @var string
 */
  public $client_auth_match;

/**
 * 
 * @var int
 */
  public $hide_anonymous;

/**
 * Филтър по текстово търсене
 * @var string
 */
  public $query;

/**
 * 
 * @var string
 */
  public $zip;

/**
 * 
 * @var string
 */
  public $town;

}
