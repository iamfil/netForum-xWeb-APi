<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGiftFundraisingSetLineItemsWithCart
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
     * @var Fee $oFeeCollection
     */
    protected $oFeeCollection = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param guid $FundraisingGiftKey
     * @param Fee $oFeeCollection
     */
    public function __construct($oCentralizedOrderEntry, $FundraisingGiftKey, $oFeeCollection)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->FundraisingGiftKey = $FundraisingGiftKey;
      $this->oFeeCollection = $oFeeCollection;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGiftFundraisingSetLineItemsWithCart
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGiftFundraisingSetLineItemsWithCart
     */
    public function setFundraisingGiftKey($FundraisingGiftKey)
    {
      $this->FundraisingGiftKey = $FundraisingGiftKey;
      return $this;
    }

    /**
     * @return Fee
     */
    public function getOFeeCollection()
    {
      return $this->oFeeCollection;
    }

    /**
     * @param Fee $oFeeCollection
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGiftFundraisingSetLineItemsWithCart
     */
    public function setOFeeCollection($oFeeCollection)
    {
      $this->oFeeCollection = $oFeeCollection;
      return $this;
    }

}
