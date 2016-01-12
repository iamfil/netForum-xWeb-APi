<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMembershipOpenInvoiceAddResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartMembershipOpenInvoiceAddResult
     */
    protected $WEBCentralizedShoppingCartMembershipOpenInvoiceAddResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartMembershipOpenInvoiceAddResult
     */
    public function __construct($WEBCentralizedShoppingCartMembershipOpenInvoiceAddResult)
    {
      $this->WEBCentralizedShoppingCartMembershipOpenInvoiceAddResult = $WEBCentralizedShoppingCartMembershipOpenInvoiceAddResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartMembershipOpenInvoiceAddResult()
    {
      return $this->WEBCentralizedShoppingCartMembershipOpenInvoiceAddResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartMembershipOpenInvoiceAddResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipOpenInvoiceAddResponse
     */
    public function setWEBCentralizedShoppingCartMembershipOpenInvoiceAddResult($WEBCentralizedShoppingCartMembershipOpenInvoiceAddResult)
    {
      $this->WEBCentralizedShoppingCartMembershipOpenInvoiceAddResult = $WEBCentralizedShoppingCartMembershipOpenInvoiceAddResult;
      return $this;
    }

}
