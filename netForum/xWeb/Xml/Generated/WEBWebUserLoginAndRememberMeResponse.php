<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserLoginAndRememberMeResponse
{

    /**
     * @var WebUserType $WEBWebUserLoginAndRememberMeResult
     */
    protected $WEBWebUserLoginAndRememberMeResult = null;

    /**
     * @param WebUserType $WEBWebUserLoginAndRememberMeResult
     */
    public function __construct($WEBWebUserLoginAndRememberMeResult)
    {
      $this->WEBWebUserLoginAndRememberMeResult = $WEBWebUserLoginAndRememberMeResult;
    }

    /**
     * @return WebUserType
     */
    public function getWEBWebUserLoginAndRememberMeResult()
    {
      return $this->WEBWebUserLoginAndRememberMeResult;
    }

    /**
     * @param WebUserType $WEBWebUserLoginAndRememberMeResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserLoginAndRememberMeResponse
     */
    public function setWEBWebUserLoginAndRememberMeResult($WEBWebUserLoginAndRememberMeResult)
    {
      $this->WEBWebUserLoginAndRememberMeResult = $WEBWebUserLoginAndRememberMeResult;
      return $this;
    }

}
