<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartApplySourceCode
{

    /**
     * @var CentralizedOrderEntryType $oCentralizedOrderEntry
     */
    protected $oCentralizedOrderEntry = null;

    /**
     * @var string $szSourceCode
     */
    protected $szSourceCode = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param string $szSourceCode
     */
    public function __construct($oCentralizedOrderEntry, $szSourceCode)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->szSourceCode = $szSourceCode;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartApplySourceCode
     */
    public function setOCentralizedOrderEntry($oCentralizedOrderEntry)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      return $this;
    }

    /**
     * @return string
     */
    public function getSzSourceCode()
    {
      return $this->szSourceCode;
    }

    /**
     * @param string $szSourceCode
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartApplySourceCode
     */
    public function setSzSourceCode($szSourceCode)
    {
      $this->szSourceCode = $szSourceCode;
      return $this;
    }

}
