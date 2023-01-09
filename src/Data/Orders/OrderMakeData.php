<?php

namespace VenosT\Barsy\Data\Orders;

/**
 * 
 *  */
class OrderMakeData{

/**
 * ID на артикул
 * @var int
 */
  public $article_id;

/**
 * Количество
 * @var float
 */
  public $amount;

/**
 * Продажна цена (ако се пропусне - ще се използва текущата)
 * @var float
 */
  public $current_price;

/**
 * Отстъпка/надценка в проценти на продажната цена на артикул в сметка (различно от отстъпка на цялата сметка)
 * @var float
 */
  public $discount;

/**
 * ДДС
 * @var int
 */
  public $tax_id;

/**
 * 
 * @var \VenosT\Barsy\Data\Modificators\ModificatorInputData
 */
  public $modificators;

/**
 * 
 * @var \VenosT\Barsy\Data\Articles\ArticleAttributesSimpleData
 */
  public $article_attributes;

/**
 * Комбинирани артикули
 * @var \VenosT\Barsy\Data\Articles\ArticleSupplementData
 */
  public $supplements;

/**
 * Номер на сметка по което се сторнира тази поръчка (само при отрицателно количество)
 * @var int
 */
  public $storno_of_account_id;

}
