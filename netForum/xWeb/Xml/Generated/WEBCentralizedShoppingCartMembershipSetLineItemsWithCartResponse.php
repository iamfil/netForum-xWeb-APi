<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMembershipSetLineItemsWithCartResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartMembershipSetLineItemsWithCartResult
     */
    protected $WEBCentralizedShoppingCartMembershipSetLineItemsWithCartResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartMembershipSetLineItemsWithCartResult
     */
    public function __construct($WEBCentralizedShoppingCartMembershipSetLineItemsWithCartResult)
    {
      $this->WEBCentralizedShoppingCartMembershipSetLineItemsWithCartResult = $WEBCentralizedShoppingCartMembershipSetLineItemsWithCartResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartMembershipSetLineItemsWithCartResult()
    {
      return $this->WEBCentralizedShoppingCartMembershipSetLineItemsWithCartResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartMembershipSetLineItemsWithCartResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipSetLineItemsWithCartResponse
     */
    public function setWEBCentralizedShoppingCartMembershipSetLineItemsWithCartResult($WEBCentralizedShoppingCartMembershipSetLineItemsWithCartResult)
    {
      $this->WEBCentralizedShoppingCartMembershipSetLineItemsWithCartResult = $WEBCentralizedShoppingCartMembershipSetLineItemsWithCartResult;
      return $this;
    }

}
