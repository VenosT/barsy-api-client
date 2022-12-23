<?php

namespace VenosT\Barsy\Data\Articles;

/**
 * 
 *  */
class ArticlesListExtraPropertiesData{

/**
 * Каква част от основните данни да бъде върната
 * @var string
 */
  public $common;

/**
 * име на основната категория
 * @var bool
 */
  public $master_cat;

/**
 * данни за всички категории,
 * @var bool
 */
  public $categories;

/**
 * имена за другите категории
 * @var bool
 */
  public $categories_names;

/**
 * пътища на всички категории
 * @var bool
 */
  public $categories_paths;

/**
 * Подробности за всички категории
 * @var bool
 */
  public $categories_details;

/**
 * данни за доставчиците на артикула
 * @var bool
 */
  public $suppliers_details;

/**
 * Показване на текуща доставна цена и текуща ДДС група (след ценови правила)
 * @var bool
 */
  public $current_delivery_data;

/**
 * Кратки данни (има/няма) за складова наличност
 * @var bool
 */
  public $has_amount;

/**
 * Общи данни (сума за текущия търговски обект) за складова наличност
 * @var bool
 */
  public $store_amount;

/**
 * Общи данни (сума за цялата система) за складова наличност
 * @var bool
 */
  public $store_amount_all;

/**
 * Разширени данни (по складове) за складова наличност
 * @var bool
 */
  public $store_amount_details;

/**
 * Кратки данни (има/няма) за виртуална наличност на артикул с рецепта
 * @var bool
 */
  public $has_amount_recipe;

/**
 * Общи данни (сума за текущия търговски обект) за виртуална наличност на артикул с рецепта
 * @var bool
 */
  public $store_amount_recipe;

/**
 * Общи данни (сума за цялата система) за виртуална наличност на артикул с рецепта
 * @var bool
 */
  public $store_amount_all_recipe;

/**
 * Разширени данни (по складове) за виртуална наличност на артикул с рецепта
 * @var bool
 */
  public $store_amount_details_recipe;

/**
 * Общи данни (сума за текущия търговски обект) за виртуална наличност на артикул с рецепта
 * @var bool
 */
  public $client_orders_reserved_amount;

/**
 * Общи данни (сума за текущия търговски обект) за виртуална наличност на артикул с рецепта
 * @var bool
 */
  public $client_orders_reserved_last_update;

/**
 * Всички характеристики за артикула
 * @var string
 */
  public $article_details;

/**
 * 
 * @var bool
 */
  public $inv_ref_num;

/**
 * 
 * @var bool
 */
  public $form_data;

/**
 * 
 * @var bool
 */
  public $form_data_public;

/**
 * Съдържание (base64) на основната картинка
 * @var int
 */
  public $picture_content;

/**
 * URL адрес за изтегляне на основната картинка
 * @var string
 */
  public $picture_url;

/**
 * Информация за всички прикачени файлове към артикула
 * @var string
 */
  public $files;

/**
 * ID на данъчната група на артикула
 * @var bool
 */
  public $tax_id;

/**
 * Информация по кое ценово правило е изчислена текущата цена
 * @var bool
 */
  public $pricelist_id;

/**
 * Информация за количество, което е в "отворени" клиентски заявки (според настройка на статусите на клиентските заявки)
 * @var bool
 */
  public $client_orders_amount;

/**
 * ID на група на артикула
 * @var bool
 */
  public $group_id;

/**
 * Включва всички мултиезични данни към артикула
 * @var bool
 */
  public $ml_data;

/**
 * Съставен артикул (обикновен,съставен при приключване,съставен при производство)
 * @var bool
 */
  public $composite;

/**
 * Количество поръчки за артикули
 * @var bool
 */
  public $orders_amount;

}
