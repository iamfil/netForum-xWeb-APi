<?php

namespace netForum\xWeb\Xml\Generated;

class WEBMemberDirectoryOrganizationSearchResponse
{

    /**
     * @var WEBMemberDirectoryOrganizationSearchResult $WEBMemberDirectoryOrganizationSearchResult
     */
    protected $WEBMemberDirectoryOrganizationSearchResult = null;

    /**
     * @param WEBMemberDirectoryOrganizationSearchResult $WEBMemberDirectoryOrganizationSearchResult
     */
    public function __construct($WEBMemberDirectoryOrganizationSearchResult)
    {
      $this->WEBMemberDirectoryOrganizationSearchResult = $WEBMemberDirectoryOrganizationSearchResult;
    }

    /**
     * @return WEBMemberDirectoryOrganizationSearchResult
     */
    public function getWEBMemberDirectoryOrganizationSearchResult()
    {
      return $this->WEBMemberDirectoryOrganizationSearchResult;
    }

    /**
     * @param WEBMemberDirectoryOrganizationSearchResult $WEBMemberDirectoryOrganizationSearchResult
     * @return \netForum\xWeb\Xml\Generated\WEBMemberDirectoryOrganizationSearchResponse
     */
    public function setWEBMemberDirectoryOrganizationSearchResult($WEBMemberDirectoryOrganizationSearchResult)
    {
      $this->WEBMemberDirectoryOrganizationSearchResult = $WEBMemberDirectoryOrganizationSearchResult;
      return $this;
    }

}
