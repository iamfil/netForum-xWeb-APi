<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartAddEventRegistrantToGroupResponse
{

    /**
     * @var EventsRegistrantGroupType $WEBCentralizedShoppingCartAddEventRegistrantToGroupResult
     */
    protected $WEBCentralizedShoppingCartAddEventRegistrantToGroupResult = null;

    /**
     * @param EventsRegistrantGroupType $WEBCentralizedShoppingCartAddEventRegistrantToGroupResult
     */
    public function __construct($WEBCentralizedShoppingCartAddEventRegistrantToGroupResult)
    {
      $this->WEBCentralizedShoppingCartAddEventRegistrantToGroupResult = $WEBCentralizedShoppingCartAddEventRegistrantToGroupResult;
    }

    /**
     * @return EventsRegistrantGroupType
     */
    public function getWEBCentralizedShoppingCartAddEventRegistrantToGroupResult()
    {
      return $this->WEBCentralizedShoppingCartAddEventRegistrantToGroupResult;
    }

    /**
     * @param EventsRegistrantGroupType $WEBCentralizedShoppingCartAddEventRegistrantToGroupResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartAddEventRegistrantToGroupResponse
     */
    public function setWEBCentralizedShoppingCartAddEventRegistrantToGroupResult($WEBCentralizedShoppingCartAddEventRegistrantToGroupResult)
    {
      $this->WEBCentralizedShoppingCartAddEventRegistrantToGroupResult = $WEBCentralizedShoppingCartAddEventRegistrantToGroupResult;
      return $this;
    }

}
