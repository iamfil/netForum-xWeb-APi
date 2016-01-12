<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartEventRegistrantGroupRefreshResponse
{

    /**
     * @var EventsRegistrantGroupType $WEBCentralizedShoppingCartEventRegistrantGroupRefreshResult
     */
    protected $WEBCentralizedShoppingCartEventRegistrantGroupRefreshResult = null;

    /**
     * @param EventsRegistrantGroupType $WEBCentralizedShoppingCartEventRegistrantGroupRefreshResult
     */
    public function __construct($WEBCentralizedShoppingCartEventRegistrantGroupRefreshResult)
    {
      $this->WEBCentralizedShoppingCartEventRegistrantGroupRefreshResult = $WEBCentralizedShoppingCartEventRegistrantGroupRefreshResult;
    }

    /**
     * @return EventsRegistrantGroupType
     */
    public function getWEBCentralizedShoppingCartEventRegistrantGroupRefreshResult()
    {
      return $this->WEBCentralizedShoppingCartEventRegistrantGroupRefreshResult;
    }

    /**
     * @param EventsRegistrantGroupType $WEBCentralizedShoppingCartEventRegistrantGroupRefreshResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantGroupRefreshResponse
     */
    public function setWEBCentralizedShoppingCartEventRegistrantGroupRefreshResult($WEBCentralizedShoppingCartEventRegistrantGroupRefreshResult)
    {
      $this->WEBCentralizedShoppingCartEventRegistrantGroupRefreshResult = $WEBCentralizedShoppingCartEventRegistrantGroupRefreshResult;
      return $this;
    }

}
