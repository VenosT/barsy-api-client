<?php

namespace VenosT\Barsy\Data\Files;

/**
 * 
 *  */
class FileData{

/**
 * Име на файла
 * @var string
 */
  public $name;

/**
 * Размер на файла в байтове
 * @var integer
 */
  public $size;

/**
 * MIME тип на файла
 * @var string
 */
  public $type;

/**
 * Дата на последна модификация на файла
 * @var string
 */
  public $last_modified;

/**
 * 
 * @var string
 */
  public $url;

/**
 * 
 * @var string
 */
  public $thumbnail_url;

/**
 * Пълен път до файла във файловата система. Достъпно само през метод
 * @var string
 */
  public $base_path;

/**
 * 
 * @var bool
 */
  public $post_delete;

}
