<?php

namespace netForum\xWeb\Xml\Generated;

class WEBPhoneGetPhonesByCustomer
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
     * @return \netForum\xWeb\Xml\Generated\WEBPhoneGetPhonesByCustomer
     */
    public function setCustomerKey($CustomerKey)
    {
      $this->CustomerKey = $CustomerKey;
      return $this;
    }

}
