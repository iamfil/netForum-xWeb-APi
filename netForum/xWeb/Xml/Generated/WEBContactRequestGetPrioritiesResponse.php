<?php

namespace netForum\xWeb\Xml\Generated;

class WEBContactRequestGetPrioritiesResponse
{

    /**
     * @var WEBContactRequestGetPrioritiesResult $WEBContactRequestGetPrioritiesResult
     */
    protected $WEBContactRequestGetPrioritiesResult = null;

    /**
     * @param WEBContactRequestGetPrioritiesResult $WEBContactRequestGetPrioritiesResult
     */
    public function __construct($WEBContactRequestGetPrioritiesResult)
    {
      $this->WEBContactRequestGetPrioritiesResult = $WEBContactRequestGetPrioritiesResult;
    }

    /**
     * @return WEBContactRequestGetPrioritiesResult
     */
    public function getWEBContactRequestGetPrioritiesResult()
    {
      return $this->WEBContactRequestGetPrioritiesResult;
    }

    /**
     * @param WEBContactRequestGetPrioritiesResult $WEBContactRequestGetPrioritiesResult
     * @return \netForum\xWeb\Xml\Generated\WEBContactRequestGetPrioritiesResponse
     */
    public function setWEBContactRequestGetPrioritiesResult($WEBContactRequestGetPrioritiesResult)
    {
      $this->WEBContactRequestGetPrioritiesResult = $WEBContactRequestGetPrioritiesResult;
      return $this;
    }

}
