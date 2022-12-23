<?php

namespace VenosT\Barsy\Data\Reservations;

/**
 * 
 *  */
class ReservationArticleSaveData{

/**
 * ID на ред от списъка с артикули
 * @var int
 */
  public $id;

/**
 * ID на избран артикул
 * @var int
 */
  public $article_id;

/**
 * Количество на избрания артикул
 * @var float
 */
  public $amount;

/**
 * Текуща продажна цена на избрания артикул
 * @var float
 */
  public $current_price;

/**
 * ID на ДДС група на артикула
 * @var int
 */
  public $tax_id;

/**
 * Бележки към артикула
 * @var string
 */
  public $notes;

}
