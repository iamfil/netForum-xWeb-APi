<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartAddLineItem
{

    /**
     * @var CentralizedOrderEntryType $oCentralizedOrderEntry
     */
    protected $oCentralizedOrderEntry = null;

    /**
     * @var InvoiceDetailType $oLineItem
     */
    protected $oLineItem = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param InvoiceDetailType $oLineItem
     */
    public function __construct($oCentralizedOrderEntry, $oLineItem)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->oLineItem = $oLineItem;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartAddLineItem
     */
    public function setOCentralizedOrderEntry($oCentralizedOrderEntry)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      return $this;
    }

    /**
     * @return InvoiceDetailType
     */
    public function getOLineItem()
    {
      return $this->oLineItem;
    }

    /**
     * @param InvoiceDetailType $oLineItem
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartAddLineItem
     */
    public function setOLineItem($oLineItem)
    {
      $this->oLineItem = $oLineItem;
      return $this;
    }

}
