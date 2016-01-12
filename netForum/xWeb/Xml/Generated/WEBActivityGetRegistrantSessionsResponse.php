<?php

namespace netForum\xWeb\Xml\Generated;

class WEBActivityGetRegistrantSessionsResponse
{

    /**
     * @var WEBActivityGetRegistrantSessionsResult $WEBActivityGetRegistrantSessionsResult
     */
    protected $WEBActivityGetRegistrantSessionsResult = null;

    /**
     * @param WEBActivityGetRegistrantSessionsResult $WEBActivityGetRegistrantSessionsResult
     */
    public function __construct($WEBActivityGetRegistrantSessionsResult)
    {
      $this->WEBActivityGetRegistrantSessionsResult = $WEBActivityGetRegistrantSessionsResult;
    }

    /**
     * @return WEBActivityGetRegistrantSessionsResult
     */
    public function getWEBActivityGetRegistrantSessionsResult()
    {
      return $this->WEBActivityGetRegistrantSessionsResult;
    }

    /**
     * @param WEBActivityGetRegistrantSessionsResult $WEBActivityGetRegistrantSessionsResult
     * @return \netForum\xWeb\Xml\Generated\WEBActivityGetRegistrantSessionsResponse
     */
    public function setWEBActivityGetRegistrantSessionsResult($WEBActivityGetRegistrantSessionsResult)
    {
      $this->WEBActivityGetRegistrantSessionsResult = $WEBActivityGetRegistrantSessionsResult;
      return $this;
    }

}
