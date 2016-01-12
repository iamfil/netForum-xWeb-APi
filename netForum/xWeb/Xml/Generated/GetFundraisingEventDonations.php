<?php

namespace netForum\xWeb\Xml\Generated;

class GetFundraisingEventDonations
{

    /**
     * @var string $eventKey
     */
    protected $eventKey = null;

    /**
     * @var string $customerKey
     */
    protected $customerKey = null;

    /**
     * @param string $eventKey
     * @param string $customerKey
     */
    public function __construct($eventKey, $customerKey)
    {
      $this->eventKey = $eventKey;
      $this->customerKey = $customerKey;
    }

    /**
     * @return string
     */
    public function getEventKey()
    {
      return $this->eventKey;
    }

    /**
     * @param string $eventKey
     * @return \netForum\xWeb\Xml\Generated\GetFundraisingEventDonations
     */
    public function setEventKey($eventKey)
    {
      $this->eventKey = $eventKey;
      return $this;
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
     * @return \netForum\xWeb\Xml\Generated\GetFundraisingEventDonations
     */
    public function setCustomerKey($customerKey)
    {
      $this->customerKey = $customerKey;
      return $this;
    }

}
