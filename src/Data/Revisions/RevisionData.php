<?php

namespace VenosT\Barsy\Data\Revisions;

/**
 * 
 *  */
class RevisionData{

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
 * Име на търговския обект
 * @var string
 */
  public $barsy_name;

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
 * Описание на ревизията
 * @var string
 */
  public $description;

/**
 * Име на потребителя, създал ревизията
 * @var string
 */
  public $user_name;

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

}
