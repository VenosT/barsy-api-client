<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Barsys
 */
class Barsys{

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
   * Връща информация за текущия търговски обект
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\Barsys\BarsyCurrentData информация за текущия търговски обект
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Barsys
   */
  public function getcurrent(string $response_type = null){

    $bact = BarsyApiAction::create('Barsys_getcurrent');

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща списък от наличните търговски обекти
   * @param string $mode 'restrict' Флаг дали списъка да съдържа всички търговски обекти или само тези, до които текущия потребител има достъп
   * @param string $checksum null Контролна чексума за промяна
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return array Списък от търговските обекти
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Barsys
   */
  public function getlist($mode = 'restrict', $checksum = null, string $response_type = null){

    $bact = BarsyApiAction::create('Barsys_getlist')
     ->setParam('mode',$mode)
     ->setParam('checksum',$checksum);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
