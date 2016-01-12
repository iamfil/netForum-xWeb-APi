<?php

namespace netForum\xWeb\Xml\Generated;

class GetTimeZonesResponse
{

    /**
     * @var GetTimeZonesResult $GetTimeZonesResult
     */
    protected $GetTimeZonesResult = null;

    /**
     * @param GetTimeZonesResult $GetTimeZonesResult
     */
    public function __construct($GetTimeZonesResult)
    {
      $this->GetTimeZonesResult = $GetTimeZonesResult;
    }

    /**
     * @return GetTimeZonesResult
     */
    public function getGetTimeZonesResult()
    {
      return $this->GetTimeZonesResult;
    }

    /**
     * @param GetTimeZonesResult $GetTimeZonesResult
     * @return \netForum\xWeb\Xml\Generated\GetTimeZonesResponse
     */
    public function setGetTimeZonesResult($GetTimeZonesResult)
    {
      $this->GetTimeZonesResult = $GetTimeZonesResult;
      return $this;
    }

}
