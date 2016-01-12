<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartExhibitorSetLineItemsWithCart
{

    /**
     * @var CentralizedOrderEntryType $oCentralizedOrderEntry
     */
    protected $oCentralizedOrderEntry = null;

    /**
     * @var guid $ExhibitorKey
     */
    protected $ExhibitorKey = null;

    /**
     * @var Fee $oFeeCollection
     */
    protected $oFeeCollection = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param guid $ExhibitorKey
     * @param Fee $oFeeCollection
     */
    public function __construct($oCentralizedOrderEntry, $ExhibitorKey, $oFeeCollection)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->ExhibitorKey = $ExhibitorKey;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartExhibitorSetLineItemsWithCart
     */
    public function setOCentralizedOrderEntry($oCentralizedOrderEntry)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      return $this;
    }

    /**
     * @return guid
     */
    public function getExhibitorKey()
    {
      return $this->ExhibitorKey;
    }

    /**
     * @param guid $ExhibitorKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartExhibitorSetLineItemsWithCart
     */
    public function setExhibitorKey($ExhibitorKey)
    {
      $this->ExhibitorKey = $ExhibitorKey;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartExhibitorSetLineItemsWithCart
     */
    public function setOFeeCollection($oFeeCollection)
    {
      $this->oFeeCollection = $oFeeCollection;
      return $this;
    }

}
