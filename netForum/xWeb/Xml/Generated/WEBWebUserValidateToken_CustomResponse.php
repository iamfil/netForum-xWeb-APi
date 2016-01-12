<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserValidateToken_CustomResponse
{

    /**
     * @var string $WEBWebUserValidateToken_CustomResult
     */
    protected $WEBWebUserValidateToken_CustomResult = null;

    /**
     * @param string $WEBWebUserValidateToken_CustomResult
     */
    public function __construct($WEBWebUserValidateToken_CustomResult)
    {
      $this->WEBWebUserValidateToken_CustomResult = $WEBWebUserValidateToken_CustomResult;
    }

    /**
     * @return string
     */
    public function getWEBWebUserValidateToken_CustomResult()
    {
      return $this->WEBWebUserValidateToken_CustomResult;
    }

    /**
     * @param string $WEBWebUserValidateToken_CustomResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserValidateToken_CustomResponse
     */
    public function setWEBWebUserValidateToken_CustomResult($WEBWebUserValidateToken_CustomResult)
    {
      $this->WEBWebUserValidateToken_CustomResult = $WEBWebUserValidateToken_CustomResult;
      return $this;
    }

}
