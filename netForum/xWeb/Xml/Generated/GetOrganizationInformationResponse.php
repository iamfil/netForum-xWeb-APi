<?php

namespace netForum\xWeb\Xml\Generated;

class GetOrganizationInformationResponse
{

    /**
     * @var GetOrganizationInformationResult $GetOrganizationInformationResult
     */
    protected $GetOrganizationInformationResult = null;

    /**
     * @param GetOrganizationInformationResult $GetOrganizationInformationResult
     */
    public function __construct($GetOrganizationInformationResult)
    {
      $this->GetOrganizationInformationResult = $GetOrganizationInformationResult;
    }

    /**
     * @return GetOrganizationInformationResult
     */
    public function getGetOrganizationInformationResult()
    {
      return $this->GetOrganizationInformationResult;
    }

    /**
     * @param GetOrganizationInformationResult $GetOrganizationInformationResult
     * @return \netForum\xWeb\Xml\Generated\GetOrganizationInformationResponse
     */
    public function setGetOrganizationInformationResult($GetOrganizationInformationResult)
    {
      $this->GetOrganizationInformationResult = $GetOrganizationInformationResult;
      return $this;
    }

}
