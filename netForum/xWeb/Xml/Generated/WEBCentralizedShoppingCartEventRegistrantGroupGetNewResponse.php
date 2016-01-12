<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartEventRegistrantGroupGetNewResponse
{

    /**
     * @var EventsRegistrantGroupType $WEBCentralizedShoppingCartEventRegistrantGroupGetNewResult
     */
    protected $WEBCentralizedShoppingCartEventRegistrantGroupGetNewResult = null;

    /**
     * @param EventsRegistrantGroupType $WEBCentralizedShoppingCartEventRegistrantGroupGetNewResult
     */
    public function __construct($WEBCentralizedShoppingCartEventRegistrantGroupGetNewResult)
    {
      $this->WEBCentralizedShoppingCartEventRegistrantGroupGetNewResult = $WEBCentralizedShoppingCartEventRegistrantGroupGetNewResult;
    }

    /**
     * @return EventsRegistrantGroupType
     */
    public function getWEBCentralizedShoppingCartEventRegistrantGroupGetNewResult()
    {
      return $this->WEBCentralizedShoppingCartEventRegistrantGroupGetNewResult;
    }

    /**
     * @param EventsRegistrantGroupType $WEBCentralizedShoppingCartEventRegistrantGroupGetNewResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantGroupGetNewResponse
     */
    public function setWEBCentralizedShoppingCartEventRegistrantGroupGetNewResult($WEBCentralizedShoppingCartEventRegistrantGroupGetNewResult)
    {
      $this->WEBCentralizedShoppingCartEventRegistrantGroupGetNewResult = $WEBCentralizedShoppingCartEventRegistrantGroupGetNewResult;
      return $this;
    }

}
