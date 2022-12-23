<?php

namespace VenosT\Barsy\Data\Invoices;

/**
 * 
 *  */
class InvoiceData{

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
 * 
 * @var 
 */
  public $linked_accounts_num;

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
 * @var string
 */
  public $produce_date;

/**
 * 
 * @var string
 */
  public $create_date;

/**
 * 
 * @var string
 */
  public $term_date;

/**
 * Дата за плащане
 * @var string
 */
  public $payment_date;

/**
 * 
 * @var 
 */
  public $paymethod_id;

/**
 * 
 * @var 
 */
  public $paymethod_name;

/**
 * Флаг дали фактурата е анулирана
 * @var int
 */
  public $is_anulate;

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
 * Флаг дали при печат да се печатат артикулите с ед.цени с ДДС
 * @var int
 */
  public $with_tax;

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
 * Списък с прикачените сметки към фактурата
 * @var array
 */
  public $accounts;

/**
 * 
 * @var int
 */
  public $seller_id;

/**
 * 
 * @var int
 */
  public $receiver_id;

/**
 * 
 * @var 
 */
  public $client_name;

/**
 * 
 * @var 
 */
  public $currency;

/**
 * 
 * @var InvoiceCompanyData
 */
  public $seller;

/**
 * 
 * @var InvoiceCompanyData
 */
  public $receiver;

/**
 * 
 * @var 
 */
  public $parent;

/**
 * 
 * @var 
 */
  public $linked_documents;

/**
 * 
 * @var int
 */
  public $bank_account_id;

/**
 * 
 * @var InvoiceBankAccountData
 */
  public $bank_account;

/**
 * 
 * @var 
 */
  public $seller_pop_name;

/**
 * 
 * @var 
 */
  public $paymethod_version_id;

/**
 * 
 * @var 
 */
  public $deal_id;

/**
 * 
 * @var 
 */
  public $deal_title;

/**
 * Списък с артикулите към фактурата
 * @var InvoiceItemData
 */
  public $items;

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
 * @var float
 */
  public $total_all;

/**
 * 
 * @var float
 */
  public $discount;

/**
 * 
 * @var 
 */
  public $discount_sum;

/**
 * 
 * @var 
 */
  public $initial_total;

/**
 * 
 * @var 
 */
  public $tax_totals_by_tax;

/**
 * 
 * @var 
 */
  public $tax_neto_by_tax;

}
