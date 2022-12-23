<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Messages
 */
class Messages{

  /**
   * @var BarsyApiClient
   * @version 1.0.135
   */
  private $barsy_api_client;

  /**
   * Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @var string|null
   */
  private $response_type;

  public function __construct(BarsyApiClient $barsy_api_client, string $response_type = 'json'){
    $this->barsy_api_client = $barsy_api_client;
    $this->response_type = $response_type;
  }

  /**
   * Изпращане на съобщение до потребители на системата
   * @param \Barsy\Data\Messages\MessagesCreateInputData $values null
   * @param string $action_type null Изпращане или запис като чернова
   * @param int $id null ID на съобщението
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на създаденото съобщение
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Messages
   */
  public function create($values, $action_type, $id, string $response_type = null){

    $bact = BarsyApiAction::create('Messages_create')
     ->setParam('values',$values)
     ->setParam('action_type',$action_type)
     ->setParam('id',$id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
