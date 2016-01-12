<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMembershipGetNewResponse
{

    /**
     * @var mb_membershipType $WEBCentralizedShoppingCartMembershipGetNewResult
     */
    protected $WEBCentralizedShoppingCartMembershipGetNewResult = null;

    /**
     * @param mb_membershipType $WEBCentralizedShoppingCartMembershipGetNewResult
     */
    public function __construct($WEBCentralizedShoppingCartMembershipGetNewResult)
    {
      $this->WEBCentralizedShoppingCartMembershipGetNewResult = $WEBCentralizedShoppingCartMembershipGetNewResult;
    }

    /**
     * @return mb_membershipType
     */
    public function getWEBCentralizedShoppingCartMembershipGetNewResult()
    {
      return $this->WEBCentralizedShoppingCartMembershipGetNewResult;
    }

    /**
     * @param mb_membershipType $WEBCentralizedShoppingCartMembershipGetNewResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipGetNewResponse
     */
    public function setWEBCentralizedShoppingCartMembershipGetNewResult($WEBCentralizedShoppingCartMembershipGetNewResult)
    {
      $this->WEBCentralizedShoppingCartMembershipGetNewResult = $WEBCentralizedShoppingCartMembershipGetNewResult;
      return $this;
    }

}
