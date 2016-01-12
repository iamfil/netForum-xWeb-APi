<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartClearSourceCodeResponse
{

    /**
     * @var CentralizedOrderEntryType $WEBCentralizedShoppingCartClearSourceCodeResult
     */
    protected $WEBCentralizedShoppingCartClearSourceCodeResult = null;

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartClearSourceCodeResult
     */
    public function __construct($WEBCentralizedShoppingCartClearSourceCodeResult)
    {
      $this->WEBCentralizedShoppingCartClearSourceCodeResult = $WEBCentralizedShoppingCartClearSourceCodeResult;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getWEBCentralizedShoppingCartClearSourceCodeResult()
    {
      return $this->WEBCentralizedShoppingCartClearSourceCodeResult;
    }

    /**
     * @param CentralizedOrderEntryType $WEBCentralizedShoppingCartClearSourceCodeResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartClearSourceCodeResponse
     */
    public function setWEBCentralizedShoppingCartClearSourceCodeResult($WEBCentralizedShoppingCartClearSourceCodeResult)
    {
      $this->WEBCentralizedShoppingCartClearSourceCodeResult = $WEBCentralizedShoppingCartClearSourceCodeResult;
      return $this;
    }

}
