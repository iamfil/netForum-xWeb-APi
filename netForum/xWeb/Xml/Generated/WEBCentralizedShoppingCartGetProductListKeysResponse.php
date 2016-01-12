<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetProductListKeysResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetProductListKeysResult $WEBCentralizedShoppingCartGetProductListKeysResult
     */
    protected $WEBCentralizedShoppingCartGetProductListKeysResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetProductListKeysResult $WEBCentralizedShoppingCartGetProductListKeysResult
     */
    public function __construct($WEBCentralizedShoppingCartGetProductListKeysResult)
    {
      $this->WEBCentralizedShoppingCartGetProductListKeysResult = $WEBCentralizedShoppingCartGetProductListKeysResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetProductListKeysResult
     */
    public function getWEBCentralizedShoppingCartGetProductListKeysResult()
    {
      return $this->WEBCentralizedShoppingCartGetProductListKeysResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetProductListKeysResult $WEBCentralizedShoppingCartGetProductListKeysResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetProductListKeysResponse
     */
    public function setWEBCentralizedShoppingCartGetProductListKeysResult($WEBCentralizedShoppingCartGetProductListKeysResult)
    {
      $this->WEBCentralizedShoppingCartGetProductListKeysResult = $WEBCentralizedShoppingCartGetProductListKeysResult;
      return $this;
    }

}
