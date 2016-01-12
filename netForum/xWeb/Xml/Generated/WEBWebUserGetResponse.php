<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserGetResponse
{

    /**
     * @var WebUserType $WEBWebUserGetResult
     */
    protected $WEBWebUserGetResult = null;

    /**
     * @param WebUserType $WEBWebUserGetResult
     */
    public function __construct($WEBWebUserGetResult)
    {
      $this->WEBWebUserGetResult = $WEBWebUserGetResult;
    }

    /**
     * @return WebUserType
     */
    public function getWEBWebUserGetResult()
    {
      return $this->WEBWebUserGetResult;
    }

    /**
     * @param WebUserType $WEBWebUserGetResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserGetResponse
     */
    public function setWEBWebUserGetResult($WEBWebUserGetResult)
    {
      $this->WEBWebUserGetResult = $WEBWebUserGetResult;
      return $this;
    }

}
