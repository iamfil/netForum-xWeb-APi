<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserFindUsersByDomainResponse
{

    /**
     * @var WEBWebUserFindUsersByDomainResult $WEBWebUserFindUsersByDomainResult
     */
    protected $WEBWebUserFindUsersByDomainResult = null;

    /**
     * @param WEBWebUserFindUsersByDomainResult $WEBWebUserFindUsersByDomainResult
     */
    public function __construct($WEBWebUserFindUsersByDomainResult)
    {
      $this->WEBWebUserFindUsersByDomainResult = $WEBWebUserFindUsersByDomainResult;
    }

    /**
     * @return WEBWebUserFindUsersByDomainResult
     */
    public function getWEBWebUserFindUsersByDomainResult()
    {
      return $this->WEBWebUserFindUsersByDomainResult;
    }

    /**
     * @param WEBWebUserFindUsersByDomainResult $WEBWebUserFindUsersByDomainResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserFindUsersByDomainResponse
     */
    public function setWEBWebUserFindUsersByDomainResult($WEBWebUserFindUsersByDomainResult)
    {
      $this->WEBWebUserFindUsersByDomainResult = $WEBWebUserFindUsersByDomainResult;
      return $this;
    }

}
