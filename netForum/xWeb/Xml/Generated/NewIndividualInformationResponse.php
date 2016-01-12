<?php

namespace netForum\xWeb\Xml\Generated;

class NewIndividualInformationResponse
{

    /**
     * @var NewIndividualInformationResult $NewIndividualInformationResult
     */
    protected $NewIndividualInformationResult = null;

    /**
     * @param NewIndividualInformationResult $NewIndividualInformationResult
     */
    public function __construct($NewIndividualInformationResult)
    {
      $this->NewIndividualInformationResult = $NewIndividualInformationResult;
    }

    /**
     * @return NewIndividualInformationResult
     */
    public function getNewIndividualInformationResult()
    {
      return $this->NewIndividualInformationResult;
    }

    /**
     * @param NewIndividualInformationResult $NewIndividualInformationResult
     * @return \netForum\xWeb\Xml\Generated\NewIndividualInformationResponse
     */
    public function setNewIndividualInformationResult($NewIndividualInformationResult)
    {
      $this->NewIndividualInformationResult = $NewIndividualInformationResult;
      return $this;
    }

}
