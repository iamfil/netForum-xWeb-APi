<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserGetByRecno_CustomResponse
{

    /**
     * @var WebUserType $WEBWebUserGetByRecno_CustomResult
     */
    protected $WEBWebUserGetByRecno_CustomResult = null;

    /**
     * @param WebUserType $WEBWebUserGetByRecno_CustomResult
     */
    public function __construct($WEBWebUserGetByRecno_CustomResult)
    {
      $this->WEBWebUserGetByRecno_CustomResult = $WEBWebUserGetByRecno_CustomResult;
    }

    /**
     * @return WebUserType
     */
    public function getWEBWebUserGetByRecno_CustomResult()
    {
      return $this->WEBWebUserGetByRecno_CustomResult;
    }

    /**
     * @param WebUserType $WEBWebUserGetByRecno_CustomResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserGetByRecno_CustomResponse
     */
    public function setWEBWebUserGetByRecno_CustomResult($WEBWebUserGetByRecno_CustomResult)
    {
      $this->WEBWebUserGetByRecno_CustomResult = $WEBWebUserGetByRecno_CustomResult;
      return $this;
    }

}
