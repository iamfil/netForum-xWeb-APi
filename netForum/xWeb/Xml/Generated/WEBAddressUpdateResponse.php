<?php

namespace netForum\xWeb\Xml\Generated;

class WEBAddressUpdateResponse
{

    /**
     * @var boolean $WEBAddressUpdateResult
     */
    protected $WEBAddressUpdateResult = null;

    /**
     * @param boolean $WEBAddressUpdateResult
     */
    public function __construct($WEBAddressUpdateResult)
    {
      $this->WEBAddressUpdateResult = $WEBAddressUpdateResult;
    }

    /**
     * @return boolean
     */
    public function getWEBAddressUpdateResult()
    {
      return $this->WEBAddressUpdateResult;
    }

    /**
     * @param boolean $WEBAddressUpdateResult
     * @return \netForum\xWeb\Xml\Generated\WEBAddressUpdateResponse
     */
    public function setWEBAddressUpdateResult($WEBAddressUpdateResult)
    {
      $this->WEBAddressUpdateResult = $WEBAddressUpdateResult;
      return $this;
    }

}
