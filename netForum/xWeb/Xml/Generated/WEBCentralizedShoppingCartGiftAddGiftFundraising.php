<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGiftAddGiftFundraising
{

    /**
     * @var CentralizedOrderEntryType $oCentralizedOrderEntry
     */
    protected $oCentralizedOrderEntry = null;

    /**
     * @var FundraisingGiftType $oFundraisingGift
     */
    protected $oFundraisingGift = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param FundraisingGiftType $oFundraisingGift
     */
    public function __construct($oCentralizedOrderEntry, $oFundraisingGift)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->oFundraisingGift = $oFundraisingGift;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGiftAddGiftFundraising
     */
    public function setOCentralizedOrderEntry($oCentralizedOrderEntry)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      return $this;
    }

    /**
     * @return FundraisingGiftType
     */
    public function getOFundraisingGift()
    {
      return $this->oFundraisingGift;
    }

    /**
     * @param FundraisingGiftType $oFundraisingGift
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGiftAddGiftFundraising
     */
    public function setOFundraisingGift($oFundraisingGift)
    {
      $this->oFundraisingGift = $oFundraisingGift;
      return $this;
    }

}
