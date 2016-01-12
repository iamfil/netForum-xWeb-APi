<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartOpenInvoiceGetResponse
{

    /**
     * @var InvoiceType $WEBCentralizedShoppingCartOpenInvoiceGetResult
     */
    protected $WEBCentralizedShoppingCartOpenInvoiceGetResult = null;

    /**
     * @param InvoiceType $WEBCentralizedShoppingCartOpenInvoiceGetResult
     */
    public function __construct($WEBCentralizedShoppingCartOpenInvoiceGetResult)
    {
      $this->WEBCentralizedShoppingCartOpenInvoiceGetResult = $WEBCentralizedShoppingCartOpenInvoiceGetResult;
    }

    /**
     * @return InvoiceType
     */
    public function getWEBCentralizedShoppingCartOpenInvoiceGetResult()
    {
      return $this->WEBCentralizedShoppingCartOpenInvoiceGetResult;
    }

    /**
     * @param InvoiceType $WEBCentralizedShoppingCartOpenInvoiceGetResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartOpenInvoiceGetResponse
     */
    public function setWEBCentralizedShoppingCartOpenInvoiceGetResult($WEBCentralizedShoppingCartOpenInvoiceGetResult)
    {
      $this->WEBCentralizedShoppingCartOpenInvoiceGetResult = $WEBCentralizedShoppingCartOpenInvoiceGetResult;
      return $this;
    }

}
