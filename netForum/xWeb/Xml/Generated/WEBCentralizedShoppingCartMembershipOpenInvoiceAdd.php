<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMembershipOpenInvoiceAdd
{

    /**
     * @var CentralizedOrderEntryType $oCentralizedOrderEntry
     */
    protected $oCentralizedOrderEntry = null;

    /**
     * @var InvoiceType $oOpenInvoice
     */
    protected $oOpenInvoice = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param InvoiceType $oOpenInvoice
     */
    public function __construct($oCentralizedOrderEntry, $oOpenInvoice)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->oOpenInvoice = $oOpenInvoice;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getOCentralizedOrderEntry()
    {
      return $this->oCentralizedOrderEntry;
    }

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipOpenInvoiceAdd
     */
    public function setOCentralizedOrderEntry($oCentralizedOrderEntry)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      return $this;
    }

    /**
     * @return InvoiceType
     */
    public function getOOpenInvoice()
    {
      return $this->oOpenInvoice;
    }

    /**
     * @param InvoiceType $oOpenInvoice
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipOpenInvoiceAdd
     */
    public function setOOpenInvoice($oOpenInvoice)
    {
      $this->oOpenInvoice = $oOpenInvoice;
      return $this;
    }

}
