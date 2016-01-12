<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMembershipGetPackageListByMembershipTypeKey
{

    /**
     * @var guid $MembershipTypeKey
     */
    protected $MembershipTypeKey = null;

    /**
     * @param guid $MembershipTypeKey
     */
    public function __construct($MembershipTypeKey)
    {
      $this->MembershipTypeKey = $MembershipTypeKey;
    }

    /**
     * @return guid
     */
    public function getMembershipTypeKey()
    {
      return $this->MembershipTypeKey;
    }

    /**
     * @param guid $MembershipTypeKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipGetPackageListByMembershipTypeKey
     */
    public function setMembershipTypeKey($MembershipTypeKey)
    {
      $this->MembershipTypeKey = $MembershipTypeKey;
      return $this;
    }

}
