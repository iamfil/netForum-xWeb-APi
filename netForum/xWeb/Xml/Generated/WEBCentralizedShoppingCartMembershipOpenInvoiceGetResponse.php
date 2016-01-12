<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMembershipOpenInvoiceGetResponse
{

    /**
     * @var InvoiceType $WEBCentralizedShoppingCartMembershipOpenInvoiceGetResult
     */
    protected $WEBCentralizedShoppingCartMembershipOpenInvoiceGetResult = null;

    /**
     * @param InvoiceType $WEBCentralizedShoppingCartMembershipOpenInvoiceGetResult
     */
    public function __construct($WEBCentralizedShoppingCartMembershipOpenInvoiceGetResult)
    {
      $this->WEBCentralizedShoppingCartMembershipOpenInvoiceGetResult = $WEBCentralizedShoppingCartMembershipOpenInvoiceGetResult;
    }

    /**
     * @return InvoiceType
     */
    public function getWEBCentralizedShoppingCartMembershipOpenInvoiceGetResult()
    {
      return $this->WEBCentralizedShoppingCartMembershipOpenInvoiceGetResult;
    }

    /**
     * @param InvoiceType $WEBCentralizedShoppingCartMembershipOpenInvoiceGetResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipOpenInvoiceGetResponse
     */
    public function setWEBCentralizedShoppingCartMembershipOpenInvoiceGetResult($WEBCentralizedShoppingCartMembershipOpenInvoiceGetResult)
    {
      $this->WEBCentralizedShoppingCartMembershipOpenInvoiceGetResult = $WEBCentralizedShoppingCartMembershipOpenInvoiceGetResult;
      return $this;
    }

}
