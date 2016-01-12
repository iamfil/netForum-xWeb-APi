<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartExhibitorGetNewResponse
{

    /**
     * @var ExhibitorNewType $WEBCentralizedShoppingCartExhibitorGetNewResult
     */
    protected $WEBCentralizedShoppingCartExhibitorGetNewResult = null;

    /**
     * @param ExhibitorNewType $WEBCentralizedShoppingCartExhibitorGetNewResult
     */
    public function __construct($WEBCentralizedShoppingCartExhibitorGetNewResult)
    {
      $this->WEBCentralizedShoppingCartExhibitorGetNewResult = $WEBCentralizedShoppingCartExhibitorGetNewResult;
    }

    /**
     * @return ExhibitorNewType
     */
    public function getWEBCentralizedShoppingCartExhibitorGetNewResult()
    {
      return $this->WEBCentralizedShoppingCartExhibitorGetNewResult;
    }

    /**
     * @param ExhibitorNewType $WEBCentralizedShoppingCartExhibitorGetNewResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartExhibitorGetNewResponse
     */
    public function setWEBCentralizedShoppingCartExhibitorGetNewResult($WEBCentralizedShoppingCartExhibitorGetNewResult)
    {
      $this->WEBCentralizedShoppingCartExhibitorGetNewResult = $WEBCentralizedShoppingCartExhibitorGetNewResult;
      return $this;
    }

}
