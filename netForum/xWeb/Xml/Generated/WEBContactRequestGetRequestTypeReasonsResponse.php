<?php

namespace netForum\xWeb\Xml\Generated;

class WEBContactRequestGetRequestTypeReasonsResponse
{

    /**
     * @var WEBContactRequestGetRequestTypeReasonsResult $WEBContactRequestGetRequestTypeReasonsResult
     */
    protected $WEBContactRequestGetRequestTypeReasonsResult = null;

    /**
     * @param WEBContactRequestGetRequestTypeReasonsResult $WEBContactRequestGetRequestTypeReasonsResult
     */
    public function __construct($WEBContactRequestGetRequestTypeReasonsResult)
    {
      $this->WEBContactRequestGetRequestTypeReasonsResult = $WEBContactRequestGetRequestTypeReasonsResult;
    }

    /**
     * @return WEBContactRequestGetRequestTypeReasonsResult
     */
    public function getWEBContactRequestGetRequestTypeReasonsResult()
    {
      return $this->WEBContactRequestGetRequestTypeReasonsResult;
    }

    /**
     * @param WEBContactRequestGetRequestTypeReasonsResult $WEBContactRequestGetRequestTypeReasonsResult
     * @return \netForum\xWeb\Xml\Generated\WEBContactRequestGetRequestTypeReasonsResponse
     */
    public function setWEBContactRequestGetRequestTypeReasonsResult($WEBContactRequestGetRequestTypeReasonsResult)
    {
      $this->WEBContactRequestGetRequestTypeReasonsResult = $WEBContactRequestGetRequestTypeReasonsResult;
      return $this;
    }

}
