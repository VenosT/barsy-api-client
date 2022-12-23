<?php

namespace VenosT\Barsy\Data\Pricelists;

/**
 * 
 *  */
class PricelistArticleData{

/**
 * ID на артикул
 * @var int
 */
  public $article_id;

/**
 * Предпочитана продажна цена за дадения артикул в това ценово правило. Когато е налично, надписва изчислената цена
 * @var float
 */
  public $custom_price;

/**
 * ID на група, към която принадлежи артикула. Необходимо за Mix-and-match промоции. Стойности 1-10
 * @var int
 */
  public $price_change_group;

/**
 * Необходимо минимално количество, което ще трябва да присъства в сметката за да бъде удовлетворено правилото
 * @var float
 */
  public $req_amount;

}
