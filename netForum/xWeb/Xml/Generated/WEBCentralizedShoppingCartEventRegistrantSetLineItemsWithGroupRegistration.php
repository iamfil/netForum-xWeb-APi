<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithGroupRegistration
{

    /**
     * @var EventsRegistrantGroupType $oGroupRegistration
     */
    protected $oGroupRegistration = null;

    /**
     * @var guid $RegistrationKey
     */
    protected $RegistrationKey = null;

    /**
     * @var Fee $oFeeCollection
     */
    protected $oFeeCollection = null;

    /**
     * @param EventsRegistrantGroupType $oGroupRegistration
     * @param guid $RegistrationKey
     * @param Fee $oFeeCollection
     */
    public function __construct($oGroupRegistration, $RegistrationKey, $oFeeCollection)
    {
      $this->oGroupRegistration = $oGroupRegistration;
      $this->RegistrationKey = $RegistrationKey;
      $this->oFeeCollection = $oFeeCollection;
    }

    /**
     * @return EventsRegistrantGroupType
     */
    public function getOGroupRegistration()
    {
      return $this->oGroupRegistration;
    }

    /**
     * @param EventsRegistrantGroupType $oGroupRegistration
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithGroupRegistration
     */
    public function setOGroupRegistration($oGroupRegistration)
    {
      $this->oGroupRegistration = $oGroupRegistration;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithGroupRegistration
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithGroupRegistration
     */
    public function setOFeeCollection($oFeeCollection)
    {
      $this->oFeeCollection = $oFeeCollection;
      return $this;
    }

}
