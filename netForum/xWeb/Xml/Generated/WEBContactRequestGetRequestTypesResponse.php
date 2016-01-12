<?php

namespace netForum\xWeb\Xml\Generated;

class WEBContactRequestGetRequestTypesResponse
{

    /**
     * @var WEBContactRequestGetRequestTypesResult $WEBContactRequestGetRequestTypesResult
     */
    protected $WEBContactRequestGetRequestTypesResult = null;

    /**
     * @param WEBContactRequestGetRequestTypesResult $WEBContactRequestGetRequestTypesResult
     */
    public function __construct($WEBContactRequestGetRequestTypesResult)
    {
      $this->WEBContactRequestGetRequestTypesResult = $WEBContactRequestGetRequestTypesResult;
    }

    /**
     * @return WEBContactRequestGetRequestTypesResult
     */
    public function getWEBContactRequestGetRequestTypesResult()
    {
      return $this->WEBContactRequestGetRequestTypesResult;
    }

    /**
     * @param WEBContactRequestGetRequestTypesResult $WEBContactRequestGetRequestTypesResult
     * @return \netForum\xWeb\Xml\Generated\WEBContactRequestGetRequestTypesResponse
     */
    public function setWEBContactRequestGetRequestTypesResult($WEBContactRequestGetRequestTypesResult)
    {
      $this->WEBContactRequestGetRequestTypesResult = $WEBContactRequestGetRequestTypesResult;
      return $this;
    }

}
