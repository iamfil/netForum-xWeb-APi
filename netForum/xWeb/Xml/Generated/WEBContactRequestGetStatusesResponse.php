<?php

namespace netForum\xWeb\Xml\Generated;

class WEBContactRequestGetStatusesResponse
{

    /**
     * @var WEBContactRequestGetStatusesResult $WEBContactRequestGetStatusesResult
     */
    protected $WEBContactRequestGetStatusesResult = null;

    /**
     * @param WEBContactRequestGetStatusesResult $WEBContactRequestGetStatusesResult
     */
    public function __construct($WEBContactRequestGetStatusesResult)
    {
      $this->WEBContactRequestGetStatusesResult = $WEBContactRequestGetStatusesResult;
    }

    /**
     * @return WEBContactRequestGetStatusesResult
     */
    public function getWEBContactRequestGetStatusesResult()
    {
      return $this->WEBContactRequestGetStatusesResult;
    }

    /**
     * @param WEBContactRequestGetStatusesResult $WEBContactRequestGetStatusesResult
     * @return \netForum\xWeb\Xml\Generated\WEBContactRequestGetStatusesResponse
     */
    public function setWEBContactRequestGetStatusesResult($WEBContactRequestGetStatusesResult)
    {
      $this->WEBContactRequestGetStatusesResult = $WEBContactRequestGetStatusesResult;
      return $this;
    }

}
