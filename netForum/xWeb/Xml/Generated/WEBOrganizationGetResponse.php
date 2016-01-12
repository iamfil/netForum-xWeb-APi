<?php

namespace netForum\xWeb\Xml\Generated;

class WEBOrganizationGetResponse
{

    /**
     * @var OrganizationType $WEBOrganizationGetResult
     */
    protected $WEBOrganizationGetResult = null;

    /**
     * @param OrganizationType $WEBOrganizationGetResult
     */
    public function __construct($WEBOrganizationGetResult)
    {
      $this->WEBOrganizationGetResult = $WEBOrganizationGetResult;
    }

    /**
     * @return OrganizationType
     */
    public function getWEBOrganizationGetResult()
    {
      return $this->WEBOrganizationGetResult;
    }

    /**
     * @param OrganizationType $WEBOrganizationGetResult
     * @return \netForum\xWeb\Xml\Generated\WEBOrganizationGetResponse
     */
    public function setWEBOrganizationGetResult($WEBOrganizationGetResult)
    {
      $this->WEBOrganizationGetResult = $WEBOrganizationGetResult;
      return $this;
    }

}
