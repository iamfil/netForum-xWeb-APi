<?php

namespace netForum\xWeb\Xml\Generated;

class ElectronicSubscriptionGetCstListByIPResponse
{

    /**
     * @var ElectronicSubscriptionGetCstListByIPResult $ElectronicSubscriptionGetCstListByIPResult
     */
    protected $ElectronicSubscriptionGetCstListByIPResult = null;

    /**
     * @param ElectronicSubscriptionGetCstListByIPResult $ElectronicSubscriptionGetCstListByIPResult
     */
    public function __construct($ElectronicSubscriptionGetCstListByIPResult)
    {
      $this->ElectronicSubscriptionGetCstListByIPResult = $ElectronicSubscriptionGetCstListByIPResult;
    }

    /**
     * @return ElectronicSubscriptionGetCstListByIPResult
     */
    public function getElectronicSubscriptionGetCstListByIPResult()
    {
      return $this->ElectronicSubscriptionGetCstListByIPResult;
    }

    /**
     * @param ElectronicSubscriptionGetCstListByIPResult $ElectronicSubscriptionGetCstListByIPResult
     * @return \netForum\xWeb\Xml\Generated\ElectronicSubscriptionGetCstListByIPResponse
     */
    public function setElectronicSubscriptionGetCstListByIPResult($ElectronicSubscriptionGetCstListByIPResult)
    {
      $this->ElectronicSubscriptionGetCstListByIPResult = $ElectronicSubscriptionGetCstListByIPResult;
      return $this;
    }

}
