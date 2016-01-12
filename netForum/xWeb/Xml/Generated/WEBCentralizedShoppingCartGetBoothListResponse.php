<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetBoothListResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetBoothListResult $WEBCentralizedShoppingCartGetBoothListResult
     */
    protected $WEBCentralizedShoppingCartGetBoothListResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetBoothListResult $WEBCentralizedShoppingCartGetBoothListResult
     */
    public function __construct($WEBCentralizedShoppingCartGetBoothListResult)
    {
      $this->WEBCentralizedShoppingCartGetBoothListResult = $WEBCentralizedShoppingCartGetBoothListResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetBoothListResult
     */
    public function getWEBCentralizedShoppingCartGetBoothListResult()
    {
      return $this->WEBCentralizedShoppingCartGetBoothListResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetBoothListResult $WEBCentralizedShoppingCartGetBoothListResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetBoothListResponse
     */
    public function setWEBCentralizedShoppingCartGetBoothListResult($WEBCentralizedShoppingCartGetBoothListResult)
    {
      $this->WEBCentralizedShoppingCartGetBoothListResult = $WEBCentralizedShoppingCartGetBoothListResult;
      return $this;
    }

}
