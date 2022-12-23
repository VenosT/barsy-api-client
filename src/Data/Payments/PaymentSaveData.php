<?php

namespace VenosT\Barsy\Data\Payments;

/**
 * 
 *  */
class PaymentSaveData{

/**
 * 
 * @var int
 */
  public $payment_id;

/**
 * Начин на плащане
 * @var int
 */
  public $paymethod_id;

/**
 * Платена сума във валута
 * @var float
 */
  public $original_paid_sum;

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
 * Списък от редове за печат след регистиране на плащането във фискалния бон
 * @var \Barsy\Data\Devices\ReceiptEndlineData
 */
  public $payment_print_lines;

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

/**
 * ID на валута
 * @var int
 */
  public $currency_id;

/**
 * 
 * @var string
 */
  public $link_type;

/**
 * 
 * @var int
 */
  public $barsy_id;

/**
 * 
 * @var int
 */
  public $pos_id;

/**
 * 
 * @var int
 */
  public $period_id;

/**
 * 
 * @var int
 */
  public $user_id;

/**
 * 
 * @var int
 */
  public $confirmed;

/**
 * 
 * @var int
 */
  public $storno_parent_id;

/**
 * 
 * @var array
 */
  public $accounts;

/**
 * 
 * @var array
 */
  public $reservations;

/**
 * 
 * @var array
 */
  public $client_orders;

/**
 * 
 * @var 
 */
  public $invoice_data;

/**
 * 
 * @var string
 */
  public $payment_type;

/**
 * 
 * @var int
 */
  public $target_payment_id_storno;

/**
 * 
 * @var \Barsy\Data\Devices\StornoData
 */
  public $storno_data;

/**
 * IBAN когато се прави плащане от извлечение от банка. После го записваме в b_clients.BANK_ACCOUNTS
 * @var string
 */
  public $bank_account;

/**
 * 
 * @var int
 */
  public $client_id;

}
