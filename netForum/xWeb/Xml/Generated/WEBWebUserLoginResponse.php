<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserLoginResponse
{

    /**
     * @var WebUserType $WEBWebUserLoginResult
     */
    protected $WEBWebUserLoginResult = null;

    /**
     * @param WebUserType $WEBWebUserLoginResult
     */
    public function __construct($WEBWebUserLoginResult)
    {
      $this->WEBWebUserLoginResult = $WEBWebUserLoginResult;
    }

    /**
     * @return WebUserType
     */
    public function getWEBWebUserLoginResult()
    {
      return $this->WEBWebUserLoginResult;
    }

    /**
     * @param WebUserType $WEBWebUserLoginResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserLoginResponse
     */
    public function setWEBWebUserLoginResult($WEBWebUserLoginResult)
    {
      $this->WEBWebUserLoginResult = $WEBWebUserLoginResult;
      return $this;
    }

}
