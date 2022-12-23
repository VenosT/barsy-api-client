<?php

namespace VenosT\Barsy\Data\StoreOuts;

/**
 * 
 *  */
class StoreOutsListFiltersData{

/**
 * ID на зареждане
 * @var int
 */
  public $store_out_id;

/**
 * Филтър по "Търговски обект"
 * @var int
 */
  public $barsy_id;

/**
 * Филтър по "Склад"
 * @var int
 */
  public $depot_id;

/**
 * Филтър по дата
 * @var datetime
 */
  public $date;

/**
 * Филтър по id на създател
 * @var int
 */
  public $user_id;

/**
 * Филтър по име на създател
 * @var string
 */
  public $user_name;

/**
 * Филтър по статус
 * @var int
 */
  public $status;

/**
 * Филтър по тип изписване
 * @var int
 */
  public $type_id;

}
