<?php

namespace VenosT\Barsy\Data\Articles;

/**
 * 
 *  */
class ArticleSupplementData{

/**
 * ID на артикул, в участва в комбо артикула
 * @var int
 */
  public $article_id;

/**
 * Количество на артикула в това комбо
 * @var float
 */
  public $amount;

/**
 * цена на артикула в това комбо (ако не се подаде, се ползва зададената или изчислената)
 * @var float
 */
  public $supplement_price;

/**
 * ID на група на комбото, в която участва артикула
 * @var int
 */
  public $supplement_group_id;

/**
 * ДДС id на артикула
 * @var int
 */
  public $tax_id;

/**
 * ID на тип доставка
 * @var int
 */
  public $tax_region_id;

}
