<?php

namespace netForum\xWeb\Xml\Generated;

class ChapterType
{

    /**
     * @var av_key_Type $CurrentKey
     */
    protected $CurrentKey = null;

    /**
     * @var Chapter_Chapter_DataObjectType $Chapter
     */
    protected $Chapter = null;

    /**
     * @var Chapter_Customer_DataObjectType $Customer
     */
    protected $Customer = null;

    /**
     * @var Chapter_Association_DataObjectType $Association
     */
    protected $Association = null;

    /**
     * @var Chapter_Email_DataObjectType $Email
     */
    protected $Email = null;

    /**
     * @var Chapter_Website_DataObjectType $Website
     */
    protected $Website = null;

    /**
     * @var Chapter_Messaging_DataObjectType $Messaging
     */
    protected $Messaging = null;

    /**
     * @var Chapter_Phone_DataObjectType $Phone
     */
    protected $Phone = null;

    /**
     * @var Chapter_Phone_XRef_DataObjectType $Phone_XRef
     */
    protected $Phone_XRef = null;

    /**
     * @var Chapter_Fax_DataObjectType $Fax
     */
    protected $Fax = null;

    /**
     * @var Chapter_Fax_XRef_DataObjectType $Fax_XRef
     */
    protected $Fax_XRef = null;

    /**
     * @var Chapter_Address_1_DataObjectType $Address_1
     */
    protected $Address_1 = null;

    /**
     * @var Chapter_Address_XRef_1_DataObjectType $Address_XRef_1
     */
    protected $Address_XRef_1 = null;

    /**
     * @var Chapter_Address_Country_DataObjectType $Address_Country
     */
    protected $Address_Country = null;

    /**
     * @var Chapter_Billing_Address_1_DataObjectType $Billing_Address_1
     */
    protected $Billing_Address_1 = null;

    /**
     * @var Chapter_Billing_Address_XRef_1_DataObjectType $Billing_Address_XRef_1
     */
    protected $Billing_Address_XRef_1 = null;

    /**
     * @var Chapter_Primary_Contact_DataObjectType $Primary_Contact
     */
    protected $Primary_Contact = null;

    /**
     * @var Chapter_Primary_Contact_XRef_DataObjectType $Primary_Contact_XRef
     */
    protected $Primary_Contact_XRef = null;

    /**
     * @var Chapter_Prim_Contact_Adr_Xref_DataObjectType $Prim_Contact_Adr_Xref
     */
    protected $Prim_Contact_Adr_Xref = null;

    /**
     * @var Chapter_Prim_Contact_Address_DataObjectType $Prim_Contact_Address
     */
    protected $Prim_Contact_Address = null;

    /**
     * @var Chapter_Address_Change_Log_DataObjectType $Address_Change_Log
     */
    protected $Address_Change_Log = null;

    /**
     * @param Chapter_Chapter_DataObjectType $Chapter
     * @param Chapter_Customer_DataObjectType $Customer
     * @param Chapter_Association_DataObjectType $Association
     * @param Chapter_Email_DataObjectType $Email
     * @param Chapter_Website_DataObjectType $Website
     * @param Chapter_Messaging_DataObjectType $Messaging
     * @param Chapter_Phone_DataObjectType $Phone
     * @param Chapter_Phone_XRef_DataObjectType $Phone_XRef
     * @param Chapter_Fax_DataObjectType $Fax
     * @param Chapter_Fax_XRef_DataObjectType $Fax_XRef
     * @param Chapter_Address_1_DataObjectType $Address_1
     * @param Chapter_Address_XRef_1_DataObjectType $Address_XRef_1
     * @param Chapter_Address_Country_DataObjectType $Address_Country
     * @param Chapter_Billing_Address_1_DataObjectType $Billing_Address_1
     * @param Chapter_Billing_Address_XRef_1_DataObjectType $Billing_Address_XRef_1
     * @param Chapter_Primary_Contact_DataObjectType $Primary_Contact
     * @param Chapter_Primary_Contact_XRef_DataObjectType $Primary_Contact_XRef
     * @param Chapter_Prim_Contact_Adr_Xref_DataObjectType $Prim_Contact_Adr_Xref
     * @param Chapter_Prim_Contact_Address_DataObjectType $Prim_Contact_Address
     * @param Chapter_Address_Change_Log_DataObjectType $Address_Change_Log
     */
    public function __construct($Chapter, $Customer, $Association, $Email, $Website, $Messaging, $Phone, $Phone_XRef, $Fax, $Fax_XRef, $Address_1, $Address_XRef_1, $Address_Country, $Billing_Address_1, $Billing_Address_XRef_1, $Primary_Contact, $Primary_Contact_XRef, $Prim_Contact_Adr_Xref, $Prim_Contact_Address, $Address_Change_Log)
    {
      $this->Chapter = $Chapter;
      $this->Customer = $Customer;
      $this->Association = $Association;
      $this->Email = $Email;
      $this->Website = $Website;
      $this->Messaging = $Messaging;
      $this->Phone = $Phone;
      $this->Phone_XRef = $Phone_XRef;
      $this->Fax = $Fax;
      $this->Fax_XRef = $Fax_XRef;
      $this->Address_1 = $Address_1;
      $this->Address_XRef_1 = $Address_XRef_1;
      $this->Address_Country = $Address_Country;
      $this->Billing_Address_1 = $Billing_Address_1;
      $this->Billing_Address_XRef_1 = $Billing_Address_XRef_1;
      $this->Primary_Contact = $Primary_Contact;
      $this->Primary_Contact_XRef = $Primary_Contact_XRef;
      $this->Prim_Contact_Adr_Xref = $Prim_Contact_Adr_Xref;
      $this->Prim_Contact_Address = $Prim_Contact_Address;
      $this->Address_Change_Log = $Address_Change_Log;
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
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setCurrentKey($CurrentKey)
    {
      $this->CurrentKey = $CurrentKey;
      return $this;
    }

    /**
     * @return Chapter_Chapter_DataObjectType
     */
    public function getChapter()
    {
      return $this->Chapter;
    }

    /**
     * @param Chapter_Chapter_DataObjectType $Chapter
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setChapter($Chapter)
    {
      $this->Chapter = $Chapter;
      return $this;
    }

    /**
     * @return Chapter_Customer_DataObjectType
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param Chapter_Customer_DataObjectType $Customer
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return Chapter_Association_DataObjectType
     */
    public function getAssociation()
    {
      return $this->Association;
    }

    /**
     * @param Chapter_Association_DataObjectType $Association
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setAssociation($Association)
    {
      $this->Association = $Association;
      return $this;
    }

    /**
     * @return Chapter_Email_DataObjectType
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param Chapter_Email_DataObjectType $Email
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return Chapter_Website_DataObjectType
     */
    public function getWebsite()
    {
      return $this->Website;
    }

    /**
     * @param Chapter_Website_DataObjectType $Website
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setWebsite($Website)
    {
      $this->Website = $Website;
      return $this;
    }

    /**
     * @return Chapter_Messaging_DataObjectType
     */
    public function getMessaging()
    {
      return $this->Messaging;
    }

    /**
     * @param Chapter_Messaging_DataObjectType $Messaging
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setMessaging($Messaging)
    {
      $this->Messaging = $Messaging;
      return $this;
    }

    /**
     * @return Chapter_Phone_DataObjectType
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param Chapter_Phone_DataObjectType $Phone
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return Chapter_Phone_XRef_DataObjectType
     */
    public function getPhone_XRef()
    {
      return $this->Phone_XRef;
    }

    /**
     * @param Chapter_Phone_XRef_DataObjectType $Phone_XRef
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setPhone_XRef($Phone_XRef)
    {
      $this->Phone_XRef = $Phone_XRef;
      return $this;
    }

    /**
     * @return Chapter_Fax_DataObjectType
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param Chapter_Fax_DataObjectType $Fax
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

    /**
     * @return Chapter_Fax_XRef_DataObjectType
     */
    public function getFax_XRef()
    {
      return $this->Fax_XRef;
    }

    /**
     * @param Chapter_Fax_XRef_DataObjectType $Fax_XRef
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setFax_XRef($Fax_XRef)
    {
      $this->Fax_XRef = $Fax_XRef;
      return $this;
    }

    /**
     * @return Chapter_Address_1_DataObjectType
     */
    public function getAddress_1()
    {
      return $this->Address_1;
    }

    /**
     * @param Chapter_Address_1_DataObjectType $Address_1
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setAddress_1($Address_1)
    {
      $this->Address_1 = $Address_1;
      return $this;
    }

    /**
     * @return Chapter_Address_XRef_1_DataObjectType
     */
    public function getAddress_XRef_1()
    {
      return $this->Address_XRef_1;
    }

    /**
     * @param Chapter_Address_XRef_1_DataObjectType $Address_XRef_1
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setAddress_XRef_1($Address_XRef_1)
    {
      $this->Address_XRef_1 = $Address_XRef_1;
      return $this;
    }

    /**
     * @return Chapter_Address_Country_DataObjectType
     */
    public function getAddress_Country()
    {
      return $this->Address_Country;
    }

    /**
     * @param Chapter_Address_Country_DataObjectType $Address_Country
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setAddress_Country($Address_Country)
    {
      $this->Address_Country = $Address_Country;
      return $this;
    }

    /**
     * @return Chapter_Billing_Address_1_DataObjectType
     */
    public function getBilling_Address_1()
    {
      return $this->Billing_Address_1;
    }

    /**
     * @param Chapter_Billing_Address_1_DataObjectType $Billing_Address_1
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setBilling_Address_1($Billing_Address_1)
    {
      $this->Billing_Address_1 = $Billing_Address_1;
      return $this;
    }

    /**
     * @return Chapter_Billing_Address_XRef_1_DataObjectType
     */
    public function getBilling_Address_XRef_1()
    {
      return $this->Billing_Address_XRef_1;
    }

    /**
     * @param Chapter_Billing_Address_XRef_1_DataObjectType $Billing_Address_XRef_1
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setBilling_Address_XRef_1($Billing_Address_XRef_1)
    {
      $this->Billing_Address_XRef_1 = $Billing_Address_XRef_1;
      return $this;
    }

    /**
     * @return Chapter_Primary_Contact_DataObjectType
     */
    public function getPrimary_Contact()
    {
      return $this->Primary_Contact;
    }

    /**
     * @param Chapter_Primary_Contact_DataObjectType $Primary_Contact
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setPrimary_Contact($Primary_Contact)
    {
      $this->Primary_Contact = $Primary_Contact;
      return $this;
    }

    /**
     * @return Chapter_Primary_Contact_XRef_DataObjectType
     */
    public function getPrimary_Contact_XRef()
    {
      return $this->Primary_Contact_XRef;
    }

    /**
     * @param Chapter_Primary_Contact_XRef_DataObjectType $Primary_Contact_XRef
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setPrimary_Contact_XRef($Primary_Contact_XRef)
    {
      $this->Primary_Contact_XRef = $Primary_Contact_XRef;
      return $this;
    }

    /**
     * @return Chapter_Prim_Contact_Adr_Xref_DataObjectType
     */
    public function getPrim_Contact_Adr_Xref()
    {
      return $this->Prim_Contact_Adr_Xref;
    }

    /**
     * @param Chapter_Prim_Contact_Adr_Xref_DataObjectType $Prim_Contact_Adr_Xref
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setPrim_Contact_Adr_Xref($Prim_Contact_Adr_Xref)
    {
      $this->Prim_Contact_Adr_Xref = $Prim_Contact_Adr_Xref;
      return $this;
    }

    /**
     * @return Chapter_Prim_Contact_Address_DataObjectType
     */
    public function getPrim_Contact_Address()
    {
      return $this->Prim_Contact_Address;
    }

    /**
     * @param Chapter_Prim_Contact_Address_DataObjectType $Prim_Contact_Address
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setPrim_Contact_Address($Prim_Contact_Address)
    {
      $this->Prim_Contact_Address = $Prim_Contact_Address;
      return $this;
    }

    /**
     * @return Chapter_Address_Change_Log_DataObjectType
     */
    public function getAddress_Change_Log()
    {
      return $this->Address_Change_Log;
    }

    /**
     * @param Chapter_Address_Change_Log_DataObjectType $Address_Change_Log
     * @return \netForum\xWeb\Xml\Generated\ChapterType
     */
    public function setAddress_Change_Log($Address_Change_Log)
    {
      $this->Address_Change_Log = $Address_Change_Log;
      return $this;
    }

}
