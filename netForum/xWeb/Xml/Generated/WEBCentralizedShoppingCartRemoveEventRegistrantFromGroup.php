<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartRemoveEventRegistrantFromGroup
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
     * @param EventsRegistrantGroupType $oGroupRegistration
     * @param guid $RegistrationKey
     */
    public function __construct($oGroupRegistration, $RegistrationKey)
    {
      $this->oGroupRegistration = $oGroupRegistration;
      $this->RegistrationKey = $RegistrationKey;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartRemoveEventRegistrantFromGroup
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartRemoveEventRegistrantFromGroup
     */
    public function setRegistrationKey($RegistrationKey)
    {
      $this->RegistrationKey = $RegistrationKey;
      return $this;
    }

}
