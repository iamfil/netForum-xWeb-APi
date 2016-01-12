<?php

namespace netForum\xWeb\Xml\Generated;

class WEBEmailUpdateResponse
{

    /**
     * @var boolean $WEBEmailUpdateResult
     */
    protected $WEBEmailUpdateResult = null;

    /**
     * @param boolean $WEBEmailUpdateResult
     */
    public function __construct($WEBEmailUpdateResult)
    {
      $this->WEBEmailUpdateResult = $WEBEmailUpdateResult;
    }

    /**
     * @return boolean
     */
    public function getWEBEmailUpdateResult()
    {
      return $this->WEBEmailUpdateResult;
    }

    /**
     * @param boolean $WEBEmailUpdateResult
     * @return \netForum\xWeb\Xml\Generated\WEBEmailUpdateResponse
     */
    public function setWEBEmailUpdateResult($WEBEmailUpdateResult)
    {
      $this->WEBEmailUpdateResult = $WEBEmailUpdateResult;
      return $this;
    }

}
