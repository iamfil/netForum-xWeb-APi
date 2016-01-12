<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMembershipGetPackageListByName
{

    /**
     * @var string $PackageName
     */
    protected $PackageName = null;

    /**
     * @param string $PackageName
     */
    public function __construct($PackageName)
    {
      $this->PackageName = $PackageName;
    }

    /**
     * @return string
     */
    public function getPackageName()
    {
      return $this->PackageName;
    }

    /**
     * @param string $PackageName
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipGetPackageListByName
     */
    public function setPackageName($PackageName)
    {
      $this->PackageName = $PackageName;
      return $this;
    }

}
