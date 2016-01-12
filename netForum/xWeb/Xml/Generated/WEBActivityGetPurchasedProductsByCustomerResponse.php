<?php

namespace netForum\xWeb\Xml\Generated;

class WEBActivityGetPurchasedProductsByCustomerResponse
{

    /**
     * @var WEBActivityGetPurchasedProductsByCustomerResult $WEBActivityGetPurchasedProductsByCustomerResult
     */
    protected $WEBActivityGetPurchasedProductsByCustomerResult = null;

    /**
     * @param WEBActivityGetPurchasedProductsByCustomerResult $WEBActivityGetPurchasedProductsByCustomerResult
     */
    public function __construct($WEBActivityGetPurchasedProductsByCustomerResult)
    {
      $this->WEBActivityGetPurchasedProductsByCustomerResult = $WEBActivityGetPurchasedProductsByCustomerResult;
    }

    /**
     * @return WEBActivityGetPurchasedProductsByCustomerResult
     */
    public function getWEBActivityGetPurchasedProductsByCustomerResult()
    {
      return $this->WEBActivityGetPurchasedProductsByCustomerResult;
    }

    /**
     * @param WEBActivityGetPurchasedProductsByCustomerResult $WEBActivityGetPurchasedProductsByCustomerResult
     * @return \netForum\xWeb\Xml\Generated\WEBActivityGetPurchasedProductsByCustomerResponse
     */
    public function setWEBActivityGetPurchasedProductsByCustomerResult($WEBActivityGetPurchasedProductsByCustomerResult)
    {
      $this->WEBActivityGetPurchasedProductsByCustomerResult = $WEBActivityGetPurchasedProductsByCustomerResult;
      return $this;
    }

}
