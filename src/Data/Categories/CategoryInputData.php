<?php

namespace VenosT\Barsy\Data\Categories;

/**
 * 
 *  */
class CategoryInputData{

/**
 * Име на категорията
 * @var string
 */
  public $cat_name;

/**
 * Публично име на категорията
 * @var \Barsy\Data\Languages\MultiLanguageData
 */
  public $cat_name_public;

/**
 * ID на родителска категория. Null ако няма родител (най-горно ниво)
 * @var int
 */
  public $parent_id;

/**
 * Икона за категорията
 * @var string
 */
  public $category_icon;

/**
 * Свободен текст описание
 * @var \Barsy\Data\Languages\MultiLanguageData
 */
  public $description;

/**
 * Код за бързо избиране
 * @var int
 */
  public $code;

/**
 * 
 * @var string
 */
  public $cat_picture;

/**
 * Публичен URL на категорията
 * @var string
 */
  public $slug;

/**
 * Публичен изглед на категорията
 * @var int
 */
  public $cat_public_view;

}
