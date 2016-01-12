<?php

namespace netForum\xWeb\Xml\Generated;

class WEBIndividualGetSuffixesResponse
{

    /**
     * @var WEBIndividualGetSuffixesResult $WEBIndividualGetSuffixesResult
     */
    protected $WEBIndividualGetSuffixesResult = null;

    /**
     * @param WEBIndividualGetSuffixesResult $WEBIndividualGetSuffixesResult
     */
    public function __construct($WEBIndividualGetSuffixesResult)
    {
      $this->WEBIndividualGetSuffixesResult = $WEBIndividualGetSuffixesResult;
    }

    /**
     * @return WEBIndividualGetSuffixesResult
     */
    public function getWEBIndividualGetSuffixesResult()
    {
      return $this->WEBIndividualGetSuffixesResult;
    }

    /**
     * @param WEBIndividualGetSuffixesResult $WEBIndividualGetSuffixesResult
     * @return \netForum\xWeb\Xml\Generated\WEBIndividualGetSuffixesResponse
     */
    public function setWEBIndividualGetSuffixesResult($WEBIndividualGetSuffixesResult)
    {
      $this->WEBIndividualGetSuffixesResult = $WEBIndividualGetSuffixesResult;
      return $this;
    }

}
