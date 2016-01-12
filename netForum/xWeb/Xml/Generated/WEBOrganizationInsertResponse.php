<?php

namespace netForum\xWeb\Xml\Generated;

class WEBOrganizationInsertResponse
{

    /**
     * @var OrganizationType $WEBOrganizationInsertResult
     */
    protected $WEBOrganizationInsertResult = null;

    /**
     * @param OrganizationType $WEBOrganizationInsertResult
     */
    public function __construct($WEBOrganizationInsertResult)
    {
      $this->WEBOrganizationInsertResult = $WEBOrganizationInsertResult;
    }

    /**
     * @return OrganizationType
     */
    public function getWEBOrganizationInsertResult()
    {
      return $this->WEBOrganizationInsertResult;
    }

    /**
     * @param OrganizationType $WEBOrganizationInsertResult
     * @return \netForum\xWeb\Xml\Generated\WEBOrganizationInsertResponse
     */
    public function setWEBOrganizationInsertResult($WEBOrganizationInsertResult)
    {
      $this->WEBOrganizationInsertResult = $WEBOrganizationInsertResult;
      return $this;
    }

}
