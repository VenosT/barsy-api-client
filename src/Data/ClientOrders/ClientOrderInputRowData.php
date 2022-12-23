<?php

namespace VenosT\Barsy\Data\ClientOrders;

/**
 * 
 *  */
class ClientOrderInputRowData{

/**
 * ID на реда (празно при подаване на нов ред в поръчката)
 * @var integer
 */
  public $client_order_row;

/**
 * ID на артикул по номеклатура на barsy
 * @var integer
 */
  public $article_id;

/**
 * Желано количество - може да бъде дробно число до 9-ти знак
 * @var float
 */
  public $amount;

/**
 * 
 * @var float
 */
  public $current_price;

/**
 * Единична цена на поръчката - ако не е подадена, ще бъде ползвана текущата цена за този търговски обект/клиент/артикул
 * @var float
 */
  public $original_price;

/**
 * ID на данъчна група от номенклатурата им
 * @var int
 */
  public $tax_id;

/**
 * Свободен текст - Може да съдържа някакви допълнително описание към конкретния артикул
 * @var string
 */
  public $detail_notes;

/**
 * Детайли към артикула
 * @var object
 */
  public $details;

/**
 * 
 * @var int
 */
  public $detail_status;

}
