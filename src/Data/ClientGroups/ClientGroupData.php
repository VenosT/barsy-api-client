<?php

namespace VenosT\Barsy\Data\ClientGroups;

/**
 * 
 *  */
class ClientGroupData{

/**
 * ID на групата
 * @var int
 */
  public $group_id;

/**
 * Име на групата
 * @var string
 */
  public $group_name;

/**
 * Кредитен лимит по подразбиране за всички членове на групата (ако не им е зададена индивидуална)
 * @var float
 */
  public $default_credit_limit;

/**
 * Отстъпка по подразбиране за всички членове на групата (ако не им е зададена индивидуална)
 * @var int
 */
  public $default_discount;

/**
 * Описание - свободен текст
 * @var string
 */
  public $description;

/**
 * "Тежест" при подреждане на списъка от групи
 * @var int
 */
  public $weight;

/**
 * Флаг за изтритост
 * @var int
 */
  public $delete_flag;

/**
 * 
 * @var string
 */
  public $ml_group_id;

/**
 * Флаг дали групата влиза в клиентските прагове
 * @var int
 */
  public $client_levels_enabled;

/**
 * 
 * @var int
 */
  public $default_ml_clients_sub;

/**
 * 
 * @var int
 */
  public $default_paid_period;

/**
 * 
 * @var int
 */
  public $default_paymethod_id;

}
