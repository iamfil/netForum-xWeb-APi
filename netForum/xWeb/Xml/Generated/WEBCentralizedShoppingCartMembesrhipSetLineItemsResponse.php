<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMembesrhipSetLineItemsResponse
{

    /**
     * @var mb_membershipType $WEBCentralizedShoppingCartMembesrhipSetLineItemsResult
     */
    protected $WEBCentralizedShoppingCartMembesrhipSetLineItemsResult = null;

    /**
     * @param mb_membershipType $WEBCentralizedShoppingCartMembesrhipSetLineItemsResult
     */
    public function __construct($WEBCentralizedShoppingCartMembesrhipSetLineItemsResult)
    {
      $this->WEBCentralizedShoppingCartMembesrhipSetLineItemsResult = $WEBCentralizedShoppingCartMembesrhipSetLineItemsResult;
    }

    /**
     * @return mb_membershipType
     */
    public function getWEBCentralizedShoppingCartMembesrhipSetLineItemsResult()
    {
      return $this->WEBCentralizedShoppingCartMembesrhipSetLineItemsResult;
    }

    /**
     * @param mb_membershipType $WEBCentralizedShoppingCartMembesrhipSetLineItemsResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembesrhipSetLineItemsResponse
     */
    public function setWEBCentralizedShoppingCartMembesrhipSetLineItemsResult($WEBCentralizedShoppingCartMembesrhipSetLineItemsResult)
    {
      $this->WEBCentralizedShoppingCartMembesrhipSetLineItemsResult = $WEBCentralizedShoppingCartMembesrhipSetLineItemsResult;
      return $this;
    }

}
