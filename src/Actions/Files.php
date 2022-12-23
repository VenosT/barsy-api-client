<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Files
 */
class Files{

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
   * Изтегляне на файлове за всички типове обекти 
   * @param string $obj_type null Обект, към който са закачени файловете
   * @param string $obj_id null ID на съответния обект
   * @param string $obj_property 'PICTURE' Под тип файлове към съответния обект (PICTURE)
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\Files\FileData[] Списък от налични файлове към съответния обект и група
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Files
   */
  public function getlist($obj_type, $obj_id, $obj_property = 'PICTURE', string $response_type = null){

    $bact = BarsyApiAction::create('Files_getlist')
     ->setParam('obj_type',$obj_type)
     ->setParam('obj_id',$obj_id)
     ->setParam('obj_property',$obj_property);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Изтегляне на информация за конкретен файл
   * @param string $obj_type null Тип обект, за който се качва (articles,clients,persons,users,storeloads)
   * @param string $obj_id null ID на обекта, за който се иска файл
   * @param string $obj_property 'PICTURE' Подтип на обекта, за който се качва (PICTURE)
   * @param string $file null Име на файла, който се иска
   * @param int $width null Максимална ширина в пиксели (само ако е картинка или икона за друг файл)
   * @param null $height null Максимална височина в пиксели (само ако е картинка или икона за друг файл)
   * @param null $mode null Тип оразмеряване (ако е картинка) (thumb,fix,auto)
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\Files\FileData[]
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Files
   */
  public function get($obj_type, $obj_id, $obj_property = 'PICTURE', $file = null, $width = null, $height = null, $mode = null, string $response_type = null){

    $bact = BarsyApiAction::create('Files_get')
     ->setParam('obj_type',$obj_type)
     ->setParam('obj_id',$obj_id)
     ->setParam('obj_property',$obj_property)
     ->setParam('file',$file)
     ->setParam('width',$width)
     ->setParam('height',$height)
     ->setParam('mode',$mode);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Качване на файлове за всички типове обекти 
   * @param array $files null Масив от файлове за качване
   * @param string $obj_type null Тип обект, за който се качва (articles,clients,persons,users,storeloads)
   * @param string $obj_id null ID на обекта, за който се качва
   * @param string $obj_property null Подтип на обекта, за който се качва (PICTURE)
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return \Barsy\Data\Files\FileData[] Масив от данни за всеки файл
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Files
   */
  public function upload($files, $obj_type, $obj_id, $obj_property, string $response_type = null){

    $bact = BarsyApiAction::create('Files_upload')
     ->setParam('files',$files)
     ->setParam('obj_type',$obj_type)
     ->setParam('obj_id',$obj_id)
     ->setParam('obj_property',$obj_property);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
