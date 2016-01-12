<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartAddEventRegistrantToGroup
{

    /**
     * @var EventsRegistrantType $oRegistration
     */
    protected $oRegistration = null;

    /**
     * @var EventsRegistrantGroupType $oGroupRegistration
     */
    protected $oGroupRegistration = null;

    /**
     * @param EventsRegistrantType $oRegistration
     * @param EventsRegistrantGroupType $oGroupRegistration
     */
    public function __construct($oRegistration, $oGroupRegistration)
    {
      $this->oRegistration = $oRegistration;
      $this->oGroupRegistration = $oGroupRegistration;
    }

    /**
     * @return EventsRegistrantType
     */
    public function getORegistration()
    {
      return $this->oRegistration;
    }

    /**
     * @param EventsRegistrantType $oRegistration
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartAddEventRegistrantToGroup
     */
    public function setORegistration($oRegistration)
    {
      $this->oRegistration = $oRegistration;
      return $this;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartAddEventRegistrantToGroup
     */
    public function setOGroupRegistration($oGroupRegistration)
    {
      $this->oGroupRegistration = $oGroupRegistration;
      return $this;
    }

}
