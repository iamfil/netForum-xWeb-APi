<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetEventListByNameResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetEventListByNameResult $WEBCentralizedShoppingCartGetEventListByNameResult
     */
    protected $WEBCentralizedShoppingCartGetEventListByNameResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetEventListByNameResult $WEBCentralizedShoppingCartGetEventListByNameResult
     */
    public function __construct($WEBCentralizedShoppingCartGetEventListByNameResult)
    {
      $this->WEBCentralizedShoppingCartGetEventListByNameResult = $WEBCentralizedShoppingCartGetEventListByNameResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetEventListByNameResult
     */
    public function getWEBCentralizedShoppingCartGetEventListByNameResult()
    {
      return $this->WEBCentralizedShoppingCartGetEventListByNameResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetEventListByNameResult $WEBCentralizedShoppingCartGetEventListByNameResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetEventListByNameResponse
     */
    public function setWEBCentralizedShoppingCartGetEventListByNameResult($WEBCentralizedShoppingCartGetEventListByNameResult)
    {
      $this->WEBCentralizedShoppingCartGetEventListByNameResult = $WEBCentralizedShoppingCartGetEventListByNameResult;
      return $this;
    }

}
