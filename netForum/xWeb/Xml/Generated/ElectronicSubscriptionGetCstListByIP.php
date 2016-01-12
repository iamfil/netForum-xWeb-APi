<?php

namespace netForum\xWeb\Xml\Generated;

class ElectronicSubscriptionGetCstListByIP
{

    /**
     * @var string $oIPAddress
     */
    protected $oIPAddress = null;

    /**
     * @param string $oIPAddress
     */
    public function __construct($oIPAddress)
    {
      $this->oIPAddress = $oIPAddress;
    }

    /**
     * @return string
     */
    public function getOIPAddress()
    {
      return $this->oIPAddress;
    }

    /**
     * @param string $oIPAddress
     * @return \netForum\xWeb\Xml\Generated\ElectronicSubscriptionGetCstListByIP
     */
    public function setOIPAddress($oIPAddress)
    {
      $this->oIPAddress = $oIPAddress;
      return $this;
    }

}
