<?php

namespace netForum\xWeb\Xml\Generated;

class ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResponse
{

    /**
     * @var ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResult $ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResult
     */
    protected $ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResult = null;

    /**
     * @param ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResult $ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResult
     */
    public function __construct($ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResult)
    {
      $this->ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResult = $ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResult;
    }

    /**
     * @return ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResult
     */
    public function getElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResult()
    {
      return $this->ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResult;
    }

    /**
     * @param ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResult $ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResult
     * @return \netForum\xWeb\Xml\Generated\ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResponse
     */
    public function setElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResult($ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResult)
    {
      $this->ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResult = $ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResult;
      return $this;
    }

}
