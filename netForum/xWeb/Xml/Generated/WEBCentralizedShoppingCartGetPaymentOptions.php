<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetPaymentOptions
{

    /**
     * @var CentralizedOrderEntryType $oCentalizedOrderEntry
     */
    protected $oCentalizedOrderEntry = null;

    /**
     * @param CentralizedOrderEntryType $oCentalizedOrderEntry
     */
    public function __construct($oCentalizedOrderEntry)
    {
      $this->oCentalizedOrderEntry = $oCentalizedOrderEntry;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getOCentalizedOrderEntry()
    {
      return $this->oCentalizedOrderEntry;
    }

    /**
     * @param CentralizedOrderEntryType $oCentalizedOrderEntry
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetPaymentOptions
     */
    public function setOCentalizedOrderEntry($oCentalizedOrderEntry)
    {
      $this->oCentalizedOrderEntry = $oCentalizedOrderEntry;
      return $this;
    }

}
