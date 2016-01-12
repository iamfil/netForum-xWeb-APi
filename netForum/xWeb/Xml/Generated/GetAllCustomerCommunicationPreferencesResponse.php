<?php

namespace netForum\xWeb\Xml\Generated;

class GetAllCustomerCommunicationPreferencesResponse
{

    /**
     * @var ArrayOfMailingListSetting $GetAllCustomerCommunicationPreferencesResult
     */
    protected $GetAllCustomerCommunicationPreferencesResult = null;

    /**
     * @param ArrayOfMailingListSetting $GetAllCustomerCommunicationPreferencesResult
     */
    public function __construct($GetAllCustomerCommunicationPreferencesResult)
    {
      $this->GetAllCustomerCommunicationPreferencesResult = $GetAllCustomerCommunicationPreferencesResult;
    }

    /**
     * @return ArrayOfMailingListSetting
     */
    public function getGetAllCustomerCommunicationPreferencesResult()
    {
      return $this->GetAllCustomerCommunicationPreferencesResult;
    }

    /**
     * @param ArrayOfMailingListSetting $GetAllCustomerCommunicationPreferencesResult
     * @return \netForum\xWeb\Xml\Generated\GetAllCustomerCommunicationPreferencesResponse
     */
    public function setGetAllCustomerCommunicationPreferencesResult($GetAllCustomerCommunicationPreferencesResult)
    {
      $this->GetAllCustomerCommunicationPreferencesResult = $GetAllCustomerCommunicationPreferencesResult;
      return $this;
    }

}
