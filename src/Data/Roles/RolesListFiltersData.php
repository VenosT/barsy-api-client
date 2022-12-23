<?php

namespace VenosT\Barsy\Data\Roles;

/**
 * 
 *  */
class RolesListFiltersData{

/**
 * Филтър по ID на роля
 * @var int
 */
  public $role_id;

/**
 * Филтър по име на роля.
 * @var string
 */
  public $role_name;

/**
 * Филтър по тежест на роля
 * @var int
 */
  public $role_weight;

/**
 * Филтър по флаг за изтрит
 * @var int
 */
  public $delete_flag;

/**
 * Филтър по родител
 * @var int
 */
  public $parent_id;

/**
 * Филтър по път на роля.
 * @var string
 */
  public $role_path;

/**
 * Филтър по път на роля.
 * @var string
 */
  public $role_id_path;

}
