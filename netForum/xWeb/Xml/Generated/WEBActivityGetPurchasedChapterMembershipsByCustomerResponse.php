<?php

namespace netForum\xWeb\Xml\Generated;

class WEBActivityGetPurchasedChapterMembershipsByCustomerResponse
{

    /**
     * @var WEBActivityGetPurchasedChapterMembershipsByCustomerResult $WEBActivityGetPurchasedChapterMembershipsByCustomerResult
     */
    protected $WEBActivityGetPurchasedChapterMembershipsByCustomerResult = null;

    /**
     * @param WEBActivityGetPurchasedChapterMembershipsByCustomerResult $WEBActivityGetPurchasedChapterMembershipsByCustomerResult
     */
    public function __construct($WEBActivityGetPurchasedChapterMembershipsByCustomerResult)
    {
      $this->WEBActivityGetPurchasedChapterMembershipsByCustomerResult = $WEBActivityGetPurchasedChapterMembershipsByCustomerResult;
    }

    /**
     * @return WEBActivityGetPurchasedChapterMembershipsByCustomerResult
     */
    public function getWEBActivityGetPurchasedChapterMembershipsByCustomerResult()
    {
      return $this->WEBActivityGetPurchasedChapterMembershipsByCustomerResult;
    }

    /**
     * @param WEBActivityGetPurchasedChapterMembershipsByCustomerResult $WEBActivityGetPurchasedChapterMembershipsByCustomerResult
     * @return \netForum\xWeb\Xml\Generated\WEBActivityGetPurchasedChapterMembershipsByCustomerResponse
     */
    public function setWEBActivityGetPurchasedChapterMembershipsByCustomerResult($WEBActivityGetPurchasedChapterMembershipsByCustomerResult)
    {
      $this->WEBActivityGetPurchasedChapterMembershipsByCustomerResult = $WEBActivityGetPurchasedChapterMembershipsByCustomerResult;
      return $this;
    }

}
