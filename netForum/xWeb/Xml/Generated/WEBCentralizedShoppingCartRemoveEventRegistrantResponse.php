<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartRemoveEventRegistrantResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartRemoveEventRegistrantResult
     */
    protected $WEBCentralizedShoppingCartRemoveEventRegistrantResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartRemoveEventRegistrantResult
     */
    public function __construct($WEBCentralizedShoppingCartRemoveEventRegistrantResult)
    {
      $this->WEBCentralizedShoppingCartRemoveEventRegistrantResult = $WEBCentralizedShoppingCartRemoveEventRegistrantResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartRemoveEventRegistrantResult()
    {
      return $this->WEBCentralizedShoppingCartRemoveEventRegistrantResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartRemoveEventRegistrantResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartRemoveEventRegistrantResponse
     */
    public function setWEBCentralizedShoppingCartRemoveEventRegistrantResult($WEBCentralizedShoppingCartRemoveEventRegistrantResult)
    {
      $this->WEBCentralizedShoppingCartRemoveEventRegistrantResult = $WEBCentralizedShoppingCartRemoveEventRegistrantResult;
      return $this;
    }

}
