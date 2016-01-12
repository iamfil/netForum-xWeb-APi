<?php

namespace netForum\xWeb\Xml\Generated;

class WEBIndividualInsertResponse
{

    /**
     * @var IndividualType $WEBIndividualInsertResult
     */
    protected $WEBIndividualInsertResult = null;

    /**
     * @param IndividualType $WEBIndividualInsertResult
     */
    public function __construct($WEBIndividualInsertResult)
    {
      $this->WEBIndividualInsertResult = $WEBIndividualInsertResult;
    }

    /**
     * @return IndividualType
     */
    public function getWEBIndividualInsertResult()
    {
      return $this->WEBIndividualInsertResult;
    }

    /**
     * @param IndividualType $WEBIndividualInsertResult
     * @return \netForum\xWeb\Xml\Generated\WEBIndividualInsertResponse
     */
    public function setWEBIndividualInsertResult($WEBIndividualInsertResult)
    {
      $this->WEBIndividualInsertResult = $WEBIndividualInsertResult;
      return $this;
    }

}
