<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartEventRegistrantGetNew
{

    /**
     * @var guid $CustomerKey
     */
    protected $CustomerKey = null;

    /**
     * @var guid $EventKey
     */
    protected $EventKey = null;

    /**
     * @param guid $CustomerKey
     * @param guid $EventKey
     */
    public function __construct($CustomerKey, $EventKey)
    {
      $this->CustomerKey = $CustomerKey;
      $this->EventKey = $EventKey;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantGetNew
     */
    public function setCustomerKey($CustomerKey)
    {
      $this->CustomerKey = $CustomerKey;
      return $this;
    }

    /**
     * @return guid
     */
    public function getEventKey()
    {
      return $this->EventKey;
    }

    /**
     * @param guid $EventKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantGetNew
     */
    public function setEventKey($EventKey)
    {
      $this->EventKey = $EventKey;
      return $this;
    }

}
