<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartRemoveLineItemResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartRemoveLineItemResult
     */
    protected $WEBCentralizedShoppingCartRemoveLineItemResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartRemoveLineItemResult
     */
    public function __construct($WEBCentralizedShoppingCartRemoveLineItemResult)
    {
      $this->WEBCentralizedShoppingCartRemoveLineItemResult = $WEBCentralizedShoppingCartRemoveLineItemResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartRemoveLineItemResult()
    {
      return $this->WEBCentralizedShoppingCartRemoveLineItemResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartRemoveLineItemResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartRemoveLineItemResponse
     */
    public function setWEBCentralizedShoppingCartRemoveLineItemResult($WEBCentralizedShoppingCartRemoveLineItemResult)
    {
      $this->WEBCentralizedShoppingCartRemoveLineItemResult = $WEBCentralizedShoppingCartRemoveLineItemResult;
      return $this;
    }

}
