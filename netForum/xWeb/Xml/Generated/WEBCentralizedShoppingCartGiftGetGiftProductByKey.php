<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGiftGetGiftProductByKey
{

    /**
     * @var guid $GiftKey
     */
    protected $GiftKey = null;

    /**
     * @param guid $GiftKey
     */
    public function __construct($GiftKey)
    {
      $this->GiftKey = $GiftKey;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGiftGetGiftProductByKey
     */
    public function setGiftKey($GiftKey)
    {
      $this->GiftKey = $GiftKey;
      return $this;
    }

}
