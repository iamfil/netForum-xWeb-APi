<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartAddEventRegistrant
{

    /**
     * @var CentralizedOrderEntryType $oCentralizedOrderEntry
     */
    protected $oCentralizedOrderEntry = null;

    /**
     * @var EventsRegistrantType $oRegistration
     */
    protected $oRegistration = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param EventsRegistrantType $oRegistration
     */
    public function __construct($oCentralizedOrderEntry, $oRegistration)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->oRegistration = $oRegistration;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartAddEventRegistrant
     */
    public function setOCentralizedOrderEntry($oCentralizedOrderEntry)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      return $this;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartAddEventRegistrant
     */
    public function setORegistration($oRegistration)
    {
      $this->oRegistration = $oRegistration;
      return $this;
    }

}
