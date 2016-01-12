<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartMembershipGetNew
{

    /**
     * @var guid $CustomerKey
     */
    protected $CustomerKey = null;

    /**
     * @var guid $PackageKey
     */
    protected $PackageKey = null;

    /**
     * @param guid $CustomerKey
     * @param guid $PackageKey
     */
    public function __construct($CustomerKey, $PackageKey)
    {
      $this->CustomerKey = $CustomerKey;
      $this->PackageKey = $PackageKey;
    }

    /**
     * @return guid
     */
    public function getCustomerKey()
    {
      return $this->CustomerKey;
    }

    /**
     * @param guid $CustomerKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipGetNew
     */
    public function setCustomerKey($CustomerKey)
    {
      $this->CustomerKey = $CustomerKey;
      return $this;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartMembershipGetNew
     */
    public function setPackageKey($PackageKey)
    {
      $this->PackageKey = $PackageKey;
      return $this;
    }

}
