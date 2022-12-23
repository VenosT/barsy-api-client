<?php

namespace VenosT\Barsy\Data\Accounts;

/**
 * 
 *  */
class InputStornoData{

/**
 * Причина за сторното
 * @var string
 */
  public $storno_reason;

/**
 * УНП на сторнираната бележка
 * @var string
 */
  public $unp;

/**
 * Номер на сторнираната бележка
 * @var string
 */
  public $receipt_num;

/**
 * Дата на сторнираната бележка
 * @var string
 */
  public $receipt_date;

/**
 * Номер на фискална памет на сторнираната бележка
 * @var string
 */
  public $fm_num;

}
