<?php

namespace VenosT\Barsy\Data\ClientOrders;

/**
 * 
 *  */
class ClientOrdersListFiltersData{

/**
 * ID на клиентската заявка (по barsy номенклатура)
 * @var int
 */
  public $client_order_id;

/**
 * Номер на заявката от външна номенклатура
 * @var string
 */
  public $order_num;

/**
 * Филтриране по клиент
 * @var int
 */
  public $client_id;

/**
 * ID на търговски обект, в който текущо се обработва заявката
 * @var int
 */
  public $barsy_id;

/**
 * ID на търговския обект, в който ще се получава заявката (ако е до търговски обект)
 * @var int
 */
  public $delivery_barsy_id;

/**
 * ID на търговски обект, в който е направена заявката
 * @var int
 */
  public $from_barsy_id;

/**
 * Дата на последна промяна в клиентската заявка (период или точна дата)
 * @var datetime
 */
  public $last_update;

/**
 * Дата за доставка (период или точна дата)
 * @var datetime
 */
  public $delivery_date;

/**
 * Статус на клиентската заявка
 * @var int
 */
  public $status_id;

/**
 * Търсене по client_order_id и order_num
 * @var string
 */
  public $search;

}
