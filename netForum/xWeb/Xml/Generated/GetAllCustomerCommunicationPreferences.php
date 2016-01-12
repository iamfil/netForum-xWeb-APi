<?php

namespace netForum\xWeb\Xml\Generated;

class GetAllCustomerCommunicationPreferences
{

    /**
     * @var string $customerKey
     */
    protected $customerKey = null;

    /**
     * @param string $customerKey
     */
    public function __construct($customerKey)
    {
      $this->customerKey = $customerKey;
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
     * @return \netForum\xWeb\Xml\Generated\GetAllCustomerCommunicationPreferences
     */
    public function setCustomerKey($customerKey)
    {
      $this->customerKey = $customerKey;
      return $this;
    }

}
