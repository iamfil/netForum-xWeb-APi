<?php

namespace netForum\xWeb\Xml\Generated;

class WEBActivityGetRegistrantTracksResponse
{

    /**
     * @var WEBActivityGetRegistrantTracksResult $WEBActivityGetRegistrantTracksResult
     */
    protected $WEBActivityGetRegistrantTracksResult = null;

    /**
     * @param WEBActivityGetRegistrantTracksResult $WEBActivityGetRegistrantTracksResult
     */
    public function __construct($WEBActivityGetRegistrantTracksResult)
    {
      $this->WEBActivityGetRegistrantTracksResult = $WEBActivityGetRegistrantTracksResult;
    }

    /**
     * @return WEBActivityGetRegistrantTracksResult
     */
    public function getWEBActivityGetRegistrantTracksResult()
    {
      return $this->WEBActivityGetRegistrantTracksResult;
    }

    /**
     * @param WEBActivityGetRegistrantTracksResult $WEBActivityGetRegistrantTracksResult
     * @return \netForum\xWeb\Xml\Generated\WEBActivityGetRegistrantTracksResponse
     */
    public function setWEBActivityGetRegistrantTracksResult($WEBActivityGetRegistrantTracksResult)
    {
      $this->WEBActivityGetRegistrantTracksResult = $WEBActivityGetRegistrantTracksResult;
      return $this;
    }

}
