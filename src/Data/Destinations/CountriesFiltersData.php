<?php

namespace VenosT\Barsy\Data\Destinations;

/**
 * 
 *  */
class CountriesFiltersData{

/**
 * Филтър по име на страна
 * @var string
 */
  public $country_name;

/**
 * Филтър по двубуквен код на страна
 * @var string
 */
  public $country_id;

/**
 * Филтър по трибуквен код на страна
 * @var string
 */
  public $country_code_3;

/**
 * Доставя се до тази страна
 * @var int
 */
  public $has_delivery;

}
