<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserLoginByRememberMeResponse
{

    /**
     * @var WebUserType $WEBWebUserLoginByRememberMeResult
     */
    protected $WEBWebUserLoginByRememberMeResult = null;

    /**
     * @param WebUserType $WEBWebUserLoginByRememberMeResult
     */
    public function __construct($WEBWebUserLoginByRememberMeResult)
    {
      $this->WEBWebUserLoginByRememberMeResult = $WEBWebUserLoginByRememberMeResult;
    }

    /**
     * @return WebUserType
     */
    public function getWEBWebUserLoginByRememberMeResult()
    {
      return $this->WEBWebUserLoginByRememberMeResult;
    }

    /**
     * @param WebUserType $WEBWebUserLoginByRememberMeResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserLoginByRememberMeResponse
     */
    public function setWEBWebUserLoginByRememberMeResult($WEBWebUserLoginByRememberMeResult)
    {
      $this->WEBWebUserLoginByRememberMeResult = $WEBWebUserLoginByRememberMeResult;
      return $this;
    }

}
