<?php

namespace VenosT\Barsy\Data\Invoices;

/**
 * 
 *  */
class InvoicesListFiltersData{

/**
 * ID на фактурата (различно от номер на фактурата)
 * @var int
 */
  public $inv_id;

/**
 * ID на клиента, чията е фактурата
 * @var int
 */
  public $client_id;

/**
 * ID на потребителя, създал фактурата
 * @var int
 */
  public $user_id;

/**
 * Дата на създава фактура
 * @var datetime
 */
  public $term_date;

}
