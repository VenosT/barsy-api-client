<?php
/**
 *
 * @category   test_project
 * @author     Barsy <dev@Barsy.com>
 * @since      12:31
 */

namespace VenosT\Barsy;

class BarsyApiData {


  /**
   * @template T
   * @param class-string<T> $class
   * @return T
   */
  public static function factory(string $class):object
  {
    return new \stdClass();
  }
}