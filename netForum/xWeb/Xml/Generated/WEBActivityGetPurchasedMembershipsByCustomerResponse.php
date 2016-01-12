<?php

namespace netForum\xWeb\Xml\Generated;

class WEBActivityGetPurchasedMembershipsByCustomerResponse
{

    /**
     * @var WEBActivityGetPurchasedMembershipsByCustomerResult $WEBActivityGetPurchasedMembershipsByCustomerResult
     */
    protected $WEBActivityGetPurchasedMembershipsByCustomerResult = null;

    /**
     * @param WEBActivityGetPurchasedMembershipsByCustomerResult $WEBActivityGetPurchasedMembershipsByCustomerResult
     */
    public function __construct($WEBActivityGetPurchasedMembershipsByCustomerResult)
    {
      $this->WEBActivityGetPurchasedMembershipsByCustomerResult = $WEBActivityGetPurchasedMembershipsByCustomerResult;
    }

    /**
     * @return WEBActivityGetPurchasedMembershipsByCustomerResult
     */
    public function getWEBActivityGetPurchasedMembershipsByCustomerResult()
    {
      return $this->WEBActivityGetPurchasedMembershipsByCustomerResult;
    }

    /**
     * @param WEBActivityGetPurchasedMembershipsByCustomerResult $WEBActivityGetPurchasedMembershipsByCustomerResult
     * @return \netForum\xWeb\Xml\Generated\WEBActivityGetPurchasedMembershipsByCustomerResponse
     */
    public function setWEBActivityGetPurchasedMembershipsByCustomerResult($WEBActivityGetPurchasedMembershipsByCustomerResult)
    {
      $this->WEBActivityGetPurchasedMembershipsByCustomerResult = $WEBActivityGetPurchasedMembershipsByCustomerResult;
      return $this;
    }

}
