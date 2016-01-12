<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMembershipSetLineItemsWithCart
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
     * @var Fee $oFeeCollection
     */
    protected $oFeeCollection = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param guid $MembershipKey
     * @param Fee $oFeeCollection
     */
    public function __construct($oCentralizedOrderEntry, $MembershipKey, $oFeeCollection)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->MembershipKey = $MembershipKey;
      $this->oFeeCollection = $oFeeCollection;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipSetLineItemsWithCart
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipSetLineItemsWithCart
     */
    public function setMembershipKey($MembershipKey)
    {
      $this->MembershipKey = $MembershipKey;
      return $this;
    }

    /**
     * @return Fee
     */
    public function getOFeeCollection()
    {
      return $this->oFeeCollection;
    }

    /**
     * @param Fee $oFeeCollection
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipSetLineItemsWithCart
     */
    public function setOFeeCollection($oFeeCollection)
    {
      $this->oFeeCollection = $oFeeCollection;
      return $this;
    }

}
