<?php

namespace VenosT\Barsy\Data\Revisions;

/**
 * 
 *  */
class RevisionsListFiltersData{

/**
 * ID на ревизията
 * @var int
 */
  public $rev_id;

/**
 * ID на търговски обект
 * @var int
 */
  public $barsy_id;

/**
 * ID на склад, в който е заредено
 * @var int
 */
  public $depot_id;

/**
 * Статус на ревизията
 * @var int
 */
  public $status;

/**
 * Дата на създаване на ревизията
 * @var string
 */
  public $date;

/**
 * Дата на приключване на ревизията
 * @var string
 */
  public $close_date;

/**
 * Дата на операцията (момент на засичане на наличности)
 * @var string
 */
  public $amount_date;

/**
 * ID на потребител, създал ревизията
 * @var int
 */
  public $creator_id;

/**
 * ID на потребител, приключил ревизията
 * @var int
 */
  public $closer_id;

/**
 * Филтър по име, баркод или референтен номер на артикул. Намира и при частично съвпадение
 * @var string
 */
  public $article_name;

}
