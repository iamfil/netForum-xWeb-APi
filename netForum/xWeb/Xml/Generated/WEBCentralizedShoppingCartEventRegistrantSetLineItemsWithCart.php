<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCart
{

    /**
     * @var CentralizedOrderEntryType $oCentralizedOrderEntry
     */
    protected $oCentralizedOrderEntry = null;

    /**
     * @var guid $RegistrationKey
     */
    protected $RegistrationKey = null;

    /**
     * @var Fee $oFeeCollection
     */
    protected $oFeeCollection = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param guid $RegistrationKey
     * @param Fee $oFeeCollection
     */
    public function __construct($oCentralizedOrderEntry, $RegistrationKey, $oFeeCollection)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->RegistrationKey = $RegistrationKey;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCart
     */
    public function setOCentralizedOrderEntry($oCentralizedOrderEntry)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      return $this;
    }

    /**
     * @return guid
     */
    public function getRegistrationKey()
    {
      return $this->RegistrationKey;
    }

    /**
     * @param guid $RegistrationKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCart
     */
    public function setRegistrationKey($RegistrationKey)
    {
      $this->RegistrationKey = $RegistrationKey;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCart
     */
    public function setOFeeCollection($oFeeCollection)
    {
      $this->oFeeCollection = $oFeeCollection;
      return $this;
    }

}
