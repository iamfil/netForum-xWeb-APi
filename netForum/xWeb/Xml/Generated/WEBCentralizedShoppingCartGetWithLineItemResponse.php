<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetWithLineItemResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartGetWithLineItemResult
     */
    protected $WEBCentralizedShoppingCartGetWithLineItemResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartGetWithLineItemResult
     */
    public function __construct($WEBCentralizedShoppingCartGetWithLineItemResult)
    {
      $this->WEBCentralizedShoppingCartGetWithLineItemResult = $WEBCentralizedShoppingCartGetWithLineItemResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartGetWithLineItemResult()
    {
      return $this->WEBCentralizedShoppingCartGetWithLineItemResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartGetWithLineItemResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetWithLineItemResponse
     */
    public function setWEBCentralizedShoppingCartGetWithLineItemResult($WEBCentralizedShoppingCartGetWithLineItemResult)
    {
      $this->WEBCentralizedShoppingCartGetWithLineItemResult = $WEBCentralizedShoppingCartGetWithLineItemResult;
      return $this;
    }

}
