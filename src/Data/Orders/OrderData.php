<?php

namespace VenosT\Barsy\Data\Orders;

/**
 * 
 *  */
class OrderData{

/**
 * ID на сметка
 * @var int
 */
  public $account_id;

/**
 * ID на артикул
 * @var int
 */
  public $article_id;

/**
 * Име на артикул
 * @var string
 */
  public $article_name;

/**
 * ID на място, към което е сметката
 * @var int
 */
  public $place_id;

/**
 * Количество за този артикул
 * @var float
 */
  public $amount;

/**
 * Ново количество
 * @var float
 */
  public $new_amount;

/**
 * Списък с модификатори за този артикул
 * @var \VenosT\Barsy\Data\Modificators\ModificatorData
 */
  public $modificators;

/**
 * Списък с атрибутите за този артикул
 * @var \VenosT\Barsy\Data\Articles\ArticleAttributesData
 */
  public $article_attributes;

/**
 * Текущата цена за този артикул
 * @var float
 */
  public $current_price;

/**
 * ID на типа количество за този артикул
 * @var int
 */
  public $amount_type_id;

/**
 * Кратко име на тип количество
 * @var string
 */
  public $amount_type_name_short;

/**
 * Единица продажба за този артикул
 * @var float
 */
  public $amount_unit;

/**
 * ID на поръчката според външна система
 * @var int
 */
  public $order_ref_id;

/**
 * Индивидуална отстъпка на поръчката
 * @var float
 */
  public $discount;

/**
 * Процент ДДС на поръчката
 * @var float
 */
  public $tax;

}
