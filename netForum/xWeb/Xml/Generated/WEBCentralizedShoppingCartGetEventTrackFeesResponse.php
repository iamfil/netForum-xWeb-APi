<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetEventTrackFeesResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetEventTrackFeesResult $WEBCentralizedShoppingCartGetEventTrackFeesResult
     */
    protected $WEBCentralizedShoppingCartGetEventTrackFeesResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetEventTrackFeesResult $WEBCentralizedShoppingCartGetEventTrackFeesResult
     */
    public function __construct($WEBCentralizedShoppingCartGetEventTrackFeesResult)
    {
      $this->WEBCentralizedShoppingCartGetEventTrackFeesResult = $WEBCentralizedShoppingCartGetEventTrackFeesResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetEventTrackFeesResult
     */
    public function getWEBCentralizedShoppingCartGetEventTrackFeesResult()
    {
      return $this->WEBCentralizedShoppingCartGetEventTrackFeesResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetEventTrackFeesResult $WEBCentralizedShoppingCartGetEventTrackFeesResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetEventTrackFeesResponse
     */
    public function setWEBCentralizedShoppingCartGetEventTrackFeesResult($WEBCentralizedShoppingCartGetEventTrackFeesResult)
    {
      $this->WEBCentralizedShoppingCartGetEventTrackFeesResult = $WEBCentralizedShoppingCartGetEventTrackFeesResult;
      return $this;
    }

}
