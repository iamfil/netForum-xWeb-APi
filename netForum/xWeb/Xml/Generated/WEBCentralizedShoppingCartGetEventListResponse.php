<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetEventListResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetEventListResult $WEBCentralizedShoppingCartGetEventListResult
     */
    protected $WEBCentralizedShoppingCartGetEventListResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetEventListResult $WEBCentralizedShoppingCartGetEventListResult
     */
    public function __construct($WEBCentralizedShoppingCartGetEventListResult)
    {
      $this->WEBCentralizedShoppingCartGetEventListResult = $WEBCentralizedShoppingCartGetEventListResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetEventListResult
     */
    public function getWEBCentralizedShoppingCartGetEventListResult()
    {
      return $this->WEBCentralizedShoppingCartGetEventListResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetEventListResult $WEBCentralizedShoppingCartGetEventListResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetEventListResponse
     */
    public function setWEBCentralizedShoppingCartGetEventListResult($WEBCentralizedShoppingCartGetEventListResult)
    {
      $this->WEBCentralizedShoppingCartGetEventListResult = $WEBCentralizedShoppingCartGetEventListResult;
      return $this;
    }

}
