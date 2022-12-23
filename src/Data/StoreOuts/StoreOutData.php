<?php

namespace VenosT\Barsy\Data\StoreOuts;

/**
 * 
 *  */
class StoreOutData{

/**
 * ID на изписването
 * @var int
 */
  public $store_out_id;

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
 * ID на склад, в който е заредено
 * @var int
 */
  public $depot_id;

/**
 * Статус на изписването
 * @var int
 */
  public $status;

/**
 * Тип на изписването
 * @var string
 */
  public $type_name;

/**
 * Дата на създаване на изписването
 * @var string
 */
  public $date;

/**
 * Дата на приключване на изписването
 * @var string
 */
  public $close_date;

/**
 * Документална дата на операцията
 * @var string
 */
  public $doc_date;

/**
 * Описание на изписването
 * @var string
 */
  public $description;

/**
 * Име на потребителя, създал изписването
 * @var string
 */
  public $user_name;

/**
 * ID на потребител, създал изписването
 * @var int
 */
  public $user_id;

/**
 * Обща сума на изписването
 * @var float
 */
  public $total_sum;

/**
 * Флаг дали е анулирано
 * @var bool
 */
  public $is_anulate;

/**
 * Списък с редовете към изписването (ако са поискани)
 * @var array
 */
  public $details;

}
