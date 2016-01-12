<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetProductTypeListResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetProductTypeListResult $WEBCentralizedShoppingCartGetProductTypeListResult
     */
    protected $WEBCentralizedShoppingCartGetProductTypeListResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetProductTypeListResult $WEBCentralizedShoppingCartGetProductTypeListResult
     */
    public function __construct($WEBCentralizedShoppingCartGetProductTypeListResult)
    {
      $this->WEBCentralizedShoppingCartGetProductTypeListResult = $WEBCentralizedShoppingCartGetProductTypeListResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetProductTypeListResult
     */
    public function getWEBCentralizedShoppingCartGetProductTypeListResult()
    {
      return $this->WEBCentralizedShoppingCartGetProductTypeListResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetProductTypeListResult $WEBCentralizedShoppingCartGetProductTypeListResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetProductTypeListResponse
     */
    public function setWEBCentralizedShoppingCartGetProductTypeListResult($WEBCentralizedShoppingCartGetProductTypeListResult)
    {
      $this->WEBCentralizedShoppingCartGetProductTypeListResult = $WEBCentralizedShoppingCartGetProductTypeListResult;
      return $this;
    }

}
