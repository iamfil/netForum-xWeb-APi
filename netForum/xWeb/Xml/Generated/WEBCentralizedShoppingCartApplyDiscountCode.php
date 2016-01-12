<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartApplyDiscountCode
{

    /**
     * @var CentralizedOrderEntryType $oCentralizedOrderEntry
     */
    protected $oCentralizedOrderEntry = null;

    /**
     * @var string $szDiscountCode
     */
    protected $szDiscountCode = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param string $szDiscountCode
     */
    public function __construct($oCentralizedOrderEntry, $szDiscountCode)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->szDiscountCode = $szDiscountCode;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartApplyDiscountCode
     */
    public function setOCentralizedOrderEntry($oCentralizedOrderEntry)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      return $this;
    }

    /**
     * @return string
     */
    public function getSzDiscountCode()
    {
      return $this->szDiscountCode;
    }

    /**
     * @param string $szDiscountCode
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartApplyDiscountCode
     */
    public function setSzDiscountCode($szDiscountCode)
    {
      $this->szDiscountCode = $szDiscountCode;
      return $this;
    }

}
