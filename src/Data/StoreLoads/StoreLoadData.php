<?php

namespace VenosT\Barsy\Data\StoreLoads;

/**
 * 
 *  */
class StoreLoadData{

/**
 * ID на зареждане
 * @var int
 */
  public $store_load_id;

/**
 * ID на търговски обект
 * @var int
 */
  public $barsy_id;

/**
 * Име на търговския обект
 * @var string
 */
  public $barsy_name;

/**
 * ID на склад, в който е заредено
 * @var int
 */
  public $depot_id;

/**
 * Статус на зареждането
 * @var int
 */
  public $status;

/**
 * Тип документ, по който е заредено
 * @var string
 */
  public $doc_type_name;

/**
 * ID на тип документ, по който е заредено
 * @var int
 */
  public $doc_type_id;

/**
 * Номер на документа
 * @var string
 */
  public $doc_num;

/**
 * Режим на единични цени (0
 * @var int
 */
  public $price_mode;

/**
 * Тип за зареждането (0
 * @var int
 */
  public $has_tax;

/**
 * Дата на създаване на зареждането
 * @var string
 */
  public $date;

/**
 * Дата на приключване на зареждането
 * @var string
 */
  public $close_date;

/**
 * Документална дата на операцията
 * @var string
 */
  public $doc_date;

/**
 * Описание на зареждането
 * @var string
 */
  public $description;

/**
 * Име на потребителя, създал зареждането
 * @var string
 */
  public $user_name;

/**
 * ID на потребител, създал зареждането
 * @var int
 */
  public $creator_id;

/**
 * ID на доставчик на зареждането
 * @var int
 */
  public $supplier_id;

/**
 * Име на доставчика
 * @var string
 */
  public $supplier_name;

/**
 * Тип операция (зареждане, връщане на стока към доставчик)
 * @var int
 */
  public $operation_type;

/**
 * Обща сума на зареждането
 * @var float
 */
  public $total_sum;

/**
 * Общо платени по зареждането
 * @var float
 */
  public $total_paid;

/**
 * Крайна дата за плащане на зареждането
 * @var string
 */
  public $paid_due_date;

/**
 * ID на валутата на зареждането
 * @var int
 */
  public $currency_id;

/**
 * Курс на валутата на зареждането към основната валута на системата
 * @var float
 */
  public $currency_rate;

/**
 * Обща сума на разходите към зареждането
 * @var float
 */
  public $total_costs;

/**
 * Режим на изчислване на разходите спрямо общата сума (включени,изключени)
 * @var int
 */
  public $cost_mode;

/**
 * ID на заявката към доставчика, по която е създадено зареждането
 * @var int
 */
  public $request_id;

/**
 * ID на начин на плащане на зареждането
 * @var 
 */
  public $paymethod_id;

/**
 * Дата на последна редакция на зареждането
 * @var string
 */
  public $last_update;

/**
 * ID на родителско зареждане
 * @var int
 */
  public $parent_id;

/**
 * Сума на разходите от подчинетите зареждания (свързани с PARENT_ID)
 * @var float
 */
  public $total_costs_2;

}
