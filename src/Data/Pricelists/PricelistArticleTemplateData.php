<?php

namespace VenosT\Barsy\Data\Pricelists;

/**
 * 
 *  */
class PricelistArticleTemplateData{

/**
 * ID на шаблон
 * @var int
 */
  public $pattern_id;

/**
 * Шаблон за име на артикул
 * @var string
 */
  public $pattern;

/**
 * Предпочитана цена на артикулите, които отговарят на шаблона
 * @var int
 */
  public $custom_price;

}
