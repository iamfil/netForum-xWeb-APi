<?php

namespace netForum\xWeb\Xml\Generated;

class WEBUpdateSystemOptionResponse
{

    /**
     * @var boolean $WEBUpdateSystemOptionResult
     */
    protected $WEBUpdateSystemOptionResult = null;

    /**
     * @param boolean $WEBUpdateSystemOptionResult
     */
    public function __construct($WEBUpdateSystemOptionResult)
    {
      $this->WEBUpdateSystemOptionResult = $WEBUpdateSystemOptionResult;
    }

    /**
     * @return boolean
     */
    public function getWEBUpdateSystemOptionResult()
    {
      return $this->WEBUpdateSystemOptionResult;
    }

    /**
     * @param boolean $WEBUpdateSystemOptionResult
     * @return \netForum\xWeb\Xml\Generated\WEBUpdateSystemOptionResponse
     */
    public function setWEBUpdateSystemOptionResult($WEBUpdateSystemOptionResult)
    {
      $this->WEBUpdateSystemOptionResult = $WEBUpdateSystemOptionResult;
      return $this;
    }

}
