<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartEventRegistrantGetResponse
{

    /**
     * @var EventsRegistrantType $WEBCentralizedShoppingCartEventRegistrantGetResult
     */
    protected $WEBCentralizedShoppingCartEventRegistrantGetResult = null;

    /**
     * @param EventsRegistrantType $WEBCentralizedShoppingCartEventRegistrantGetResult
     */
    public function __construct($WEBCentralizedShoppingCartEventRegistrantGetResult)
    {
      $this->WEBCentralizedShoppingCartEventRegistrantGetResult = $WEBCentralizedShoppingCartEventRegistrantGetResult;
    }

    /**
     * @return EventsRegistrantType
     */
    public function getWEBCentralizedShoppingCartEventRegistrantGetResult()
    {
      return $this->WEBCentralizedShoppingCartEventRegistrantGetResult;
    }

    /**
     * @param EventsRegistrantType $WEBCentralizedShoppingCartEventRegistrantGetResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartEventRegistrantGetResponse
     */
    public function setWEBCentralizedShoppingCartEventRegistrantGetResult($WEBCentralizedShoppingCartEventRegistrantGetResult)
    {
      $this->WEBCentralizedShoppingCartEventRegistrantGetResult = $WEBCentralizedShoppingCartEventRegistrantGetResult;
      return $this;
    }

}
