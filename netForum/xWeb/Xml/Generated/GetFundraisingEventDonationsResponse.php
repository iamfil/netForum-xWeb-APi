<?php

namespace netForum\xWeb\Xml\Generated;

class GetFundraisingEventDonationsResponse
{

    /**
     * @var ArrayOfDonation $GetFundraisingEventDonationsResult
     */
    protected $GetFundraisingEventDonationsResult = null;

    /**
     * @param ArrayOfDonation $GetFundraisingEventDonationsResult
     */
    public function __construct($GetFundraisingEventDonationsResult)
    {
      $this->GetFundraisingEventDonationsResult = $GetFundraisingEventDonationsResult;
    }

    /**
     * @return ArrayOfDonation
     */
    public function getGetFundraisingEventDonationsResult()
    {
      return $this->GetFundraisingEventDonationsResult;
    }

    /**
     * @param ArrayOfDonation $GetFundraisingEventDonationsResult
     * @return \netForum\xWeb\Xml\Generated\GetFundraisingEventDonationsResponse
     */
    public function setGetFundraisingEventDonationsResult($GetFundraisingEventDonationsResult)
    {
      $this->GetFundraisingEventDonationsResult = $GetFundraisingEventDonationsResult;
      return $this;
    }

}
