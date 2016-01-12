<?php

namespace netForum\xWeb\Xml\Generated;

class WEBIndividualGetPrefixesResponse
{

    /**
     * @var WEBIndividualGetPrefixesResult $WEBIndividualGetPrefixesResult
     */
    protected $WEBIndividualGetPrefixesResult = null;

    /**
     * @param WEBIndividualGetPrefixesResult $WEBIndividualGetPrefixesResult
     */
    public function __construct($WEBIndividualGetPrefixesResult)
    {
      $this->WEBIndividualGetPrefixesResult = $WEBIndividualGetPrefixesResult;
    }

    /**
     * @return WEBIndividualGetPrefixesResult
     */
    public function getWEBIndividualGetPrefixesResult()
    {
      return $this->WEBIndividualGetPrefixesResult;
    }

    /**
     * @param WEBIndividualGetPrefixesResult $WEBIndividualGetPrefixesResult
     * @return \netForum\xWeb\Xml\Generated\WEBIndividualGetPrefixesResponse
     */
    public function setWEBIndividualGetPrefixesResult($WEBIndividualGetPrefixesResult)
    {
      $this->WEBIndividualGetPrefixesResult = $WEBIndividualGetPrefixesResult;
      return $this;
    }

}
