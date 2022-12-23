<?php

namespace VenosT\Barsy\Data\DeliveryAddress;

/**
 * 
 *  */
class DeliveryAddressData{

/**
 * Тип на доставката [
 * @var string
 */
  public $delivery_type;

/**
 * ID на търговски обект (ако типа на доставката е до търговски обект)
 * @var int
 */
  public $barsy_id;

/**
 * ID на населено място
 * @var int
 */
  public $dest_id;

/**
 * Адрес за доставка (кв,бул/ул,
 * @var string
 */
  public $address;

/**
 * ID на офис на куриер по номенклатурата на съответния куриер
 * @var int
 */
  public $office_id;

/**
 * ID на спедитор
 * @var int
 */
  public $speditor_id;

/**
 * Пощенски код
 * @var string
 */
  public $zip;

/**
 * Допълнителна информация към адреса за доставка
 * @var string
 */
  public $description;

/**
 * ID на държава
 * @var string
 */
  public $country_id;

/**
 * Координати на адреса
 * @var string
 */
  public $coords;

}
