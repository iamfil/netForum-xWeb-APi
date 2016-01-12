<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartInsertResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartInsertResult
     */
    protected $WEBCentralizedShoppingCartInsertResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartInsertResult
     */
    public function __construct($WEBCentralizedShoppingCartInsertResult)
    {
      $this->WEBCentralizedShoppingCartInsertResult = $WEBCentralizedShoppingCartInsertResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartInsertResult()
    {
      return $this->WEBCentralizedShoppingCartInsertResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartInsertResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartInsertResponse
     */
    public function setWEBCentralizedShoppingCartInsertResult($WEBCentralizedShoppingCartInsertResult)
    {
      $this->WEBCentralizedShoppingCartInsertResult = $WEBCentralizedShoppingCartInsertResult;
      return $this;
    }

}
