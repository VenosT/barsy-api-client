<?php

namespace VenosT\Barsy\Data\StoreMoves;

/**
 * 
 *  */
class StoreMoveCreateRowData{

/**
 * ID на артикул
 * @var int
 */
  public $article_id;

/**
 * Количество, което ще се прехвърля от единия склад в другия
 * @var float
 */
  public $amount;

/**
 * Свободни бележки за реда
 * @var string
 */
  public $notes;

/**
 * 
 * @var 
 */
  public $received;

/**
 * 
 * @var 
 */
  public $row_id;

/**
 * Партида
 * @var string
 */
  public $lot_value;

}
