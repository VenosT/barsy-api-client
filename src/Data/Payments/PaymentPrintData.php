<?php

namespace VenosT\Barsy\Data\Payments;

/**
 * 
 *  */
class PaymentPrintData{

/**
 * 
 * @var int
 */
  public $paymethod_id;

/**
 * 
 * @var string
 */
  public $name;

/**
 * 
 * @var string
 */
  public $code;

/**
 * 
 * @var int
 */
  public $fx;

/**
 * 
 * @var float
 */
  public $paid_sum;

/**
 * 
 * @var \VenosT\Barsy\Lib\PosTerminal\Data\PosTransactionPrintData
 */
  public $payment_print_data;

}
