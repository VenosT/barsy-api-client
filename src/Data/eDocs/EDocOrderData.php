<?php

namespace VenosT\Barsy\Data\eDocs;

/**
 * 
 *  */
class EDocOrderData{

/**
 * ID на артикул
 * @var string
 */
  public $article_id;

/**
 * Име на артикул
 * @var string
 */
  public $article_name;

/**
 * Цена, на която се извършена операцията
 * @var float
 */
  public $current_price;

/**
 * Кратко име на тип количество
 * @var string
 */
  public $amount_type_name_short;

/**
 * Количество, което е включено в операцията
 * @var float
 */
  public $amount;

}
