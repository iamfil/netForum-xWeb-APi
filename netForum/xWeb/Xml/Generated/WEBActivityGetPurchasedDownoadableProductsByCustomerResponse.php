<?php

namespace netForum\xWeb\Xml\Generated;

class WEBActivityGetPurchasedDownoadableProductsByCustomerResponse
{

    /**
     * @var WEBActivityGetPurchasedDownoadableProductsByCustomerResult $WEBActivityGetPurchasedDownoadableProductsByCustomerResult
     */
    protected $WEBActivityGetPurchasedDownoadableProductsByCustomerResult = null;

    /**
     * @param WEBActivityGetPurchasedDownoadableProductsByCustomerResult $WEBActivityGetPurchasedDownoadableProductsByCustomerResult
     */
    public function __construct($WEBActivityGetPurchasedDownoadableProductsByCustomerResult)
    {
      $this->WEBActivityGetPurchasedDownoadableProductsByCustomerResult = $WEBActivityGetPurchasedDownoadableProductsByCustomerResult;
    }

    /**
     * @return WEBActivityGetPurchasedDownoadableProductsByCustomerResult
     */
    public function getWEBActivityGetPurchasedDownoadableProductsByCustomerResult()
    {
      return $this->WEBActivityGetPurchasedDownoadableProductsByCustomerResult;
    }

    /**
     * @param WEBActivityGetPurchasedDownoadableProductsByCustomerResult $WEBActivityGetPurchasedDownoadableProductsByCustomerResult
     * @return \netForum\xWeb\Xml\Generated\WEBActivityGetPurchasedDownoadableProductsByCustomerResponse
     */
    public function setWEBActivityGetPurchasedDownoadableProductsByCustomerResult($WEBActivityGetPurchasedDownoadableProductsByCustomerResult)
    {
      $this->WEBActivityGetPurchasedDownoadableProductsByCustomerResult = $WEBActivityGetPurchasedDownoadableProductsByCustomerResult;
      return $this;
    }

}
