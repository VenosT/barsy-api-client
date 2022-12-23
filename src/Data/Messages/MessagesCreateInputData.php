<?php

namespace VenosT\Barsy\Data\Messages;

/**
 * 
 *  */
class MessagesCreateInputData{

/**
 * Списък с получатели подадени като имена разделени със запейтака, или като масив от имена, или като масив от ID-та
 * @var array
 */
  public $recipients;

/**
 * Тема на съобщението
 * @var string
 */
  public $subject;

/**
 * Съдържание на съобщението
 * @var string
 */
  public $text;

/**
 * Тип на съобщението
 * @var int
 */
  public $msg_type;

/**
 * Дата за отложено изпращане
 * @var string
 */
  public $send_date;

/**
 * ID на съобщение, на което това съобщение отговаря
 * @var int
 */
  public $parent_id;

}
