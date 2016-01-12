<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartGetResult
     */
    protected $WEBCentralizedShoppingCartGetResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartGetResult
     */
    public function __construct($WEBCentralizedShoppingCartGetResult)
    {
      $this->WEBCentralizedShoppingCartGetResult = $WEBCentralizedShoppingCartGetResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartGetResult()
    {
      return $this->WEBCentralizedShoppingCartGetResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartGetResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetResponse
     */
    public function setWEBCentralizedShoppingCartGetResult($WEBCentralizedShoppingCartGetResult)
    {
      $this->WEBCentralizedShoppingCartGetResult = $WEBCentralizedShoppingCartGetResult;
      return $this;
    }

}
