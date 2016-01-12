<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartEventRegistrantGroupRefresh
{

    /**
     * @var EventsRegistrantGroupType $oGroupRegistration
     */
    protected $oGroupRegistration = null;

    /**
     * @param EventsRegistrantGroupType $oGroupRegistration
     */
    public function __construct($oGroupRegistration)
    {
      $this->oGroupRegistration = $oGroupRegistration;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantGroupRefresh
     */
    public function setOGroupRegistration($oGroupRegistration)
    {
      $this->oGroupRegistration = $oGroupRegistration;
      return $this;
    }

}
