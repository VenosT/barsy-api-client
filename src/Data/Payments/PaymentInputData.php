<?php

namespace VenosT\Barsy\Data\Payments;

/**
 * 
 *  */
class PaymentInputData{

/**
 * ID на плащането (празно за ново)
 * @var int
 */
  public $payment_id;

/**
 * Начин на плащане
 * @var int
 */
  public $paymethod_id;

/**
 * Платена сума
 * @var float
 */
  public $paid_sum;

/**
 * Сума за сторниране
 * @var float
 */
  public $storno_sum;

/**
 * account_id на сторното
 * @var int
 */
  public $storno_of_account_id;

/**
 * Необходима информация към плащането (настройва се в конкретния начина на плащане)
 * @var string
 */
  public $req_value;

/**
 * Допълнително данни за плащането
 * @var string
 */
  public $payment_data;

/**
 * Допълнително данни за плащането, който ще се ползват за печат, когато ПОС терминал няма вграден принтер
 * @var \Barsy\Lib\PosTerminal\Data\PosTransactionPrintData
 */
  public $payment_print_data;

/**
 * Номер на транзакция
 * @var string
 */
  public $transaction_id;

/**
 * Референтен номер
 * @var string
 */
  public $ref_num;

/**
 * Дата вальор
 * @var string
 */
  public $ref_date;

/**
 * Свободен текст
 * @var string
 */
  public $description;

/**
 * Данни за бележката на сторно плащането
 * @var \Barsy\Data\Accounts\InputStornoData
 */
  public $receipt_data;

/**
 * Платена сума преди връщане на ресто
 * @var float
 */
  public $actual_paid_sum;

}
