<?php

namespace VenosT\Barsy\Data\AmountTypes;

/**
 * 
 *  */
class AmountTypeData{

/**
 * ID на типа
 * @var int
 */
  public $amount_type_id;

/**
 * Име на типа
 * @var string
 */
  public $amount_type_name;

/**
 * Кратко име на типа
 * @var string
 */
  public $amount_type_name_short;

/**
 * 
 * @var int
 */
  public $time_interval;

/**
 * Точност след десетичния знак
 * @var float
 */
  public $value_precision;

/**
 * ID при експорт на тип - например за импорт в друга система
 * @var string
 */
  public $export_id;

}
