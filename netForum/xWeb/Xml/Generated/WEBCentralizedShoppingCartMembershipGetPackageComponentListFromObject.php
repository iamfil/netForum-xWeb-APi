<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMembershipGetPackageComponentListFromObject
{

    /**
     * @var mb_membershipType $oMembership
     */
    protected $oMembership = null;

    /**
     * @param mb_membershipType $oMembership
     */
    public function __construct($oMembership)
    {
      $this->oMembership = $oMembership;
    }

    /**
     * @return mb_membershipType
     */
    public function getOMembership()
    {
      return $this->oMembership;
    }

    /**
     * @param mb_membershipType $oMembership
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipGetPackageComponentListFromObject
     */
    public function setOMembership($oMembership)
    {
      $this->oMembership = $oMembership;
      return $this;
    }

}