<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartRefreshResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartRefreshResult
     */
    protected $WEBCentralizedShoppingCartRefreshResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartRefreshResult
     */
    public function __construct($WEBCentralizedShoppingCartRefreshResult)
    {
      $this->WEBCentralizedShoppingCartRefreshResult = $WEBCentralizedShoppingCartRefreshResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartRefreshResult()
    {
      return $this->WEBCentralizedShoppingCartRefreshResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartRefreshResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartRefreshResponse
     */
    public function setWEBCentralizedShoppingCartRefreshResult($WEBCentralizedShoppingCartRefreshResult)
    {
      $this->WEBCentralizedShoppingCartRefreshResult = $WEBCentralizedShoppingCartRefreshResult;
      return $this;
    }

}
