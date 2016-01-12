<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartEventRegistrantRefreshResponse
{

    /**
     * @var EventsRegistrantType $WEBCentralizedShoppingCartEventRegistrantRefreshResult
     */
    protected $WEBCentralizedShoppingCartEventRegistrantRefreshResult = null;

    /**
     * @param EventsRegistrantType $WEBCentralizedShoppingCartEventRegistrantRefreshResult
     */
    public function __construct($WEBCentralizedShoppingCartEventRegistrantRefreshResult)
    {
      $this->WEBCentralizedShoppingCartEventRegistrantRefreshResult = $WEBCentralizedShoppingCartEventRegistrantRefreshResult;
    }

    /**
     * @return EventsRegistrantType
     */
    public function getWEBCentralizedShoppingCartEventRegistrantRefreshResult()
    {
      return $this->WEBCentralizedShoppingCartEventRegistrantRefreshResult;
    }

    /**
     * @param EventsRegistrantType $WEBCentralizedShoppingCartEventRegistrantRefreshResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantRefreshResponse
     */
    public function setWEBCentralizedShoppingCartEventRegistrantRefreshResult($WEBCentralizedShoppingCartEventRegistrantRefreshResult)
    {
      $this->WEBCentralizedShoppingCartEventRegistrantRefreshResult = $WEBCentralizedShoppingCartEventRegistrantRefreshResult;
      return $this;
    }

}
