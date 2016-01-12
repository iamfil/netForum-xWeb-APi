<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartApplyDiscountCodeResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartApplyDiscountCodeResult
     */
    protected $WEBCentralizedShoppingCartApplyDiscountCodeResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartApplyDiscountCodeResult
     */
    public function __construct($WEBCentralizedShoppingCartApplyDiscountCodeResult)
    {
      $this->WEBCentralizedShoppingCartApplyDiscountCodeResult = $WEBCentralizedShoppingCartApplyDiscountCodeResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartApplyDiscountCodeResult()
    {
      return $this->WEBCentralizedShoppingCartApplyDiscountCodeResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartApplyDiscountCodeResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartApplyDiscountCodeResponse
     */
    public function setWEBCentralizedShoppingCartApplyDiscountCodeResult($WEBCentralizedShoppingCartApplyDiscountCodeResult)
    {
      $this->WEBCentralizedShoppingCartApplyDiscountCodeResult = $WEBCentralizedShoppingCartApplyDiscountCodeResult;
      return $this;
    }

}
