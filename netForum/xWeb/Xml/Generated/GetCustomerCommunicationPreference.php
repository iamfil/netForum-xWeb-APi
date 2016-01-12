<?php

namespace netForum\xWeb\Xml\Generated;

class GetCustomerCommunicationPreference
{

    /**
     * @var string $customerKey
     */
    protected $customerKey = null;

    /**
     * @var string $preferenceTypeKey
     */
    protected $preferenceTypeKey = null;

    /**
     * @param string $customerKey
     * @param string $preferenceTypeKey
     */
    public function __construct($customerKey, $preferenceTypeKey)
    {
      $this->customerKey = $customerKey;
      $this->preferenceTypeKey = $preferenceTypeKey;
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
     * @return \netForum\xWeb\Xml\Generated\GetCustomerCommunicationPreference
     */
    public function setCustomerKey($customerKey)
    {
      $this->customerKey = $customerKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreferenceTypeKey()
    {
      return $this->preferenceTypeKey;
    }

    /**
     * @param string $preferenceTypeKey
     * @return \netForum\xWeb\Xml\Generated\GetCustomerCommunicationPreference
     */
    public function setPreferenceTypeKey($preferenceTypeKey)
    {
      $this->preferenceTypeKey = $preferenceTypeKey;
      return $this;
    }

}
