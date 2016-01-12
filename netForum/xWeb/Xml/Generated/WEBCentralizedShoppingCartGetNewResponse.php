<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetNewResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartGetNewResult
     */
    protected $WEBCentralizedShoppingCartGetNewResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartGetNewResult
     */
    public function __construct($WEBCentralizedShoppingCartGetNewResult)
    {
      $this->WEBCentralizedShoppingCartGetNewResult = $WEBCentralizedShoppingCartGetNewResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartGetNewResult()
    {
      return $this->WEBCentralizedShoppingCartGetNewResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartGetNewResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetNewResponse
     */
    public function setWEBCentralizedShoppingCartGetNewResult($WEBCentralizedShoppingCartGetNewResult)
    {
      $this->WEBCentralizedShoppingCartGetNewResult = $WEBCentralizedShoppingCartGetNewResult;
      return $this;
    }

}
