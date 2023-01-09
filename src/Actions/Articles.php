<?php

namespace VenosT\Barsy\Actions;

use VenosT\Barsy\BarsyApiClient;
use VenosT\Barsy\BarsyApiAction;
use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Articles
 */
class Articles{

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
   * ТЕстване на баркодове
   * @param  $barcode null 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return stdClass 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Articles
   */
  public function checkbarcode($barcode, string $response_type = null){

    $bact = BarsyApiAction::create('Articles_checkbarcode')
     ->setParam('barcode',$barcode);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Създаване на артикул с всички негови атрибути
   * @param \VenosT\Barsy\Data\Articles\ArticleInputData $article null
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int ID на създадения артикул
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Articles
   */
  public function create($article, string $response_type = null){

    $bact = BarsyApiAction::create('Articles_create')
     ->setParam('article',$article);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Метод за изтегляне на списък с възможноте данни за артикул
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return  
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Articles
   */
  public function getlistcolumns(string $response_type = null){

    $bact = BarsyApiAction::create('Articles_getlistcolumns');

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Универсален метод за итегляне на списък с артикули, с възможност за подаване на разнообразни филтрирания, допълнителни данни, сортиране и странициране
   * @param \\Barsy\Data\Articles\ArticlesListFiltersData $filters null Налични филтри за списъка с артикули
   * @param \\Barsy\Data\Articles\ArticlesListExtraPropertiesData $extra_properties null Искане на допълнителни данни за всеки артикул
   * @param int $offset 0 Номер на ред от който да бъде започнат списъка. Използва се при странициране, когато трябва да се прескочат Х записа
   * @param int $length 1000 Брой върнати редове в една заявка
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\Articles\ArticlesListData
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Articles
   */
  public function getlistobject($filters = null, $extra_properties = null, $offset = 0, $length = 1000, string $response_type = null){

    $bact = BarsyApiAction::create('Articles_getlistobject')
     ->setParam('filters',$filters)
     ->setParam('extra_properties',$extra_properties)
     ->setParam('offset',$offset)
     ->setParam('length',$length);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Универсален метод за итегляне на списък с артикули
   * @param \VenosT\Barsy\Data\Articles\ArticlesListFiltersData $filters null Налични филтри за списъка с артикули
   * @param \VenosT\Barsy\Data\Articles\ArticlesListExtraPropertiesData $extra_properties null Искане на допълнителни данни за всеки артикул. Може да се подадат няколко елемента
   * @param int $offset 0 Номер на ред от който да бъде започнат списъка. Използва се при странициране, когато трябва да се прескочат Х записа
   * @param int $length 1000 Брой върнати редове в една заявка
   * @param string $order_by null Пореждане на резултатите - посочва се име на елемент на артикул (например article_name)
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\Articles\ArticleData[] Списък от артикули с данни за тях според исканите ($extra_properties)
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Articles
   */
  public function getlist($filters, $extra_properties, $offset = 0, $length = 1000, $order_by = null, string $response_type = null){

    $bact = BarsyApiAction::create('Articles_getlist')
     ->setParam('filters',$filters)
     ->setParam('extra_properties',$extra_properties)
     ->setParam('offset',$offset)
     ->setParam('length',$length)
     ->setParam('order_by',$order_by);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Подробни данни да конкретен артикул
   * @param int $article_id null ID на желания артикул
   * @param \VenosT\Barsy\Data\Articles\ArticlesListExtraPropertiesData $extra_properties []
   * @param  $filters [] 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\Articles\ArticleData Данни за тях според исканите ($extra_properties)
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Articles
   */
  public function get($article_id, $extra_properties = [], $filters = [], string $response_type = null){

    $bact = BarsyApiAction::create('Articles_get')
     ->setParam('article_id',$article_id)
     ->setParam('extra_properties',$extra_properties)
     ->setParam('filters',$filters);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Връща списък с артикулите в рецептата на посочен артикул по id
   * @param int $article_id null 
   * @param bool $deep false 
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return array 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Articles
   */
  public function getrecipearticles($article_id, $deep = false, string $response_type = null){

    $bact = BarsyApiAction::create('Articles_getrecipearticles')
     ->setParam('article_id',$article_id)
     ->setParam('deep',$deep);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Записване на дадения артикул към избрани ценови правила. Ако има текущо избрани, те се заменя с новите
   * @param int $id null ID на дадения артикул
   * @param \VenosT\Barsy\Data\Articles\ArticlePricelistData[] $rows null Списък от ценови правила, към който да бъде включен дадения артикул.
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int няма
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Articles
   */
  public function pricelists_save($id, $rows, string $response_type = null){

    $bact = BarsyApiAction::create('Articles_pricelists_save')
     ->setParam('id',$id)
     ->setParam('rows',$rows);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * class Articles_save_recipe
   * @param int $id null ID на артикул, на който се задава рецепта
   * @param \VenosT\Barsy\Data\Articles\ArticleRecipeRowData[] $rows null Масив от артикули, участващи в рецептата
   * @param \VenosT\Barsy\Data\Articles\ArticleRecipeData $values null Допълнителни данни за рецептата
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Articles
   */
  public function save_recipe($id, $rows, $values, string $response_type = null){

    $bact = BarsyApiAction::create('Articles_save_recipe')
     ->setParam('id',$id)
     ->setParam('rows',$rows)
     ->setParam('values',$values);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Търсене на артикул по основни име, публично име и синоними
   * @param string $article_name null Стринг, по който се търси
   * @param null $mode null 
   * @param  $filters [] 
   * @param array $extra_properties [] 
   * @param int $offset 0 начален запис
   * @param int $length 50 брой записи на едни рекуест
   * @param int $page 0 номер на страница
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return\VenosT\Barsy\Data\Articles\ArticleData[]
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Articles
   */
  public function search($article_name, $mode = null, $filters = [], $extra_properties = [], $offset = 0, $length = 50, $page = 0, string $response_type = null){

    $bact = BarsyApiAction::create('Articles_search')
     ->setParam('article_name',$article_name)
     ->setParam('mode',$mode)
     ->setParam('filters',$filters)
     ->setParam('extra_properties',$extra_properties)
     ->setParam('offset',$offset)
     ->setParam('length',$length)
     ->setParam('page',$page);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Категоризиране на артикул
   * @param int $article_id null ID на желания артикул, който се категоризира
   * @param array $cats null Списък от ID-та на категории, в които се категоризира артикула
   * @param int $master_cat_id null ID на категория (от подадения списък), която да бъде маркирана като главна
   * @param bool $remove_currents true При подадена стойност=1, текущите категории ще бъдат подменени с подадените. При стойност=0 - подадените ще бъдат добавени към текущите
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 1
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Articles
   */
  public function setcats($article_id, $cats, $master_cat_id = null, $remove_currents = true, string $response_type = null){

    $bact = BarsyApiAction::create('Articles_setcats')
     ->setParam('article_id',$article_id)
     ->setParam('cats',$cats)
     ->setParam('master_cat_id',$master_cat_id)
     ->setParam('remove_currents',$remove_currents);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  /**
   * Актуализиране на артикул с всички негови атрибути
   * @param int $article_id null 
   * @param \VenosT\Barsy\Data\Articles\ArticleInputData $article null
   * @param string $response_type Тип да отговора на сървъра (json|res|pdf|html|xml|txt|csv|excel) По подразбиране: json
   * @return int 
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @see Articles
   */
  public function update($article_id, $article, string $response_type = null){

    $bact = BarsyApiAction::create('Articles_update')
     ->setParam('article_id',$article_id)
     ->setParam('article',$article);

    return $this->barsy_api_client->run($bact,$response_type?:$this->response_type);
  }

  public function setResponseType(string $response_type):void{
    $this->response_type = $response_type;
  }

}
