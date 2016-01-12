<?php

namespace netForum\xWeb\Xml\Generated;

class GetFundraisingEventDonationUrlResponse
{

    /**
     * @var string $GetFundraisingEventDonationUrlResult
     */
    protected $GetFundraisingEventDonationUrlResult = null;

    /**
     * @param string $GetFundraisingEventDonationUrlResult
     */
    public function __construct($GetFundraisingEventDonationUrlResult)
    {
      $this->GetFundraisingEventDonationUrlResult = $GetFundraisingEventDonationUrlResult;
    }

    /**
     * @return string
     */
    public function getGetFundraisingEventDonationUrlResult()
    {
      return $this->GetFundraisingEventDonationUrlResult;
    }

    /**
     * @param string $GetFundraisingEventDonationUrlResult
     * @return \netForum\xWeb\Xml\Generated\GetFundraisingEventDonationUrlResponse
     */
    public function setGetFundraisingEventDonationUrlResult($GetFundraisingEventDonationUrlResult)
    {
      $this->GetFundraisingEventDonationUrlResult = $GetFundraisingEventDonationUrlResult;
      return $this;
    }

}
