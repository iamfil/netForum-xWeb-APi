<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetEventFeesResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetEventFeesResult $WEBCentralizedShoppingCartGetEventFeesResult
     */
    protected $WEBCentralizedShoppingCartGetEventFeesResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetEventFeesResult $WEBCentralizedShoppingCartGetEventFeesResult
     */
    public function __construct($WEBCentralizedShoppingCartGetEventFeesResult)
    {
      $this->WEBCentralizedShoppingCartGetEventFeesResult = $WEBCentralizedShoppingCartGetEventFeesResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetEventFeesResult
     */
    public function getWEBCentralizedShoppingCartGetEventFeesResult()
    {
      return $this->WEBCentralizedShoppingCartGetEventFeesResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetEventFeesResult $WEBCentralizedShoppingCartGetEventFeesResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetEventFeesResponse
     */
    public function setWEBCentralizedShoppingCartGetEventFeesResult($WEBCentralizedShoppingCartGetEventFeesResult)
    {
      $this->WEBCentralizedShoppingCartGetEventFeesResult = $WEBCentralizedShoppingCartGetEventFeesResult;
      return $this;
    }

}
