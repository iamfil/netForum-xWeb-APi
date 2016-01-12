<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCartResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCartResult
     */
    protected $WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCartResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCartResult
     */
    public function __construct($WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCartResult)
    {
      $this->WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCartResult = $WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCartResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCartResult()
    {
      return $this->WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCartResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCartResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCartResponse
     */
    public function setWEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCartResult($WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCartResult)
    {
      $this->WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCartResult = $WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCartResult;
      return $this;
    }

}
