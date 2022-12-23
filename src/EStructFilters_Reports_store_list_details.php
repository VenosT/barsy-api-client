<?php

namespace VenosT\Barsy;

/**
 * 
 *  */
class EStructFilters_Reports_store_list_details{

/**
 * Филтриране на редовете за избран период
 * @var date_interval
 */
  public $ref_date;

/**
 * Филтриране по име на артикул (основно и публично). Търси се по цяло или част от името
 * @var text
 */
  public $article;

/**
 * Филтрира по категория. Подава се ID. По подразбиране търси в избраната категория и всички нейни подкатегории
 * @var array
 */
  public $cat_id;

/**
 * Роля
 * @var int
 */
  public $role_id;

/**
 * Търговски обекти и складове
 * @var int
 */
  public $barsys_depots;

/**
 * Потребител
 * @var int
 */
  public $user_id;

/**
 * Операция
 * @var int
 */
  public $reason_id;

/**
 * Номер на операция
 * @var text
 */
  public $ref_id;

}
