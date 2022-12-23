<?php

namespace VenosT\Barsy\Data\Payments;

/**
 * 
 *  */
class PaymentsListFiltersData{

/**
 * 
 * @var int
 */
  public $payment_id;

/**
 * ID на клиента, направил плащането
 * @var int
 */
  public $client_id;

/**
 * ID на сметка
 * @var int
 */
  public $account_id;

/**
 * ID на потребителя, приел плащането
 * @var int
 */
  public $user_id;

/**
 * Взема само плащания, които не са изполвани напълно
 * @var int
 */
  public $unused;

/**
 * Взема само плащания, по които могат да се стонират суми
 * @var int
 */
  public $storno_available;

}
