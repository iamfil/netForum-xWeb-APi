<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMembershipGetMembershipTypeListResponse
{

    /**
     * @var WEBCentralizedShoppingCartMembershipGetMembershipTypeListResult $WEBCentralizedShoppingCartMembershipGetMembershipTypeListResult
     */
    protected $WEBCentralizedShoppingCartMembershipGetMembershipTypeListResult = null;

    /**
     * @param WEBCentralizedShoppingCartMembershipGetMembershipTypeListResult $WEBCentralizedShoppingCartMembershipGetMembershipTypeListResult
     */
    public function __construct($WEBCentralizedShoppingCartMembershipGetMembershipTypeListResult)
    {
      $this->WEBCentralizedShoppingCartMembershipGetMembershipTypeListResult = $WEBCentralizedShoppingCartMembershipGetMembershipTypeListResult;
    }

    /**
     * @return WEBCentralizedShoppingCartMembershipGetMembershipTypeListResult
     */
    public function getWEBCentralizedShoppingCartMembershipGetMembershipTypeListResult()
    {
      return $this->WEBCentralizedShoppingCartMembershipGetMembershipTypeListResult;
    }

    /**
     * @param WEBCentralizedShoppingCartMembershipGetMembershipTypeListResult $WEBCentralizedShoppingCartMembershipGetMembershipTypeListResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipGetMembershipTypeListResponse
     */
    public function setWEBCentralizedShoppingCartMembershipGetMembershipTypeListResult($WEBCentralizedShoppingCartMembershipGetMembershipTypeListResult)
    {
      $this->WEBCentralizedShoppingCartMembershipGetMembershipTypeListResult = $WEBCentralizedShoppingCartMembershipGetMembershipTypeListResult;
      return $this;
    }

}
