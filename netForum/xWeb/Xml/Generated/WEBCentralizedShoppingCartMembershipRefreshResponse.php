<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMembershipRefreshResponse
{

    /**
     * @var mb_membershipType $WEBCentralizedShoppingCartMembershipRefreshResult
     */
    protected $WEBCentralizedShoppingCartMembershipRefreshResult = null;

    /**
     * @param mb_membershipType $WEBCentralizedShoppingCartMembershipRefreshResult
     */
    public function __construct($WEBCentralizedShoppingCartMembershipRefreshResult)
    {
      $this->WEBCentralizedShoppingCartMembershipRefreshResult = $WEBCentralizedShoppingCartMembershipRefreshResult;
    }

    /**
     * @return mb_membershipType
     */
    public function getWEBCentralizedShoppingCartMembershipRefreshResult()
    {
      return $this->WEBCentralizedShoppingCartMembershipRefreshResult;
    }

    /**
     * @param mb_membershipType $WEBCentralizedShoppingCartMembershipRefreshResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipRefreshResponse
     */
    public function setWEBCentralizedShoppingCartMembershipRefreshResult($WEBCentralizedShoppingCartMembershipRefreshResult)
    {
      $this->WEBCentralizedShoppingCartMembershipRefreshResult = $WEBCentralizedShoppingCartMembershipRefreshResult;
      return $this;
    }

}
