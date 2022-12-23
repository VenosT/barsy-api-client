<?php

namespace VenosT\Barsy\Data\Reservations;

/**
 * 
 *  */
class ReservationsListFiltersData{

/**
 * Филтър по id на търговски обект
 * @var int
 */
  public $barsy_id;

/**
 * Филтър по id на потребител(създател)
 * @var int
 */
  public $user_id;

/**
 * Филтър по дата на създаване
 * @var datetime
 */
  public $create_date;

/**
 * Филтър по дата на актуализация
 * @var datetime
 */
  public $last_update;

/**
 * Филтър по "дата от"
 * @var datetime
 */
  public $from_date;

/**
 * Филтър по "дата до"
 * @var datetime
 */
  public $to_date;

/**
 * Филтър по "дата от до"
 * @var datetime
 */
  public $date_window;

/**
 * Филтър по флаг "Изтрит"
 * @var int
 */
  public $delete_flag;

}
