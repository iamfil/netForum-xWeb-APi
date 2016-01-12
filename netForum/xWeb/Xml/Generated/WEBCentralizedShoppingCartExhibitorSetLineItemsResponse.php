<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartExhibitorSetLineItemsResponse
{

    /**
     * @var ExhibitorNewType $WEBCentralizedShoppingCartExhibitorSetLineItemsResult
     */
    protected $WEBCentralizedShoppingCartExhibitorSetLineItemsResult = null;

    /**
     * @param ExhibitorNewType $WEBCentralizedShoppingCartExhibitorSetLineItemsResult
     */
    public function __construct($WEBCentralizedShoppingCartExhibitorSetLineItemsResult)
    {
      $this->WEBCentralizedShoppingCartExhibitorSetLineItemsResult = $WEBCentralizedShoppingCartExhibitorSetLineItemsResult;
    }

    /**
     * @return ExhibitorNewType
     */
    public function getWEBCentralizedShoppingCartExhibitorSetLineItemsResult()
    {
      return $this->WEBCentralizedShoppingCartExhibitorSetLineItemsResult;
    }

    /**
     * @param ExhibitorNewType $WEBCentralizedShoppingCartExhibitorSetLineItemsResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartExhibitorSetLineItemsResponse
     */
    public function setWEBCentralizedShoppingCartExhibitorSetLineItemsResult($WEBCentralizedShoppingCartExhibitorSetLineItemsResult)
    {
      $this->WEBCentralizedShoppingCartExhibitorSetLineItemsResult = $WEBCentralizedShoppingCartExhibitorSetLineItemsResult;
      return $this;
    }

}
