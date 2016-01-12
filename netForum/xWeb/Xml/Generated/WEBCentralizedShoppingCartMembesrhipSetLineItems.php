<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMembesrhipSetLineItems
{

    /**
     * @var mb_membershipType $oMembership
     */
    protected $oMembership = null;

    /**
     * @var Fees $oFeeCollection
     */
    protected $oFeeCollection = null;

    /**
     * @param mb_membershipType $oMembership
     * @param Fees $oFeeCollection
     */
    public function __construct($oMembership, $oFeeCollection)
    {
      $this->oMembership = $oMembership;
      $this->oFeeCollection = $oFeeCollection;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembesrhipSetLineItems
     */
    public function setOMembership($oMembership)
    {
      $this->oMembership = $oMembership;
      return $this;
    }

    /**
     * @return Fees
     */
    public function getOFeeCollection()
    {
      return $this->oFeeCollection;
    }

    /**
     * @param Fees $oFeeCollection
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembesrhipSetLineItems
     */
    public function setOFeeCollection($oFeeCollection)
    {
      $this->oFeeCollection = $oFeeCollection;
      return $this;
    }

}
