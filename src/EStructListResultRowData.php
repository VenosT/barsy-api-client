<?php

namespace VenosT\Barsy;

/**
 * 
 *  */
class EStructListResultRowData{

/**
 * ID
 * @var number
 */
  public $store_id;

/**
 * Код на артикула
 * @var smaltext
 */
  public $article_id;

/**
 * Дата
 * @var datetime
 */
  public $date;

/**
 * Вальор
 * @var datetime
 */
  public $ref_date;

/**
 * Име на артикул
 * @var text
 */
  public $article_name;

/**
 * Потребител
 * @var smalltext
 */
  public $user_name;

/**
 * Склад
 * @var smalltext
 */
  public $depot_name;

/**
 * Операция
 * @var text
 */
  public $reason_name;

/**
 * Количество
 * @var amount
 */
  public $amount;

/**
 * Количество след извършване на операцията. Показва се само ако е възможно
 * @var amount
 */
  public $amount_sum;

/**
 * Себестойност (без ДДС)
 * @var currency
 */
  public $avg_delivery_price;

/**
 * Сума себест (без ДДС)
 * @var currency
 */
  public $avg_delivery_price_sum;

/**
 * Сума себест (+ДДС)
 * @var currency
 */
  public $avg_delivery_price_plus_vat_sum;

/**
 * Ref ID
 * @var amount
 */
  public $ref_id;

}
