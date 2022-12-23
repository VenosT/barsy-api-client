<?php

namespace VenosT\Barsy\Data\StoreMoves;

/**
 * 
 *  */
class StoreMoveCreateData{

/**
 * ID на склада, от който се изтелгя количество
 * @var int
 */
  public $depot_id_left;

/**
 * ID на склада, в кой се прехвърля количество
 * @var int
 */
  public $depot_id_right;

/**
 * 
 * @var string
 */
  public $doc_date;

/**
 * 
 * @var string
 */
  public $description;

/**
 * 
 * @var string
 */
  public $deal_id;

/**
 * 
 * @var string
 */
  public $inspector_description;

}
