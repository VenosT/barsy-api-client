<?php

namespace VenosT\Barsy\Data\Articles;

/**
 * 
 *  */
class ArticleInputData{

/**
 * Име на артикул. Уникално за текущия каталог.
 * @var string
 */
  public $article_name;

/**
 * Публично име на артикула. Вижда се на бележките, в публичния каталог, е-магазин и т.н. Не е уникално.
 * @var string
 */
  public $article_name_public;

/**
 * Публично име на артикул. Мултиезично.
 * @var \VenosT\Barsy\Data\Languages\MultiLanguageData
 */
  public $article_name_public_ml;

/**
 * 
 * @var string
 */
  public $article_icon;

/**
 * Референтен номер. Свободен текст
 * @var string
 */
  public $ref_num;

/**
 * Баркод на артикула
 * @var string
 */
  public $barcode;

/**
 * Базова продажна цена на артикула
 * @var float
 */
  public $actual_price;

/**
 * Средно претеглена доставна цена/себестойност без ДДС
 * @var float
 */
  public $avg_delivery_price;

/**
 * Единица продажба
 * @var float
 */
  public $amount_unit;

/**
 * Единица производство
 * @var float
 */
  public $amount_prod;

/**
 * ID на типа количество
 * @var int
 */
  public $amount_type_id;

/**
 * ID на поток, към който е артикула
 * @var int
 */
  public $stream_id;

/**
 * Флаг, дали артикула е маркиран като изтрит
 * @var int
 */
  public $delete_flag;

/**
 * Флаг, дали артикула може да се продава -  0
 * @var int
 */
  public $is_for_sale;

/**
 * Списък от търговски обекти, за които има изключение от основната стойност на флага за продажба (
 * @var array
 */
  public $is_for_sale_barsys;

/**
 * Флаг, дали артикула е в продажба  0
 * @var int
 */
  public $is_for_load;

/**
 * Списък от търговски обекти, за които има изключение от основната стойност на флага за зареждане (
 * @var array
 */
  public $is_for_load_barsys;

/**
 * Флаг, дали артикула е услуга
 * @var int
 */
  public $is_service;

/**
 * Флаг, дали артикула е публично видим (в публичен каталог, е-магазин)
 * @var int
 */
  public $is_public;

/**
 * Минимално количесто - под него сигнализира за недостатъчна наличност
 * @var int
 */
  public $min_amount;

/**
 * Максимално количесто - допълно до него при заявки към доставчици
 * @var int
 */
  public $max_amount;

/**
 * Минимално възможно количество при поръчка в продажба
 * @var float
 */
  public $min_order;

/**
 * Минимално възможно количество при поръчка в продажба
 * @var float
 */
  public $max_order;

/**
 * Код на артикул - за бързо избиране от клавиатура,везна и др.
 * @var int
 */
  public $code;

/**
 * Процент комисионна за персонал при продажба на този артикул
 * @var int
 */
  public $user_prc;

/**
 * Описание на артикула - свободен текст
 * @var string
 */
  public $description;

/**
 * Каталог, към който принадлежи артикула
 * @var int
 */
  public $menu_id;

/**
 * ID на форма за допълнителна информация за клиентски заявки
 * @var int
 */
  public $form_id_co;

/**
 * ID при експорт на артикули - например за импорт в друга система
 * @var int
 */
  public $export_id;

/**
 * ID на артикула при импорт от друга система
 * @var int
 */
  public $ref_id;

/**
 * Основна картинка на артикула от наличните за него
 * @var string
 */
  public $picture;

/**
 * ID на данъчната ставка
 * @var string
 */
  public $tax_id;

/**
 * ID на категория (или категории ако е подаден масив) в които артикула да бъде категоризиран. Първата добавена категория става главна (ако вече няма главна)
 * @var int
 */
  public $cat_id;

/**
 * Списък от характеристики към артикула
 * @var \VenosT\Barsy\Data\ArticleDetails\ArticleDetailInputData
 */
  public $details;

/**
 * ID на разфасовка по подразбиране (използва се при зареждане)
 * @var int
 */
  public $default_package_id;

/**
 * Флаг за артикул (може ли да се продава без складова наличност)
 * @var int
 */
  public $sale_below_zero;

/**
 * Флаг за артикул (може ли да се прехвърля без складова наличност)
 * @var int
 */
  public $storemove_below_zero;

/**
 * Флаг за артикул (може ли да се връща към доставчик без складова наличност)
 * @var int
 */
  public $storeload_return_below_zero;

/**
 * Списък от търговски обекти и складове, за които има зададено максимално количество.
 * @var 
 */
  public $max_amount_by_depots;

/**
 * Списък от търговски обекти и складове, за които има зададено минимално количество.
 * @var 
 */
  public $min_amount_by_depots;

/**
 * Публичен URL
 * @var string
 */
  public $slug;

/**
 * 
 * @var string
 */
  public $intrastat;

/**
 * 
 * @var float
 */
  public $min_profit_percent;

}
