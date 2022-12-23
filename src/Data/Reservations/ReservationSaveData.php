<?php

namespace VenosT\Barsy\Data\Reservations;

/**
 * 
 *  */
class ReservationSaveData{

/**
 * ID на клиент на резервацията
 * @var int
 */
  public $client_id;

/**
 * ID на представителя
 * @var int
 */
  public $person_id;

/**
 * Име на представителя
 * @var string
 */
  public $person_name;

/**
 * Лице за контакт
 * @var string
 */
  public $contact_name;

/**
 * Телефонен номер на клиента за резервацията
 * @var string
 */
  public $phone;

/**
 * Начална дата и час на резервацията
 * @var string
 */
  public $from_date;

/**
 * Крайна дата и час на резервацията
 * @var string
 */
  public $to_date;

/**
 * Брой посетители към резервацията
 * @var int
 */
  public $persons;

/**
 * Време за изчакване на резервацията в минути
 * @var int
 */
  public $wait_interval;

/**
 * Очаквана сума за капариране на резервацията
 * @var float
 */
  public $caparo;

/**
 * Очаквана сума за капариране на резервацията
 * @var float
 */
  public $discount;

/**
 * Описание (свободен текст)
 * @var string
 */
  public $description;

/**
 * 
 * @var int
 */
  public $delete_flag;

/**
 * Места към резервациите
 * @var array
 */
  public $places;

/**
 * Статус на резервацията
 * @var int
 */
  public $status_id;

/**
 * Списък с потребители, обслужащи резервацията
 * @var array
 */
  public $servers;

/**
 * Брой на вида хора
 * @var array
 */
  public $person_type_count;

/**
 * ID на търговски обект
 * @var int
 */
  public $barsy_id;

}
