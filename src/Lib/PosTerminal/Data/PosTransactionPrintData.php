<?php

namespace VenosT\Barsy\Lib\PosTerminal\Data;

/**
 * 
 *  */
class PosTransactionPrintData{

/**
 * ID на ПОС терминала
 * @var string
 */
  public $terminal_id;

/**
 * ID на търговеца
 * @var string
 */
  public $merchant_id;

/**
 * 
 * @var string
 */
  public $merchant_name;

/**
 * адрес на търговеца
 * @var string
 */
  public $merchant_address;

/**
 * 
 * @var string
 */
  public $emboss_name;

/**
 * код на тип на картата : A0000...
 * @var string
 */
  public $aid;

/**
 * Тип карта: VISAELECTRON и т.н
 * @var string
 */
  public $aid_name;

/**
 * част от номер на картата - скрит -
 * @var string
 */
  public $pan_masked;

/**
 * Сума на транзакцията
 * @var float
 */
  public $amount;

/**
 * Номер на валута
 * @var int
 */
  public $currency;

/**
 * Authorization code from Issuer
 * @var string
 */
  public $auth_code;

/**
 * Пореден номер на транзакцията
 * @var string
 */
  public $stan;

/**
 * Retrieval reference number
 * @var string
 */
  public $rrn;

/**
 * Дата на транзакцията
 * @var string
 */
  public $tx_date;

/**
 * Време на транзакцията HH:MM:SS
 * @var string
 */
  public $tx_time;

/**
 * Флаг дали се изисква подпис
 * @var int
 */
  public $signature_not_req;

}
