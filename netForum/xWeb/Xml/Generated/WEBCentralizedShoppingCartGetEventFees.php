<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetEventFees
{

    /**
     * @var EventsRegistrantType $oRegistration
     */
    protected $oRegistration = null;

    /**
     * @var CentralizedOrderEntryType $oCOE
     */
    protected $oCOE = null;

    /**
     * @param EventsRegistrantType $oRegistration
     * @param CentralizedOrderEntryType $oCOE
     */
    public function __construct($oRegistration, $oCOE)
    {
      $this->oRegistration = $oRegistration;
      $this->oCOE = $oCOE;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetEventFees
     */
    public function setORegistration($oRegistration)
    {
      $this->oRegistration = $oRegistration;
      return $this;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getOCOE()
    {
      return $this->oCOE;
    }

    /**
     * @param CentralizedOrderEntryType $oCOE
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetEventFees
     */
    public function setOCOE($oCOE)
    {
      $this->oCOE = $oCOE;
      return $this;
    }

}
