<?php

namespace VenosT\Barsy\Lib\eStruct\Data;

/**
 * 
 *  */
class EStructListResultData{

/**
 * Номер на текуща страница
 * @var int
 */
  public $page_num;

/**
 * Общ брой страници
 * @var int
 */
  public $total;

/**
 * Общ брой записи
 * @var int
 */
  public $records;

/**
 * Полета на всеки ред от списъка
 * @var eStructListResultRowData
 */
  public $rows;

}
