<?php

namespace netForum\xWeb\Xml\Generated;

class InvoiceToPayCollectionType
{

    /**
     * @var InvoiceType[] $Invoice
     */
    protected $Invoice = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InvoiceType[]
     */
    public function getInvoice()
    {
      return $this->Invoice;
    }

    /**
     * @param InvoiceType[] $Invoice
     * @return \netForum\xWeb\Xml\Generated\InvoiceToPayCollectionType
     */
    public function setInvoice(array $Invoice = null)
    {
      $this->Invoice = $Invoice;
      return $this;
    }

}
