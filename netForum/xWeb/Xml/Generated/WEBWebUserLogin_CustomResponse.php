<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserLogin_CustomResponse
{

    /**
     * @var string $WEBWebUserLogin_CustomResult
     */
    protected $WEBWebUserLogin_CustomResult = null;

    /**
     * @param string $WEBWebUserLogin_CustomResult
     */
    public function __construct($WEBWebUserLogin_CustomResult)
    {
      $this->WEBWebUserLogin_CustomResult = $WEBWebUserLogin_CustomResult;
    }

    /**
     * @return string
     */
    public function getWEBWebUserLogin_CustomResult()
    {
      return $this->WEBWebUserLogin_CustomResult;
    }

    /**
     * @param string $WEBWebUserLogin_CustomResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserLogin_CustomResponse
     */
    public function setWEBWebUserLogin_CustomResult($WEBWebUserLogin_CustomResult)
    {
      $this->WEBWebUserLogin_CustomResult = $WEBWebUserLogin_CustomResult;
      return $this;
    }

}
