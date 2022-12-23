<?php

namespace VenosT\Barsy\Data\Salons;

/**
 * 
 *  */
class PlaceData{

/**
 * ID на текущото място
 * @var int
 */
  public $place_id;

/**
 * ID на типа на мястото
 * @var int
 */
  public $place_type;

/**
 * Номер на мястото (свободно избираем)
 * @var int
 */
  public $place_num;

/**
 * Координати и размери на текущото място на схемата (x,y,w,h).
 * @var string
 */
  public $pos;

/**
 * Тип на текущото място
 * @var string
 */
  public $type_name;

/**
 * Публично видомо ли е мястото
 * @var int
 */
  public $is_public;

/**
 * Основна снимка
 * @var string
 */
  public $picture;

/**
 * ID на зона/салон, към която принадлежи текущото място
 * @var int
 */
  public $salon_id;

/**
 * Име на зона/салон, към която принадлежи текущото място
 * @var string
 */
  public $salon_name;

/**
 * Брой отворени сметка, асоцирани към мястото
 * @var int
 */
  public $accounts_count;

}
