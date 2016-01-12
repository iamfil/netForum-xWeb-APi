<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartAddEventRegistrantResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartAddEventRegistrantResult
     */
    protected $WEBCentralizedShoppingCartAddEventRegistrantResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartAddEventRegistrantResult
     */
    public function __construct($WEBCentralizedShoppingCartAddEventRegistrantResult)
    {
      $this->WEBCentralizedShoppingCartAddEventRegistrantResult = $WEBCentralizedShoppingCartAddEventRegistrantResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartAddEventRegistrantResult()
    {
      return $this->WEBCentralizedShoppingCartAddEventRegistrantResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartAddEventRegistrantResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartAddEventRegistrantResponse
     */
    public function setWEBCentralizedShoppingCartAddEventRegistrantResult($WEBCentralizedShoppingCartAddEventRegistrantResult)
    {
      $this->WEBCentralizedShoppingCartAddEventRegistrantResult = $WEBCentralizedShoppingCartAddEventRegistrantResult;
      return $this;
    }

}
