<?php

namespace netForum\xWeb\Xml\Generated;

class WEBActivityGetRegistrantEventsResponse
{

    /**
     * @var WEBActivityGetRegistrantEventsResult $WEBActivityGetRegistrantEventsResult
     */
    protected $WEBActivityGetRegistrantEventsResult = null;

    /**
     * @param WEBActivityGetRegistrantEventsResult $WEBActivityGetRegistrantEventsResult
     */
    public function __construct($WEBActivityGetRegistrantEventsResult)
    {
      $this->WEBActivityGetRegistrantEventsResult = $WEBActivityGetRegistrantEventsResult;
    }

    /**
     * @return WEBActivityGetRegistrantEventsResult
     */
    public function getWEBActivityGetRegistrantEventsResult()
    {
      return $this->WEBActivityGetRegistrantEventsResult;
    }

    /**
     * @param WEBActivityGetRegistrantEventsResult $WEBActivityGetRegistrantEventsResult
     * @return \netForum\xWeb\Xml\Generated\WEBActivityGetRegistrantEventsResponse
     */
    public function setWEBActivityGetRegistrantEventsResult($WEBActivityGetRegistrantEventsResult)
    {
      $this->WEBActivityGetRegistrantEventsResult = $WEBActivityGetRegistrantEventsResult;
      return $this;
    }

}
