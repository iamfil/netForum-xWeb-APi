<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserValidateTokenResponse
{

    /**
     * @var WebUserType $WEBWebUserValidateTokenResult
     */
    protected $WEBWebUserValidateTokenResult = null;

    /**
     * @param WebUserType $WEBWebUserValidateTokenResult
     */
    public function __construct($WEBWebUserValidateTokenResult)
    {
      $this->WEBWebUserValidateTokenResult = $WEBWebUserValidateTokenResult;
    }

    /**
     * @return WebUserType
     */
    public function getWEBWebUserValidateTokenResult()
    {
      return $this->WEBWebUserValidateTokenResult;
    }

    /**
     * @param WebUserType $WEBWebUserValidateTokenResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserValidateTokenResponse
     */
    public function setWEBWebUserValidateTokenResult($WEBWebUserValidateTokenResult)
    {
      $this->WEBWebUserValidateTokenResult = $WEBWebUserValidateTokenResult;
      return $this;
    }

}
