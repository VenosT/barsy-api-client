<?php

namespace VenosT\Barsy\Data\StoreLoads;

/**
 * 
 *  */
class StoreLoadInputRowData{

/**
 * ID на ред в зареждането
 * @var int
 */
  public $store_load_row_id;

/**
 * Име на артикула
 * @var string
 */
  public $original_article_name;

/**
 * ID на артикул, който се зарежда
 * @var int
 */
  public $article_id;

/**
 * Количество, което се зарежда в склада (в основна единици: бр, кг, л,...)
 * @var float
 */
  public $amount;

/**
 * Единична доставна цена, на която се зарежда артикула
 * @var float
 */
  public $current_price;

/**
 * Единична продажна цена
 * @var float
 */
  public $actual_price;

/**
 * ID на ДДС за доставка
 * @var int
 */
  public $delivery_tax_id;

/**
 * Свободен текст към реда на артикула
 * @var string
 */
  public $notes;

/**
 * Име на опаковката (при използване на опаковки)
 * @var string
 */
  public $package_name;

/**
 * Количеството в една опаковка (при използване на опаковки)
 * @var float
 */
  public $package_ratio;

/**
 * Атрибути
 * @var array
 */
  public $attributes;

/**
 * Id на ред в зареждане, връзка при връщане на стока
 * @var int
 */
  public $return_from_store_load_row_id;

/**
 * Id на сделка
 * @var int
 */
  public $deal_id;

/**
 * Партида номер
 * @var string
 */
  public $lot_value;

/**
 * Партида дата - срок на годност
 * @var string
 */
  public $lot_exp_date;

/**
 * Id на партидата в операцията
 * @var int
 */
  public $lot_detail_id;

/**
 * Производител
 * @var string
 */
  public $manufacturer;

/**
 * Допълнителни данни/колони - конфигурируеми
 * @var array
 */
  public $add_data;

}
