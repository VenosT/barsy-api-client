<?php

namespace VenosT\Barsy\Data\Modificators;

/**
 * 
 *  */
class ModificatorInputData{

/**
 * ID на модификатор
 * @var int
 */
  public $id;

/**
 * Име на модификатор (ако няма ID и е подадено име - създава се нов или се използва съществуващ с това име)
 * @var string
 */
  public $name;

/**
 * Флаг дали желание модификатор трябва да присъства (1) или да отстъства(2) в поръчката. Визуализира се с (
 * @var int
 */
  public $operation;

}
