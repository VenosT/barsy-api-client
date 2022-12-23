<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Cards
 */
class Cards{

  /**
   * @var BarsyApiClient
   * @version 1.0.4
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
   * Прилагане на код на пакетна карта върху подаден списък с артикули
   * @param string $code null Код
   * @param \\Barsy\Data\Cards\CardApplyArticleInputData[] $articles [] Списък с артикули
   * @param int $client_id 1 Клиент ID
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\Cards\CardApplyResponse
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Cards
   */
  public function applycode($code, $articles = [], $client_id = 1, string $response_type = null){

    $bact = BarsyApiAction::create('Cards_applycode')
     ->setParam('code',$code)
     ->setParam('articles',$articles)
     ->setParam('client_id',$client_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
