<?php

namespace VenosT\Barsy;

class BarsyApiAction
{
  /**
   * BarsyApiAction constructor.
   * @param $action_name
   */
  public function __construct($action_name)
  {
    $this->{$action_name} = Array();
  }

  /**
   * @param $action_name
   * @return BarsyApiAction
   */
  public static function create($action_name): BarsyApiAction
  {
    return new BarsyApiAction($action_name);
  }

  /**
   * @param $name
   * @param $values
   * @return $this
   */
  public function setParam($name, $values): self
  {
    $this->{key(get_object_vars($this))} [$name] = $values;
    return $this;
  }
}
