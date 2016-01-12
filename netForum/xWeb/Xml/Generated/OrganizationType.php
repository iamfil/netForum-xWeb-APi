<?php

namespace netForum\xWeb\Xml\Generated;

class OrganizationType
{

    /**
     * @var av_key_Type $CurrentKey
     */
    protected $CurrentKey = null;

    /**
     * @var Organization_Organization_DataObjectType $Organization
     */
    protected $Organization = null;

    /**
     * @var Organization_Customer_DataObjectType $Customer
     */
    protected $Customer = null;

    /**
     * @var Organization_Parent_Customer_DataObjectType $Parent_Customer
     */
    protected $Parent_Customer = null;

    /**
     * @var Organization_Email_DataObjectType $Email
     */
    protected $Email = null;

    /**
     * @var Organization_Website_DataObjectType $Website
     */
    protected $Website = null;

    /**
     * @var Organization_Messaging_DataObjectType $Messaging
     */
    protected $Messaging = null;

    /**
     * @var Organization_Phone_XRef_DataObjectType $Phone_XRef
     */
    protected $Phone_XRef = null;

    /**
     * @var Organization_Phone_DataObjectType $Phone
     */
    protected $Phone = null;

    /**
     * @var Organization_Phone_Country_DataObjectType $Phone_Country
     */
    protected $Phone_Country = null;

    /**
     * @var Organization_Fax_XRef_DataObjectType $Fax_XRef
     */
    protected $Fax_XRef = null;

    /**
     * @var Organization_Fax_DataObjectType $Fax
     */
    protected $Fax = null;

    /**
     * @var Organization_Fax_Country_DataObjectType $Fax_Country
     */
    protected $Fax_Country = null;

    /**
     * @var Organization_Address_XRef_1_DataObjectType $Address_XRef_1
     */
    protected $Address_XRef_1 = null;

    /**
     * @var Organization_Address_1_DataObjectType $Address_1
     */
    protected $Address_1 = null;

    /**
     * @var Organization_Firm_DataObjectType $Firm
     */
    protected $Firm = null;

    /**
     * @var Organization_Business_Address_State_DataObjectType $Business_Address_State
     */
    protected $Business_Address_State = null;

    /**
     * @var Organization_Address_1_Country_DataObjectType $Address_1_Country
     */
    protected $Address_1_Country = null;

    /**
     * @var Organization_Billing_Address_1_DataObjectType $Billing_Address_1
     */
    protected $Billing_Address_1 = null;

    /**
     * @var Organization_Home_Address_State_DataObjectType $Home_Address_State
     */
    protected $Home_Address_State = null;

    /**
     * @var Organization_Billing_Address_1_Country_DataObjectType $Billing_Address_1_Country
     */
    protected $Billing_Address_1_Country = null;

    /**
     * @var Organization_Billing_Address_XRef_1_DataObjectType $Billing_Address_XRef_1
     */
    protected $Billing_Address_XRef_1 = null;

    /**
     * @var Organization_Customer_X_Customer_DataObjectType $Customer_X_Customer
     */
    protected $Customer_X_Customer = null;

    /**
     * @var Organization_Primary_Contact_DataObjectType $Primary_Contact
     */
    protected $Primary_Contact = null;

    /**
     * @var Organization_Address_Change_Log_DataObjectType $Address_Change_Log
     */
    protected $Address_Change_Log = null;

    /**
     * @var Organization_Organization_Custom_Demographics_DataObjectType $Organization_Custom_Demographics
     */
    protected $Organization_Custom_Demographics = null;

    /**
     * @var Organization_Social_Links_DataObjectType $Social_Links
     */
    protected $Social_Links = null;

    /**
     * @var Organization_source_code_DataObjectType $source_code
     */
    protected $source_code = null;

    /**
     * @param Organization_Organization_DataObjectType $Organization
     * @param Organization_Customer_DataObjectType $Customer
     * @param Organization_Parent_Customer_DataObjectType $Parent_Customer
     * @param Organization_Email_DataObjectType $Email
     * @param Organization_Website_DataObjectType $Website
     * @param Organization_Messaging_DataObjectType $Messaging
     * @param Organization_Phone_XRef_DataObjectType $Phone_XRef
     * @param Organization_Phone_DataObjectType $Phone
     * @param Organization_Phone_Country_DataObjectType $Phone_Country
     * @param Organization_Fax_XRef_DataObjectType $Fax_XRef
     * @param Organization_Fax_DataObjectType $Fax
     * @param Organization_Fax_Country_DataObjectType $Fax_Country
     * @param Organization_Address_XRef_1_DataObjectType $Address_XRef_1
     * @param Organization_Address_1_DataObjectType $Address_1
     * @param Organization_Firm_DataObjectType $Firm
     * @param Organization_Business_Address_State_DataObjectType $Business_Address_State
     * @param Organization_Address_1_Country_DataObjectType $Address_1_Country
     * @param Organization_Billing_Address_1_DataObjectType $Billing_Address_1
     * @param Organization_Home_Address_State_DataObjectType $Home_Address_State
     * @param Organization_Billing_Address_1_Country_DataObjectType $Billing_Address_1_Country
     * @param Organization_Billing_Address_XRef_1_DataObjectType $Billing_Address_XRef_1
     * @param Organization_Customer_X_Customer_DataObjectType $Customer_X_Customer
     * @param Organization_Primary_Contact_DataObjectType $Primary_Contact
     * @param Organization_Address_Change_Log_DataObjectType $Address_Change_Log
     * @param Organization_Organization_Custom_Demographics_DataObjectType $Organization_Custom_Demographics
     * @param Organization_Social_Links_DataObjectType $Social_Links
     * @param Organization_source_code_DataObjectType $source_code
     */
    public function __construct($Organization, $Customer, $Parent_Customer, $Email, $Website, $Messaging, $Phone_XRef, $Phone, $Phone_Country, $Fax_XRef, $Fax, $Fax_Country, $Address_XRef_1, $Address_1, $Firm, $Business_Address_State, $Address_1_Country, $Billing_Address_1, $Home_Address_State, $Billing_Address_1_Country, $Billing_Address_XRef_1, $Customer_X_Customer, $Primary_Contact, $Address_Change_Log, $Organization_Custom_Demographics, $Social_Links, $source_code)
    {
      $this->Organization = $Organization;
      $this->Customer = $Customer;
      $this->Parent_Customer = $Parent_Customer;
      $this->Email = $Email;
      $this->Website = $Website;
      $this->Messaging = $Messaging;
      $this->Phone_XRef = $Phone_XRef;
      $this->Phone = $Phone;
      $this->Phone_Country = $Phone_Country;
      $this->Fax_XRef = $Fax_XRef;
      $this->Fax = $Fax;
      $this->Fax_Country = $Fax_Country;
      $this->Address_XRef_1 = $Address_XRef_1;
      $this->Address_1 = $Address_1;
      $this->Firm = $Firm;
      $this->Business_Address_State = $Business_Address_State;
      $this->Address_1_Country = $Address_1_Country;
      $this->Billing_Address_1 = $Billing_Address_1;
      $this->Home_Address_State = $Home_Address_State;
      $this->Billing_Address_1_Country = $Billing_Address_1_Country;
      $this->Billing_Address_XRef_1 = $Billing_Address_XRef_1;
      $this->Customer_X_Customer = $Customer_X_Customer;
      $this->Primary_Contact = $Primary_Contact;
      $this->Address_Change_Log = $Address_Change_Log;
      $this->Organization_Custom_Demographics = $Organization_Custom_Demographics;
      $this->Social_Links = $Social_Links;
      $this->source_code = $source_code;
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
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setCurrentKey($CurrentKey)
    {
      $this->CurrentKey = $CurrentKey;
      return $this;
    }

    /**
     * @return Organization_Organization_DataObjectType
     */
    public function getOrganization()
    {
      return $this->Organization;
    }

    /**
     * @param Organization_Organization_DataObjectType $Organization
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setOrganization($Organization)
    {
      $this->Organization = $Organization;
      return $this;
    }

    /**
     * @return Organization_Customer_DataObjectType
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param Organization_Customer_DataObjectType $Customer
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return Organization_Parent_Customer_DataObjectType
     */
    public function getParent_Customer()
    {
      return $this->Parent_Customer;
    }

    /**
     * @param Organization_Parent_Customer_DataObjectType $Parent_Customer
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setParent_Customer($Parent_Customer)
    {
      $this->Parent_Customer = $Parent_Customer;
      return $this;
    }

    /**
     * @return Organization_Email_DataObjectType
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param Organization_Email_DataObjectType $Email
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return Organization_Website_DataObjectType
     */
    public function getWebsite()
    {
      return $this->Website;
    }

    /**
     * @param Organization_Website_DataObjectType $Website
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setWebsite($Website)
    {
      $this->Website = $Website;
      return $this;
    }

    /**
     * @return Organization_Messaging_DataObjectType
     */
    public function getMessaging()
    {
      return $this->Messaging;
    }

    /**
     * @param Organization_Messaging_DataObjectType $Messaging
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setMessaging($Messaging)
    {
      $this->Messaging = $Messaging;
      return $this;
    }

    /**
     * @return Organization_Phone_XRef_DataObjectType
     */
    public function getPhone_XRef()
    {
      return $this->Phone_XRef;
    }

    /**
     * @param Organization_Phone_XRef_DataObjectType $Phone_XRef
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setPhone_XRef($Phone_XRef)
    {
      $this->Phone_XRef = $Phone_XRef;
      return $this;
    }

    /**
     * @return Organization_Phone_DataObjectType
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param Organization_Phone_DataObjectType $Phone
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return Organization_Phone_Country_DataObjectType
     */
    public function getPhone_Country()
    {
      return $this->Phone_Country;
    }

    /**
     * @param Organization_Phone_Country_DataObjectType $Phone_Country
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setPhone_Country($Phone_Country)
    {
      $this->Phone_Country = $Phone_Country;
      return $this;
    }

    /**
     * @return Organization_Fax_XRef_DataObjectType
     */
    public function getFax_XRef()
    {
      return $this->Fax_XRef;
    }

    /**
     * @param Organization_Fax_XRef_DataObjectType $Fax_XRef
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setFax_XRef($Fax_XRef)
    {
      $this->Fax_XRef = $Fax_XRef;
      return $this;
    }

    /**
     * @return Organization_Fax_DataObjectType
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param Organization_Fax_DataObjectType $Fax
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

    /**
     * @return Organization_Fax_Country_DataObjectType
     */
    public function getFax_Country()
    {
      return $this->Fax_Country;
    }

    /**
     * @param Organization_Fax_Country_DataObjectType $Fax_Country
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setFax_Country($Fax_Country)
    {
      $this->Fax_Country = $Fax_Country;
      return $this;
    }

    /**
     * @return Organization_Address_XRef_1_DataObjectType
     */
    public function getAddress_XRef_1()
    {
      return $this->Address_XRef_1;
    }

    /**
     * @param Organization_Address_XRef_1_DataObjectType $Address_XRef_1
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setAddress_XRef_1($Address_XRef_1)
    {
      $this->Address_XRef_1 = $Address_XRef_1;
      return $this;
    }

    /**
     * @return Organization_Address_1_DataObjectType
     */
    public function getAddress_1()
    {
      return $this->Address_1;
    }

    /**
     * @param Organization_Address_1_DataObjectType $Address_1
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setAddress_1($Address_1)
    {
      $this->Address_1 = $Address_1;
      return $this;
    }

    /**
     * @return Organization_Firm_DataObjectType
     */
    public function getFirm()
    {
      return $this->Firm;
    }

    /**
     * @param Organization_Firm_DataObjectType $Firm
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setFirm($Firm)
    {
      $this->Firm = $Firm;
      return $this;
    }

    /**
     * @return Organization_Business_Address_State_DataObjectType
     */
    public function getBusiness_Address_State()
    {
      return $this->Business_Address_State;
    }

    /**
     * @param Organization_Business_Address_State_DataObjectType $Business_Address_State
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setBusiness_Address_State($Business_Address_State)
    {
      $this->Business_Address_State = $Business_Address_State;
      return $this;
    }

    /**
     * @return Organization_Address_1_Country_DataObjectType
     */
    public function getAddress_1_Country()
    {
      return $this->Address_1_Country;
    }

    /**
     * @param Organization_Address_1_Country_DataObjectType $Address_1_Country
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setAddress_1_Country($Address_1_Country)
    {
      $this->Address_1_Country = $Address_1_Country;
      return $this;
    }

    /**
     * @return Organization_Billing_Address_1_DataObjectType
     */
    public function getBilling_Address_1()
    {
      return $this->Billing_Address_1;
    }

    /**
     * @param Organization_Billing_Address_1_DataObjectType $Billing_Address_1
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setBilling_Address_1($Billing_Address_1)
    {
      $this->Billing_Address_1 = $Billing_Address_1;
      return $this;
    }

    /**
     * @return Organization_Home_Address_State_DataObjectType
     */
    public function getHome_Address_State()
    {
      return $this->Home_Address_State;
    }

    /**
     * @param Organization_Home_Address_State_DataObjectType $Home_Address_State
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setHome_Address_State($Home_Address_State)
    {
      $this->Home_Address_State = $Home_Address_State;
      return $this;
    }

    /**
     * @return Organization_Billing_Address_1_Country_DataObjectType
     */
    public function getBilling_Address_1_Country()
    {
      return $this->Billing_Address_1_Country;
    }

    /**
     * @param Organization_Billing_Address_1_Country_DataObjectType $Billing_Address_1_Country
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setBilling_Address_1_Country($Billing_Address_1_Country)
    {
      $this->Billing_Address_1_Country = $Billing_Address_1_Country;
      return $this;
    }

    /**
     * @return Organization_Billing_Address_XRef_1_DataObjectType
     */
    public function getBilling_Address_XRef_1()
    {
      return $this->Billing_Address_XRef_1;
    }

    /**
     * @param Organization_Billing_Address_XRef_1_DataObjectType $Billing_Address_XRef_1
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setBilling_Address_XRef_1($Billing_Address_XRef_1)
    {
      $this->Billing_Address_XRef_1 = $Billing_Address_XRef_1;
      return $this;
    }

    /**
     * @return Organization_Customer_X_Customer_DataObjectType
     */
    public function getCustomer_X_Customer()
    {
      return $this->Customer_X_Customer;
    }

    /**
     * @param Organization_Customer_X_Customer_DataObjectType $Customer_X_Customer
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setCustomer_X_Customer($Customer_X_Customer)
    {
      $this->Customer_X_Customer = $Customer_X_Customer;
      return $this;
    }

    /**
     * @return Organization_Primary_Contact_DataObjectType
     */
    public function getPrimary_Contact()
    {
      return $this->Primary_Contact;
    }

    /**
     * @param Organization_Primary_Contact_DataObjectType $Primary_Contact
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setPrimary_Contact($Primary_Contact)
    {
      $this->Primary_Contact = $Primary_Contact;
      return $this;
    }

    /**
     * @return Organization_Address_Change_Log_DataObjectType
     */
    public function getAddress_Change_Log()
    {
      return $this->Address_Change_Log;
    }

    /**
     * @param Organization_Address_Change_Log_DataObjectType $Address_Change_Log
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setAddress_Change_Log($Address_Change_Log)
    {
      $this->Address_Change_Log = $Address_Change_Log;
      return $this;
    }

    /**
     * @return Organization_Organization_Custom_Demographics_DataObjectType
     */
    public function getOrganization_Custom_Demographics()
    {
      return $this->Organization_Custom_Demographics;
    }

    /**
     * @param Organization_Organization_Custom_Demographics_DataObjectType $Organization_Custom_Demographics
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setOrganization_Custom_Demographics($Organization_Custom_Demographics)
    {
      $this->Organization_Custom_Demographics = $Organization_Custom_Demographics;
      return $this;
    }

    /**
     * @return Organization_Social_Links_DataObjectType
     */
    public function getSocial_Links()
    {
      return $this->Social_Links;
    }

    /**
     * @param Organization_Social_Links_DataObjectType $Social_Links
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setSocial_Links($Social_Links)
    {
      $this->Social_Links = $Social_Links;
      return $this;
    }

    /**
     * @return Organization_source_code_DataObjectType
     */
    public function getSource_code()
    {
      return $this->source_code;
    }

    /**
     * @param Organization_source_code_DataObjectType $source_code
     * @return \netForum\xWeb\Xml\Generated\OrganizationType
     */
    public function setSource_code($source_code)
    {
      $this->source_code = $source_code;
      return $this;
    }

}
