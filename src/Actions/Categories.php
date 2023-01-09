<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Categories
 */
class Categories{

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
   * Създаване на категория
   * @param\VenosT\Barsy\Data\Categories\CategoryInputData $cat null
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на създадената категория
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Categories
   */
  public function create($cat, string $response_type = null){

    $bact = BarsyApiAction::create('Categories_create')
     ->setParam('cat',$cat);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща всички категории в дървовиден режим и прилежащите им артикули и модификатори
   * @param string $checksum null Контролна сума - дали има промяна
   * @param null $cat_id null ID на начална категория. Ако се пропусна, започва от основната на текущия обект
   * @param bool $only_public false Флаг да бъдат върнати само артикулите, маркирани като публични
   * @param int $picture_content null Флаг да бъдат върнати картинките като inline съдържание
   * @param int $articles_lazy_load_mode 0 Режим за невръщане на артикулите по категории: 0: Винаги изключен, 1: Винаги включен, 2: Определя се спрямо настройка-лимит за брой артиули за дървото
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\Categories\CategoryFullTreeData
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Categories
   */
  public function getalltree($checksum = null, $cat_id = null, $only_public = false, $picture_content = null, $articles_lazy_load_mode = 0, string $response_type = null){

    $bact = BarsyApiAction::create('Categories_getalltree')
     ->setParam('checksum',$checksum)
     ->setParam('cat_id',$cat_id)
     ->setParam('only_public',$only_public)
     ->setParam('picture_content',$picture_content)
     ->setParam('articles_lazy_load_mode',$articles_lazy_load_mode);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща всички категории в дървовиден режим и прилежащите им артикули и модификатори, като включва само ариткулите, обявени за публични
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\Categories\CategoryFullTreeData
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Categories
   */
  public function getalltreepublic(string $response_type = null){

    $bact = BarsyApiAction::create('Categories_getalltreepublic');

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Изтеляне на списък на категории в 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\Categories\CategoryData[] Масив от категории
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Categories
   */
  public function getlist(string $response_type = null){

    $bact = BarsyApiAction::create('Categories_getlist');

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Информация за конкретна категория
   * @param int $cat_id null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\Categories\CategoryData
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Categories
   */
  public function get($cat_id, string $response_type = null){

    $bact = BarsyApiAction::create('Categories_get')
     ->setParam('cat_id',$cat_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Изтегляне на списък на категории в дървовидна структура
   * @param int $cat_id null ID на начална категория. Ако се пропусна, започва от основната на текущия обект
   * @param\VenosT\Barsy\Data\Categories\CategoriesTreeExtraProperties $extra_properties null
   * @param bool $client_style false 
   * @param int $menu_id null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\Categories\CategoryFullTreeData[] Рекурсивен масив от обекти с данните за категории
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Categories
   */
  public function gettree($cat_id = null, $extra_properties = null, $client_style = false, $menu_id = null, string $response_type = null){

    $bact = BarsyApiAction::create('Categories_gettree')
     ->setParam('cat_id',$cat_id)
     ->setParam('extra_properties',$extra_properties)
     ->setParam('client_style',$client_style)
     ->setParam('menu_id',$menu_id);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Редактиране на категория
   * @param int $cat_id null ID на категорията, която се редактира
   * @param\VenosT\Barsy\Data\Categories\CategoryInputData $cat null
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Categories
   */
  public function update($cat_id, $cat, string $response_type = null){

    $bact = BarsyApiAction::create('Categories_update')
     ->setParam('cat_id',$cat_id)
     ->setParam('cat',$cat);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
