<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartExhibitorGetExhibitListResponse
{

    /**
     * @var WEBCentralizedShoppingCartExhibitorGetExhibitListResult $WEBCentralizedShoppingCartExhibitorGetExhibitListResult
     */
    protected $WEBCentralizedShoppingCartExhibitorGetExhibitListResult = null;

    /**
     * @param WEBCentralizedShoppingCartExhibitorGetExhibitListResult $WEBCentralizedShoppingCartExhibitorGetExhibitListResult
     */
    public function __construct($WEBCentralizedShoppingCartExhibitorGetExhibitListResult)
    {
      $this->WEBCentralizedShoppingCartExhibitorGetExhibitListResult = $WEBCentralizedShoppingCartExhibitorGetExhibitListResult;
    }

    /**
     * @return WEBCentralizedShoppingCartExhibitorGetExhibitListResult
     */
    public function getWEBCentralizedShoppingCartExhibitorGetExhibitListResult()
    {
      return $this->WEBCentralizedShoppingCartExhibitorGetExhibitListResult;
    }

    /**
     * @param WEBCentralizedShoppingCartExhibitorGetExhibitListResult $WEBCentralizedShoppingCartExhibitorGetExhibitListResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartExhibitorGetExhibitListResponse
     */
    public function setWEBCentralizedShoppingCartExhibitorGetExhibitListResult($WEBCentralizedShoppingCartExhibitorGetExhibitListResult)
    {
      $this->WEBCentralizedShoppingCartExhibitorGetExhibitListResult = $WEBCentralizedShoppingCartExhibitorGetExhibitListResult;
      return $this;
    }

}
