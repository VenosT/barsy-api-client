<?php

namespace VenosT\Barsy\Data\Suppliers;

/**
 * 
 *  */
class SupplierData{

/**
 * Име на доставчика
 * @var string
 */
  public $supplier_name;

/**
 * ЕИК на доставчика
 * @var int
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
 * Адрес за кореспонденция
 * @var string
 */
  public $address;

/**
 * Лице за контакт
 * @var string
 */
  public $contact_persons;

/**
 * Email за контакт
 * @var string
 */
  public $email;

/**
 * Телефон за контакт
 * @var string
 */
  public $tel;

/**
 * Регистриран по ДДС
 * @var int
 */
  public $has_tax;

/**
 * ID на група
 * @var int
 */
  public $group_id;

/**
 * Интервал от време(в минути) за отложено плащане от дата на доставка
 * @var int
 */
  public $default_paid_period;

/**
 * Бележки
 * @var string
 */
  public $notes;

/**
 * Флаг, дали потребителя е маркиран като изтрит
 * @var int
 */
  public $delete_flag;

/**
 * ID на настройки за отдалечен достъп
 * @var int
 */
  public $remote_id;

/**
 * ID за експорт към външна система
 * @var string
 */
  public $export_id;

/**
 * Цени по подразбиране (без или със ДДС)
 * @var int
 */
  public $default_price_mode;

/**
 * Валута по подразбиране
 * @var int
 */
  public $default_currency_id;

}
