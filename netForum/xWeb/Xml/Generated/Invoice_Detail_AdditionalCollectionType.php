<?php

namespace netForum\xWeb\Xml\Generated;

class Invoice_Detail_AdditionalCollectionType
{

    /**
     * @var InvoiceDetailAdditionalType[] $InvoiceDetailAdditional
     */
    protected $InvoiceDetailAdditional = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InvoiceDetailAdditionalType[]
     */
    public function getInvoiceDetailAdditional()
    {
      return $this->InvoiceDetailAdditional;
    }

    /**
     * @param InvoiceDetailAdditionalType[] $InvoiceDetailAdditional
     * @return \netForum\xWeb\Xml\Generated\Invoice_Detail_AdditionalCollectionType
     */
    public function setInvoiceDetailAdditional(array $InvoiceDetailAdditional = null)
    {
      $this->InvoiceDetailAdditional = $InvoiceDetailAdditional;
      return $this;
    }

}
