<?php

namespace netForum\xWeb\Xml\Generated;

class GetIndividualInformationResponse
{

    /**
     * @var GetIndividualInformationResult $GetIndividualInformationResult
     */
    protected $GetIndividualInformationResult = null;

    /**
     * @param GetIndividualInformationResult $GetIndividualInformationResult
     */
    public function __construct($GetIndividualInformationResult)
    {
      $this->GetIndividualInformationResult = $GetIndividualInformationResult;
    }

    /**
     * @return GetIndividualInformationResult
     */
    public function getGetIndividualInformationResult()
    {
      return $this->GetIndividualInformationResult;
    }

    /**
     * @param GetIndividualInformationResult $GetIndividualInformationResult
     * @return \netForum\xWeb\Xml\Generated\GetIndividualInformationResponse
     */
    public function setGetIndividualInformationResult($GetIndividualInformationResult)
    {
      $this->GetIndividualInformationResult = $GetIndividualInformationResult;
      return $this;
    }

}
