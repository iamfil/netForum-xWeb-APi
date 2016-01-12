<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartAddEventRegistrantGroup
{

    /**
     * @var CentralizedOrderEntryType $oCentralizedOrderEntry
     */
    protected $oCentralizedOrderEntry = null;

    /**
     * @var EventsRegistrantGroupType $oGroupRegistration
     */
    protected $oGroupRegistration = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param EventsRegistrantGroupType $oGroupRegistration
     */
    public function __construct($oCentralizedOrderEntry, $oGroupRegistration)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->oGroupRegistration = $oGroupRegistration;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartAddEventRegistrantGroup
     */
    public function setOCentralizedOrderEntry($oCentralizedOrderEntry)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartAddEventRegistrantGroup
     */
    public function setOGroupRegistration($oGroupRegistration)
    {
      $this->oGroupRegistration = $oGroupRegistration;
      return $this;
    }

}
