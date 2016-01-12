<?php

namespace netForum\xWeb\Xml\Generated;

class SetIndividualInformationResponse
{

    /**
     * @var SetIndividualInformationResult $SetIndividualInformationResult
     */
    protected $SetIndividualInformationResult = null;

    /**
     * @param SetIndividualInformationResult $SetIndividualInformationResult
     */
    public function __construct($SetIndividualInformationResult)
    {
      $this->SetIndividualInformationResult = $SetIndividualInformationResult;
    }

    /**
     * @return SetIndividualInformationResult
     */
    public function getSetIndividualInformationResult()
    {
      return $this->SetIndividualInformationResult;
    }

    /**
     * @param SetIndividualInformationResult $SetIndividualInformationResult
     * @return \netForum\xWeb\Xml\Generated\SetIndividualInformationResponse
     */
    public function setSetIndividualInformationResult($SetIndividualInformationResult)
    {
      $this->SetIndividualInformationResult = $SetIndividualInformationResult;
      return $this;
    }

}
