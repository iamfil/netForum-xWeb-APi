<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetPaymentOptionsResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetPaymentOptionsResult $WEBCentralizedShoppingCartGetPaymentOptionsResult
     */
    protected $WEBCentralizedShoppingCartGetPaymentOptionsResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetPaymentOptionsResult $WEBCentralizedShoppingCartGetPaymentOptionsResult
     */
    public function __construct($WEBCentralizedShoppingCartGetPaymentOptionsResult)
    {
      $this->WEBCentralizedShoppingCartGetPaymentOptionsResult = $WEBCentralizedShoppingCartGetPaymentOptionsResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetPaymentOptionsResult
     */
    public function getWEBCentralizedShoppingCartGetPaymentOptionsResult()
    {
      return $this->WEBCentralizedShoppingCartGetPaymentOptionsResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetPaymentOptionsResult $WEBCentralizedShoppingCartGetPaymentOptionsResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetPaymentOptionsResponse
     */
    public function setWEBCentralizedShoppingCartGetPaymentOptionsResult($WEBCentralizedShoppingCartGetPaymentOptionsResult)
    {
      $this->WEBCentralizedShoppingCartGetPaymentOptionsResult = $WEBCentralizedShoppingCartGetPaymentOptionsResult;
      return $this;
    }

}
