<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartLoadLineItemResponse
{

    /**
     * @var InvoiceDetailType $WEBCentralizedShoppingCartLoadLineItemResult
     */
    protected $WEBCentralizedShoppingCartLoadLineItemResult = null;

    /**
     * @param InvoiceDetailType $WEBCentralizedShoppingCartLoadLineItemResult
     */
    public function __construct($WEBCentralizedShoppingCartLoadLineItemResult)
    {
      $this->WEBCentralizedShoppingCartLoadLineItemResult = $WEBCentralizedShoppingCartLoadLineItemResult;
    }

    /**
     * @return InvoiceDetailType
     */
    public function getWEBCentralizedShoppingCartLoadLineItemResult()
    {
      return $this->WEBCentralizedShoppingCartLoadLineItemResult;
    }

    /**
     * @param InvoiceDetailType $WEBCentralizedShoppingCartLoadLineItemResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartLoadLineItemResponse
     */
    public function setWEBCentralizedShoppingCartLoadLineItemResult($WEBCentralizedShoppingCartLoadLineItemResult)
    {
      $this->WEBCentralizedShoppingCartLoadLineItemResult = $WEBCentralizedShoppingCartLoadLineItemResult;
      return $this;
    }

}
