<?php

namespace netForum\xWeb\Xml\Generated;

class WEBActivityNumberOfRegisteredGuestsResponse
{

    /**
     * @var int $WEBActivityNumberOfRegisteredGuestsResult
     */
    protected $WEBActivityNumberOfRegisteredGuestsResult = null;

    /**
     * @param int $WEBActivityNumberOfRegisteredGuestsResult
     */
    public function __construct($WEBActivityNumberOfRegisteredGuestsResult)
    {
      $this->WEBActivityNumberOfRegisteredGuestsResult = $WEBActivityNumberOfRegisteredGuestsResult;
    }

    /**
     * @return int
     */
    public function getWEBActivityNumberOfRegisteredGuestsResult()
    {
      return $this->WEBActivityNumberOfRegisteredGuestsResult;
    }

    /**
     * @param int $WEBActivityNumberOfRegisteredGuestsResult
     * @return \netForum\xWeb\Xml\Generated\WEBActivityNumberOfRegisteredGuestsResponse
     */
    public function setWEBActivityNumberOfRegisteredGuestsResult($WEBActivityNumberOfRegisteredGuestsResult)
    {
      $this->WEBActivityNumberOfRegisteredGuestsResult = $WEBActivityNumberOfRegisteredGuestsResult;
      return $this;
    }

}
