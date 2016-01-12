<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartOpenInvoiceAddResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartOpenInvoiceAddResult
     */
    protected $WEBCentralizedShoppingCartOpenInvoiceAddResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartOpenInvoiceAddResult
     */
    public function __construct($WEBCentralizedShoppingCartOpenInvoiceAddResult)
    {
      $this->WEBCentralizedShoppingCartOpenInvoiceAddResult = $WEBCentralizedShoppingCartOpenInvoiceAddResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartOpenInvoiceAddResult()
    {
      return $this->WEBCentralizedShoppingCartOpenInvoiceAddResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartOpenInvoiceAddResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartOpenInvoiceAddResponse
     */
    public function setWEBCentralizedShoppingCartOpenInvoiceAddResult($WEBCentralizedShoppingCartOpenInvoiceAddResult)
    {
      $this->WEBCentralizedShoppingCartOpenInvoiceAddResult = $WEBCentralizedShoppingCartOpenInvoiceAddResult;
      return $this;
    }

}
