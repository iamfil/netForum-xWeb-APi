<?php

namespace netForum\xWeb\Xml\Generated;

class InvoiceDetailType
{

    /**
     * @var av_key_Type $CurrentKey
     */
    protected $CurrentKey = null;

    /**
     * @var InvoiceDetail_Invoice_Detail_DataObjectType $Invoice_Detail
     */
    protected $Invoice_Detail = null;

    /**
     * @var InvoiceDetail_Invoice_Detail_Term_DataObjectType $Invoice_Detail_Term
     */
    protected $Invoice_Detail_Term = null;

    /**
     * @var InvoiceDetail_Invoice_DataObjectType $Invoice
     */
    protected $Invoice = null;

    /**
     * @var InvoiceDetail_Price_DataObjectType $Price
     */
    protected $Price = null;

    /**
     * @var InvoiceDetail_Product_DataObjectType $Product
     */
    protected $Product = null;

    /**
     * @var InvoiceDetail_ShipToCustomer_DataObjectType $ShipToCustomer
     */
    protected $ShipToCustomer = null;

    /**
     * @var InvoiceDetail_SoldToCustomer_DataObjectType $SoldToCustomer
     */
    protected $SoldToCustomer = null;

    /**
     * @var InvoiceDetail_Shipping_Address_DataObjectType $Shipping_Address
     */
    protected $Shipping_Address = null;

    /**
     * @var InvoiceDetail_Shipping_Address_Type_DataObjectType $Shipping_Address_Type
     */
    protected $Shipping_Address_Type = null;

    /**
     * @var InvoiceDetail_Invoice_Detail_Additional_DataObjectType $Invoice_Detail_Additional
     */
    protected $Invoice_Detail_Additional = null;

    /**
     * @var InvoiceDetail_Package_Component_DataObjectType $Package_Component
     */
    protected $Package_Component = null;

    /**
     * @var InvoiceDetail_Bundle_Component_DataObjectType $Bundle_Component
     */
    protected $Bundle_Component = null;

    /**
     * @var InvoiceDetail_Product_Type_DataObjectType $Product_Type
     */
    protected $Product_Type = null;

    /**
     * @var InvoiceDetail_Discount_Product_X_Product_DataObjectType $Discount_Product_X_Product
     */
    protected $Discount_Product_X_Product = null;

    /**
     * @var InvoiceDetail_Billing_Address_DataObjectType $Billing_Address
     */
    protected $Billing_Address = null;

    /**
     * @var InvoiceDetail_Currency_DataObjectType $Currency
     */
    protected $Currency = null;

    /**
     * @var InvoiceDetail_Order_Detail_Schedule_DataObjectType $Order_Detail_Schedule
     */
    protected $Order_Detail_Schedule = null;

    /**
     * @var InvoiceDetail_Invoice_Detail_IP_Range_DataObjectType $Invoice_Detail_IP_Range
     */
    protected $Invoice_Detail_IP_Range = null;

    /**
     * @var InvoiceDetail_Product_Type_Social_Messages_DataObjectType $Product_Type_Social_Messages
     */
    protected $Product_Type_Social_Messages = null;

    /**
     * @var InvoiceDetail_Invoice_Detail_Liability_DataObjectType $Invoice_Detail_Liability
     */
    protected $Invoice_Detail_Liability = null;

    /**
     * @var Additional_Invoice_DetailCollectionType $Additional_Invoice_DetailCollection
     */
    protected $Additional_Invoice_DetailCollection = null;

    /**
     * @var Invoice_Detail_AdditionalCollectionType $Invoice_Detail_AdditionalCollection
     */
    protected $Invoice_Detail_AdditionalCollection = null;

    /**
     * @param InvoiceDetail_Invoice_Detail_DataObjectType $Invoice_Detail
     * @param InvoiceDetail_Invoice_Detail_Term_DataObjectType $Invoice_Detail_Term
     * @param InvoiceDetail_Invoice_DataObjectType $Invoice
     * @param InvoiceDetail_Price_DataObjectType $Price
     * @param InvoiceDetail_Product_DataObjectType $Product
     * @param InvoiceDetail_ShipToCustomer_DataObjectType $ShipToCustomer
     * @param InvoiceDetail_SoldToCustomer_DataObjectType $SoldToCustomer
     * @param InvoiceDetail_Shipping_Address_DataObjectType $Shipping_Address
     * @param InvoiceDetail_Shipping_Address_Type_DataObjectType $Shipping_Address_Type
     * @param InvoiceDetail_Invoice_Detail_Additional_DataObjectType $Invoice_Detail_Additional
     * @param InvoiceDetail_Package_Component_DataObjectType $Package_Component
     * @param InvoiceDetail_Bundle_Component_DataObjectType $Bundle_Component
     * @param InvoiceDetail_Product_Type_DataObjectType $Product_Type
     * @param InvoiceDetail_Discount_Product_X_Product_DataObjectType $Discount_Product_X_Product
     * @param InvoiceDetail_Billing_Address_DataObjectType $Billing_Address
     * @param InvoiceDetail_Currency_DataObjectType $Currency
     * @param InvoiceDetail_Order_Detail_Schedule_DataObjectType $Order_Detail_Schedule
     * @param InvoiceDetail_Invoice_Detail_IP_Range_DataObjectType $Invoice_Detail_IP_Range
     * @param InvoiceDetail_Product_Type_Social_Messages_DataObjectType $Product_Type_Social_Messages
     * @param InvoiceDetail_Invoice_Detail_Liability_DataObjectType $Invoice_Detail_Liability
     * @param Additional_Invoice_DetailCollectionType $Additional_Invoice_DetailCollection
     * @param Invoice_Detail_AdditionalCollectionType $Invoice_Detail_AdditionalCollection
     */
    public function __construct($Invoice_Detail, $Invoice_Detail_Term, $Invoice, $Price, $Product, $ShipToCustomer, $SoldToCustomer, $Shipping_Address, $Shipping_Address_Type, $Invoice_Detail_Additional, $Package_Component, $Bundle_Component, $Product_Type, $Discount_Product_X_Product, $Billing_Address, $Currency, $Order_Detail_Schedule, $Invoice_Detail_IP_Range, $Product_Type_Social_Messages, $Invoice_Detail_Liability, $Additional_Invoice_DetailCollection, $Invoice_Detail_AdditionalCollection)
    {
      $this->Invoice_Detail = $Invoice_Detail;
      $this->Invoice_Detail_Term = $Invoice_Detail_Term;
      $this->Invoice = $Invoice;
      $this->Price = $Price;
      $this->Product = $Product;
      $this->ShipToCustomer = $ShipToCustomer;
      $this->SoldToCustomer = $SoldToCustomer;
      $this->Shipping_Address = $Shipping_Address;
      $this->Shipping_Address_Type = $Shipping_Address_Type;
      $this->Invoice_Detail_Additional = $Invoice_Detail_Additional;
      $this->Package_Component = $Package_Component;
      $this->Bundle_Component = $Bundle_Component;
      $this->Product_Type = $Product_Type;
      $this->Discount_Product_X_Product = $Discount_Product_X_Product;
      $this->Billing_Address = $Billing_Address;
      $this->Currency = $Currency;
      $this->Order_Detail_Schedule = $Order_Detail_Schedule;
      $this->Invoice_Detail_IP_Range = $Invoice_Detail_IP_Range;
      $this->Product_Type_Social_Messages = $Product_Type_Social_Messages;
      $this->Invoice_Detail_Liability = $Invoice_Detail_Liability;
      $this->Additional_Invoice_DetailCollection = $Additional_Invoice_DetailCollection;
      $this->Invoice_Detail_AdditionalCollection = $Invoice_Detail_AdditionalCollection;
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
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setCurrentKey($CurrentKey)
    {
      $this->CurrentKey = $CurrentKey;
      return $this;
    }

    /**
     * @return InvoiceDetail_Invoice_Detail_DataObjectType
     */
    public function getInvoice_Detail()
    {
      return $this->Invoice_Detail;
    }

    /**
     * @param InvoiceDetail_Invoice_Detail_DataObjectType $Invoice_Detail
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setInvoice_Detail($Invoice_Detail)
    {
      $this->Invoice_Detail = $Invoice_Detail;
      return $this;
    }

    /**
     * @return InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function getInvoice_Detail_Term()
    {
      return $this->Invoice_Detail_Term;
    }

    /**
     * @param InvoiceDetail_Invoice_Detail_Term_DataObjectType $Invoice_Detail_Term
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setInvoice_Detail_Term($Invoice_Detail_Term)
    {
      $this->Invoice_Detail_Term = $Invoice_Detail_Term;
      return $this;
    }

    /**
     * @return InvoiceDetail_Invoice_DataObjectType
     */
    public function getInvoice()
    {
      return $this->Invoice;
    }

    /**
     * @param InvoiceDetail_Invoice_DataObjectType $Invoice
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setInvoice($Invoice)
    {
      $this->Invoice = $Invoice;
      return $this;
    }

    /**
     * @return InvoiceDetail_Price_DataObjectType
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param InvoiceDetail_Price_DataObjectType $Price
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return InvoiceDetail_Product_DataObjectType
     */
    public function getProduct()
    {
      return $this->Product;
    }

    /**
     * @param InvoiceDetail_Product_DataObjectType $Product
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setProduct($Product)
    {
      $this->Product = $Product;
      return $this;
    }

    /**
     * @return InvoiceDetail_ShipToCustomer_DataObjectType
     */
    public function getShipToCustomer()
    {
      return $this->ShipToCustomer;
    }

    /**
     * @param InvoiceDetail_ShipToCustomer_DataObjectType $ShipToCustomer
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setShipToCustomer($ShipToCustomer)
    {
      $this->ShipToCustomer = $ShipToCustomer;
      return $this;
    }

    /**
     * @return InvoiceDetail_SoldToCustomer_DataObjectType
     */
    public function getSoldToCustomer()
    {
      return $this->SoldToCustomer;
    }

    /**
     * @param InvoiceDetail_SoldToCustomer_DataObjectType $SoldToCustomer
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setSoldToCustomer($SoldToCustomer)
    {
      $this->SoldToCustomer = $SoldToCustomer;
      return $this;
    }

    /**
     * @return InvoiceDetail_Shipping_Address_DataObjectType
     */
    public function getShipping_Address()
    {
      return $this->Shipping_Address;
    }

    /**
     * @param InvoiceDetail_Shipping_Address_DataObjectType $Shipping_Address
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setShipping_Address($Shipping_Address)
    {
      $this->Shipping_Address = $Shipping_Address;
      return $this;
    }

    /**
     * @return InvoiceDetail_Shipping_Address_Type_DataObjectType
     */
    public function getShipping_Address_Type()
    {
      return $this->Shipping_Address_Type;
    }

    /**
     * @param InvoiceDetail_Shipping_Address_Type_DataObjectType $Shipping_Address_Type
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setShipping_Address_Type($Shipping_Address_Type)
    {
      $this->Shipping_Address_Type = $Shipping_Address_Type;
      return $this;
    }

    /**
     * @return InvoiceDetail_Invoice_Detail_Additional_DataObjectType
     */
    public function getInvoice_Detail_Additional()
    {
      return $this->Invoice_Detail_Additional;
    }

    /**
     * @param InvoiceDetail_Invoice_Detail_Additional_DataObjectType $Invoice_Detail_Additional
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setInvoice_Detail_Additional($Invoice_Detail_Additional)
    {
      $this->Invoice_Detail_Additional = $Invoice_Detail_Additional;
      return $this;
    }

    /**
     * @return InvoiceDetail_Package_Component_DataObjectType
     */
    public function getPackage_Component()
    {
      return $this->Package_Component;
    }

    /**
     * @param InvoiceDetail_Package_Component_DataObjectType $Package_Component
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setPackage_Component($Package_Component)
    {
      $this->Package_Component = $Package_Component;
      return $this;
    }

    /**
     * @return InvoiceDetail_Bundle_Component_DataObjectType
     */
    public function getBundle_Component()
    {
      return $this->Bundle_Component;
    }

    /**
     * @param InvoiceDetail_Bundle_Component_DataObjectType $Bundle_Component
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setBundle_Component($Bundle_Component)
    {
      $this->Bundle_Component = $Bundle_Component;
      return $this;
    }

    /**
     * @return InvoiceDetail_Product_Type_DataObjectType
     */
    public function getProduct_Type()
    {
      return $this->Product_Type;
    }

    /**
     * @param InvoiceDetail_Product_Type_DataObjectType $Product_Type
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setProduct_Type($Product_Type)
    {
      $this->Product_Type = $Product_Type;
      return $this;
    }

    /**
     * @return InvoiceDetail_Discount_Product_X_Product_DataObjectType
     */
    public function getDiscount_Product_X_Product()
    {
      return $this->Discount_Product_X_Product;
    }

    /**
     * @param InvoiceDetail_Discount_Product_X_Product_DataObjectType $Discount_Product_X_Product
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setDiscount_Product_X_Product($Discount_Product_X_Product)
    {
      $this->Discount_Product_X_Product = $Discount_Product_X_Product;
      return $this;
    }

    /**
     * @return InvoiceDetail_Billing_Address_DataObjectType
     */
    public function getBilling_Address()
    {
      return $this->Billing_Address;
    }

    /**
     * @param InvoiceDetail_Billing_Address_DataObjectType $Billing_Address
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setBilling_Address($Billing_Address)
    {
      $this->Billing_Address = $Billing_Address;
      return $this;
    }

    /**
     * @return InvoiceDetail_Currency_DataObjectType
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param InvoiceDetail_Currency_DataObjectType $Currency
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return InvoiceDetail_Order_Detail_Schedule_DataObjectType
     */
    public function getOrder_Detail_Schedule()
    {
      return $this->Order_Detail_Schedule;
    }

    /**
     * @param InvoiceDetail_Order_Detail_Schedule_DataObjectType $Order_Detail_Schedule
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setOrder_Detail_Schedule($Order_Detail_Schedule)
    {
      $this->Order_Detail_Schedule = $Order_Detail_Schedule;
      return $this;
    }

    /**
     * @return InvoiceDetail_Invoice_Detail_IP_Range_DataObjectType
     */
    public function getInvoice_Detail_IP_Range()
    {
      return $this->Invoice_Detail_IP_Range;
    }

    /**
     * @param InvoiceDetail_Invoice_Detail_IP_Range_DataObjectType $Invoice_Detail_IP_Range
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setInvoice_Detail_IP_Range($Invoice_Detail_IP_Range)
    {
      $this->Invoice_Detail_IP_Range = $Invoice_Detail_IP_Range;
      return $this;
    }

    /**
     * @return InvoiceDetail_Product_Type_Social_Messages_DataObjectType
     */
    public function getProduct_Type_Social_Messages()
    {
      return $this->Product_Type_Social_Messages;
    }

    /**
     * @param InvoiceDetail_Product_Type_Social_Messages_DataObjectType $Product_Type_Social_Messages
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setProduct_Type_Social_Messages($Product_Type_Social_Messages)
    {
      $this->Product_Type_Social_Messages = $Product_Type_Social_Messages;
      return $this;
    }

    /**
     * @return InvoiceDetail_Invoice_Detail_Liability_DataObjectType
     */
    public function getInvoice_Detail_Liability()
    {
      return $this->Invoice_Detail_Liability;
    }

    /**
     * @param InvoiceDetail_Invoice_Detail_Liability_DataObjectType $Invoice_Detail_Liability
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setInvoice_Detail_Liability($Invoice_Detail_Liability)
    {
      $this->Invoice_Detail_Liability = $Invoice_Detail_Liability;
      return $this;
    }

    /**
     * @return Additional_Invoice_DetailCollectionType
     */
    public function getAdditional_Invoice_DetailCollection()
    {
      return $this->Additional_Invoice_DetailCollection;
    }

    /**
     * @param Additional_Invoice_DetailCollectionType $Additional_Invoice_DetailCollection
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setAdditional_Invoice_DetailCollection($Additional_Invoice_DetailCollection)
    {
      $this->Additional_Invoice_DetailCollection = $Additional_Invoice_DetailCollection;
      return $this;
    }

    /**
     * @return Invoice_Detail_AdditionalCollectionType
     */
    public function getInvoice_Detail_AdditionalCollection()
    {
      return $this->Invoice_Detail_AdditionalCollection;
    }

    /**
     * @param Invoice_Detail_AdditionalCollectionType $Invoice_Detail_AdditionalCollection
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetailType
     */
    public function setInvoice_Detail_AdditionalCollection($Invoice_Detail_AdditionalCollection)
    {
      $this->Invoice_Detail_AdditionalCollection = $Invoice_Detail_AdditionalCollection;
      return $this;
    }

}
