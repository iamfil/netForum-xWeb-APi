<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartAddEventRegistrantGroupResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartAddEventRegistrantGroupResult
     */
    protected $WEBCentralizedShoppingCartAddEventRegistrantGroupResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartAddEventRegistrantGroupResult
     */
    public function __construct($WEBCentralizedShoppingCartAddEventRegistrantGroupResult)
    {
      $this->WEBCentralizedShoppingCartAddEventRegistrantGroupResult = $WEBCentralizedShoppingCartAddEventRegistrantGroupResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartAddEventRegistrantGroupResult()
    {
      return $this->WEBCentralizedShoppingCartAddEventRegistrantGroupResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartAddEventRegistrantGroupResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartAddEventRegistrantGroupResponse
     */
    public function setWEBCentralizedShoppingCartAddEventRegistrantGroupResult($WEBCentralizedShoppingCartAddEventRegistrantGroupResult)
    {
      $this->WEBCentralizedShoppingCartAddEventRegistrantGroupResult = $WEBCentralizedShoppingCartAddEventRegistrantGroupResult;
      return $this;
    }

}
