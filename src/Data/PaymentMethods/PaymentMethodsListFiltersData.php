<?php

namespace VenosT\Barsy\Data\PaymentMethods;

/**
 * 
 *  */
class PaymentMethodsListFiltersData{

/**
 * 
 * @var int
 */
  public $return_mode;

/**
 * Филтър по ID на начин на плащане
 * @var int
 */
  public $paymethod_id;

/**
 * Филтър по търговски обект
 * @var int
 */
  public $barsy_id;

/**
 * Филтър по роля
 * @var int
 */
  public $role_id;

/**
 * Филтър дали е публичен начин на плащане
 * @var int
 */
  public $is_public;

/**
 * Филтър дали е изтрит начин на плащане
 * @var int
 */
  public $delete_flag;

/**
 * Филтър по Тип
 * @var int
 */
  public $type_id;

/**
 * 
 * @var int
 */
  public $has_provider;

/**
 * Филтрира по служебно име на външна система
 * @var string
 */
  public $provider_name;

/**
 * Филтър по "дали начина на плащане се показва във фактура"
 * @var int
 */
  public $show_in_invoice;

/**
 * Филтър по флаг за възможност за задаване на сторно плащане
 * @var int
 */
  public $storno_enable;

/**
 * Филтър по страна на доставка
 * @var int
 */
  public $country_id;

/**
 * Филтър по страна на доставка
 * @var int
 */
  public $currency_id;

}
