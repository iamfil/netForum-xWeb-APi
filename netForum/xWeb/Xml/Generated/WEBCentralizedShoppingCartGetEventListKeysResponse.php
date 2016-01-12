<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetEventListKeysResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetEventListKeysResult $WEBCentralizedShoppingCartGetEventListKeysResult
     */
    protected $WEBCentralizedShoppingCartGetEventListKeysResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetEventListKeysResult $WEBCentralizedShoppingCartGetEventListKeysResult
     */
    public function __construct($WEBCentralizedShoppingCartGetEventListKeysResult)
    {
      $this->WEBCentralizedShoppingCartGetEventListKeysResult = $WEBCentralizedShoppingCartGetEventListKeysResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetEventListKeysResult
     */
    public function getWEBCentralizedShoppingCartGetEventListKeysResult()
    {
      return $this->WEBCentralizedShoppingCartGetEventListKeysResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetEventListKeysResult $WEBCentralizedShoppingCartGetEventListKeysResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetEventListKeysResponse
     */
    public function setWEBCentralizedShoppingCartGetEventListKeysResult($WEBCentralizedShoppingCartGetEventListKeysResult)
    {
      $this->WEBCentralizedShoppingCartGetEventListKeysResult = $WEBCentralizedShoppingCartGetEventListKeysResult;
      return $this;
    }

}
