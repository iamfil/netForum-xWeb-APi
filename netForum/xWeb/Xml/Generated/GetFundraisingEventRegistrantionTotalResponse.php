<?php

namespace netForum\xWeb\Xml\Generated;

class GetFundraisingEventRegistrantionTotalResponse
{

    /**
     * @var EventUserFundraisingDetail $GetFundraisingEventRegistrantionTotalResult
     */
    protected $GetFundraisingEventRegistrantionTotalResult = null;

    /**
     * @param EventUserFundraisingDetail $GetFundraisingEventRegistrantionTotalResult
     */
    public function __construct($GetFundraisingEventRegistrantionTotalResult)
    {
      $this->GetFundraisingEventRegistrantionTotalResult = $GetFundraisingEventRegistrantionTotalResult;
    }

    /**
     * @return EventUserFundraisingDetail
     */
    public function getGetFundraisingEventRegistrantionTotalResult()
    {
      return $this->GetFundraisingEventRegistrantionTotalResult;
    }

    /**
     * @param EventUserFundraisingDetail $GetFundraisingEventRegistrantionTotalResult
     * @return \netForum\xWeb\Xml\Generated\GetFundraisingEventRegistrantionTotalResponse
     */
    public function setGetFundraisingEventRegistrantionTotalResult($GetFundraisingEventRegistrantionTotalResult)
    {
      $this->GetFundraisingEventRegistrantionTotalResult = $GetFundraisingEventRegistrantionTotalResult;
      return $this;
    }

}
