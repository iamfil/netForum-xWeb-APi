<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMembershipAddMembershipResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartMembershipAddMembershipResult
     */
    protected $WEBCentralizedShoppingCartMembershipAddMembershipResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartMembershipAddMembershipResult
     */
    public function __construct($WEBCentralizedShoppingCartMembershipAddMembershipResult)
    {
      $this->WEBCentralizedShoppingCartMembershipAddMembershipResult = $WEBCentralizedShoppingCartMembershipAddMembershipResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartMembershipAddMembershipResult()
    {
      return $this->WEBCentralizedShoppingCartMembershipAddMembershipResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartMembershipAddMembershipResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipAddMembershipResponse
     */
    public function setWEBCentralizedShoppingCartMembershipAddMembershipResult($WEBCentralizedShoppingCartMembershipAddMembershipResult)
    {
      $this->WEBCentralizedShoppingCartMembershipAddMembershipResult = $WEBCentralizedShoppingCartMembershipAddMembershipResult;
      return $this;
    }

}
