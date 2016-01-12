<?php

namespace netForum\xWeb\Xml\Generated;

class CreateInvoiceResponse
{

    /**
     * @var CreateInvoiceResult $CreateInvoiceResult
     */
    protected $CreateInvoiceResult = null;

    /**
     * @param CreateInvoiceResult $CreateInvoiceResult
     */
    public function __construct($CreateInvoiceResult)
    {
      $this->CreateInvoiceResult = $CreateInvoiceResult;
    }

    /**
     * @return CreateInvoiceResult
     */
    public function getCreateInvoiceResult()
    {
      return $this->CreateInvoiceResult;
    }

    /**
     * @param CreateInvoiceResult $CreateInvoiceResult
     * @return \netForum\xWeb\Xml\Generated\CreateInvoiceResponse
     */
    public function setCreateInvoiceResult($CreateInvoiceResult)
    {
      $this->CreateInvoiceResult = $CreateInvoiceResult;
      return $this;
    }

}
