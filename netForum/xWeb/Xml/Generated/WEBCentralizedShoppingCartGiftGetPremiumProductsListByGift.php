<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGiftGetPremiumProductsListByGift
{

    /**
     * @var guid $GiftKey
     */
    protected $GiftKey = null;

    /**
     * @var float $GiftAmount
     */
    protected $GiftAmount = null;

    /**
     * @param guid $GiftKey
     * @param float $GiftAmount
     */
    public function __construct($GiftKey, $GiftAmount)
    {
      $this->GiftKey = $GiftKey;
      $this->GiftAmount = $GiftAmount;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGiftGetPremiumProductsListByGift
     */
    public function setGiftKey($GiftKey)
    {
      $this->GiftKey = $GiftKey;
      return $this;
    }

    /**
     * @return float
     */
    public function getGiftAmount()
    {
      return $this->GiftAmount;
    }

    /**
     * @param float $GiftAmount
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGiftGetPremiumProductsListByGift
     */
    public function setGiftAmount($GiftAmount)
    {
      $this->GiftAmount = $GiftAmount;
      return $this;
    }

}
