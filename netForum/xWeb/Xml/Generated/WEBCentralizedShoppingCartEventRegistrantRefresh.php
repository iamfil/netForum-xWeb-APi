<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartEventRegistrantRefresh
{

    /**
     * @var EventsRegistrantType $oRegistration
     */
    protected $oRegistration = null;

    /**
     * @param EventsRegistrantType $oRegistration
     */
    public function __construct($oRegistration)
    {
      $this->oRegistration = $oRegistration;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantRefresh
     */
    public function setORegistration($oRegistration)
    {
      $this->oRegistration = $oRegistration;
      return $this;
    }

}
