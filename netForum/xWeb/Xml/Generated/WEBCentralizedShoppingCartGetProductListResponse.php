<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetProductListResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetProductListResult $WEBCentralizedShoppingCartGetProductListResult
     */
    protected $WEBCentralizedShoppingCartGetProductListResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetProductListResult $WEBCentralizedShoppingCartGetProductListResult
     */
    public function __construct($WEBCentralizedShoppingCartGetProductListResult)
    {
      $this->WEBCentralizedShoppingCartGetProductListResult = $WEBCentralizedShoppingCartGetProductListResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetProductListResult
     */
    public function getWEBCentralizedShoppingCartGetProductListResult()
    {
      return $this->WEBCentralizedShoppingCartGetProductListResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetProductListResult $WEBCentralizedShoppingCartGetProductListResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetProductListResponse
     */
    public function setWEBCentralizedShoppingCartGetProductListResult($WEBCentralizedShoppingCartGetProductListResult)
    {
      $this->WEBCentralizedShoppingCartGetProductListResult = $WEBCentralizedShoppingCartGetProductListResult;
      return $this;
    }

}
