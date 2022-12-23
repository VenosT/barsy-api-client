<?php

namespace VenosT\Barsy\Data\StoreMoves;

/**
 * 
 *  */
class StoreMovesListFiltersData{

/**
 * Филтър по "от ТО"
 * @var int
 */
  public $from_barsy_id;

/**
 * Филтър по "от Склад"
 * @var int
 */
  public $from_depot_id;

/**
 * Филтър по "до ТО"
 * @var int
 */
  public $to_barsy_id;

/**
 * Филтър по "до Склад"
 * @var int
 */
  public $to_depot_id;

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
  public $creator_name;

/**
 * Филтър по id на приел
 * @var int
 */
  public $inspector_id;

/**
 * Филтър по име на приел
 * @var string
 */
  public $inspector_name;

/**
 * Филтър по статус
 * @var int
 */
  public $status;

}
