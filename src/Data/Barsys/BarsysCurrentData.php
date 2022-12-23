<?php

namespace VenosT\Barsy\Data\Barsys;

/**
 * 
 *  */
class BarsysCurrentData{

/**
 * ID на каталог
 * @var int
 */
  public $menu_id;

/**
 * ID на търговски обект
 * @var int
 */
  public $barsy_id;

/**
 * Име на търговския обект
 * @var string
 */
  public $name;

/**
 * Име на файлът, отговарящ за логото
 * @var string
 */
  public $logo;

/**
 * Основен цвят за този търговски обект. Използва се за условно визуално отличаване на текущия обект
 * @var string
 */
  public $background_color;

/**
 * ID на начин на плащане по подразбиране
 * @var int
 */
  public $default_payment_method;

/**
 * Текуща версия на инсталацията
 * @var string
 */
  public $app_version;

/**
 * timestamp на последната промяна на каталога, използван от този търговски обект
 * @var int
 */
  public $info_last_update;

}
