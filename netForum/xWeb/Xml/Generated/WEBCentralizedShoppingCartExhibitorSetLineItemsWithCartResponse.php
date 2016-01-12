<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartExhibitorSetLineItemsWithCartResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartExhibitorSetLineItemsWithCartResult
     */
    protected $WEBCentralizedShoppingCartExhibitorSetLineItemsWithCartResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartExhibitorSetLineItemsWithCartResult
     */
    public function __construct($WEBCentralizedShoppingCartExhibitorSetLineItemsWithCartResult)
    {
      $this->WEBCentralizedShoppingCartExhibitorSetLineItemsWithCartResult = $WEBCentralizedShoppingCartExhibitorSetLineItemsWithCartResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartExhibitorSetLineItemsWithCartResult()
    {
      return $this->WEBCentralizedShoppingCartExhibitorSetLineItemsWithCartResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartExhibitorSetLineItemsWithCartResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartExhibitorSetLineItemsWithCartResponse
     */
    public function setWEBCentralizedShoppingCartExhibitorSetLineItemsWithCartResult($WEBCentralizedShoppingCartExhibitorSetLineItemsWithCartResult)
    {
      $this->WEBCentralizedShoppingCartExhibitorSetLineItemsWithCartResult = $WEBCentralizedShoppingCartExhibitorSetLineItemsWithCartResult;
      return $this;
    }

}
