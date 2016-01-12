<?php

namespace netForum\xWeb\Xml\Generated;

class Additional_Invoice_DetailCollectionType
{

    /**
     * @var InvoiceDetailType[] $InvoiceDetail
     */
    protected $InvoiceDetail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InvoiceDetailType[]
     */
    public function getInvoiceDetail()
    {
      return $this->InvoiceDetail;
    }

    /**
     * @param InvoiceDetailType[] $InvoiceDetail
     * @return \netForum\xWeb\Xml\Generated\Additional_Invoice_DetailCollectionType
     */
    public function setInvoiceDetail(array $InvoiceDetail = null)
    {
      $this->InvoiceDetail = $InvoiceDetail;
      return $this;
    }

}
