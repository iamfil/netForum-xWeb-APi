<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserUnlockResponse
{

    /**
     * @var boolean $WEBWebUserUnlockResult
     */
    protected $WEBWebUserUnlockResult = null;

    /**
     * @param boolean $WEBWebUserUnlockResult
     */
    public function __construct($WEBWebUserUnlockResult)
    {
      $this->WEBWebUserUnlockResult = $WEBWebUserUnlockResult;
    }

    /**
     * @return boolean
     */
    public function getWEBWebUserUnlockResult()
    {
      return $this->WEBWebUserUnlockResult;
    }

    /**
     * @param boolean $WEBWebUserUnlockResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserUnlockResponse
     */
    public function setWEBWebUserUnlockResult($WEBWebUserUnlockResult)
    {
      $this->WEBWebUserUnlockResult = $WEBWebUserUnlockResult;
      return $this;
    }

}
