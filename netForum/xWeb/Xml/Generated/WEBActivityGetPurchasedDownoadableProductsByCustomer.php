<?php

namespace netForum\xWeb\Xml\Generated;

class WEBActivityGetPurchasedDownoadableProductsByCustomer
{

    /**
     * @var guid $CustomerKey
     */
    protected $CustomerKey = null;

    /**
     * @param guid $CustomerKey
     */
    public function __construct($CustomerKey)
    {
      $this->CustomerKey = $CustomerKey;
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
     * @return \netForum\xWeb\Xml\Generated\WEBActivityGetPurchasedDownoadableProductsByCustomer
     */
    public function setCustomerKey($CustomerKey)
    {
      $this->CustomerKey = $CustomerKey;
      return $this;
    }

}
