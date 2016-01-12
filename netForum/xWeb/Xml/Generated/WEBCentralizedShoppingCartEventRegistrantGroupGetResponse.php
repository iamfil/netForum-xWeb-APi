<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartEventRegistrantGroupGetResponse
{

    /**
     * @var EventsRegistrantGroupType $WEBCentralizedShoppingCartEventRegistrantGroupGetResult
     */
    protected $WEBCentralizedShoppingCartEventRegistrantGroupGetResult = null;

    /**
     * @param EventsRegistrantGroupType $WEBCentralizedShoppingCartEventRegistrantGroupGetResult
     */
    public function __construct($WEBCentralizedShoppingCartEventRegistrantGroupGetResult)
    {
      $this->WEBCentralizedShoppingCartEventRegistrantGroupGetResult = $WEBCentralizedShoppingCartEventRegistrantGroupGetResult;
    }

    /**
     * @return EventsRegistrantGroupType
     */
    public function getWEBCentralizedShoppingCartEventRegistrantGroupGetResult()
    {
      return $this->WEBCentralizedShoppingCartEventRegistrantGroupGetResult;
    }

    /**
     * @param EventsRegistrantGroupType $WEBCentralizedShoppingCartEventRegistrantGroupGetResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantGroupGetResponse
     */
    public function setWEBCentralizedShoppingCartEventRegistrantGroupGetResult($WEBCentralizedShoppingCartEventRegistrantGroupGetResult)
    {
      $this->WEBCentralizedShoppingCartEventRegistrantGroupGetResult = $WEBCentralizedShoppingCartEventRegistrantGroupGetResult;
      return $this;
    }

}
