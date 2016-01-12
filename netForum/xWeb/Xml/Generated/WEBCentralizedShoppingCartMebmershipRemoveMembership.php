<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMebmershipRemoveMembership
{

    /**
     * @var CentralizedOrderEntryType $oCentralizedOrderEntry
     */
    protected $oCentralizedOrderEntry = null;

    /**
     * @var guid $MembershipKey
     */
    protected $MembershipKey = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param guid $MembershipKey
     */
    public function __construct($oCentralizedOrderEntry, $MembershipKey)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->MembershipKey = $MembershipKey;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMebmershipRemoveMembership
     */
    public function setOCentralizedOrderEntry($oCentralizedOrderEntry)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      return $this;
    }

    /**
     * @return guid
     */
    public function getMembershipKey()
    {
      return $this->MembershipKey;
    }

    /**
     * @param guid $MembershipKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMebmershipRemoveMembership
     */
    public function setMembershipKey($MembershipKey)
    {
      $this->MembershipKey = $MembershipKey;
      return $this;
    }

}
