<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartInsert
{

    /**
     * @var CentralizedOrderEntryType $oCentralizedOrderEntry
     */
    protected $oCentralizedOrderEntry = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     */
    public function __construct($oCentralizedOrderEntry)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartInsert
     */
    public function setOCentralizedOrderEntry($oCentralizedOrderEntry)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      return $this;
    }

}
