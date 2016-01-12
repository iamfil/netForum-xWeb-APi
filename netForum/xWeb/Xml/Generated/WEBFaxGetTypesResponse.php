<?php

namespace netForum\xWeb\Xml\Generated;

class WEBFaxGetTypesResponse
{

    /**
     * @var WEBFaxGetTypesResult $WEBFaxGetTypesResult
     */
    protected $WEBFaxGetTypesResult = null;

    /**
     * @param WEBFaxGetTypesResult $WEBFaxGetTypesResult
     */
    public function __construct($WEBFaxGetTypesResult)
    {
      $this->WEBFaxGetTypesResult = $WEBFaxGetTypesResult;
    }

    /**
     * @return WEBFaxGetTypesResult
     */
    public function getWEBFaxGetTypesResult()
    {
      return $this->WEBFaxGetTypesResult;
    }

    /**
     * @param WEBFaxGetTypesResult $WEBFaxGetTypesResult
     * @return \netForum\xWeb\Xml\Generated\WEBFaxGetTypesResponse
     */
    public function setWEBFaxGetTypesResult($WEBFaxGetTypesResult)
    {
      $this->WEBFaxGetTypesResult = $WEBFaxGetTypesResult;
      return $this;
    }

}
