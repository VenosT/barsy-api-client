<?php

namespace VenosT\Barsy\Data\ClientOrders;

/**
 * 
 *  */
class ClientOrderStatus{

/**
 * ID на статус
 * @var int
 */
  public $status_id;

/**
 * Име на статус
 * @var string
 */
  public $status_name;

/**
 * Флаг за изтрит статус
 * @var int
 */
  public $delete_flag;

/**
 * Настройка за цвят на статус в списъци
 * @var string
 */
  public $color;

/**
 * Настройка за питане за обработващ търговски обект при назначаване на статус
 * @var int
 */
  public $ask_for_barsy;

}
