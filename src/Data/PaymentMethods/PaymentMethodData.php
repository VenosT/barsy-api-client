<?php

namespace VenosT\Barsy\Data\PaymentMethods;

/**
 * 
 *  */
class PaymentMethodData{

/**
 * ID на начин на плащане
 * @var int
 */
  public $paymethod_id;

/**
 * Име на начин на плащане
 * @var string
 */
  public $name;

/**
 * Извършва ли фискална операция
 * @var int
 */
  public $fx;

/**
 * Флаг дали се изисква допълнителна информация към плащането (напр. номер на карта). Като стойност може да се подаде регулярен израз за валидация
 * @var string
 */
  public $require_info;

/**
 * Пояснение каква допълнителна информация се изисква към плащането (напр. "Последните 4 цифри на картата")
 * @var string
 */
  public $require_info_title;

/**
 * Източник на списък с данни
 * @var string
 */
  public $require_info_list_data_source;

/**
 * ID на платежен оператор
 * @var int
 */
  public $provider_id;

/**
 * 
 * @var 
 */
  public $description;

/**
 * 
 * @var 
 */
  public $pay_from_client_balance;

/**
 * Публично име
 * @var string
 */
  public $public_name;

/**
 * 
 * @var int
 */
  public $type_id;

/**
 * 
 * @var 
 */
  public $settings;

/**
 * 
 * @var int
 */
  public $show_in_invoice;

}
