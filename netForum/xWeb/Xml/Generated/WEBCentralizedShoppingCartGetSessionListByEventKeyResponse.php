<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetSessionListByEventKeyResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetSessionListByEventKeyResult $WEBCentralizedShoppingCartGetSessionListByEventKeyResult
     */
    protected $WEBCentralizedShoppingCartGetSessionListByEventKeyResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetSessionListByEventKeyResult $WEBCentralizedShoppingCartGetSessionListByEventKeyResult
     */
    public function __construct($WEBCentralizedShoppingCartGetSessionListByEventKeyResult)
    {
      $this->WEBCentralizedShoppingCartGetSessionListByEventKeyResult = $WEBCentralizedShoppingCartGetSessionListByEventKeyResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetSessionListByEventKeyResult
     */
    public function getWEBCentralizedShoppingCartGetSessionListByEventKeyResult()
    {
      return $this->WEBCentralizedShoppingCartGetSessionListByEventKeyResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetSessionListByEventKeyResult $WEBCentralizedShoppingCartGetSessionListByEventKeyResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetSessionListByEventKeyResponse
     */
    public function setWEBCentralizedShoppingCartGetSessionListByEventKeyResult($WEBCentralizedShoppingCartGetSessionListByEventKeyResult)
    {
      $this->WEBCentralizedShoppingCartGetSessionListByEventKeyResult = $WEBCentralizedShoppingCartGetSessionListByEventKeyResult;
      return $this;
    }

}
