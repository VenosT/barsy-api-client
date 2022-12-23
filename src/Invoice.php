<?php

namespace VenosT\Barsy;

/**
 * 
 *  */
class Invoice{

/**
 * ID на фактурата (вътрешна номеклатура)
 * @var int
 */
  public $inv_id;

/**
 * SID на фактурата (вътрешна номеклатура кодирана)
 * @var string
 */
  public $inv_sid;

/**
 * 
 * @var string
 */
  public $inv_num;

/**
 * Тип на документа (фактура, проформа, дебитно/кредитно известие, стокова ...)
 * @var int
 */
  public $type_id;

/**
 * Тип на документа
 * @var string
 */
  public $type_name;

/**
 * Номер на документ, по който е издаден този
 * @var string
 */
  public $parent_num;

/**
 * Дата на издаване
 * @var date
 */
  public $produce_date;

/**
 * 
 * @var date
 */
  public $create_date;

/**
 * 
 * @var date
 */
  public $term_date;

/**
 * Дата за плащане
 * @var date
 */
  public $payment_date;

/**
 * Тип на плащане
 * @var int
 */
  public $payment_type_id;

/**
 * Начин на плащане
 * @var string
 */
  public $payment_type_name;

/**
 * Флаг дали фактурата е анулирана
 * @var int
 */
  public $is_anulate;

/**
 * Обсща сума на фактурата
 * @var float
 */
  public $total;

/**
 * Обща сума с ДДС (ако се начислява)
 * @var float
 */
  public $total_sum;

/**
 * Обща сума без ДДС
 * @var float
 */
  public $total_neto;

/**
 * Сума на ДДС
 * @var float
 */
  public $total_dds;

/**
 * 
 * @var decimal
 */
  public $total_all;

/**
 * Словом на сумата на фактурата
 * @var string
 */
  public $total_all_string;

/**
 * Словом на сумата на ДДС
 * @var string
 */
  public $total_dds_string;

/**
 * Флаг дали единичните цени са с начислен ДДС
 * @var int
 */
  public $with_dds;

/**
 * Стойност на ДДС в проценти
 * @var int
 */
  public $dds;

/**
 * Флаг за начисляване на ДДС (начислен, неначислен, нулева ставка)
 * @var string
 */
  public $dds_type;

/**
 * Причина за неначисляване (ако не е начислен ДДС)
 * @var string
 */
  public $dds_reason;

/**
 * Име на издал фактурата
 * @var string
 */
  public $seller_name;

/**
 * Име на получил фактурата
 * @var string
 */
  public $receiver_name;

/**
 * Допълнителен текст към фактурата
 * @var string
 */
  public $additional_text;

/**
 * Уникален код на издал фактурата
 * @var int
 */
  public $seller_code;

/**
 * ID на издател на фактурата
 * @var int
 */
  public $seller_company_id;

/**
 * ID на банкова сметка за която е фактурата
 * @var int
 */
  public $seller_bank_account_id;

/**
 * ID на клиента (номенклатура на Barsy)
 * @var int
 */
  public $client_id;

/**
 * Данни за клиента
 * @var \Barsy\Data\Clients\ClientData
 */
  public $client;

/**
 * Търговски обект, в който е издадена фактурата
 * @var int
 */
  public $barsy_id;

/**
 * ID на потребителя, издал фактурата
 * @var int
 */
  public $user_id;

/**
 * Данни за банковата сметка
 * @var \Barsy\Services\Invoices\InvoiceBankAccountService
 */
  public $bank_account;

/**
 * Данни за получателя на фактурата
 * @var \Barsy\Services\Invoices\InvoiceCompanyService
 */
  public $receiver;

/**
 * Данни за издателя на фактурата
 * @var \Barsy\Services\Invoices\InvoiceCompanyService
 */
  public $seller;

/**
 * Списък с артикулите към фактурата
 * @var array
 */
  public $items;

/**
 * Списък с прикачените сметки към фактурата
 * @var array
 */
  public $accounts;

}
