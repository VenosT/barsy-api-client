<?php

namespace VenosT\Barsy\Data\ArticleDetails;

/**
 * 
 *  */
class ArticleDetailInputData{

/**
 * ID на детайл (празно за нов)
 * @var int
 */
  public $detail_id;

/**
 * Име на детайл (подава се за създаване на нов)
 * @var string
 */
  public $detail_name;

/**
 * Стойност на детайл
 * @var string
 */
  public $detail_value;

/**
 * ID на стойност на детайл (празно за нова)
 * @var int
 */
  public $key_id;

}
