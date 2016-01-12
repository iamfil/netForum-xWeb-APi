<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGiftRemoveFundraisingGift
{

    /**
     * @var CentralizedOrderEntryType $oCentralizedOrderEntry
     */
    protected $oCentralizedOrderEntry = null;

    /**
     * @var guid $FundraisingGiftKey
     */
    protected $FundraisingGiftKey = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param guid $FundraisingGiftKey
     */
    public function __construct($oCentralizedOrderEntry, $FundraisingGiftKey)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->FundraisingGiftKey = $FundraisingGiftKey;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGiftRemoveFundraisingGift
     */
    public function setOCentralizedOrderEntry($oCentralizedOrderEntry)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      return $this;
    }

    /**
     * @return guid
     */
    public function getFundraisingGiftKey()
    {
      return $this->FundraisingGiftKey;
    }

    /**
     * @param guid $FundraisingGiftKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGiftRemoveFundraisingGift
     */
    public function setFundraisingGiftKey($FundraisingGiftKey)
    {
      $this->FundraisingGiftKey = $FundraisingGiftKey;
      return $this;
    }

}
