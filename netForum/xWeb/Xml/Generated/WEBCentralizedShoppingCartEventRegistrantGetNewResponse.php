<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartEventRegistrantGetNewResponse
{

    /**
     * @var EventsRegistrantType $WEBCentralizedShoppingCartEventRegistrantGetNewResult
     */
    protected $WEBCentralizedShoppingCartEventRegistrantGetNewResult = null;

    /**
     * @param EventsRegistrantType $WEBCentralizedShoppingCartEventRegistrantGetNewResult
     */
    public function __construct($WEBCentralizedShoppingCartEventRegistrantGetNewResult)
    {
      $this->WEBCentralizedShoppingCartEventRegistrantGetNewResult = $WEBCentralizedShoppingCartEventRegistrantGetNewResult;
    }

    /**
     * @return EventsRegistrantType
     */
    public function getWEBCentralizedShoppingCartEventRegistrantGetNewResult()
    {
      return $this->WEBCentralizedShoppingCartEventRegistrantGetNewResult;
    }

    /**
     * @param EventsRegistrantType $WEBCentralizedShoppingCartEventRegistrantGetNewResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantGetNewResponse
     */
    public function setWEBCentralizedShoppingCartEventRegistrantGetNewResult($WEBCentralizedShoppingCartEventRegistrantGetNewResult)
    {
      $this->WEBCentralizedShoppingCartEventRegistrantGetNewResult = $WEBCentralizedShoppingCartEventRegistrantGetNewResult;
      return $this;
    }

}
