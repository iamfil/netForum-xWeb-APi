<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetProductCategoryListResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetProductCategoryListResult $WEBCentralizedShoppingCartGetProductCategoryListResult
     */
    protected $WEBCentralizedShoppingCartGetProductCategoryListResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetProductCategoryListResult $WEBCentralizedShoppingCartGetProductCategoryListResult
     */
    public function __construct($WEBCentralizedShoppingCartGetProductCategoryListResult)
    {
      $this->WEBCentralizedShoppingCartGetProductCategoryListResult = $WEBCentralizedShoppingCartGetProductCategoryListResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetProductCategoryListResult
     */
    public function getWEBCentralizedShoppingCartGetProductCategoryListResult()
    {
      return $this->WEBCentralizedShoppingCartGetProductCategoryListResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetProductCategoryListResult $WEBCentralizedShoppingCartGetProductCategoryListResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetProductCategoryListResponse
     */
    public function setWEBCentralizedShoppingCartGetProductCategoryListResult($WEBCentralizedShoppingCartGetProductCategoryListResult)
    {
      $this->WEBCentralizedShoppingCartGetProductCategoryListResult = $WEBCentralizedShoppingCartGetProductCategoryListResult;
      return $this;
    }

}
