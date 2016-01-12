<?php

namespace netForum\xWeb\Xml\Generated;

class MembershipCollectionType
{

    /**
     * @var mb_membershipType[] $mb_membership
     */
    protected $mb_membership = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return mb_membershipType[]
     */
    public function getMb_membership()
    {
      return $this->mb_membership;
    }

    /**
     * @param mb_membershipType[] $mb_membership
     * @return \netForum\xWeb\Xml\Generated\MembershipCollectionType
     */
    public function setMb_membership(array $mb_membership = null)
    {
      $this->mb_membership = $mb_membership;
      return $this;
    }

}
