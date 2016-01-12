<?php

namespace netForum\xWeb\Xml\Generated;

class InvoiceType
{

    /**
     * @var av_key_Type $CurrentKey
     */
    protected $CurrentKey = null;

    /**
     * @var Invoice_Invoice_DataObjectType $Invoice
     */
    protected $Invoice = null;

    /**
     * @var Invoice_Invoice_Detail_DataObjectType $Invoice_Detail
     */
    protected $Invoice_Detail = null;

    /**
     * @var Invoice_Claim_DataObjectType $Claim
     */
    protected $Claim = null;

    /**
     * @var Invoice_Default_Shipping_Address_DataObjectType $Default_Shipping_Address
     */
    protected $Default_Shipping_Address = null;

    /**
     * @var Invoice_Payment_DataObjectType $Payment
     */
    protected $Payment = null;

    /**
     * @var Invoice_Payment_Info_DataObjectType $Payment_Info
     */
    protected $Payment_Info = null;

    /**
     * @var Invoice_Payment_Method_DataObjectType $Payment_Method
     */
    protected $Payment_Method = null;

    /**
     * @var Invoice_Customer_DataObjectType $Customer
     */
    protected $Customer = null;

    /**
     * @var Invoice_Billing_Address_DataObjectType $Billing_Address
     */
    protected $Billing_Address = null;

    /**
     * @var Invoice_Billing_Adr_DataObjectType $Billing_Adr
     */
    protected $Billing_Adr = null;

    /**
     * @var Invoice_Price_DataObjectType $Price
     */
    protected $Price = null;

    /**
     * @var Invoice_Batch_DataObjectType $Batch
     */
    protected $Batch = null;

    /**
     * @var Invoice_BillToCustomer_DataObjectType $BillToCustomer
     */
    protected $BillToCustomer = null;

    /**
     * @var Invoice_BillToIndividual_DataObjectType $BillToIndividual
     */
    protected $BillToIndividual = null;

    /**
     * @var Invoice_InstallmentBilling_DataObjectType $InstallmentBilling
     */
    protected $InstallmentBilling = null;

    /**
     * @var Invoice_CompanyBusiness_Unit_DataObjectType $CompanyBusiness_Unit
     */
    protected $CompanyBusiness_Unit = null;

    /**
     * @var Invoice_Credit_Available_DataObjectType $Credit_Available
     */
    protected $Credit_Available = null;

    /**
     * @var Invoice_source_code_DataObjectType $source_code
     */
    protected $source_code = null;

    /**
     * @var Invoice_Sales_Opportunity_DataObjectType $Sales_Opportunity
     */
    protected $Sales_Opportunity = null;

    /**
     * @var Invoice_currency_DataObjectType $currency
     */
    protected $currency = null;

    /**
     * @var Invoice_DetailCollectionType $Invoice_DetailCollection
     */
    protected $Invoice_DetailCollection = null;

    /**
     * @var Additional_Invoice_DetailCollectionType $Additional_Invoice_DetailCollection
     */
    protected $Additional_Invoice_DetailCollection = null;

    /**
     * @param Invoice_Invoice_DataObjectType $Invoice
     * @param Invoice_Invoice_Detail_DataObjectType $Invoice_Detail
     * @param Invoice_Claim_DataObjectType $Claim
     * @param Invoice_Default_Shipping_Address_DataObjectType $Default_Shipping_Address
     * @param Invoice_Payment_DataObjectType $Payment
     * @param Invoice_Payment_Info_DataObjectType $Payment_Info
     * @param Invoice_Payment_Method_DataObjectType $Payment_Method
     * @param Invoice_Customer_DataObjectType $Customer
     * @param Invoice_Billing_Address_DataObjectType $Billing_Address
     * @param Invoice_Billing_Adr_DataObjectType $Billing_Adr
     * @param Invoice_Price_DataObjectType $Price
     * @param Invoice_Batch_DataObjectType $Batch
     * @param Invoice_BillToCustomer_DataObjectType $BillToCustomer
     * @param Invoice_BillToIndividual_DataObjectType $BillToIndividual
     * @param Invoice_InstallmentBilling_DataObjectType $InstallmentBilling
     * @param Invoice_CompanyBusiness_Unit_DataObjectType $CompanyBusiness_Unit
     * @param Invoice_Credit_Available_DataObjectType $Credit_Available
     * @param Invoice_source_code_DataObjectType $source_code
     * @param Invoice_Sales_Opportunity_DataObjectType $Sales_Opportunity
     * @param Invoice_currency_DataObjectType $currency
     * @param Invoice_DetailCollectionType $Invoice_DetailCollection
     * @param Additional_Invoice_DetailCollectionType $Additional_Invoice_DetailCollection
     */
    public function __construct($Invoice, $Invoice_Detail, $Claim, $Default_Shipping_Address, $Payment, $Payment_Info, $Payment_Method, $Customer, $Billing_Address, $Billing_Adr, $Price, $Batch, $BillToCustomer, $BillToIndividual, $InstallmentBilling, $CompanyBusiness_Unit, $Credit_Available, $source_code, $Sales_Opportunity, $currency, $Invoice_DetailCollection, $Additional_Invoice_DetailCollection)
    {
      $this->Invoice = $Invoice;
      $this->Invoice_Detail = $Invoice_Detail;
      $this->Claim = $Claim;
      $this->Default_Shipping_Address = $Default_Shipping_Address;
      $this->Payment = $Payment;
      $this->Payment_Info = $Payment_Info;
      $this->Payment_Method = $Payment_Method;
      $this->Customer = $Customer;
      $this->Billing_Address = $Billing_Address;
      $this->Billing_Adr = $Billing_Adr;
      $this->Price = $Price;
      $this->Batch = $Batch;
      $this->BillToCustomer = $BillToCustomer;
      $this->BillToIndividual = $BillToIndividual;
      $this->InstallmentBilling = $InstallmentBilling;
      $this->CompanyBusiness_Unit = $CompanyBusiness_Unit;
      $this->Credit_Available = $Credit_Available;
      $this->source_code = $source_code;
      $this->Sales_Opportunity = $Sales_Opportunity;
      $this->currency = $currency;
      $this->Invoice_DetailCollection = $Invoice_DetailCollection;
      $this->Additional_Invoice_DetailCollection = $Additional_Invoice_DetailCollection;
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
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setCurrentKey($CurrentKey)
    {
      $this->CurrentKey = $CurrentKey;
      return $this;
    }

    /**
     * @return Invoice_Invoice_DataObjectType
     */
    public function getInvoice()
    {
      return $this->Invoice;
    }

    /**
     * @param Invoice_Invoice_DataObjectType $Invoice
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setInvoice($Invoice)
    {
      $this->Invoice = $Invoice;
      return $this;
    }

    /**
     * @return Invoice_Invoice_Detail_DataObjectType
     */
    public function getInvoice_Detail()
    {
      return $this->Invoice_Detail;
    }

    /**
     * @param Invoice_Invoice_Detail_DataObjectType $Invoice_Detail
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setInvoice_Detail($Invoice_Detail)
    {
      $this->Invoice_Detail = $Invoice_Detail;
      return $this;
    }

    /**
     * @return Invoice_Claim_DataObjectType
     */
    public function getClaim()
    {
      return $this->Claim;
    }

    /**
     * @param Invoice_Claim_DataObjectType $Claim
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setClaim($Claim)
    {
      $this->Claim = $Claim;
      return $this;
    }

    /**
     * @return Invoice_Default_Shipping_Address_DataObjectType
     */
    public function getDefault_Shipping_Address()
    {
      return $this->Default_Shipping_Address;
    }

    /**
     * @param Invoice_Default_Shipping_Address_DataObjectType $Default_Shipping_Address
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setDefault_Shipping_Address($Default_Shipping_Address)
    {
      $this->Default_Shipping_Address = $Default_Shipping_Address;
      return $this;
    }

    /**
     * @return Invoice_Payment_DataObjectType
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param Invoice_Payment_DataObjectType $Payment
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return Invoice_Payment_Info_DataObjectType
     */
    public function getPayment_Info()
    {
      return $this->Payment_Info;
    }

    /**
     * @param Invoice_Payment_Info_DataObjectType $Payment_Info
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setPayment_Info($Payment_Info)
    {
      $this->Payment_Info = $Payment_Info;
      return $this;
    }

    /**
     * @return Invoice_Payment_Method_DataObjectType
     */
    public function getPayment_Method()
    {
      return $this->Payment_Method;
    }

    /**
     * @param Invoice_Payment_Method_DataObjectType $Payment_Method
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setPayment_Method($Payment_Method)
    {
      $this->Payment_Method = $Payment_Method;
      return $this;
    }

    /**
     * @return Invoice_Customer_DataObjectType
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param Invoice_Customer_DataObjectType $Customer
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return Invoice_Billing_Address_DataObjectType
     */
    public function getBilling_Address()
    {
      return $this->Billing_Address;
    }

    /**
     * @param Invoice_Billing_Address_DataObjectType $Billing_Address
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setBilling_Address($Billing_Address)
    {
      $this->Billing_Address = $Billing_Address;
      return $this;
    }

    /**
     * @return Invoice_Billing_Adr_DataObjectType
     */
    public function getBilling_Adr()
    {
      return $this->Billing_Adr;
    }

    /**
     * @param Invoice_Billing_Adr_DataObjectType $Billing_Adr
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setBilling_Adr($Billing_Adr)
    {
      $this->Billing_Adr = $Billing_Adr;
      return $this;
    }

    /**
     * @return Invoice_Price_DataObjectType
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param Invoice_Price_DataObjectType $Price
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return Invoice_Batch_DataObjectType
     */
    public function getBatch()
    {
      return $this->Batch;
    }

    /**
     * @param Invoice_Batch_DataObjectType $Batch
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setBatch($Batch)
    {
      $this->Batch = $Batch;
      return $this;
    }

    /**
     * @return Invoice_BillToCustomer_DataObjectType
     */
    public function getBillToCustomer()
    {
      return $this->BillToCustomer;
    }

    /**
     * @param Invoice_BillToCustomer_DataObjectType $BillToCustomer
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setBillToCustomer($BillToCustomer)
    {
      $this->BillToCustomer = $BillToCustomer;
      return $this;
    }

    /**
     * @return Invoice_BillToIndividual_DataObjectType
     */
    public function getBillToIndividual()
    {
      return $this->BillToIndividual;
    }

    /**
     * @param Invoice_BillToIndividual_DataObjectType $BillToIndividual
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setBillToIndividual($BillToIndividual)
    {
      $this->BillToIndividual = $BillToIndividual;
      return $this;
    }

    /**
     * @return Invoice_InstallmentBilling_DataObjectType
     */
    public function getInstallmentBilling()
    {
      return $this->InstallmentBilling;
    }

    /**
     * @param Invoice_InstallmentBilling_DataObjectType $InstallmentBilling
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setInstallmentBilling($InstallmentBilling)
    {
      $this->InstallmentBilling = $InstallmentBilling;
      return $this;
    }

    /**
     * @return Invoice_CompanyBusiness_Unit_DataObjectType
     */
    public function getCompanyBusiness_Unit()
    {
      return $this->CompanyBusiness_Unit;
    }

    /**
     * @param Invoice_CompanyBusiness_Unit_DataObjectType $CompanyBusiness_Unit
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setCompanyBusiness_Unit($CompanyBusiness_Unit)
    {
      $this->CompanyBusiness_Unit = $CompanyBusiness_Unit;
      return $this;
    }

    /**
     * @return Invoice_Credit_Available_DataObjectType
     */
    public function getCredit_Available()
    {
      return $this->Credit_Available;
    }

    /**
     * @param Invoice_Credit_Available_DataObjectType $Credit_Available
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setCredit_Available($Credit_Available)
    {
      $this->Credit_Available = $Credit_Available;
      return $this;
    }

    /**
     * @return Invoice_source_code_DataObjectType
     */
    public function getSource_code()
    {
      return $this->source_code;
    }

    /**
     * @param Invoice_source_code_DataObjectType $source_code
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setSource_code($source_code)
    {
      $this->source_code = $source_code;
      return $this;
    }

    /**
     * @return Invoice_Sales_Opportunity_DataObjectType
     */
    public function getSales_Opportunity()
    {
      return $this->Sales_Opportunity;
    }

    /**
     * @param Invoice_Sales_Opportunity_DataObjectType $Sales_Opportunity
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setSales_Opportunity($Sales_Opportunity)
    {
      $this->Sales_Opportunity = $Sales_Opportunity;
      return $this;
    }

    /**
     * @return Invoice_currency_DataObjectType
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param Invoice_currency_DataObjectType $currency
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return Invoice_DetailCollectionType
     */
    public function getInvoice_DetailCollection()
    {
      return $this->Invoice_DetailCollection;
    }

    /**
     * @param Invoice_DetailCollectionType $Invoice_DetailCollection
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setInvoice_DetailCollection($Invoice_DetailCollection)
    {
      $this->Invoice_DetailCollection = $Invoice_DetailCollection;
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
     * @return \netForum\xWeb\Xml\Generated\InvoiceType
     */
    public function setAdditional_Invoice_DetailCollection($Additional_Invoice_DetailCollection)
    {
      $this->Additional_Invoice_DetailCollection = $Additional_Invoice_DetailCollection;
      return $this;
    }

}
