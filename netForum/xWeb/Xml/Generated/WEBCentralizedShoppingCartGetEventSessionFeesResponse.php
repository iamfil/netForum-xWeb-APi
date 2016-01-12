<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetEventSessionFeesResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetEventSessionFeesResult $WEBCentralizedShoppingCartGetEventSessionFeesResult
     */
    protected $WEBCentralizedShoppingCartGetEventSessionFeesResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetEventSessionFeesResult $WEBCentralizedShoppingCartGetEventSessionFeesResult
     */
    public function __construct($WEBCentralizedShoppingCartGetEventSessionFeesResult)
    {
      $this->WEBCentralizedShoppingCartGetEventSessionFeesResult = $WEBCentralizedShoppingCartGetEventSessionFeesResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetEventSessionFeesResult
     */
    public function getWEBCentralizedShoppingCartGetEventSessionFeesResult()
    {
      return $this->WEBCentralizedShoppingCartGetEventSessionFeesResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetEventSessionFeesResult $WEBCentralizedShoppingCartGetEventSessionFeesResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetEventSessionFeesResponse
     */
    public function setWEBCentralizedShoppingCartGetEventSessionFeesResult($WEBCentralizedShoppingCartGetEventSessionFeesResult)
    {
      $this->WEBCentralizedShoppingCartGetEventSessionFeesResult = $WEBCentralizedShoppingCartGetEventSessionFeesResult;
      return $this;
    }

}
