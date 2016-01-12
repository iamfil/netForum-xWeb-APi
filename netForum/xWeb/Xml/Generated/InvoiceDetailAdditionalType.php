<?php

namespace netForum\xWeb\Xml\Generated;

class InvoiceDetailAdditionalType
{

    /**
     * @var av_key_Type $CurrentKey
     */
    protected $CurrentKey = null;

    /**
     * @var InvoiceDetailAdditional_Invoice_Detail_Additional_DataObjectType $Invoice_Detail_Additional
     */
    protected $Invoice_Detail_Additional = null;

    /**
     * @var InvoiceDetailAdditional_Price_DataObjectType $Price
     */
    protected $Price = null;

    /**
     * @param InvoiceDetailAdditional_Invoice_Detail_Additional_DataObjectType $Invoice_Detail_Additional
     * @param InvoiceDetailAdditional_Price_DataObjectType $Price
     */
    public function __construct($Invoice_Detail_Additional, $Price)
    {
      $this->Invoice_Detail_Additional = $Invoice_Detail_Additional;
      $this->Price = $Price;
    }

    /**
     * @return av_key_Type
     */
    public function getCurrentKey()
    {
      return $this->CurrentKey;
    }

    /**
     * @param av_key_Type $CurrentKey
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailAdditionalType
     */
    public function setCurrentKey($CurrentKey)
    {
      $this->CurrentKey = $CurrentKey;
      return $this;
    }

    /**
     * @return InvoiceDetailAdditional_Invoice_Detail_Additional_DataObjectType
     */
    public function getInvoice_Detail_Additional()
    {
      return $this->Invoice_Detail_Additional;
    }

    /**
     * @param InvoiceDetailAdditional_Invoice_Detail_Additional_DataObjectType $Invoice_Detail_Additional
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailAdditionalType
     */
    public function setInvoice_Detail_Additional($Invoice_Detail_Additional)
    {
      $this->Invoice_Detail_Additional = $Invoice_Detail_Additional;
      return $this;
    }

    /**
     * @return InvoiceDetailAdditional_Price_DataObjectType
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param InvoiceDetailAdditional_Price_DataObjectType $Price
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailAdditionalType
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

}
