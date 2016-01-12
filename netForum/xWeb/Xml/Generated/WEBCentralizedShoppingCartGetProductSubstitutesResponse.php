<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetProductSubstitutesResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetProductSubstitutesResult $WEBCentralizedShoppingCartGetProductSubstitutesResult
     */
    protected $WEBCentralizedShoppingCartGetProductSubstitutesResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetProductSubstitutesResult $WEBCentralizedShoppingCartGetProductSubstitutesResult
     */
    public function __construct($WEBCentralizedShoppingCartGetProductSubstitutesResult)
    {
      $this->WEBCentralizedShoppingCartGetProductSubstitutesResult = $WEBCentralizedShoppingCartGetProductSubstitutesResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetProductSubstitutesResult
     */
    public function getWEBCentralizedShoppingCartGetProductSubstitutesResult()
    {
      return $this->WEBCentralizedShoppingCartGetProductSubstitutesResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetProductSubstitutesResult $WEBCentralizedShoppingCartGetProductSubstitutesResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetProductSubstitutesResponse
     */
    public function setWEBCentralizedShoppingCartGetProductSubstitutesResult($WEBCentralizedShoppingCartGetProductSubstitutesResult)
    {
      $this->WEBCentralizedShoppingCartGetProductSubstitutesResult = $WEBCentralizedShoppingCartGetProductSubstitutesResult;
      return $this;
    }

}
