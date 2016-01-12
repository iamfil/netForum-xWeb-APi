<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartOpenInvoiceGetListResponse
{

    /**
     * @var WEBCentralizedShoppingCartOpenInvoiceGetListResult $WEBCentralizedShoppingCartOpenInvoiceGetListResult
     */
    protected $WEBCentralizedShoppingCartOpenInvoiceGetListResult = null;

    /**
     * @param WEBCentralizedShoppingCartOpenInvoiceGetListResult $WEBCentralizedShoppingCartOpenInvoiceGetListResult
     */
    public function __construct($WEBCentralizedShoppingCartOpenInvoiceGetListResult)
    {
      $this->WEBCentralizedShoppingCartOpenInvoiceGetListResult = $WEBCentralizedShoppingCartOpenInvoiceGetListResult;
    }

    /**
     * @return WEBCentralizedShoppingCartOpenInvoiceGetListResult
     */
    public function getWEBCentralizedShoppingCartOpenInvoiceGetListResult()
    {
      return $this->WEBCentralizedShoppingCartOpenInvoiceGetListResult;
    }

    /**
     * @param WEBCentralizedShoppingCartOpenInvoiceGetListResult $WEBCentralizedShoppingCartOpenInvoiceGetListResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartOpenInvoiceGetListResponse
     */
    public function setWEBCentralizedShoppingCartOpenInvoiceGetListResult($WEBCentralizedShoppingCartOpenInvoiceGetListResult)
    {
      $this->WEBCentralizedShoppingCartOpenInvoiceGetListResult = $WEBCentralizedShoppingCartOpenInvoiceGetListResult;
      return $this;
    }

}
