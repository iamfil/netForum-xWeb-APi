<?php

namespace netForum\xWeb\Xml\Generated;

class WEBActivityAlreadyRegisteredForEventResponse
{

    /**
     * @var boolean $WEBActivityAlreadyRegisteredForEventResult
     */
    protected $WEBActivityAlreadyRegisteredForEventResult = null;

    /**
     * @param boolean $WEBActivityAlreadyRegisteredForEventResult
     */
    public function __construct($WEBActivityAlreadyRegisteredForEventResult)
    {
      $this->WEBActivityAlreadyRegisteredForEventResult = $WEBActivityAlreadyRegisteredForEventResult;
    }

    /**
     * @return boolean
     */
    public function getWEBActivityAlreadyRegisteredForEventResult()
    {
      return $this->WEBActivityAlreadyRegisteredForEventResult;
    }

    /**
     * @param boolean $WEBActivityAlreadyRegisteredForEventResult
     * @return \netForum\xWeb\Xml\Generated\WEBActivityAlreadyRegisteredForEventResponse
     */
    public function setWEBActivityAlreadyRegisteredForEventResult($WEBActivityAlreadyRegisteredForEventResult)
    {
      $this->WEBActivityAlreadyRegisteredForEventResult = $WEBActivityAlreadyRegisteredForEventResult;
      return $this;
    }

}
