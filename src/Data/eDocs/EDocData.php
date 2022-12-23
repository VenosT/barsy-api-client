<?php

namespace VenosT\Barsy\Data\eDocs;

/**
 * 
 *  */
class EDocData{

/**
 * Обща отстъпка за сметка в проценти (отрицателна стойност -
 * @var float
 */
  public $discount;

/**
 * ID на начина на плащане
 * @var int
 */
  public $paymethod_id;

/**
 * Име на клиента, асоциран с документа
 * @var string
 */
  public $client_name;

/**
 * Описание на документа - свободен текст
 * @var string
 */
  public $description;

/**
 * Списък от поръчки към сметка
 * @var eDocOrderData
 */
  public $orders;

/**
 * Текущ статус на документа
 * @var string
 */
  public $status;

/**
 * Тип на документа
 * @var string
 */
  public $type;

/**
 * ID на документ
 * @var int
 */
  public $doc_id;

/**
 * Датата на която е създаден документа
 * @var datetime
 */
  public $date;

/**
 * Обща сума за сметка
 * @var float
 */
  public $total;

}
