<?php

namespace netForum\xWeb\Xml\Generated;

class WEBGetSystemOptionsResponse
{

    /**
     * @var WEBGetSystemOptionsResult $WEBGetSystemOptionsResult
     */
    protected $WEBGetSystemOptionsResult = null;

    /**
     * @param WEBGetSystemOptionsResult $WEBGetSystemOptionsResult
     */
    public function __construct($WEBGetSystemOptionsResult)
    {
      $this->WEBGetSystemOptionsResult = $WEBGetSystemOptionsResult;
    }

    /**
     * @return WEBGetSystemOptionsResult
     */
    public function getWEBGetSystemOptionsResult()
    {
      return $this->WEBGetSystemOptionsResult;
    }

    /**
     * @param WEBGetSystemOptionsResult $WEBGetSystemOptionsResult
     * @return \netForum\xWeb\Xml\Generated\WEBGetSystemOptionsResponse
     */
    public function setWEBGetSystemOptionsResult($WEBGetSystemOptionsResult)
    {
      $this->WEBGetSystemOptionsResult = $WEBGetSystemOptionsResult;
      return $this;
    }

}
