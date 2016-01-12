<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartRemoveEventRegistrant
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
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param guid $RegistrationKey
     */
    public function __construct($oCentralizedOrderEntry, $RegistrationKey)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->RegistrationKey = $RegistrationKey;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartRemoveEventRegistrant
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartRemoveEventRegistrant
     */
    public function setRegistrationKey($RegistrationKey)
    {
      $this->RegistrationKey = $RegistrationKey;
      return $this;
    }

}
