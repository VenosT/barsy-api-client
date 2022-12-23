<?php

namespace VenosT\Barsy\Data\Articles;

/**
 * 
 *  */
class ArticlesListFiltersData{

/**
 * Филтър по ID на артикул
 * @var int
 */
  public $article_id;

/**
 * Филтър по име на артикул. Намира и при частично съвпадение
 * @var string
 */
  public $article_name;

/**
 * Филтрира по точно име на артикул
 * @var string
 */
  public $article_name_eq;

/**
 * Филтър по синоним на артикул (включва и имената)
 * @var string
 */
  public $alias_name;

/**
 * Филтър по описание на артикул
 * @var string
 */
  public $description;

/**
 * Филтър по дата на създаване на артикул
 * @var datetime
 */
  public $create_date;

/**
 * Филтър по минимално складово количество
 * @var float
 */
  public $min_amount;

/**
 * Филтър по базова цена
 * @var float
 */
  public $actual_price;

/**
 * Филтър по тип артикул (обикновен,съставен при приключване,съставен при производство)
 * @var int
 */
  public $composite;

/**
 * Филтър по флаг за изтрит
 * @var int
 */
  public $delete_flag;

/**
 * Филтър по код на артикул
 * @var string
 */
  public $code;

/**
 * Филтър по тип на количеството
 * @var int
 */
  public $amount_type_id;

/**
 * Филтър по поток на филтър
 * @var int
 */
  public $stream_id;

/**
 * Филтър по единица продажба
 * @var float
 */
  public $amount_unit;

/**
 * Филтър по тип на артикул
 * @var int
 */
  public $article_type;

/**
 * Филтър по група
 * @var int
 */
  public $group_id;

/**
 * Филтър по родител
 * @var int
 */
  public $parent_id;

/**
 * Филтър по процент за персонала
 * @var float
 */
  public $user_prc;

/**
 * Филтър по RED_ID
 * @var int
 */
  public $ref_id;

/**
 * Филтър по максимално количество
 * @var float
 */
  public $max_amount;

/**
 * Филтър по флаг дали артикула е в продажба
 * @var array
 */
  public $is_for_sale;

/**
 * Филтър по флаг дали артикула може да участва в клиентска заявка
 * @var array
 */
  public $is_for_client_order;

/**
 * Филтър по флаг дали артикула може да се зарежда
 * @var array
 */
  public $is_for_load;

/**
 * Филтър по флаг дали артикула може да се прехвърля
 * @var array
 */
  public $is_for_store_move;

/**
 * Филтър по флаг дали артикула може де се използва за вътрешна заявка
 * @var array
 */
  public $is_for_irequest;

/**
 * 
 * @var array
 */
  public $is_for_sale_barsys;

/**
 * 
 * @var array
 */
  public $is_for_load_barsys;

/**
 * 
 * @var array
 */
  public $is_for_irequest_barsys;

/**
 * Филтър по референтен номер
 * @var string
 */
  public $ref_num;

/**
 * Филтрира по точен референтен номер
 * @var string
 */
  public $ref_num_eq;

/**
 * Филтър по баркод
 * @var string
 */
  public $barcode;

/**
 * Филтър по баркод
 * @var string
 */
  public $barcode_eq;

/**
 * Филтър по баркод на основен артикул и на наследник
 * @var string
 */
  public $barcode_childs;

/**
 * Филтър по потребител, създал артикула
 * @var int
 */
  public $user_id;

/**
 * Филтър по количество производство
 * @var 
 */
  public $amount_prod;

/**
 * Филтър по основна картинка
 * @var string
 */
  public $picture;

/**
 * Филтър по флаг дали артикула е услуга
 * @var int
 */
  public $is_service;

/**
 * Филтър по EXPORT_ID
 * @var string
 */
  public $export_id;

/**
 * Филтър по флаг дали артикула е публичен
 * @var int
 */
  public $is_public;

/**
 * Филтър по ID на форма за допълнителна информация в клиентски заявки
 * @var int
 */
  public $form_id_co;

/**
 * Филтър по категория
 * @var \Barsy\Filters\Articles\ArticlesListFilter_byCategory
 */
  public $cat_id;

/**
 * Филтър по "родителска" категория. Връща всички артикулите от тази категория или нейните наследници (подкатегории). Може да се подаде опция mode
 * @var int
 */
  public $parent_cat_id;

/**
 * Филтър по единична категория
 * @var int
 */
  public $single_cat_id;

/**
 * Филтър по главна категория
 * @var int
 */
  public $master_cat_id;

/**
 * Филтър по категория и всички вътрешни на нея като филтрирането не се свежда до артикули а пряко по категориите
 * @var int
 */
  public $cat_id_deep;

/**
 * Филтър по последна доставна цена (без ДДС)
 * @var float
 */
  public $delivery_price;

/**
 * Филтър по средно претеглена доставна цена (без ДДС)
 * @var float
 */
  public $avg_delivery_price;

/**
 * Филтър по описание на рецептата
 * @var string
 */
  public $recipe_description;

/**
 * Филтър по последна промяна в данните за артикула(основни данни, характеристики, категоризирания, ценови правила и др.)
 * @var datetime
 */
  public $last_update;

/**
 * Филтър по последна промяна в складовите наличности за артикула. Актуализира за при всяка складова операция
 * @var datetime
 */
  public $amount_last_update;

/**
 * Филтър по последна промяна спрямо датата на складовите наличности за артикула ИЛИ последната промяна на основните данни на артикула
 * @var datetime
 */
  public $all_last_update;

/**
 * Филтър по главен обединяващ артикул (чрез характеристика) при артикули с ref_num
 * @var string
 */
  public $ref_num_group_main;

/**
 * Филтър по характеристики на артикула. Подава се като масив от ключове и стойности, където ключът е името (или id) на характеристиката,a стойност - желаната стойността (или id й).
 * @var array
 */
  public $article_details;

/**
 * 
 * @var int
 */
  public $add_parent_groups;

/**
 * 
 * @var int
 */
  public $no_parent;

/**
 * Филтър за различка между текуща и базова цена
 * @var string
 */
  public $current_price_diff;

/**
 * Филтър по интервали за процент отстъпка. Процент отстъпка се формира от текуща и базова цена
 * @var string
 */
  public $discount_percent;

/**
 * Филтър по клиент. Използва е за изчислване на текуща цена
 * @var int
 */
  public $client_id;

/**
 * Филтър по клиентска група. Използва се за изчислване на текуща цена
 * @var int
 */
  public $client_group_id;

/**
 * Филтър по държава. Използва се за изчислване на текуща цена
 * @var string
 */
  public $country_id;

/**
 * Филтър по валута. Използва се за изчислване на текуща цена
 * @var int
 */
  public $currency_id;

/**
 * Филтър по каса. Използва е за изчислване на текуща цена
 * @var int
 */
  public $pos_id;

/**
 * Филтър по склад. Валиден ако са поискани складовите количества за артикула
 * @var int
 */
  public $depot_id;

/**
 * Филтър по група складове. Валиден ако са поискани складовите количества за артикула
 * @var int
 */
  public $depot_group_id;

/**
 * Филтър по ID-та на артикули. Подреждане на резултатите по подадените id-та
 * @var int
 */
  public $search_article_ids;

/**
 * Филтър по ID на каталог
 * @var int
 */
  public $menu_id;

/**
 * Филтър по участие в рецепта
 * @var array
 */
  public $recipe_component;

/**
 * Филтър по наличност - връща само артикулите с положителна наличност
 * @var bool
 */
  public $has_amount;

/**
 * Филтър по тип партидност
 * @var int
 */
  public $lot_type_id;

/**
 * Филтър флаг за партидност на артикул
 * @var int
 */
  public $use_lots;

/**
 * Филтър по период на количество поръчки за артикули. Изисква extra_element "orders_amount"
 * @var datetime
 */
  public $orders_amount_period;

}
