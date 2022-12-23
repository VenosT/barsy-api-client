<?php

namespace VenosT\Barsy\Data\Accounts;

/**
 * 
 *  */
class AccountsListFiltersData{

/**
 * Филтър по ID на сметка
 * @var int
 */
  public $account_id;

/**
 * Филтър по SID на сметка
 * @var string
 */
  public $account_sid;

/**
 * Филтър по ID на търговски обект
 * @var int
 */
  public $barsy_id;

/**
 * Филтър по потребител, създал сметката
 * @var int
 */
  public $user_id;

/**
 * Филтър по начин на плащане
 * @var int
 */
  public $paymethod_id;

/**
 * Филтър по период
 * @var int
 */
  public $period_id;

/**
 * Филтър по ID на клиент
 * @var int
 */
  public $client_id;

/**
 * Филтър по ID на група на клиент
 * @var int
 */
  public $client_group_id;

/**
 * Филтър по ID на мястото на сметката
 * @var int
 */
  public $place_id;

/**
 * Филтър по статус на сметката
 * @var int
 */
  public $status;

/**
 * Филтър по дата на откриване на сметка (период или точна дата)
 * @var datetime
 */
  public $create_date;

/**
 * Филтър по дата на затваряне на сметката (период или точна дата)
 * @var datetime
 */
  public $close_date;

/**
 * Филтър по вальор (документна дата) на сметка (период или точна дата)
 * @var datetime
 */
  public $ref_date;

/**
 * Филтър по дата на последна поръчка в сметката (период или точна дата)
 * @var datetime
 */
  public $last_order_date;

/**
 * Филтър
 * @var string
 */
  public $list_closed;

/**
 * Филтър
 * @var string
 */
  public $list_opened;

}
