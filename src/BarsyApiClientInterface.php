<?php

namespace VenosT\Barsy;


use VenosT\Barsy\Exceptions\BarsyApiClientFault;
use VenosT\Barsy\Exceptions\BarsyApiClientMessage;

/**
 * Class BarsyApiClient
 * Служи за връзка с Barsy API
 */
interface BarsyApiClientInterface
{
  public function set_options($options): void;

  /**
   * @param $body
   * @param bool $response_type
   * @param array $options
   * @return bool|mixed|string
   * @throws BarsyApiClientMessage
   * @throws BarsyApiClientFault
   * @deprecated
   */
  public function call($body, $response_type = 'json', $options = array());

  /**
   * @param $action
   * @param string $response_type
   * @return bool|mixed|string
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @throws \JsonException
   */
  public function run($action, string $response_type = 'json', $options = []);

  /**
   * @param $action
   * @param string $response_type
   * @return BarsyApiResponseData
   * @throws BarsyApiClientFault
   * @throws BarsyApiClientMessage
   * @throws \JsonException
   */
  public function runRaw($action, string $response_type = 'json'): BarsyApiResponseData;

  /**
   * @param $barsy_id
   */
  public function setBarsyId($barsy_id): void;

  /**
   * @param $poskey
   */
  public function setPosKey($poskey): void;

  /**
   * @return BarsyApiOptions
   */
  public function getOptions(): BarsyApiOptions;
}