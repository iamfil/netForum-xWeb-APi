<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetProductComplementsResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetProductComplementsResult $WEBCentralizedShoppingCartGetProductComplementsResult
     */
    protected $WEBCentralizedShoppingCartGetProductComplementsResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetProductComplementsResult $WEBCentralizedShoppingCartGetProductComplementsResult
     */
    public function __construct($WEBCentralizedShoppingCartGetProductComplementsResult)
    {
      $this->WEBCentralizedShoppingCartGetProductComplementsResult = $WEBCentralizedShoppingCartGetProductComplementsResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetProductComplementsResult
     */
    public function getWEBCentralizedShoppingCartGetProductComplementsResult()
    {
      return $this->WEBCentralizedShoppingCartGetProductComplementsResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetProductComplementsResult $WEBCentralizedShoppingCartGetProductComplementsResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetProductComplementsResponse
     */
    public function setWEBCentralizedShoppingCartGetProductComplementsResult($WEBCentralizedShoppingCartGetProductComplementsResult)
    {
      $this->WEBCentralizedShoppingCartGetProductComplementsResult = $WEBCentralizedShoppingCartGetProductComplementsResult;
      return $this;
    }

}
