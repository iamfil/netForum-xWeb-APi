<?php

namespace netForum\xWeb\Xml\Generated;

class CentralizedOrderEntryType
{

    /**
     * @var av_key_Type $CurrentKey
     */
    protected $CurrentKey = null;

    /**
     * @var CentralizedOrderEntry_Invoice_DataObjectType $Invoice
     */
    protected $Invoice = null;

    /**
     * @var CentralizedOrderEntry_Invoice_Detail_DataObjectType $Invoice_Detail
     */
    protected $Invoice_Detail = null;

    /**
     * @var CentralizedOrderEntry_Claim_DataObjectType $Claim
     */
    protected $Claim = null;

    /**
     * @var CentralizedOrderEntry_Default_Shipping_Address_DataObjectType $Default_Shipping_Address
     */
    protected $Default_Shipping_Address = null;

    /**
     * @var CentralizedOrderEntry_Payment_DataObjectType $Payment
     */
    protected $Payment = null;

    /**
     * @var CentralizedOrderEntry_Payment_Info_DataObjectType $Payment_Info
     */
    protected $Payment_Info = null;

    /**
     * @var CentralizedOrderEntry_Payment_Method_DataObjectType $Payment_Method
     */
    protected $Payment_Method = null;

    /**
     * @var CentralizedOrderEntry_Customer_DataObjectType $Customer
     */
    protected $Customer = null;

    /**
     * @var CentralizedOrderEntry_Billing_Address_DataObjectType $Billing_Address
     */
    protected $Billing_Address = null;

    /**
     * @var CentralizedOrderEntry_Billing_Adr_DataObjectType $Billing_Adr
     */
    protected $Billing_Adr = null;

    /**
     * @var CentralizedOrderEntry_Price_DataObjectType $Price
     */
    protected $Price = null;

    /**
     * @var CentralizedOrderEntry_Batch_DataObjectType $Batch
     */
    protected $Batch = null;

    /**
     * @var CentralizedOrderEntry_BillToCustomer_DataObjectType $BillToCustomer
     */
    protected $BillToCustomer = null;

    /**
     * @var CentralizedOrderEntry_BillToIndividual_DataObjectType $BillToIndividual
     */
    protected $BillToIndividual = null;

    /**
     * @var CentralizedOrderEntry_InstallmentBilling_DataObjectType $InstallmentBilling
     */
    protected $InstallmentBilling = null;

    /**
     * @var CentralizedOrderEntry_CompanyBusiness_Unit_DataObjectType $CompanyBusiness_Unit
     */
    protected $CompanyBusiness_Unit = null;

    /**
     * @var CentralizedOrderEntry_Credit_Available_DataObjectType $Credit_Available
     */
    protected $Credit_Available = null;

    /**
     * @var CentralizedOrderEntry_source_code_DataObjectType $source_code
     */
    protected $source_code = null;

    /**
     * @var CentralizedOrderEntry_Sales_Opportunity_DataObjectType $Sales_Opportunity
     */
    protected $Sales_Opportunity = null;

    /**
     * @var CentralizedOrderEntry_currency_DataObjectType $currency
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
     * @var MembershipCollectionType $MembershipCollection
     */
    protected $MembershipCollection = null;

    /**
     * @var RegistrantCollectionType $RegistrantCollection
     */
    protected $RegistrantCollection = null;

    /**
     * @var Group_RegistrantionCollectionType $Group_RegistrantionCollection
     */
    protected $Group_RegistrantionCollection = null;

    /**
     * @var GiftCollectionType $GiftCollection
     */
    protected $GiftCollection = null;

    /**
     * @var InvoiceToPayCollectionType $InvoiceToPayCollection
     */
    protected $InvoiceToPayCollection = null;

    /**
     * @var ExhibitorCollectionType $ExhibitorCollection
     */
    protected $ExhibitorCollection = null;

    /**
     * @param CentralizedOrderEntry_Invoice_DataObjectType $Invoice
     * @param CentralizedOrderEntry_Invoice_Detail_DataObjectType $Invoice_Detail
     * @param CentralizedOrderEntry_Claim_DataObjectType $Claim
     * @param CentralizedOrderEntry_Default_Shipping_Address_DataObjectType $Default_Shipping_Address
     * @param CentralizedOrderEntry_Payment_DataObjectType $Payment
     * @param CentralizedOrderEntry_Payment_Info_DataObjectType $Payment_Info
     * @param CentralizedOrderEntry_Payment_Method_DataObjectType $Payment_Method
     * @param CentralizedOrderEntry_Customer_DataObjectType $Customer
     * @param CentralizedOrderEntry_Billing_Address_DataObjectType $Billing_Address
     * @param CentralizedOrderEntry_Billing_Adr_DataObjectType $Billing_Adr
     * @param CentralizedOrderEntry_Price_DataObjectType $Price
     * @param CentralizedOrderEntry_Batch_DataObjectType $Batch
     * @param CentralizedOrderEntry_BillToCustomer_DataObjectType $BillToCustomer
     * @param CentralizedOrderEntry_BillToIndividual_DataObjectType $BillToIndividual
     * @param CentralizedOrderEntry_InstallmentBilling_DataObjectType $InstallmentBilling
     * @param CentralizedOrderEntry_CompanyBusiness_Unit_DataObjectType $CompanyBusiness_Unit
     * @param CentralizedOrderEntry_Credit_Available_DataObjectType $Credit_Available
     * @param CentralizedOrderEntry_source_code_DataObjectType $source_code
     * @param CentralizedOrderEntry_Sales_Opportunity_DataObjectType $Sales_Opportunity
     * @param CentralizedOrderEntry_currency_DataObjectType $currency
     * @param Invoice_DetailCollectionType $Invoice_DetailCollection
     * @param Additional_Invoice_DetailCollectionType $Additional_Invoice_DetailCollection
     * @param MembershipCollectionType $MembershipCollection
     * @param RegistrantCollectionType $RegistrantCollection
     * @param Group_RegistrantionCollectionType $Group_RegistrantionCollection
     * @param GiftCollectionType $GiftCollection
     * @param InvoiceToPayCollectionType $InvoiceToPayCollection
     * @param ExhibitorCollectionType $ExhibitorCollection
     */
    public function __construct($Invoice, $Invoice_Detail, $Claim, $Default_Shipping_Address, $Payment, $Payment_Info, $Payment_Method, $Customer, $Billing_Address, $Billing_Adr, $Price, $Batch, $BillToCustomer, $BillToIndividual, $InstallmentBilling, $CompanyBusiness_Unit, $Credit_Available, $source_code, $Sales_Opportunity, $currency, $Invoice_DetailCollection, $Additional_Invoice_DetailCollection, $MembershipCollection, $RegistrantCollection, $Group_RegistrantionCollection, $GiftCollection, $InvoiceToPayCollection, $ExhibitorCollection)
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
      $this->MembershipCollection = $MembershipCollection;
      $this->RegistrantCollection = $RegistrantCollection;
      $this->Group_RegistrantionCollection = $Group_RegistrantionCollection;
      $this->GiftCollection = $GiftCollection;
      $this->InvoiceToPayCollection = $InvoiceToPayCollection;
      $this->ExhibitorCollection = $ExhibitorCollection;
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
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setCurrentKey($CurrentKey)
    {
      $this->CurrentKey = $CurrentKey;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_Invoice_DataObjectType
     */
    public function getInvoice()
    {
      return $this->Invoice;
    }

    /**
     * @param CentralizedOrderEntry_Invoice_DataObjectType $Invoice
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setInvoice($Invoice)
    {
      $this->Invoice = $Invoice;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_Invoice_Detail_DataObjectType
     */
    public function getInvoice_Detail()
    {
      return $this->Invoice_Detail;
    }

    /**
     * @param CentralizedOrderEntry_Invoice_Detail_DataObjectType $Invoice_Detail
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setInvoice_Detail($Invoice_Detail)
    {
      $this->Invoice_Detail = $Invoice_Detail;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_Claim_DataObjectType
     */
    public function getClaim()
    {
      return $this->Claim;
    }

    /**
     * @param CentralizedOrderEntry_Claim_DataObjectType $Claim
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setClaim($Claim)
    {
      $this->Claim = $Claim;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_Default_Shipping_Address_DataObjectType
     */
    public function getDefault_Shipping_Address()
    {
      return $this->Default_Shipping_Address;
    }

    /**
     * @param CentralizedOrderEntry_Default_Shipping_Address_DataObjectType $Default_Shipping_Address
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setDefault_Shipping_Address($Default_Shipping_Address)
    {
      $this->Default_Shipping_Address = $Default_Shipping_Address;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_Payment_DataObjectType
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param CentralizedOrderEntry_Payment_DataObjectType $Payment
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_Payment_Info_DataObjectType
     */
    public function getPayment_Info()
    {
      return $this->Payment_Info;
    }

    /**
     * @param CentralizedOrderEntry_Payment_Info_DataObjectType $Payment_Info
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setPayment_Info($Payment_Info)
    {
      $this->Payment_Info = $Payment_Info;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_Payment_Method_DataObjectType
     */
    public function getPayment_Method()
    {
      return $this->Payment_Method;
    }

    /**
     * @param CentralizedOrderEntry_Payment_Method_DataObjectType $Payment_Method
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setPayment_Method($Payment_Method)
    {
      $this->Payment_Method = $Payment_Method;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_Customer_DataObjectType
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param CentralizedOrderEntry_Customer_DataObjectType $Customer
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_Billing_Address_DataObjectType
     */
    public function getBilling_Address()
    {
      return $this->Billing_Address;
    }

    /**
     * @param CentralizedOrderEntry_Billing_Address_DataObjectType $Billing_Address
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setBilling_Address($Billing_Address)
    {
      $this->Billing_Address = $Billing_Address;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_Billing_Adr_DataObjectType
     */
    public function getBilling_Adr()
    {
      return $this->Billing_Adr;
    }

    /**
     * @param CentralizedOrderEntry_Billing_Adr_DataObjectType $Billing_Adr
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setBilling_Adr($Billing_Adr)
    {
      $this->Billing_Adr = $Billing_Adr;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_Price_DataObjectType
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param CentralizedOrderEntry_Price_DataObjectType $Price
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_Batch_DataObjectType
     */
    public function getBatch()
    {
      return $this->Batch;
    }

    /**
     * @param CentralizedOrderEntry_Batch_DataObjectType $Batch
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setBatch($Batch)
    {
      $this->Batch = $Batch;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_BillToCustomer_DataObjectType
     */
    public function getBillToCustomer()
    {
      return $this->BillToCustomer;
    }

    /**
     * @param CentralizedOrderEntry_BillToCustomer_DataObjectType $BillToCustomer
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setBillToCustomer($BillToCustomer)
    {
      $this->BillToCustomer = $BillToCustomer;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_BillToIndividual_DataObjectType
     */
    public function getBillToIndividual()
    {
      return $this->BillToIndividual;
    }

    /**
     * @param CentralizedOrderEntry_BillToIndividual_DataObjectType $BillToIndividual
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setBillToIndividual($BillToIndividual)
    {
      $this->BillToIndividual = $BillToIndividual;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_InstallmentBilling_DataObjectType
     */
    public function getInstallmentBilling()
    {
      return $this->InstallmentBilling;
    }

    /**
     * @param CentralizedOrderEntry_InstallmentBilling_DataObjectType $InstallmentBilling
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setInstallmentBilling($InstallmentBilling)
    {
      $this->InstallmentBilling = $InstallmentBilling;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_CompanyBusiness_Unit_DataObjectType
     */
    public function getCompanyBusiness_Unit()
    {
      return $this->CompanyBusiness_Unit;
    }

    /**
     * @param CentralizedOrderEntry_CompanyBusiness_Unit_DataObjectType $CompanyBusiness_Unit
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setCompanyBusiness_Unit($CompanyBusiness_Unit)
    {
      $this->CompanyBusiness_Unit = $CompanyBusiness_Unit;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_Credit_Available_DataObjectType
     */
    public function getCredit_Available()
    {
      return $this->Credit_Available;
    }

    /**
     * @param CentralizedOrderEntry_Credit_Available_DataObjectType $Credit_Available
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setCredit_Available($Credit_Available)
    {
      $this->Credit_Available = $Credit_Available;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_source_code_DataObjectType
     */
    public function getSource_code()
    {
      return $this->source_code;
    }

    /**
     * @param CentralizedOrderEntry_source_code_DataObjectType $source_code
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setSource_code($source_code)
    {
      $this->source_code = $source_code;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_Sales_Opportunity_DataObjectType
     */
    public function getSales_Opportunity()
    {
      return $this->Sales_Opportunity;
    }

    /**
     * @param CentralizedOrderEntry_Sales_Opportunity_DataObjectType $Sales_Opportunity
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setSales_Opportunity($Sales_Opportunity)
    {
      $this->Sales_Opportunity = $Sales_Opportunity;
      return $this;
    }

    /**
     * @return CentralizedOrderEntry_currency_DataObjectType
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param CentralizedOrderEntry_currency_DataObjectType $currency
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
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
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
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
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setAdditional_Invoice_DetailCollection($Additional_Invoice_DetailCollection)
    {
      $this->Additional_Invoice_DetailCollection = $Additional_Invoice_DetailCollection;
      return $this;
    }

    /**
     * @return MembershipCollectionType
     */
    public function getMembershipCollection()
    {
      return $this->MembershipCollection;
    }

    /**
     * @param MembershipCollectionType $MembershipCollection
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setMembershipCollection($MembershipCollection)
    {
      $this->MembershipCollection = $MembershipCollection;
      return $this;
    }

    /**
     * @return RegistrantCollectionType
     */
    public function getRegistrantCollection()
    {
      return $this->RegistrantCollection;
    }

    /**
     * @param RegistrantCollectionType $RegistrantCollection
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setRegistrantCollection($RegistrantCollection)
    {
      $this->RegistrantCollection = $RegistrantCollection;
      return $this;
    }

    /**
     * @return Group_RegistrantionCollectionType
     */
    public function getGroup_RegistrantionCollection()
    {
      return $this->Group_RegistrantionCollection;
    }

    /**
     * @param Group_RegistrantionCollectionType $Group_RegistrantionCollection
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setGroup_RegistrantionCollection($Group_RegistrantionCollection)
    {
      $this->Group_RegistrantionCollection = $Group_RegistrantionCollection;
      return $this;
    }

    /**
     * @return GiftCollectionType
     */
    public function getGiftCollection()
    {
      return $this->GiftCollection;
    }

    /**
     * @param GiftCollectionType $GiftCollection
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setGiftCollection($GiftCollection)
    {
      $this->GiftCollection = $GiftCollection;
      return $this;
    }

    /**
     * @return InvoiceToPayCollectionType
     */
    public function getInvoiceToPayCollection()
    {
      return $this->InvoiceToPayCollection;
    }

    /**
     * @param InvoiceToPayCollectionType $InvoiceToPayCollection
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setInvoiceToPayCollection($InvoiceToPayCollection)
    {
      $this->InvoiceToPayCollection = $InvoiceToPayCollection;
      return $this;
    }

    /**
     * @return ExhibitorCollectionType
     */
    public function getExhibitorCollection()
    {
      return $this->ExhibitorCollection;
    }

    /**
     * @param ExhibitorCollectionType $ExhibitorCollection
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntryType
     */
    public function setExhibitorCollection($ExhibitorCollection)
    {
      $this->ExhibitorCollection = $ExhibitorCollection;
      return $this;
    }

}
