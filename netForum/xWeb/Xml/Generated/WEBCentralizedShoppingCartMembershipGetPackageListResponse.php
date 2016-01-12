<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMembershipGetPackageListResponse
{

    /**
     * @var WEBCentralizedShoppingCartMembershipGetPackageListResult $WEBCentralizedShoppingCartMembershipGetPackageListResult
     */
    protected $WEBCentralizedShoppingCartMembershipGetPackageListResult = null;

    /**
     * @param WEBCentralizedShoppingCartMembershipGetPackageListResult $WEBCentralizedShoppingCartMembershipGetPackageListResult
     */
    public function __construct($WEBCentralizedShoppingCartMembershipGetPackageListResult)
    {
      $this->WEBCentralizedShoppingCartMembershipGetPackageListResult = $WEBCentralizedShoppingCartMembershipGetPackageListResult;
    }

    /**
     * @return WEBCentralizedShoppingCartMembershipGetPackageListResult
     */
    public function getWEBCentralizedShoppingCartMembershipGetPackageListResult()
    {
      return $this->WEBCentralizedShoppingCartMembershipGetPackageListResult;
    }

    /**
     * @param WEBCentralizedShoppingCartMembershipGetPackageListResult $WEBCentralizedShoppingCartMembershipGetPackageListResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipGetPackageListResponse
     */
    public function setWEBCentralizedShoppingCartMembershipGetPackageListResult($WEBCentralizedShoppingCartMembershipGetPackageListResult)
    {
      $this->WEBCentralizedShoppingCartMembershipGetPackageListResult = $WEBCentralizedShoppingCartMembershipGetPackageListResult;
      return $this;
    }

}
