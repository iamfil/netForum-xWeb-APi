<?php

namespace netForum\xWeb\Xml\Generated;

class WEBAddressGetStatesResponse
{

    /**
     * @var WEBAddressGetStatesResult $WEBAddressGetStatesResult
     */
    protected $WEBAddressGetStatesResult = null;

    /**
     * @param WEBAddressGetStatesResult $WEBAddressGetStatesResult
     */
    public function __construct($WEBAddressGetStatesResult)
    {
      $this->WEBAddressGetStatesResult = $WEBAddressGetStatesResult;
    }

    /**
     * @return WEBAddressGetStatesResult
     */
    public function getWEBAddressGetStatesResult()
    {
      return $this->WEBAddressGetStatesResult;
    }

    /**
     * @param WEBAddressGetStatesResult $WEBAddressGetStatesResult
     * @return \netForum\xWeb\Xml\Generated\WEBAddressGetStatesResponse
     */
    public function setWEBAddressGetStatesResult($WEBAddressGetStatesResult)
    {
      $this->WEBAddressGetStatesResult = $WEBAddressGetStatesResult;
      return $this;
    }

}
