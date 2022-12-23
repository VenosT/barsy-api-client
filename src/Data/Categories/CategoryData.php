<?php

namespace VenosT\Barsy\Data\Categories;

/**
 * 
 *  */
class CategoryData{

/**
 * ID на категория
 * @var int
 */
  public $cat_id;

/**
 * ID на родителска категория (null за главна категория)
 * @var int
 */
  public $parent_id;

/**
 * Име на категория
 * @var string
 */
  public $cat_name;

/**
 * Публично има на категорията (за текущия език)
 * @var string
 */
  public $cat_name_public;

/**
 * Всички преводи на публично има на категорията (за активните езици)
 * @var string
 */
  public $cat_name_public_ml;

/**
 * Тип на категория
 * @var int
 */
  public $cat_type;

/**
 * Пълен път на категория от основна
 * @var string
 */
  public $cat_path;

/**
 * Описание на категория
 * @var string
 */
  public $description;

/**
 * Всички преводи на описание на категория (на активните езици)
 * @var string
 */
  public $description_ml;

/**
 * Брой артикули в категорията и нейните под категории
 * @var int
 */
  public $child_articles_cnt;

/**
 * Основна картинка на категорията
 * @var string
 */
  public $cat_picture;

/**
 * код за бързо избиране на категория
 * @var string
 */
  public $code;

/**
 * Публично URL на категорията (за електронен магазин)
 * @var string
 */
  public $slug;

/**
 * Икона за категорията
 * @var string
 */
  public $category_icon;

/**
 * Режим на визуализиране на категорията в публично меню
 * @var int
 */
  public $cat_public_view;

/**
 * Път до категорията от основна, описан с id-та на родителските категории
 * @var string
 */
  public $cat_path_ids;

}
