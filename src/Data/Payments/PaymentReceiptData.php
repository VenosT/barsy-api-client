<?php

namespace VenosT\Barsy\Data\Payments;

/**
 * 
 *  */
class PaymentReceiptData{

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
 * @var \Barsy\Lib\PosTerminal\Data\PosTransactionPrintData
 */
  public $payment_print_data;

/**
 * 
 * @var int
 */
  public $payment_id;

}
