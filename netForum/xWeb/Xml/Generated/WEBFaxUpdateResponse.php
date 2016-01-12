<?php

namespace netForum\xWeb\Xml\Generated;

class WEBFaxUpdateResponse
{

    /**
     * @var boolean $WEBFaxUpdateResult
     */
    protected $WEBFaxUpdateResult = null;

    /**
     * @param boolean $WEBFaxUpdateResult
     */
    public function __construct($WEBFaxUpdateResult)
    {
      $this->WEBFaxUpdateResult = $WEBFaxUpdateResult;
    }

    /**
     * @return boolean
     */
    public function getWEBFaxUpdateResult()
    {
      return $this->WEBFaxUpdateResult;
    }

    /**
     * @param boolean $WEBFaxUpdateResult
     * @return \netForum\xWeb\Xml\Generated\WEBFaxUpdateResponse
     */
    public function setWEBFaxUpdateResult($WEBFaxUpdateResult)
    {
      $this->WEBFaxUpdateResult = $WEBFaxUpdateResult;
      return $this;
    }

}
