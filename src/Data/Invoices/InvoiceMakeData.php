<?php

namespace VenosT\Barsy\Data\Invoices;

/**
 * 
 *  */
class InvoiceMakeData{

/**
 * Тип фактура. 1
 * @var int
 */
  public $gen_mode;

/**
 * Казва дали да се изпрати фактурата, за печат, към настроения служебен принтер на текущата каса
 * @var bool
 */
  public $print;

/**
 * Име на фирма получател
 * @var string
 */
  public $receiver_company_name;

/**
 * ЕИК на получател
 * @var string
 */
  public $receiver_identity_num;

/**
 * ДДС
 * @var string
 */
  public $receiver_vat_num;

/**
 * МОЛ на получател
 * @var string
 */
  public $receiver_mol;

/**
 * Име на получател
 * @var string
 */
  public $receiver_name;

/**
 * Град на получател
 * @var string
 */
  public $receiver_town;

/**
 * Адрес на получател
 * @var string
 */
  public $receiver_address;

}
