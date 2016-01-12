<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGiftGetGiftProductListByName
{

    /**
     * @var string $GiftName
     */
    protected $GiftName = null;

    /**
     * @param string $GiftName
     */
    public function __construct($GiftName)
    {
      $this->GiftName = $GiftName;
    }

    /**
     * @return string
     */
    public function getGiftName()
    {
      return $this->GiftName;
    }

    /**
     * @param string $GiftName
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGiftGetGiftProductListByName
     */
    public function setGiftName($GiftName)
    {
      $this->GiftName = $GiftName;
      return $this;
    }

}
