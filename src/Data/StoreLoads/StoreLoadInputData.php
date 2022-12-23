<?php

namespace VenosT\Barsy\Data\StoreLoads;

/**
 * 
 *  */
class StoreLoadInputData{

/**
 * Id на склад, който ще се зарежда
 * @var int
 */
  public $depot_id;

/**
 * ID на доставчик по зареждането
 * @var int
 */
  public $supplier_id;

/**
 * Дата на документа (дата на завеждане на стоката в склада)
 * @var string
 */
  public $doc_date;

/**
 * Номер на документа. Трябва да е уникален за търговския обект
 * @var string
 */
  public $doc_num;

/**
 * Тип на подадения документ
 * @var int
 */
  public $doc_type_id;

/**
 * Флаг дали подадените единични цени на артикули са с ДДС или без
 * @var int
 */
  public $price_mode;

/**
 * Флаг дали документът е с начислен ДДС
 * @var int
 */
  public $has_tax;

/**
 * Свободен текст
 * @var string
 */
  public $description;

/**
 * Фалг дали документа е за зареждане на стока (1) или за връщане на стока (2)
 * @var int
 */
  public $operation_type;

/**
 * Сума платена до момента по тази фактура, може да се редактира при доплащане
 * @var float
 */
  public $total_paid;

/**
 * Крайна дата за плащане към доставчика
 * @var string
 */
  public $paid_due_date;

/**
 * ID на валута, в която са подадени единичните цени на артикулите
 * @var int
 */
  public $currency_id;

/**
 * Курс на подадената валута към базовата валута на системата (BGN) към момента на сделката
 * @var float
 */
  public $currency_rate;

/**
 * ID на начин на плащане към доставчика
 * @var int
 */
  public $paymethod_id;

/**
 * ID на заявката към доставчик, от която се прави зареждането
 * @var int
 */
  public $request_id;

/**
 * ID на категорията на зареждането
 * @var int
 */
  public $store_load_cat_id;

}
