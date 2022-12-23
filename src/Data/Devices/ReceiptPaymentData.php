<?php

namespace VenosT\Barsy\Data\Devices;

/**
 * 
 *  */
class ReceiptPaymentData{

/**
 * 
 * @var int
 */
  public $fx;

/**
 * 
 * @var string
 */
  public $code;

/**
 * 
 * @var string
 */
  public $name;

/**
 * 
 * @var int
 */
  public $paymethod_id;

/**
 * 
 * @var float
 */
  public $paid_sum;

/**
 * 
 * @var ReceiptEndlineData
 */
  public $endlines;

/**
 * 
 * @var int
 */
  public $payment_id;

}
