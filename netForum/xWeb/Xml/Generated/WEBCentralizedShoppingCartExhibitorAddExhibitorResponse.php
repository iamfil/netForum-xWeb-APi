<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartExhibitorAddExhibitorResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartExhibitorAddExhibitorResult
     */
    protected $WEBCentralizedShoppingCartExhibitorAddExhibitorResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartExhibitorAddExhibitorResult
     */
    public function __construct($WEBCentralizedShoppingCartExhibitorAddExhibitorResult)
    {
      $this->WEBCentralizedShoppingCartExhibitorAddExhibitorResult = $WEBCentralizedShoppingCartExhibitorAddExhibitorResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartExhibitorAddExhibitorResult()
    {
      return $this->WEBCentralizedShoppingCartExhibitorAddExhibitorResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartExhibitorAddExhibitorResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartExhibitorAddExhibitorResponse
     */
    public function setWEBCentralizedShoppingCartExhibitorAddExhibitorResult($WEBCentralizedShoppingCartExhibitorAddExhibitorResult)
    {
      $this->WEBCentralizedShoppingCartExhibitorAddExhibitorResult = $WEBCentralizedShoppingCartExhibitorAddExhibitorResult;
      return $this;
    }

}
