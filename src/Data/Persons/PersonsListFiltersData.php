<?php

namespace VenosT\Barsy\Data\Persons;

/**
 * 
 *  */
class PersonsListFiltersData{

/**
 * Филтър по ID на клиент
 * @var int
 */
  public $client_id;

/**
 * Филтър по ID на представиртел
 * @var int
 */
  public $person_id;

/**
 * Филтър по име на представител
 * @var string
 */
  public $person_name;

/**
 * Филтър по ID на тип на представиртел
 * @var int
 */
  public $type_id;

/**
 * Филтър по ID на тип на представиртел
 * @var string
 */
  public $info_value;

/**
 * Филтър по флаг за изтрит на представител
 * @var int
 */
  public $delete_flag;

}
