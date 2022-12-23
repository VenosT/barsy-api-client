<?php

namespace VenosT\Barsy\Data\Depots;

/**
 * 
 *  */
class DepotType{

/**
 * ID на склада
 * @var int
 */
  public $depot_id;

/**
 * Име на склада
 * @var string
 */
  public $depot_name;

/**
 * ID на търговския обект
 * @var int
 */
  public $barsy_id;

/**
 * Име на търговския обект
 * @var string
 */
  public $barsy_name;

/**
 * ID на групата, към която принадлежи склада
 * @var int
 */
  public $depot_group_id;

/**
 * Име на складовата група, към която принадлежи склада
 * @var string
 */
  public $group_name;

/**
 * Описание на склада
 * @var string
 */
  public $description;

/**
 * Флаг дали склада е маркиран като изтрит
 * @var bool
 */
  public $delete_flag;

/**
 * Флаг дали скалда може да се зарежда чрез операция "Зареждане"
 * @var bool
 */
  public $can_load;

/**
 * Флаг дали от склада може да бъде извършено прехвърляне от и към външни складове (в други търговски обекти)
 * @var bool
 */
  public $can_move_outside;

}
