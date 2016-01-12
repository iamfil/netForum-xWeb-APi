<?php

namespace netForum\xWeb\Xml\Generated;

class SetCustomerCommunicationPreferences
{

    /**
     * @var string $customerKey
     */
    protected $customerKey = null;

    /**
     * @var ArrayOfMailingListSetting $preferences
     */
    protected $preferences = null;

    /**
     * @param string $customerKey
     * @param ArrayOfMailingListSetting $preferences
     */
    public function __construct($customerKey, $preferences)
    {
      $this->customerKey = $customerKey;
      $this->preferences = $preferences;
    }

    /**
     * @return string
     */
    public function getCustomerKey()
    {
      return $this->customerKey;
    }

    /**
     * @param string $customerKey
     * @return \netForum\xWeb\Xml\Generated\SetCustomerCommunicationPreferences
     */
    public function setCustomerKey($customerKey)
    {
      $this->customerKey = $customerKey;
      return $this;
    }

    /**
     * @return ArrayOfMailingListSetting
     */
    public function getPreferences()
    {
      return $this->preferences;
    }

    /**
     * @param ArrayOfMailingListSetting $preferences
     * @return \netForum\xWeb\Xml\Generated\SetCustomerCommunicationPreferences
     */
    public function setPreferences($preferences)
    {
      $this->preferences = $preferences;
      return $this;
    }

}
