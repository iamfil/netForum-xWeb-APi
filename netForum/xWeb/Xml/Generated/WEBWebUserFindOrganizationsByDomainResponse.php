<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserFindOrganizationsByDomainResponse
{

    /**
     * @var WEBWebUserFindOrganizationsByDomainResult $WEBWebUserFindOrganizationsByDomainResult
     */
    protected $WEBWebUserFindOrganizationsByDomainResult = null;

    /**
     * @param WEBWebUserFindOrganizationsByDomainResult $WEBWebUserFindOrganizationsByDomainResult
     */
    public function __construct($WEBWebUserFindOrganizationsByDomainResult)
    {
      $this->WEBWebUserFindOrganizationsByDomainResult = $WEBWebUserFindOrganizationsByDomainResult;
    }

    /**
     * @return WEBWebUserFindOrganizationsByDomainResult
     */
    public function getWEBWebUserFindOrganizationsByDomainResult()
    {
      return $this->WEBWebUserFindOrganizationsByDomainResult;
    }

    /**
     * @param WEBWebUserFindOrganizationsByDomainResult $WEBWebUserFindOrganizationsByDomainResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserFindOrganizationsByDomainResponse
     */
    public function setWEBWebUserFindOrganizationsByDomainResult($WEBWebUserFindOrganizationsByDomainResult)
    {
      $this->WEBWebUserFindOrganizationsByDomainResult = $WEBWebUserFindOrganizationsByDomainResult;
      return $this;
    }

}
