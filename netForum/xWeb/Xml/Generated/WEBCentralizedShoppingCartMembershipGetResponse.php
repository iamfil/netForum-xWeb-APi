<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMembershipGetResponse
{

    /**
     * @var mb_membershipType $WEBCentralizedShoppingCartMembershipGetResult
     */
    protected $WEBCentralizedShoppingCartMembershipGetResult = null;

    /**
     * @param mb_membershipType $WEBCentralizedShoppingCartMembershipGetResult
     */
    public function __construct($WEBCentralizedShoppingCartMembershipGetResult)
    {
      $this->WEBCentralizedShoppingCartMembershipGetResult = $WEBCentralizedShoppingCartMembershipGetResult;
    }

    /**
     * @return mb_membershipType
     */
    public function getWEBCentralizedShoppingCartMembershipGetResult()
    {
      return $this->WEBCentralizedShoppingCartMembershipGetResult;
    }

    /**
     * @param mb_membershipType $WEBCentralizedShoppingCartMembershipGetResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipGetResponse
     */
    public function setWEBCentralizedShoppingCartMembershipGetResult($WEBCentralizedShoppingCartMembershipGetResult)
    {
      $this->WEBCentralizedShoppingCartMembershipGetResult = $WEBCentralizedShoppingCartMembershipGetResult;
      return $this;
    }

}
