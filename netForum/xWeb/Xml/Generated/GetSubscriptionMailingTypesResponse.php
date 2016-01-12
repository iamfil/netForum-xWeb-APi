<?php

namespace netForum\xWeb\Xml\Generated;

class GetSubscriptionMailingTypesResponse
{

    /**
     * @var ArrayOfMailingList $GetSubscriptionMailingTypesResult
     */
    protected $GetSubscriptionMailingTypesResult = null;

    /**
     * @param ArrayOfMailingList $GetSubscriptionMailingTypesResult
     */
    public function __construct($GetSubscriptionMailingTypesResult)
    {
      $this->GetSubscriptionMailingTypesResult = $GetSubscriptionMailingTypesResult;
    }

    /**
     * @return ArrayOfMailingList
     */
    public function getGetSubscriptionMailingTypesResult()
    {
      return $this->GetSubscriptionMailingTypesResult;
    }

    /**
     * @param ArrayOfMailingList $GetSubscriptionMailingTypesResult
     * @return \netForum\xWeb\Xml\Generated\GetSubscriptionMailingTypesResponse
     */
    public function setGetSubscriptionMailingTypesResult($GetSubscriptionMailingTypesResult)
    {
      $this->GetSubscriptionMailingTypesResult = $GetSubscriptionMailingTypesResult;
      return $this;
    }

}
