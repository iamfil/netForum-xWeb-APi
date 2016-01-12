<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartApplySourceCodeResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartApplySourceCodeResult
     */
    protected $WEBCentralizedShoppingCartApplySourceCodeResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartApplySourceCodeResult
     */
    public function __construct($WEBCentralizedShoppingCartApplySourceCodeResult)
    {
      $this->WEBCentralizedShoppingCartApplySourceCodeResult = $WEBCentralizedShoppingCartApplySourceCodeResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartApplySourceCodeResult()
    {
      return $this->WEBCentralizedShoppingCartApplySourceCodeResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartApplySourceCodeResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartApplySourceCodeResponse
     */
    public function setWEBCentralizedShoppingCartApplySourceCodeResult($WEBCentralizedShoppingCartApplySourceCodeResult)
    {
      $this->WEBCentralizedShoppingCartApplySourceCodeResult = $WEBCentralizedShoppingCartApplySourceCodeResult;
      return $this;
    }

}
