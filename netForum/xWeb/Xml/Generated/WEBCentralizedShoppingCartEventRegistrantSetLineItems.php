<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartEventRegistrantSetLineItems
{

    /**
     * @var EventsRegistrantType $oRegistration
     */
    protected $oRegistration = null;

    /**
     * @var Fees $oFeeCollection
     */
    protected $oFeeCollection = null;

    /**
     * @param EventsRegistrantType $oRegistration
     * @param Fees $oFeeCollection
     */
    public function __construct($oRegistration, $oFeeCollection)
    {
      $this->oRegistration = $oRegistration;
      $this->oFeeCollection = $oFeeCollection;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantSetLineItems
     */
    public function setORegistration($oRegistration)
    {
      $this->oRegistration = $oRegistration;
      return $this;
    }

    /**
     * @return Fees
     */
    public function getOFeeCollection()
    {
      return $this->oFeeCollection;
    }

    /**
     * @param Fees $oFeeCollection
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantSetLineItems
     */
    public function setOFeeCollection($oFeeCollection)
    {
      $this->oFeeCollection = $oFeeCollection;
      return $this;
    }

}
