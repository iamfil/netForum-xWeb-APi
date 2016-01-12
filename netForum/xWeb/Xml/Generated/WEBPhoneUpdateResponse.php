<?php

namespace netForum\xWeb\Xml\Generated;

class WEBPhoneUpdateResponse
{

    /**
     * @var boolean $WEBPhoneUpdateResult
     */
    protected $WEBPhoneUpdateResult = null;

    /**
     * @param boolean $WEBPhoneUpdateResult
     */
    public function __construct($WEBPhoneUpdateResult)
    {
      $this->WEBPhoneUpdateResult = $WEBPhoneUpdateResult;
    }

    /**
     * @return boolean
     */
    public function getWEBPhoneUpdateResult()
    {
      return $this->WEBPhoneUpdateResult;
    }

    /**
     * @param boolean $WEBPhoneUpdateResult
     * @return \netForum\xWeb\Xml\Generated\WEBPhoneUpdateResponse
     */
    public function setWEBPhoneUpdateResult($WEBPhoneUpdateResult)
    {
      $this->WEBPhoneUpdateResult = $WEBPhoneUpdateResult;
      return $this;
    }

}
