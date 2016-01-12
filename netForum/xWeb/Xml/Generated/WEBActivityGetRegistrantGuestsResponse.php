<?php

namespace netForum\xWeb\Xml\Generated;

class WEBActivityGetRegistrantGuestsResponse
{

    /**
     * @var WEBActivityGetRegistrantGuestsResult $WEBActivityGetRegistrantGuestsResult
     */
    protected $WEBActivityGetRegistrantGuestsResult = null;

    /**
     * @param WEBActivityGetRegistrantGuestsResult $WEBActivityGetRegistrantGuestsResult
     */
    public function __construct($WEBActivityGetRegistrantGuestsResult)
    {
      $this->WEBActivityGetRegistrantGuestsResult = $WEBActivityGetRegistrantGuestsResult;
    }

    /**
     * @return WEBActivityGetRegistrantGuestsResult
     */
    public function getWEBActivityGetRegistrantGuestsResult()
    {
      return $this->WEBActivityGetRegistrantGuestsResult;
    }

    /**
     * @param WEBActivityGetRegistrantGuestsResult $WEBActivityGetRegistrantGuestsResult
     * @return \netForum\xWeb\Xml\Generated\WEBActivityGetRegistrantGuestsResponse
     */
    public function setWEBActivityGetRegistrantGuestsResult($WEBActivityGetRegistrantGuestsResult)
    {
      $this->WEBActivityGetRegistrantGuestsResult = $WEBActivityGetRegistrantGuestsResult;
      return $this;
    }

}
