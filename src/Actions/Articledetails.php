<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Articledetails
 */
class Articledetails{

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
   * Изтегляне на характеристики на конкретен артикул
   * @param int $article_id null ID на артикул, чийто характеристики да бъдат върнати
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\ArticleDetails\ArticleDetailData[] Списък от характеристики на желания артикул
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Articledetails
   */
  public function get($article_id, string $response_type = null){

    $bact = BarsyApiAction::create('Articledetails_get')
     ->setParam('article_id',$article_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Списък от характеристиките на артикутели
   * @param  $filters [] 
   * @param  $extra_properties [] 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return  
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Articledetails
   */
  public function gettree($filters = [], $extra_properties = [], string $response_type = null){

    $bact = BarsyApiAction::create('Articledetails_gettree')
     ->setParam('filters',$filters)
     ->setParam('extra_properties',$extra_properties);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Запис на характеристика към артикул
   * @param int $id null ID на артикул, за който се отнасят характеристиките
   * @param \Barsy\Data\ArticleDetails\ArticleDetailInputData[] $rows null Списък с характеристиките
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 1
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Articledetails
   */
  public function save($id, $rows, string $response_type = null){

    $bact = BarsyApiAction::create('Articledetails_save')
     ->setParam('id',$id)
     ->setParam('rows',$rows);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
