<?php

namespace VenosT\Barsy\Data\StoreLoads;

/**
 * 
 *  */
class StoreLoadsListFiltersData{

/**
 * ID на зареждане
 * @var int
 */
  public $store_load_id;

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
  public $creator_id;

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

}
