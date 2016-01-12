<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetMerchandiseListResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetMerchandiseListResult $WEBCentralizedShoppingCartGetMerchandiseListResult
     */
    protected $WEBCentralizedShoppingCartGetMerchandiseListResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetMerchandiseListResult $WEBCentralizedShoppingCartGetMerchandiseListResult
     */
    public function __construct($WEBCentralizedShoppingCartGetMerchandiseListResult)
    {
      $this->WEBCentralizedShoppingCartGetMerchandiseListResult = $WEBCentralizedShoppingCartGetMerchandiseListResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetMerchandiseListResult
     */
    public function getWEBCentralizedShoppingCartGetMerchandiseListResult()
    {
      return $this->WEBCentralizedShoppingCartGetMerchandiseListResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetMerchandiseListResult $WEBCentralizedShoppingCartGetMerchandiseListResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetMerchandiseListResponse
     */
    public function setWEBCentralizedShoppingCartGetMerchandiseListResult($WEBCentralizedShoppingCartGetMerchandiseListResult)
    {
      $this->WEBCentralizedShoppingCartGetMerchandiseListResult = $WEBCentralizedShoppingCartGetMerchandiseListResult;
      return $this;
    }

}
