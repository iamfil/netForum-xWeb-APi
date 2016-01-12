<?php

namespace netForum\xWeb\Xml\Generated;

class IndividualType
{

    /**
     * @var av_key_Type $CurrentKey
     */
    protected $CurrentKey = null;

    /**
     * @var Individual_Individual_DataObjectType $Individual
     */
    protected $Individual = null;

    /**
     * @var Individual_Customer_DataObjectType $Customer
     */
    protected $Customer = null;

    /**
     * @var Individual_Organization_XRef_DataObjectType $Organization_XRef
     */
    protected $Organization_XRef = null;

    /**
     * @var Individual_Organization_DataObjectType $Organization
     */
    protected $Organization = null;

    /**
     * @var Individual_Email_DataObjectType $Email
     */
    protected $Email = null;

    /**
     * @var Individual_Website_DataObjectType $Website
     */
    protected $Website = null;

    /**
     * @var Individual_Messaging_DataObjectType $Messaging
     */
    protected $Messaging = null;

    /**
     * @var Individual_Business_Address_XRef_DataObjectType $Business_Address_XRef
     */
    protected $Business_Address_XRef = null;

    /**
     * @var Individual_Business_Address_DataObjectType $Business_Address
     */
    protected $Business_Address = null;

    /**
     * @var Individual_Business_Address_State_DataObjectType $Business_Address_State
     */
    protected $Business_Address_State = null;

    /**
     * @var Individual_Business_Address_Country_DataObjectType $Business_Address_Country
     */
    protected $Business_Address_Country = null;

    /**
     * @var Individual_Business_Phone_XRef_DataObjectType $Business_Phone_XRef
     */
    protected $Business_Phone_XRef = null;

    /**
     * @var Individual_Business_Phone_DataObjectType $Business_Phone
     */
    protected $Business_Phone = null;

    /**
     * @var Individual_Business_Phone_Country_DataObjectType $Business_Phone_Country
     */
    protected $Business_Phone_Country = null;

    /**
     * @var Individual_Business_Fax_XRef_DataObjectType $Business_Fax_XRef
     */
    protected $Business_Fax_XRef = null;

    /**
     * @var Individual_Business_Fax_DataObjectType $Business_Fax
     */
    protected $Business_Fax = null;

    /**
     * @var Individual_Business_Fax_Country_DataObjectType $Business_Fax_Country
     */
    protected $Business_Fax_Country = null;

    /**
     * @var Individual_Home_Address_XRef_DataObjectType $Home_Address_XRef
     */
    protected $Home_Address_XRef = null;

    /**
     * @var Individual_Home_Address_DataObjectType $Home_Address
     */
    protected $Home_Address = null;

    /**
     * @var Individual_Home_Address_State_DataObjectType $Home_Address_State
     */
    protected $Home_Address_State = null;

    /**
     * @var Individual_Home_Address_Country_DataObjectType $Home_Address_Country
     */
    protected $Home_Address_Country = null;

    /**
     * @var Individual_Home_Phone_DataObjectType $Home_Phone
     */
    protected $Home_Phone = null;

    /**
     * @var Individual_Home_Phone_Country_DataObjectType $Home_Phone_Country
     */
    protected $Home_Phone_Country = null;

    /**
     * @var Individual_Home_Phone_XRef_DataObjectType $Home_Phone_XRef
     */
    protected $Home_Phone_XRef = null;

    /**
     * @var Individual_Home_Fax_DataObjectType $Home_Fax
     */
    protected $Home_Fax = null;

    /**
     * @var Individual_Home_Fax_Country_DataObjectType $Home_Fax_Country
     */
    protected $Home_Fax_Country = null;

    /**
     * @var Individual_Home_Fax_XRef_DataObjectType $Home_Fax_XRef
     */
    protected $Home_Fax_XRef = null;

    /**
     * @var Individual_Address_Change_Log_DataObjectType $Address_Change_Log
     */
    protected $Address_Change_Log = null;

    /**
     * @var Individual_TransferToCustomer_DataObjectType $TransferToCustomer
     */
    protected $TransferToCustomer = null;

    /**
     * @var Individual_Individual_Custom_Demographics_DataObjectType $Individual_Custom_Demographics
     */
    protected $Individual_Custom_Demographics = null;

    /**
     * @var Individual_Social_Links_DataObjectType $Social_Links
     */
    protected $Social_Links = null;

    /**
     * @var Individual_source_code_DataObjectType $source_code
     */
    protected $source_code = null;

    /**
     * @param Individual_Individual_DataObjectType $Individual
     * @param Individual_Customer_DataObjectType $Customer
     * @param Individual_Organization_XRef_DataObjectType $Organization_XRef
     * @param Individual_Organization_DataObjectType $Organization
     * @param Individual_Email_DataObjectType $Email
     * @param Individual_Website_DataObjectType $Website
     * @param Individual_Messaging_DataObjectType $Messaging
     * @param Individual_Business_Address_XRef_DataObjectType $Business_Address_XRef
     * @param Individual_Business_Address_DataObjectType $Business_Address
     * @param Individual_Business_Address_State_DataObjectType $Business_Address_State
     * @param Individual_Business_Address_Country_DataObjectType $Business_Address_Country
     * @param Individual_Business_Phone_XRef_DataObjectType $Business_Phone_XRef
     * @param Individual_Business_Phone_DataObjectType $Business_Phone
     * @param Individual_Business_Phone_Country_DataObjectType $Business_Phone_Country
     * @param Individual_Business_Fax_XRef_DataObjectType $Business_Fax_XRef
     * @param Individual_Business_Fax_DataObjectType $Business_Fax
     * @param Individual_Business_Fax_Country_DataObjectType $Business_Fax_Country
     * @param Individual_Home_Address_XRef_DataObjectType $Home_Address_XRef
     * @param Individual_Home_Address_DataObjectType $Home_Address
     * @param Individual_Home_Address_State_DataObjectType $Home_Address_State
     * @param Individual_Home_Address_Country_DataObjectType $Home_Address_Country
     * @param Individual_Home_Phone_DataObjectType $Home_Phone
     * @param Individual_Home_Phone_Country_DataObjectType $Home_Phone_Country
     * @param Individual_Home_Phone_XRef_DataObjectType $Home_Phone_XRef
     * @param Individual_Home_Fax_DataObjectType $Home_Fax
     * @param Individual_Home_Fax_Country_DataObjectType $Home_Fax_Country
     * @param Individual_Home_Fax_XRef_DataObjectType $Home_Fax_XRef
     * @param Individual_Address_Change_Log_DataObjectType $Address_Change_Log
     * @param Individual_TransferToCustomer_DataObjectType $TransferToCustomer
     * @param Individual_Individual_Custom_Demographics_DataObjectType $Individual_Custom_Demographics
     * @param Individual_Social_Links_DataObjectType $Social_Links
     * @param Individual_source_code_DataObjectType $source_code
     */
    public function __construct($Individual, $Customer, $Organization_XRef, $Organization, $Email, $Website, $Messaging, $Business_Address_XRef, $Business_Address, $Business_Address_State, $Business_Address_Country, $Business_Phone_XRef, $Business_Phone, $Business_Phone_Country, $Business_Fax_XRef, $Business_Fax, $Business_Fax_Country, $Home_Address_XRef, $Home_Address, $Home_Address_State, $Home_Address_Country, $Home_Phone, $Home_Phone_Country, $Home_Phone_XRef, $Home_Fax, $Home_Fax_Country, $Home_Fax_XRef, $Address_Change_Log, $TransferToCustomer, $Individual_Custom_Demographics, $Social_Links, $source_code)
    {
      $this->Individual = $Individual;
      $this->Customer = $Customer;
      $this->Organization_XRef = $Organization_XRef;
      $this->Organization = $Organization;
      $this->Email = $Email;
      $this->Website = $Website;
      $this->Messaging = $Messaging;
      $this->Business_Address_XRef = $Business_Address_XRef;
      $this->Business_Address = $Business_Address;
      $this->Business_Address_State = $Business_Address_State;
      $this->Business_Address_Country = $Business_Address_Country;
      $this->Business_Phone_XRef = $Business_Phone_XRef;
      $this->Business_Phone = $Business_Phone;
      $this->Business_Phone_Country = $Business_Phone_Country;
      $this->Business_Fax_XRef = $Business_Fax_XRef;
      $this->Business_Fax = $Business_Fax;
      $this->Business_Fax_Country = $Business_Fax_Country;
      $this->Home_Address_XRef = $Home_Address_XRef;
      $this->Home_Address = $Home_Address;
      $this->Home_Address_State = $Home_Address_State;
      $this->Home_Address_Country = $Home_Address_Country;
      $this->Home_Phone = $Home_Phone;
      $this->Home_Phone_Country = $Home_Phone_Country;
      $this->Home_Phone_XRef = $Home_Phone_XRef;
      $this->Home_Fax = $Home_Fax;
      $this->Home_Fax_Country = $Home_Fax_Country;
      $this->Home_Fax_XRef = $Home_Fax_XRef;
      $this->Address_Change_Log = $Address_Change_Log;
      $this->TransferToCustomer = $TransferToCustomer;
      $this->Individual_Custom_Demographics = $Individual_Custom_Demographics;
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
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setCurrentKey($CurrentKey)
    {
      $this->CurrentKey = $CurrentKey;
      return $this;
    }

    /**
     * @return Individual_Individual_DataObjectType
     */
    public function getIndividual()
    {
      return $this->Individual;
    }

    /**
     * @param Individual_Individual_DataObjectType $Individual
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setIndividual($Individual)
    {
      $this->Individual = $Individual;
      return $this;
    }

    /**
     * @return Individual_Customer_DataObjectType
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param Individual_Customer_DataObjectType $Customer
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return Individual_Organization_XRef_DataObjectType
     */
    public function getOrganization_XRef()
    {
      return $this->Organization_XRef;
    }

    /**
     * @param Individual_Organization_XRef_DataObjectType $Organization_XRef
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setOrganization_XRef($Organization_XRef)
    {
      $this->Organization_XRef = $Organization_XRef;
      return $this;
    }

    /**
     * @return Individual_Organization_DataObjectType
     */
    public function getOrganization()
    {
      return $this->Organization;
    }

    /**
     * @param Individual_Organization_DataObjectType $Organization
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setOrganization($Organization)
    {
      $this->Organization = $Organization;
      return $this;
    }

    /**
     * @return Individual_Email_DataObjectType
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param Individual_Email_DataObjectType $Email
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return Individual_Website_DataObjectType
     */
    public function getWebsite()
    {
      return $this->Website;
    }

    /**
     * @param Individual_Website_DataObjectType $Website
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setWebsite($Website)
    {
      $this->Website = $Website;
      return $this;
    }

    /**
     * @return Individual_Messaging_DataObjectType
     */
    public function getMessaging()
    {
      return $this->Messaging;
    }

    /**
     * @param Individual_Messaging_DataObjectType $Messaging
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setMessaging($Messaging)
    {
      $this->Messaging = $Messaging;
      return $this;
    }

    /**
     * @return Individual_Business_Address_XRef_DataObjectType
     */
    public function getBusiness_Address_XRef()
    {
      return $this->Business_Address_XRef;
    }

    /**
     * @param Individual_Business_Address_XRef_DataObjectType $Business_Address_XRef
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setBusiness_Address_XRef($Business_Address_XRef)
    {
      $this->Business_Address_XRef = $Business_Address_XRef;
      return $this;
    }

    /**
     * @return Individual_Business_Address_DataObjectType
     */
    public function getBusiness_Address()
    {
      return $this->Business_Address;
    }

    /**
     * @param Individual_Business_Address_DataObjectType $Business_Address
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setBusiness_Address($Business_Address)
    {
      $this->Business_Address = $Business_Address;
      return $this;
    }

    /**
     * @return Individual_Business_Address_State_DataObjectType
     */
    public function getBusiness_Address_State()
    {
      return $this->Business_Address_State;
    }

    /**
     * @param Individual_Business_Address_State_DataObjectType $Business_Address_State
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setBusiness_Address_State($Business_Address_State)
    {
      $this->Business_Address_State = $Business_Address_State;
      return $this;
    }

    /**
     * @return Individual_Business_Address_Country_DataObjectType
     */
    public function getBusiness_Address_Country()
    {
      return $this->Business_Address_Country;
    }

    /**
     * @param Individual_Business_Address_Country_DataObjectType $Business_Address_Country
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setBusiness_Address_Country($Business_Address_Country)
    {
      $this->Business_Address_Country = $Business_Address_Country;
      return $this;
    }

    /**
     * @return Individual_Business_Phone_XRef_DataObjectType
     */
    public function getBusiness_Phone_XRef()
    {
      return $this->Business_Phone_XRef;
    }

    /**
     * @param Individual_Business_Phone_XRef_DataObjectType $Business_Phone_XRef
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setBusiness_Phone_XRef($Business_Phone_XRef)
    {
      $this->Business_Phone_XRef = $Business_Phone_XRef;
      return $this;
    }

    /**
     * @return Individual_Business_Phone_DataObjectType
     */
    public function getBusiness_Phone()
    {
      return $this->Business_Phone;
    }

    /**
     * @param Individual_Business_Phone_DataObjectType $Business_Phone
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setBusiness_Phone($Business_Phone)
    {
      $this->Business_Phone = $Business_Phone;
      return $this;
    }

    /**
     * @return Individual_Business_Phone_Country_DataObjectType
     */
    public function getBusiness_Phone_Country()
    {
      return $this->Business_Phone_Country;
    }

    /**
     * @param Individual_Business_Phone_Country_DataObjectType $Business_Phone_Country
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setBusiness_Phone_Country($Business_Phone_Country)
    {
      $this->Business_Phone_Country = $Business_Phone_Country;
      return $this;
    }

    /**
     * @return Individual_Business_Fax_XRef_DataObjectType
     */
    public function getBusiness_Fax_XRef()
    {
      return $this->Business_Fax_XRef;
    }

    /**
     * @param Individual_Business_Fax_XRef_DataObjectType $Business_Fax_XRef
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setBusiness_Fax_XRef($Business_Fax_XRef)
    {
      $this->Business_Fax_XRef = $Business_Fax_XRef;
      return $this;
    }

    /**
     * @return Individual_Business_Fax_DataObjectType
     */
    public function getBusiness_Fax()
    {
      return $this->Business_Fax;
    }

    /**
     * @param Individual_Business_Fax_DataObjectType $Business_Fax
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setBusiness_Fax($Business_Fax)
    {
      $this->Business_Fax = $Business_Fax;
      return $this;
    }

    /**
     * @return Individual_Business_Fax_Country_DataObjectType
     */
    public function getBusiness_Fax_Country()
    {
      return $this->Business_Fax_Country;
    }

    /**
     * @param Individual_Business_Fax_Country_DataObjectType $Business_Fax_Country
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setBusiness_Fax_Country($Business_Fax_Country)
    {
      $this->Business_Fax_Country = $Business_Fax_Country;
      return $this;
    }

    /**
     * @return Individual_Home_Address_XRef_DataObjectType
     */
    public function getHome_Address_XRef()
    {
      return $this->Home_Address_XRef;
    }

    /**
     * @param Individual_Home_Address_XRef_DataObjectType $Home_Address_XRef
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setHome_Address_XRef($Home_Address_XRef)
    {
      $this->Home_Address_XRef = $Home_Address_XRef;
      return $this;
    }

    /**
     * @return Individual_Home_Address_DataObjectType
     */
    public function getHome_Address()
    {
      return $this->Home_Address;
    }

    /**
     * @param Individual_Home_Address_DataObjectType $Home_Address
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setHome_Address($Home_Address)
    {
      $this->Home_Address = $Home_Address;
      return $this;
    }

    /**
     * @return Individual_Home_Address_State_DataObjectType
     */
    public function getHome_Address_State()
    {
      return $this->Home_Address_State;
    }

    /**
     * @param Individual_Home_Address_State_DataObjectType $Home_Address_State
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setHome_Address_State($Home_Address_State)
    {
      $this->Home_Address_State = $Home_Address_State;
      return $this;
    }

    /**
     * @return Individual_Home_Address_Country_DataObjectType
     */
    public function getHome_Address_Country()
    {
      return $this->Home_Address_Country;
    }

    /**
     * @param Individual_Home_Address_Country_DataObjectType $Home_Address_Country
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setHome_Address_Country($Home_Address_Country)
    {
      $this->Home_Address_Country = $Home_Address_Country;
      return $this;
    }

    /**
     * @return Individual_Home_Phone_DataObjectType
     */
    public function getHome_Phone()
    {
      return $this->Home_Phone;
    }

    /**
     * @param Individual_Home_Phone_DataObjectType $Home_Phone
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setHome_Phone($Home_Phone)
    {
      $this->Home_Phone = $Home_Phone;
      return $this;
    }

    /**
     * @return Individual_Home_Phone_Country_DataObjectType
     */
    public function getHome_Phone_Country()
    {
      return $this->Home_Phone_Country;
    }

    /**
     * @param Individual_Home_Phone_Country_DataObjectType $Home_Phone_Country
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setHome_Phone_Country($Home_Phone_Country)
    {
      $this->Home_Phone_Country = $Home_Phone_Country;
      return $this;
    }

    /**
     * @return Individual_Home_Phone_XRef_DataObjectType
     */
    public function getHome_Phone_XRef()
    {
      return $this->Home_Phone_XRef;
    }

    /**
     * @param Individual_Home_Phone_XRef_DataObjectType $Home_Phone_XRef
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setHome_Phone_XRef($Home_Phone_XRef)
    {
      $this->Home_Phone_XRef = $Home_Phone_XRef;
      return $this;
    }

    /**
     * @return Individual_Home_Fax_DataObjectType
     */
    public function getHome_Fax()
    {
      return $this->Home_Fax;
    }

    /**
     * @param Individual_Home_Fax_DataObjectType $Home_Fax
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setHome_Fax($Home_Fax)
    {
      $this->Home_Fax = $Home_Fax;
      return $this;
    }

    /**
     * @return Individual_Home_Fax_Country_DataObjectType
     */
    public function getHome_Fax_Country()
    {
      return $this->Home_Fax_Country;
    }

    /**
     * @param Individual_Home_Fax_Country_DataObjectType $Home_Fax_Country
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setHome_Fax_Country($Home_Fax_Country)
    {
      $this->Home_Fax_Country = $Home_Fax_Country;
      return $this;
    }

    /**
     * @return Individual_Home_Fax_XRef_DataObjectType
     */
    public function getHome_Fax_XRef()
    {
      return $this->Home_Fax_XRef;
    }

    /**
     * @param Individual_Home_Fax_XRef_DataObjectType $Home_Fax_XRef
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setHome_Fax_XRef($Home_Fax_XRef)
    {
      $this->Home_Fax_XRef = $Home_Fax_XRef;
      return $this;
    }

    /**
     * @return Individual_Address_Change_Log_DataObjectType
     */
    public function getAddress_Change_Log()
    {
      return $this->Address_Change_Log;
    }

    /**
     * @param Individual_Address_Change_Log_DataObjectType $Address_Change_Log
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setAddress_Change_Log($Address_Change_Log)
    {
      $this->Address_Change_Log = $Address_Change_Log;
      return $this;
    }

    /**
     * @return Individual_TransferToCustomer_DataObjectType
     */
    public function getTransferToCustomer()
    {
      return $this->TransferToCustomer;
    }

    /**
     * @param Individual_TransferToCustomer_DataObjectType $TransferToCustomer
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setTransferToCustomer($TransferToCustomer)
    {
      $this->TransferToCustomer = $TransferToCustomer;
      return $this;
    }

    /**
     * @return Individual_Individual_Custom_Demographics_DataObjectType
     */
    public function getIndividual_Custom_Demographics()
    {
      return $this->Individual_Custom_Demographics;
    }

    /**
     * @param Individual_Individual_Custom_Demographics_DataObjectType $Individual_Custom_Demographics
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setIndividual_Custom_Demographics($Individual_Custom_Demographics)
    {
      $this->Individual_Custom_Demographics = $Individual_Custom_Demographics;
      return $this;
    }

    /**
     * @return Individual_Social_Links_DataObjectType
     */
    public function getSocial_Links()
    {
      return $this->Social_Links;
    }

    /**
     * @param Individual_Social_Links_DataObjectType $Social_Links
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setSocial_Links($Social_Links)
    {
      $this->Social_Links = $Social_Links;
      return $this;
    }

    /**
     * @return Individual_source_code_DataObjectType
     */
    public function getSource_code()
    {
      return $this->source_code;
    }

    /**
     * @param Individual_source_code_DataObjectType $source_code
     * @return \netForum\xWeb\Xml\Generated\IndividualType
     */
    public function setSource_code($source_code)
    {
      $this->source_code = $source_code;
      return $this;
    }

}
