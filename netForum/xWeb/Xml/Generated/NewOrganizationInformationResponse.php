<?php

namespace netForum\xWeb\Xml\Generated;

class NewOrganizationInformationResponse
{

    /**
     * @var NewOrganizationInformationResult $NewOrganizationInformationResult
     */
    protected $NewOrganizationInformationResult = null;

    /**
     * @param NewOrganizationInformationResult $NewOrganizationInformationResult
     */
    public function __construct($NewOrganizationInformationResult)
    {
      $this->NewOrganizationInformationResult = $NewOrganizationInformationResult;
    }

    /**
     * @return NewOrganizationInformationResult
     */
    public function getNewOrganizationInformationResult()
    {
      return $this->NewOrganizationInformationResult;
    }

    /**
     * @param NewOrganizationInformationResult $NewOrganizationInformationResult
     * @return \netForum\xWeb\Xml\Generated\NewOrganizationInformationResponse
     */
    public function setNewOrganizationInformationResult($NewOrganizationInformationResult)
    {
      $this->NewOrganizationInformationResult = $NewOrganizationInformationResult;
      return $this;
    }

}
