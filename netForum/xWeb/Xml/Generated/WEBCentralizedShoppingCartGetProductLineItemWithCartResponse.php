<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetProductLineItemWithCartResponse
{

    /**
     * @var InvoiceDetailType $WEBCentralizedShoppingCartGetProductLineItemWithCartResult
     */
    protected $WEBCentralizedShoppingCartGetProductLineItemWithCartResult = null;

    /**
     * @param InvoiceDetailType $WEBCentralizedShoppingCartGetProductLineItemWithCartResult
     */
    public function __construct($WEBCentralizedShoppingCartGetProductLineItemWithCartResult)
    {
      $this->WEBCentralizedShoppingCartGetProductLineItemWithCartResult = $WEBCentralizedShoppingCartGetProductLineItemWithCartResult;
    }

    /**
     * @return InvoiceDetailType
     */
    public function getWEBCentralizedShoppingCartGetProductLineItemWithCartResult()
    {
      return $this->WEBCentralizedShoppingCartGetProductLineItemWithCartResult;
    }

    /**
     * @param InvoiceDetailType $WEBCentralizedShoppingCartGetProductLineItemWithCartResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetProductLineItemWithCartResponse
     */
    public function setWEBCentralizedShoppingCartGetProductLineItemWithCartResult($WEBCentralizedShoppingCartGetProductLineItemWithCartResult)
    {
      $this->WEBCentralizedShoppingCartGetProductLineItemWithCartResult = $WEBCentralizedShoppingCartGetProductLineItemWithCartResult;
      return $this;
    }

}
