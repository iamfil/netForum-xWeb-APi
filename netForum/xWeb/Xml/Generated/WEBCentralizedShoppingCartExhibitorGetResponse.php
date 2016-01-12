<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartExhibitorGetResponse
{

    /**
     * @var ExhibitorNewType $WEBCentralizedShoppingCartExhibitorGetResult
     */
    protected $WEBCentralizedShoppingCartExhibitorGetResult = null;

    /**
     * @param ExhibitorNewType $WEBCentralizedShoppingCartExhibitorGetResult
     */
    public function __construct($WEBCentralizedShoppingCartExhibitorGetResult)
    {
      $this->WEBCentralizedShoppingCartExhibitorGetResult = $WEBCentralizedShoppingCartExhibitorGetResult;
    }

    /**
     * @return ExhibitorNewType
     */
    public function getWEBCentralizedShoppingCartExhibitorGetResult()
    {
      return $this->WEBCentralizedShoppingCartExhibitorGetResult;
    }

    /**
     * @param ExhibitorNewType $WEBCentralizedShoppingCartExhibitorGetResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartExhibitorGetResponse
     */
    public function setWEBCentralizedShoppingCartExhibitorGetResult($WEBCentralizedShoppingCartExhibitorGetResult)
    {
      $this->WEBCentralizedShoppingCartExhibitorGetResult = $WEBCentralizedShoppingCartExhibitorGetResult;
      return $this;
    }

}
