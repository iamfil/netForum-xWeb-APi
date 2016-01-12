<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserValidateLogin_CustomResponse
{

    /**
     * @var string $WEBWebUserValidateLogin_CustomResult
     */
    protected $WEBWebUserValidateLogin_CustomResult = null;

    /**
     * @param string $WEBWebUserValidateLogin_CustomResult
     */
    public function __construct($WEBWebUserValidateLogin_CustomResult)
    {
      $this->WEBWebUserValidateLogin_CustomResult = $WEBWebUserValidateLogin_CustomResult;
    }

    /**
     * @return string
     */
    public function getWEBWebUserValidateLogin_CustomResult()
    {
      return $this->WEBWebUserValidateLogin_CustomResult;
    }

    /**
     * @param string $WEBWebUserValidateLogin_CustomResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserValidateLogin_CustomResponse
     */
    public function setWEBWebUserValidateLogin_CustomResult($WEBWebUserValidateLogin_CustomResult)
    {
      $this->WEBWebUserValidateLogin_CustomResult = $WEBWebUserValidateLogin_CustomResult;
      return $this;
    }

}
