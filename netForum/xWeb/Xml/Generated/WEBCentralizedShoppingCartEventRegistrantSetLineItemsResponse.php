<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartEventRegistrantSetLineItemsResponse
{

    /**
     * @var EventsRegistrantType $WEBCentralizedShoppingCartEventRegistrantSetLineItemsResult
     */
    protected $WEBCentralizedShoppingCartEventRegistrantSetLineItemsResult = null;

    /**
     * @param EventsRegistrantType $WEBCentralizedShoppingCartEventRegistrantSetLineItemsResult
     */
    public function __construct($WEBCentralizedShoppingCartEventRegistrantSetLineItemsResult)
    {
      $this->WEBCentralizedShoppingCartEventRegistrantSetLineItemsResult = $WEBCentralizedShoppingCartEventRegistrantSetLineItemsResult;
    }

    /**
     * @return EventsRegistrantType
     */
    public function getWEBCentralizedShoppingCartEventRegistrantSetLineItemsResult()
    {
      return $this->WEBCentralizedShoppingCartEventRegistrantSetLineItemsResult;
    }

    /**
     * @param EventsRegistrantType $WEBCentralizedShoppingCartEventRegistrantSetLineItemsResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantSetLineItemsResponse
     */
    public function setWEBCentralizedShoppingCartEventRegistrantSetLineItemsResult($WEBCentralizedShoppingCartEventRegistrantSetLineItemsResult)
    {
      $this->WEBCentralizedShoppingCartEventRegistrantSetLineItemsResult = $WEBCentralizedShoppingCartEventRegistrantSetLineItemsResult;
      return $this;
    }

}
