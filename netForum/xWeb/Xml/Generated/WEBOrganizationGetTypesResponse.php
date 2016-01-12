<?php

namespace netForum\xWeb\Xml\Generated;

class WEBOrganizationGetTypesResponse
{

    /**
     * @var WEBOrganizationGetTypesResult $WEBOrganizationGetTypesResult
     */
    protected $WEBOrganizationGetTypesResult = null;

    /**
     * @param WEBOrganizationGetTypesResult $WEBOrganizationGetTypesResult
     */
    public function __construct($WEBOrganizationGetTypesResult)
    {
      $this->WEBOrganizationGetTypesResult = $WEBOrganizationGetTypesResult;
    }

    /**
     * @return WEBOrganizationGetTypesResult
     */
    public function getWEBOrganizationGetTypesResult()
    {
      return $this->WEBOrganizationGetTypesResult;
    }

    /**
     * @param WEBOrganizationGetTypesResult $WEBOrganizationGetTypesResult
     * @return \netForum\xWeb\Xml\Generated\WEBOrganizationGetTypesResponse
     */
    public function setWEBOrganizationGetTypesResult($WEBOrganizationGetTypesResult)
    {
      $this->WEBOrganizationGetTypesResult = $WEBOrganizationGetTypesResult;
      return $this;
    }

}
