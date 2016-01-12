<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserLockResponse
{

    /**
     * @var boolean $WEBWebUserLockResult
     */
    protected $WEBWebUserLockResult = null;

    /**
     * @param boolean $WEBWebUserLockResult
     */
    public function __construct($WEBWebUserLockResult)
    {
      $this->WEBWebUserLockResult = $WEBWebUserLockResult;
    }

    /**
     * @return boolean
     */
    public function getWEBWebUserLockResult()
    {
      return $this->WEBWebUserLockResult;
    }

    /**
     * @param boolean $WEBWebUserLockResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserLockResponse
     */
    public function setWEBWebUserLockResult($WEBWebUserLockResult)
    {
      $this->WEBWebUserLockResult = $WEBWebUserLockResult;
      return $this;
    }

}
