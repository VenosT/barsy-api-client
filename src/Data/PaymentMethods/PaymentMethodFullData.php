<?php

namespace VenosT\Barsy\Data\PaymentMethods;

/**
 * 
 *  */
class PaymentMethodFullData{

/**
 * 
 * @var 
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
 * Описание на начина на плащане - свободен текст
 * @var string
 */
  public $description;

/**
 * Кратко име на начина на плащане (до 2-3-4 символа)
 * @var string
 */
  public $name_short;

/**
 * Фискален код на начина на плащане
 * @var string
 */
  public $code;

/**
 * Флаг дали начина на плащане генерира бележка към принтерите
 * @var bool
 */
  public $print_receipe;

/**
 * Флаг дали начина на плане е маркиран като изтрит
 * @var int
 */
  public $delete_flag;

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
 * Тежест на начина на плащане. Използва се при подреждане в списъци
 * @var int
 */
  public $paymethod_weight;

/**
 * ID на платежен оператор
 * @var int
 */
  public $provider_id;

/**
 * Настройки за избрания платежен оператор
 * @var array
 */
  public $provider_settings;

/**
 * 
 * @var 
 */
  public $rest_back;

/**
 * Флаг дали начина на плащане е достъп в публичната част
 * @var int
 */
  public $is_public;

/**
 * 
 * @var 
 */
  public $public_weight;

/**
 * Тежест на начина на плащане в публичната част. Използва се при подреждане в списъци
 * @var int
 */
  public $print_copy;

/**
 * 
 * @var 
 */
  public $pay_from_client_balance;

/**
 * Интервал от време за извършване на плащането
 * @var string
 */
  public $payment_paid_period;

/**
 * 
 * @var null
 */
  public $public_name;

}
