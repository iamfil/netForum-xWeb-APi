<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartAddShippingItem
{

    /**
     * @var CentralizedOrderEntryType $oCentralizedOrderEntry
     */
    protected $oCentralizedOrderEntry = null;

    /**
     * @var InvoiceDetailType $oShippingItem
     */
    protected $oShippingItem = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param InvoiceDetailType $oShippingItem
     */
    public function __construct($oCentralizedOrderEntry, $oShippingItem)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->oShippingItem = $oShippingItem;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartAddShippingItem
     */
    public function setOCentralizedOrderEntry($oCentralizedOrderEntry)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      return $this;
    }

    /**
     * @return InvoiceDetailType
     */
    public function getOShippingItem()
    {
      return $this->oShippingItem;
    }

    /**
     * @param InvoiceDetailType $oShippingItem
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartAddShippingItem
     */
    public function setOShippingItem($oShippingItem)
    {
      $this->oShippingItem = $oShippingItem;
      return $this;
    }

}
