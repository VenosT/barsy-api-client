<?php

namespace VenosT\Barsy\Data\StoreProductions;

/**
 * 
 *  */
class StoreProductionData{

/**
 * ID на производството
 * @var int
 */
  public $store_production_id;

/**
 * ID на търговски обект
 * @var int
 */
  public $barsy_id;

/**
 * Име на търговския обект
 * @var string
 */
  public $barsy_name;

/**
 * ID на склад, в който е произведено
 * @var int
 */
  public $depot_id;

/**
 * Статус на производството
 * @var int
 */
  public $status;

/**
 * Дата на създаване на производството
 * @var string
 */
  public $date;

/**
 * Дата на приключване на производството
 * @var string
 */
  public $close_date;

/**
 * Документална дата на операцията
 * @var string
 */
  public $doc_date;

/**
 * Описание на производството
 * @var string
 */
  public $description;

/**
 * Име на потребителя, създал производството
 * @var string
 */
  public $user_name;

/**
 * ID на потребител, създал производството
 * @var int
 */
  public $user_id;

/**
 * Брой редове в производството
 * @var float
 */
  public $total_rows;

/**
 * Флаг дали е анулирано
 * @var bool
 */
  public $anulate_flag;

/**
 * Списък с редовете към производството (ако са поискани)
 * @var array
 */
  public $details;

}
