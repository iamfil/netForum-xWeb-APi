<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetProductListByNameResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetProductListByNameResult $WEBCentralizedShoppingCartGetProductListByNameResult
     */
    protected $WEBCentralizedShoppingCartGetProductListByNameResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetProductListByNameResult $WEBCentralizedShoppingCartGetProductListByNameResult
     */
    public function __construct($WEBCentralizedShoppingCartGetProductListByNameResult)
    {
      $this->WEBCentralizedShoppingCartGetProductListByNameResult = $WEBCentralizedShoppingCartGetProductListByNameResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetProductListByNameResult
     */
    public function getWEBCentralizedShoppingCartGetProductListByNameResult()
    {
      return $this->WEBCentralizedShoppingCartGetProductListByNameResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetProductListByNameResult $WEBCentralizedShoppingCartGetProductListByNameResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetProductListByNameResponse
     */
    public function setWEBCentralizedShoppingCartGetProductListByNameResult($WEBCentralizedShoppingCartGetProductListByNameResult)
    {
      $this->WEBCentralizedShoppingCartGetProductListByNameResult = $WEBCentralizedShoppingCartGetProductListByNameResult;
      return $this;
    }

}
