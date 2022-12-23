<?php

namespace VenosT\Barsy\Data\Cards;

/**
 * 
 *  */
class CardApplyResponse{

/**
 * Тотал отстъпка след прилагане на кода
 * @var float
 */
  public $total_credit;

/**
 * Списък с артикули с допълнителни данни за отстъпка от кода
 * @var CardApplyArticleData
 */
  public $articles;

}
