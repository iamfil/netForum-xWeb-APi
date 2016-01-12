<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartRemoveEventRegistrantGroup
{

    /**
     * @var CentralizedOrderEntryType $oCentralizedOrderEntry
     */
    protected $oCentralizedOrderEntry = null;

    /**
     * @var guid $GroupRegistrationKey
     */
    protected $GroupRegistrationKey = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param guid $GroupRegistrationKey
     */
    public function __construct($oCentralizedOrderEntry, $GroupRegistrationKey)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->GroupRegistrationKey = $GroupRegistrationKey;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartRemoveEventRegistrantGroup
     */
    public function setOCentralizedOrderEntry($oCentralizedOrderEntry)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      return $this;
    }

    /**
     * @return guid
     */
    public function getGroupRegistrationKey()
    {
      return $this->GroupRegistrationKey;
    }

    /**
     * @param guid $GroupRegistrationKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartRemoveEventRegistrantGroup
     */
    public function setGroupRegistrationKey($GroupRegistrationKey)
    {
      $this->GroupRegistrationKey = $GroupRegistrationKey;
      return $this;
    }

}
