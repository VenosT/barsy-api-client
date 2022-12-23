<?php

namespace VenosT\Barsy;

/**
 * 
 *  */
class EStructFilters_Reports_sales_by_orders{

/**
 * Филтриране на редовете за избран период
 * @var date_interval
 */
  public $ref_date;

/**
 * Търговски обект
 * @var int
 */
  public $barsys;

/**
 * Филтриране по име на артикул (основно и публично). Търси се по цяло или част от името
 * @var text
 */
  public $article_name;

/**
 * Филтрира по категория. Подава се ID. По подразбиране търси в избраната категория и всички нейни подкатегории
 * @var array
 */
  public $cat_id;

/**
 * Поток
 * @var int
 */
  public $stream_id;

/**
 * Търговски обекти/Каси
 * @var int
 */
  public $pos_id;

/**
 * Клиент
 * @var text
 */
  public $client;

/**
 * Представител
 * @var text
 */
  public $person;

/**
 * Клиентска група
 * @var int
 */
  public $client_group_id;

/**
 * Потребител
 * @var int
 */
  public $user_id;

/**
 * Роля
 * @var int
 */
  public $role_id;

/**
 * Начин на плащане
 * @var int
 */
  public $paymethod_id;

/**
 * ДДС Група
 * @var int
 */
  public $tax_id;

/**
 * Сметки
 * @var int
 */
  public $status;

/**
 * Продажна цена < от себестойност (+ДДС)
 * @var int
 */
  public $cprice_less_cprice;

/**
 * Карта №
 * @var text
 */
  public $card_num;

/**
 * Характеристики
 * @var article_details
 */
  public $details;

/**
 * Заглавие
 * @var text
 */
  public $account_alias;

}
