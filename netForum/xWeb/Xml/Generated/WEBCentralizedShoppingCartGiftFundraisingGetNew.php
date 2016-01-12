<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGiftFundraisingGetNew
{

    /**
     * @var guid $CustomerKey
     */
    protected $CustomerKey = null;

    /**
     * @var guid $GiftKey
     */
    protected $GiftKey = null;

    /**
     * @param guid $CustomerKey
     * @param guid $GiftKey
     */
    public function __construct($CustomerKey, $GiftKey)
    {
      $this->CustomerKey = $CustomerKey;
      $this->GiftKey = $GiftKey;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGiftFundraisingGetNew
     */
    public function setCustomerKey($CustomerKey)
    {
      $this->CustomerKey = $CustomerKey;
      return $this;
    }

    /**
     * @return guid
     */
    public function getGiftKey()
    {
      return $this->GiftKey;
    }

    /**
     * @param guid $GiftKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGiftFundraisingGetNew
     */
    public function setGiftKey($GiftKey)
    {
      $this->GiftKey = $GiftKey;
      return $this;
    }

}
