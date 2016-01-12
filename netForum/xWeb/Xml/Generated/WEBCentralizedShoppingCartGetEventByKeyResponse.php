<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetEventByKeyResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetEventByKeyResult $WEBCentralizedShoppingCartGetEventByKeyResult
     */
    protected $WEBCentralizedShoppingCartGetEventByKeyResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetEventByKeyResult $WEBCentralizedShoppingCartGetEventByKeyResult
     */
    public function __construct($WEBCentralizedShoppingCartGetEventByKeyResult)
    {
      $this->WEBCentralizedShoppingCartGetEventByKeyResult = $WEBCentralizedShoppingCartGetEventByKeyResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetEventByKeyResult
     */
    public function getWEBCentralizedShoppingCartGetEventByKeyResult()
    {
      return $this->WEBCentralizedShoppingCartGetEventByKeyResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetEventByKeyResult $WEBCentralizedShoppingCartGetEventByKeyResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetEventByKeyResponse
     */
    public function setWEBCentralizedShoppingCartGetEventByKeyResult($WEBCentralizedShoppingCartGetEventByKeyResult)
    {
      $this->WEBCentralizedShoppingCartGetEventByKeyResult = $WEBCentralizedShoppingCartGetEventByKeyResult;
      return $this;
    }

}
