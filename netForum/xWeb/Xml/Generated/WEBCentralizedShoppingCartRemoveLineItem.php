<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartRemoveLineItem
{

    /**
     * @var CentralizedOrderEntryType $oCentralizedOrderEntry
     */
    protected $oCentralizedOrderEntry = null;

    /**
     * @var guid $szLineItemKey
     */
    protected $szLineItemKey = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param guid $szLineItemKey
     */
    public function __construct($oCentralizedOrderEntry, $szLineItemKey)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->szLineItemKey = $szLineItemKey;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartRemoveLineItem
     */
    public function setOCentralizedOrderEntry($oCentralizedOrderEntry)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      return $this;
    }

    /**
     * @return guid
     */
    public function getSzLineItemKey()
    {
      return $this->szLineItemKey;
    }

    /**
     * @param guid $szLineItemKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartRemoveLineItem
     */
    public function setSzLineItemKey($szLineItemKey)
    {
      $this->szLineItemKey = $szLineItemKey;
      return $this;
    }

}
