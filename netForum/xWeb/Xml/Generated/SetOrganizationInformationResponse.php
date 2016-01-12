<?php

namespace netForum\xWeb\Xml\Generated;

class SetOrganizationInformationResponse
{

    /**
     * @var SetOrganizationInformationResult $SetOrganizationInformationResult
     */
    protected $SetOrganizationInformationResult = null;

    /**
     * @param SetOrganizationInformationResult $SetOrganizationInformationResult
     */
    public function __construct($SetOrganizationInformationResult)
    {
      $this->SetOrganizationInformationResult = $SetOrganizationInformationResult;
    }

    /**
     * @return SetOrganizationInformationResult
     */
    public function getSetOrganizationInformationResult()
    {
      return $this->SetOrganizationInformationResult;
    }

    /**
     * @param SetOrganizationInformationResult $SetOrganizationInformationResult
     * @return \netForum\xWeb\Xml\Generated\SetOrganizationInformationResponse
     */
    public function setSetOrganizationInformationResult($SetOrganizationInformationResult)
    {
      $this->SetOrganizationInformationResult = $SetOrganizationInformationResult;
      return $this;
    }

}
