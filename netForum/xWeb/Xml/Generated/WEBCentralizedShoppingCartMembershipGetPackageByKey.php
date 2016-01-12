<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMembershipGetPackageByKey
{

    /**
     * @var guid $PackageKey
     */
    protected $PackageKey = null;

    /**
     * @param guid $PackageKey
     */
    public function __construct($PackageKey)
    {
      $this->PackageKey = $PackageKey;
    }

    /**
     * @return guid
     */
    public function getPackageKey()
    {
      return $this->PackageKey;
    }

    /**
     * @param guid $PackageKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipGetPackageByKey
     */
    public function setPackageKey($PackageKey)
    {
      $this->PackageKey = $PackageKey;
      return $this;
    }

}
