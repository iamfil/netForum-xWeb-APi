<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserLoginByRecno_CustomResponse
{

    /**
     * @var string $WEBWebUserLoginByRecno_CustomResult
     */
    protected $WEBWebUserLoginByRecno_CustomResult = null;

    /**
     * @param string $WEBWebUserLoginByRecno_CustomResult
     */
    public function __construct($WEBWebUserLoginByRecno_CustomResult)
    {
      $this->WEBWebUserLoginByRecno_CustomResult = $WEBWebUserLoginByRecno_CustomResult;
    }

    /**
     * @return string
     */
    public function getWEBWebUserLoginByRecno_CustomResult()
    {
      return $this->WEBWebUserLoginByRecno_CustomResult;
    }

    /**
     * @param string $WEBWebUserLoginByRecno_CustomResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserLoginByRecno_CustomResponse
     */
    public function setWEBWebUserLoginByRecno_CustomResult($WEBWebUserLoginByRecno_CustomResult)
    {
      $this->WEBWebUserLoginByRecno_CustomResult = $WEBWebUserLoginByRecno_CustomResult;
      return $this;
    }

}
