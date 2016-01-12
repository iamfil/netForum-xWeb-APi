<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMembershipAddMembership
{

    /**
     * @var CentralizedOrderEntryType $oCentralizedOrderEntry
     */
    protected $oCentralizedOrderEntry = null;

    /**
     * @var mb_membershipType $oMembership
     */
    protected $oMembership = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param mb_membershipType $oMembership
     */
    public function __construct($oCentralizedOrderEntry, $oMembership)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->oMembership = $oMembership;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getOCentralizedOrderEntry()
    {
      return $this->oCentralizedOrderEntry;
    }

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipAddMembership
     */
    public function setOCentralizedOrderEntry($oCentralizedOrderEntry)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      return $this;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipAddMembership
     */
    public function setOMembership($oMembership)
    {
      $this->oMembership = $oMembership;
      return $this;
    }

}
