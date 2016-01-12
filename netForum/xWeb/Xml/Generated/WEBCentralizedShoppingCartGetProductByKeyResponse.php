<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetProductByKeyResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetProductByKeyResult $WEBCentralizedShoppingCartGetProductByKeyResult
     */
    protected $WEBCentralizedShoppingCartGetProductByKeyResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetProductByKeyResult $WEBCentralizedShoppingCartGetProductByKeyResult
     */
    public function __construct($WEBCentralizedShoppingCartGetProductByKeyResult)
    {
      $this->WEBCentralizedShoppingCartGetProductByKeyResult = $WEBCentralizedShoppingCartGetProductByKeyResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetProductByKeyResult
     */
    public function getWEBCentralizedShoppingCartGetProductByKeyResult()
    {
      return $this->WEBCentralizedShoppingCartGetProductByKeyResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetProductByKeyResult $WEBCentralizedShoppingCartGetProductByKeyResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetProductByKeyResponse
     */
    public function setWEBCentralizedShoppingCartGetProductByKeyResult($WEBCentralizedShoppingCartGetProductByKeyResult)
    {
      $this->WEBCentralizedShoppingCartGetProductByKeyResult = $WEBCentralizedShoppingCartGetProductByKeyResult;
      return $this;
    }

}
