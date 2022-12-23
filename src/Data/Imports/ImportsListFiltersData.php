<?php

namespace VenosT\Barsy\Data\Imports;

/**
 * 
 *  */
class ImportsListFiltersData{

/**
 * Филтър по ID на импорт
 * @var int
 */
  public $import_id;

/**
 * Филтър по ID на потребител създал импорта
 * @var int
 */
  public $user_id;

/**
 * Филтър по тип на импорта
 * @var string
 */
  public $type;

/**
 * Филтър по обект на импорта
 * @var string
 */
  public $object;

/**
 * Филтър по дата на създаване на импорта
 * @var datetime
 */
  public $create_date;

/**
 * Филтър по статус импорта
 * @var int
 */
  public $status;

/**
 * Филтър по име на източника на импорта
 * @var string
 */
  public $source_name;

}
