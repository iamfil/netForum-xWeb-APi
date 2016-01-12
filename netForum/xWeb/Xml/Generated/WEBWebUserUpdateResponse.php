<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserUpdateResponse
{

    /**
     * @var WebUserType $WEBWebUserUpdateResult
     */
    protected $WEBWebUserUpdateResult = null;

    /**
     * @param WebUserType $WEBWebUserUpdateResult
     */
    public function __construct($WEBWebUserUpdateResult)
    {
      $this->WEBWebUserUpdateResult = $WEBWebUserUpdateResult;
    }

    /**
     * @return WebUserType
     */
    public function getWEBWebUserUpdateResult()
    {
      return $this->WEBWebUserUpdateResult;
    }

    /**
     * @param WebUserType $WEBWebUserUpdateResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserUpdateResponse
     */
    public function setWEBWebUserUpdateResult($WEBWebUserUpdateResult)
    {
      $this->WEBWebUserUpdateResult = $WEBWebUserUpdateResult;
      return $this;
    }

}
