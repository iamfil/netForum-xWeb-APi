<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartAddLineItemResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartAddLineItemResult
     */
    protected $WEBCentralizedShoppingCartAddLineItemResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartAddLineItemResult
     */
    public function __construct($WEBCentralizedShoppingCartAddLineItemResult)
    {
      $this->WEBCentralizedShoppingCartAddLineItemResult = $WEBCentralizedShoppingCartAddLineItemResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartAddLineItemResult()
    {
      return $this->WEBCentralizedShoppingCartAddLineItemResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartAddLineItemResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartAddLineItemResponse
     */
    public function setWEBCentralizedShoppingCartAddLineItemResult($WEBCentralizedShoppingCartAddLineItemResult)
    {
      $this->WEBCentralizedShoppingCartAddLineItemResult = $WEBCentralizedShoppingCartAddLineItemResult;
      return $this;
    }

}
