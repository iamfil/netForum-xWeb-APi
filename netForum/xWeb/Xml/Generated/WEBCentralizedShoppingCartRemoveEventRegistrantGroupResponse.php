<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartRemoveEventRegistrantGroupResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartRemoveEventRegistrantGroupResult
     */
    protected $WEBCentralizedShoppingCartRemoveEventRegistrantGroupResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartRemoveEventRegistrantGroupResult
     */
    public function __construct($WEBCentralizedShoppingCartRemoveEventRegistrantGroupResult)
    {
      $this->WEBCentralizedShoppingCartRemoveEventRegistrantGroupResult = $WEBCentralizedShoppingCartRemoveEventRegistrantGroupResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartRemoveEventRegistrantGroupResult()
    {
      return $this->WEBCentralizedShoppingCartRemoveEventRegistrantGroupResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartRemoveEventRegistrantGroupResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartRemoveEventRegistrantGroupResponse
     */
    public function setWEBCentralizedShoppingCartRemoveEventRegistrantGroupResult($WEBCentralizedShoppingCartRemoveEventRegistrantGroupResult)
    {
      $this->WEBCentralizedShoppingCartRemoveEventRegistrantGroupResult = $WEBCentralizedShoppingCartRemoveEventRegistrantGroupResult;
      return $this;
    }

}
