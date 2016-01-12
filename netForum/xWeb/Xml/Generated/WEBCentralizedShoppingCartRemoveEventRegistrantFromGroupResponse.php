<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartRemoveEventRegistrantFromGroupResponse
{

    /**
     * @var EventsRegistrantGroupType $WEBCentralizedShoppingCartRemoveEventRegistrantFromGroupResult
     */
    protected $WEBCentralizedShoppingCartRemoveEventRegistrantFromGroupResult = null;

    /**
     * @param EventsRegistrantGroupType $WEBCentralizedShoppingCartRemoveEventRegistrantFromGroupResult
     */
    public function __construct($WEBCentralizedShoppingCartRemoveEventRegistrantFromGroupResult)
    {
      $this->WEBCentralizedShoppingCartRemoveEventRegistrantFromGroupResult = $WEBCentralizedShoppingCartRemoveEventRegistrantFromGroupResult;
    }

    /**
     * @return EventsRegistrantGroupType
     */
    public function getWEBCentralizedShoppingCartRemoveEventRegistrantFromGroupResult()
    {
      return $this->WEBCentralizedShoppingCartRemoveEventRegistrantFromGroupResult;
    }

    /**
     * @param EventsRegistrantGroupType $WEBCentralizedShoppingCartRemoveEventRegistrantFromGroupResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartRemoveEventRegistrantFromGroupResponse
     */
    public function setWEBCentralizedShoppingCartRemoveEventRegistrantFromGroupResult($WEBCentralizedShoppingCartRemoveEventRegistrantFromGroupResult)
    {
      $this->WEBCentralizedShoppingCartRemoveEventRegistrantFromGroupResult = $WEBCentralizedShoppingCartRemoveEventRegistrantFromGroupResult;
      return $this;
    }

}
