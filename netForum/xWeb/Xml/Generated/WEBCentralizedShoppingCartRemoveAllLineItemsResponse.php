<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartRemoveAllLineItemsResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartRemoveAllLineItemsResult
     */
    protected $WEBCentralizedShoppingCartRemoveAllLineItemsResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartRemoveAllLineItemsResult
     */
    public function __construct($WEBCentralizedShoppingCartRemoveAllLineItemsResult)
    {
      $this->WEBCentralizedShoppingCartRemoveAllLineItemsResult = $WEBCentralizedShoppingCartRemoveAllLineItemsResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartRemoveAllLineItemsResult()
    {
      return $this->WEBCentralizedShoppingCartRemoveAllLineItemsResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartRemoveAllLineItemsResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartRemoveAllLineItemsResponse
     */
    public function setWEBCentralizedShoppingCartRemoveAllLineItemsResult($WEBCentralizedShoppingCartRemoveAllLineItemsResult)
    {
      $this->WEBCentralizedShoppingCartRemoveAllLineItemsResult = $WEBCentralizedShoppingCartRemoveAllLineItemsResult;
      return $this;
    }

}
