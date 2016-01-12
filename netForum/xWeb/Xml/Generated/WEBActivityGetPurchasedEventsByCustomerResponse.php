<?php

namespace netForum\xWeb\Xml\Generated;

class WEBActivityGetPurchasedEventsByCustomerResponse
{

    /**
     * @var WEBActivityGetPurchasedEventsByCustomerResult $WEBActivityGetPurchasedEventsByCustomerResult
     */
    protected $WEBActivityGetPurchasedEventsByCustomerResult = null;

    /**
     * @param WEBActivityGetPurchasedEventsByCustomerResult $WEBActivityGetPurchasedEventsByCustomerResult
     */
    public function __construct($WEBActivityGetPurchasedEventsByCustomerResult)
    {
      $this->WEBActivityGetPurchasedEventsByCustomerResult = $WEBActivityGetPurchasedEventsByCustomerResult;
    }

    /**
     * @return WEBActivityGetPurchasedEventsByCustomerResult
     */
    public function getWEBActivityGetPurchasedEventsByCustomerResult()
    {
      return $this->WEBActivityGetPurchasedEventsByCustomerResult;
    }

    /**
     * @param WEBActivityGetPurchasedEventsByCustomerResult $WEBActivityGetPurchasedEventsByCustomerResult
     * @return \netForum\xWeb\Xml\Generated\WEBActivityGetPurchasedEventsByCustomerResponse
     */
    public function setWEBActivityGetPurchasedEventsByCustomerResult($WEBActivityGetPurchasedEventsByCustomerResult)
    {
      $this->WEBActivityGetPurchasedEventsByCustomerResult = $WEBActivityGetPurchasedEventsByCustomerResult;
      return $this;
    }

}
