<?php

namespace VenosT\Barsy\Data\Suppliers;

/**
 * 
 *  */
class SupplierArticlesData{

/**
 * Article_id
 * @var int
 */
  public $article_id;

/**
 * Договорена доставна цена
 * @var float
 */
  public $default_delivery_price;

/**
 * ID на артикула в номенклатирата на доставчика
 * @var string
 */
  public $remote_ref_id;

/**
 * Име на артикула в номенклатирата на доставчика
 * @var string
 */
  public $remote_article_name;

}
