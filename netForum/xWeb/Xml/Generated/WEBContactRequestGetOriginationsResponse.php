<?php

namespace netForum\xWeb\Xml\Generated;

class WEBContactRequestGetOriginationsResponse
{

    /**
     * @var WEBContactRequestGetOriginationsResult $WEBContactRequestGetOriginationsResult
     */
    protected $WEBContactRequestGetOriginationsResult = null;

    /**
     * @param WEBContactRequestGetOriginationsResult $WEBContactRequestGetOriginationsResult
     */
    public function __construct($WEBContactRequestGetOriginationsResult)
    {
      $this->WEBContactRequestGetOriginationsResult = $WEBContactRequestGetOriginationsResult;
    }

    /**
     * @return WEBContactRequestGetOriginationsResult
     */
    public function getWEBContactRequestGetOriginationsResult()
    {
      return $this->WEBContactRequestGetOriginationsResult;
    }

    /**
     * @param WEBContactRequestGetOriginationsResult $WEBContactRequestGetOriginationsResult
     * @return \netForum\xWeb\Xml\Generated\WEBContactRequestGetOriginationsResponse
     */
    public function setWEBContactRequestGetOriginationsResult($WEBContactRequestGetOriginationsResult)
    {
      $this->WEBContactRequestGetOriginationsResult = $WEBContactRequestGetOriginationsResult;
      return $this;
    }

}
