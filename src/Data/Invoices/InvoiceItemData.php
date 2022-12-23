<?php

namespace VenosT\Barsy\Data\Invoices;

/**
 * 
 *  */
class InvoiceItemData{

/**
 * 
 * @var int
 */
  public $item_id;

/**
 * Име на артикул
 * @var string
 */
  public $item_name;

/**
 * Единична цена без ДДС
 * @var float
 */
  public $single_price;

/**
 * Единична цена с ДДС
 * @var float
 */
  public $single_price_with_tax;

/**
 * Колиество на артикул
 * @var float
 */
  public $quantity;

/**
 * 
 * @var float
 */
  public $line_total;

/**
 * 
 * @var float
 */
  public $line_total_with_tax;

/**
 * Мерна единица на артикул
 * @var string
 */
  public $measure;

/**
 * ДДС група на артикул
 * @var int
 */
  public $tax_id;

/**
 * ДДС на артикул
 * @var int
 */
  public $tax;

/**
 * Референтен номер на артикул
 * @var string
 */
  public $inv_ref_num;

/**
 * ID на артикул
 * @var int
 */
  public $article_id;

/**
 * 
 * @var string
 */
  public $tax_reason;

/**
 * 
 * @var float
 */
  public $discount;

}
