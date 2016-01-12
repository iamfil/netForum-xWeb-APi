<?php

namespace netForum\xWeb\Xml\Generated;

class CreateInvoice
{

    /**
     * @var InvoiceNode $InvoiceNode
     */
    protected $InvoiceNode = null;

    /**
     * @param InvoiceNode $InvoiceNode
     */
    public function __construct($InvoiceNode)
    {
      $this->InvoiceNode = $InvoiceNode;
    }

    /**
     * @return InvoiceNode
     */
    public function getInvoiceNode()
    {
      return $this->InvoiceNode;
    }

    /**
     * @param InvoiceNode $InvoiceNode
     * @return \netForum\xWeb\Xml\Generated\CreateInvoice
     */
    public function setInvoiceNode($InvoiceNode)
    {
      $this->InvoiceNode = $InvoiceNode;
      return $this;
    }

}
