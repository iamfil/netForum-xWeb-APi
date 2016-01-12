<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserChangePasswordResponse
{

    /**
     * @var boolean $WEBWebUserChangePasswordResult
     */
    protected $WEBWebUserChangePasswordResult = null;

    /**
     * @param boolean $WEBWebUserChangePasswordResult
     */
    public function __construct($WEBWebUserChangePasswordResult)
    {
      $this->WEBWebUserChangePasswordResult = $WEBWebUserChangePasswordResult;
    }

    /**
     * @return boolean
     */
    public function getWEBWebUserChangePasswordResult()
    {
      return $this->WEBWebUserChangePasswordResult;
    }

    /**
     * @param boolean $WEBWebUserChangePasswordResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserChangePasswordResponse
     */
    public function setWEBWebUserChangePasswordResult($WEBWebUserChangePasswordResult)
    {
      $this->WEBWebUserChangePasswordResult = $WEBWebUserChangePasswordResult;
      return $this;
    }

}
