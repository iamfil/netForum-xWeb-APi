<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGiftFundraisingSetLineItemsResponse
{

    /**
     * @var FundraisingGiftType $WEBCentralizedShoppingCartGiftFundraisingSetLineItemsResult
     */
    protected $WEBCentralizedShoppingCartGiftFundraisingSetLineItemsResult = null;

    /**
     * @param FundraisingGiftType $WEBCentralizedShoppingCartGiftFundraisingSetLineItemsResult
     */
    public function __construct($WEBCentralizedShoppingCartGiftFundraisingSetLineItemsResult)
    {
      $this->WEBCentralizedShoppingCartGiftFundraisingSetLineItemsResult = $WEBCentralizedShoppingCartGiftFundraisingSetLineItemsResult;
    }

    /**
     * @return FundraisingGiftType
     */
    public function getWEBCentralizedShoppingCartGiftFundraisingSetLineItemsResult()
    {
      return $this->WEBCentralizedShoppingCartGiftFundraisingSetLineItemsResult;
    }

    /**
     * @param FundraisingGiftType $WEBCentralizedShoppingCartGiftFundraisingSetLineItemsResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGiftFundraisingSetLineItemsResponse
     */
    public function setWEBCentralizedShoppingCartGiftFundraisingSetLineItemsResult($WEBCentralizedShoppingCartGiftFundraisingSetLineItemsResult)
    {
      $this->WEBCentralizedShoppingCartGiftFundraisingSetLineItemsResult = $WEBCentralizedShoppingCartGiftFundraisingSetLineItemsResult;
      return $this;
    }

}
