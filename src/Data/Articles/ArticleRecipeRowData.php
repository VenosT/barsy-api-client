<?php

namespace VenosT\Barsy\Data\Articles;

/**
 * 
 *  */
class ArticleRecipeRowData{

/**
 * ID на артикул-съставка
 * @var int
 */
  public $sub_article_id;

/**
 * Количество, с което участва артикула в рецептата и се изтегля от склад при изпълнение на рецептата
 * @var float
 */
  public $part;

/**
 * Количество, се влага реално в крайния продукт при изпълнение на рецептата (за справки)
 * @var float
 */
  public $part_after;

}
