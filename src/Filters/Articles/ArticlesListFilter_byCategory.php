<?php

namespace VenosT\Barsy\Filters\Articles;

/**
 * 
 *  */
class ArticlesListFilter_byCategory{

/**
 * 
 * @var 
 */
  public $match_mode;

/**
 * 
 * @var 
 */
  public $deep;

/**
 * Уникално име на филтъра
 * @var string
 */
  public $name;

/**
 * Тип на филтъра - виж константите
 * @var string
 */
  public $type;

/**
 * "Място" на филтъра - where или having
 * @var string
 */
  public $sql_place;

/**
 * SQL колона
 * @var string
 */
  public $sql_column;

/**
 * SQL колони  (
 * @var array
 */
  public $sql_columns;

/**
 * Пълен sql израз за филтриране
 * @var string
 */
  public $sql_filter;

/**
 * Синоним на SQL таблицата
 * @var string
 */
  public $table_alias;

/**
 * Текуща стойност на филтъра
 * @var mixed
 */
  public $value;

}
