<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserValidateLoginResponse
{

    /**
     * @var WebUserType $WEBWebUserValidateLoginResult
     */
    protected $WEBWebUserValidateLoginResult = null;

    /**
     * @param WebUserType $WEBWebUserValidateLoginResult
     */
    public function __construct($WEBWebUserValidateLoginResult)
    {
      $this->WEBWebUserValidateLoginResult = $WEBWebUserValidateLoginResult;
    }

    /**
     * @return WebUserType
     */
    public function getWEBWebUserValidateLoginResult()
    {
      return $this->WEBWebUserValidateLoginResult;
    }

    /**
     * @param WebUserType $WEBWebUserValidateLoginResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserValidateLoginResponse
     */
    public function setWEBWebUserValidateLoginResult($WEBWebUserValidateLoginResult)
    {
      $this->WEBWebUserValidateLoginResult = $WEBWebUserValidateLoginResult;
      return $this;
    }

}
