<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserFindUsersByEmailResponse
{

    /**
     * @var WEBWebUserFindUsersByEmailResult $WEBWebUserFindUsersByEmailResult
     */
    protected $WEBWebUserFindUsersByEmailResult = null;

    /**
     * @param WEBWebUserFindUsersByEmailResult $WEBWebUserFindUsersByEmailResult
     */
    public function __construct($WEBWebUserFindUsersByEmailResult)
    {
      $this->WEBWebUserFindUsersByEmailResult = $WEBWebUserFindUsersByEmailResult;
    }

    /**
     * @return WEBWebUserFindUsersByEmailResult
     */
    public function getWEBWebUserFindUsersByEmailResult()
    {
      return $this->WEBWebUserFindUsersByEmailResult;
    }

    /**
     * @param WEBWebUserFindUsersByEmailResult $WEBWebUserFindUsersByEmailResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserFindUsersByEmailResponse
     */
    public function setWEBWebUserFindUsersByEmailResult($WEBWebUserFindUsersByEmailResult)
    {
      $this->WEBWebUserFindUsersByEmailResult = $WEBWebUserFindUsersByEmailResult;
      return $this;
    }

}
