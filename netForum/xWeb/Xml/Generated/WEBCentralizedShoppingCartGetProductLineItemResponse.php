<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetProductLineItemResponse
{

    /**
     * @var InvoiceDetailType $WEBCentralizedShoppingCartGetProductLineItemResult
     */
    protected $WEBCentralizedShoppingCartGetProductLineItemResult = null;

    /**
     * @param InvoiceDetailType $WEBCentralizedShoppingCartGetProductLineItemResult
     */
    public function __construct($WEBCentralizedShoppingCartGetProductLineItemResult)
    {
      $this->WEBCentralizedShoppingCartGetProductLineItemResult = $WEBCentralizedShoppingCartGetProductLineItemResult;
    }

    /**
     * @return InvoiceDetailType
     */
    public function getWEBCentralizedShoppingCartGetProductLineItemResult()
    {
      return $this->WEBCentralizedShoppingCartGetProductLineItemResult;
    }

    /**
     * @param InvoiceDetailType $WEBCentralizedShoppingCartGetProductLineItemResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetProductLineItemResponse
     */
    public function setWEBCentralizedShoppingCartGetProductLineItemResult($WEBCentralizedShoppingCartGetProductLineItemResult)
    {
      $this->WEBCentralizedShoppingCartGetProductLineItemResult = $WEBCentralizedShoppingCartGetProductLineItemResult;
      return $this;
    }

}
