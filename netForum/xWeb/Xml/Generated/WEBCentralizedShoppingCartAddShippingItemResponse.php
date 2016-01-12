<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartAddShippingItemResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartAddShippingItemResult
     */
    protected $WEBCentralizedShoppingCartAddShippingItemResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartAddShippingItemResult
     */
    public function __construct($WEBCentralizedShoppingCartAddShippingItemResult)
    {
      $this->WEBCentralizedShoppingCartAddShippingItemResult = $WEBCentralizedShoppingCartAddShippingItemResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartAddShippingItemResult()
    {
      return $this->WEBCentralizedShoppingCartAddShippingItemResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartAddShippingItemResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartAddShippingItemResponse
     */
    public function setWEBCentralizedShoppingCartAddShippingItemResult($WEBCentralizedShoppingCartAddShippingItemResult)
    {
      $this->WEBCentralizedShoppingCartAddShippingItemResult = $WEBCentralizedShoppingCartAddShippingItemResult;
      return $this;
    }

}
