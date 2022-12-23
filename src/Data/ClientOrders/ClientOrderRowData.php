<?php

namespace VenosT\Barsy\Data\ClientOrders;

/**
 * 
 *  */
class ClientOrderRowData{

/**
 * ID на реда
 * @var integer
 */
  public $client_order_row;

/**
 * ID на артикул по номеклатура на barsy
 * @var integer
 */
  public $article_id;

/**
 * Име на артикул по номеклатура на barsy
 * @var string
 */
  public $article_name;

/**
 * Желано количество - може да бъде дробно число до 9-ти знак
 * @var float
 */
  public $amount;

/**
 * Единична цена на поръчката - ако не е подадена, ще бъде ползвана текущата цена за този търговски обект/клиент/артикул
 * @var float
 */
  public $current_price;

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

/**
 * Id на потребител, въвел артикула
 * @var int
 */
  public $user_id;

/**
 * Последна промяна на артикула в заявката
 * @var datetime
 */
  public $last_update;

/**
 * Чексума на данните на реда
 * @var string
 */
  public $details_checksum;

/**
 * Тип количество - кратко име
 * @var string
 */
  public $amount_type_name_short;

}
