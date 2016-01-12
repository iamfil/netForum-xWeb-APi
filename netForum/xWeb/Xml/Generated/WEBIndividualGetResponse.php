<?php

namespace netForum\xWeb\Xml\Generated;

class WEBIndividualGetResponse
{

    /**
     * @var IndividualType $WEBIndividualGetResult
     */
    protected $WEBIndividualGetResult = null;

    /**
     * @param IndividualType $WEBIndividualGetResult
     */
    public function __construct($WEBIndividualGetResult)
    {
      $this->WEBIndividualGetResult = $WEBIndividualGetResult;
    }

    /**
     * @return IndividualType
     */
    public function getWEBIndividualGetResult()
    {
      return $this->WEBIndividualGetResult;
    }

    /**
     * @param IndividualType $WEBIndividualGetResult
     * @return \netForum\xWeb\Xml\Generated\WEBIndividualGetResponse
     */
    public function setWEBIndividualGetResult($WEBIndividualGetResult)
    {
      $this->WEBIndividualGetResult = $WEBIndividualGetResult;
      return $this;
    }

}
