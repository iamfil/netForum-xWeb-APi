<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetShippingOptionsResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetShippingOptionsResult $WEBCentralizedShoppingCartGetShippingOptionsResult
     */
    protected $WEBCentralizedShoppingCartGetShippingOptionsResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetShippingOptionsResult $WEBCentralizedShoppingCartGetShippingOptionsResult
     */
    public function __construct($WEBCentralizedShoppingCartGetShippingOptionsResult)
    {
      $this->WEBCentralizedShoppingCartGetShippingOptionsResult = $WEBCentralizedShoppingCartGetShippingOptionsResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetShippingOptionsResult
     */
    public function getWEBCentralizedShoppingCartGetShippingOptionsResult()
    {
      return $this->WEBCentralizedShoppingCartGetShippingOptionsResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetShippingOptionsResult $WEBCentralizedShoppingCartGetShippingOptionsResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetShippingOptionsResponse
     */
    public function setWEBCentralizedShoppingCartGetShippingOptionsResult($WEBCentralizedShoppingCartGetShippingOptionsResult)
    {
      $this->WEBCentralizedShoppingCartGetShippingOptionsResult = $WEBCentralizedShoppingCartGetShippingOptionsResult;
      return $this;
    }

}
