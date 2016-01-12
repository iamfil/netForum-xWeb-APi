<?php

namespace netForum\xWeb\Xml\Generated;

class EventsRegistrantType
{

    /**
     * @var av_key_Type $CurrentKey
     */
    protected $CurrentKey = null;

    /**
     * @var EventsRegistrant_Registrant_DataObjectType $Registrant
     */
    protected $Registrant = null;

    /**
     * @var EventsRegistrant_Individual_DataObjectType $Individual
     */
    protected $Individual = null;

    /**
     * @var EventsRegistrant_Customer_DataObjectType $Customer
     */
    protected $Customer = null;

    /**
     * @var EventsRegistrant_Individual_X_Organization_DataObjectType $Individual_X_Organization
     */
    protected $Individual_X_Organization = null;

    /**
     * @var EventsRegistrant_Organization_DataObjectType $Organization
     */
    protected $Organization = null;

    /**
     * @var EventsRegistrant_Address_XRef_DataObjectType $Address_XRef
     */
    protected $Address_XRef = null;

    /**
     * @var EventsRegistrant_Address_DataObjectType $Address
     */
    protected $Address = null;

    /**
     * @var EventsRegistrant_Email_DataObjectType $Email
     */
    protected $Email = null;

    /**
     * @var EventsRegistrant_Website_DataObjectType $Website
     */
    protected $Website = null;

    /**
     * @var EventsRegistrant_Messaging_DataObjectType $Messaging
     */
    protected $Messaging = null;

    /**
     * @var EventsRegistrant_Phone_XRef_DataObjectType $Phone_XRef
     */
    protected $Phone_XRef = null;

    /**
     * @var EventsRegistrant_Phone_DataObjectType $Phone
     */
    protected $Phone = null;

    /**
     * @var EventsRegistrant_Fax_XRef_DataObjectType $Fax_XRef
     */
    protected $Fax_XRef = null;

    /**
     * @var EventsRegistrant_Fax_DataObjectType $Fax
     */
    protected $Fax = null;

    /**
     * @var EventsRegistrant_Event_DataObjectType $Event
     */
    protected $Event = null;

    /**
     * @var EventsRegistrant_Event_Location_DataObjectType $Event_Location
     */
    protected $Event_Location = null;

    /**
     * @var EventsRegistrant_Location_DataObjectType $Location
     */
    protected $Location = null;

    /**
     * @var EventsRegistrant_Location_Customer_Address_DataObjectType $Location_Customer_Address
     */
    protected $Location_Customer_Address = null;

    /**
     * @var EventsRegistrant_Location_Address_DataObjectType $Location_Address
     */
    protected $Location_Address = null;

    /**
     * @var EventsRegistrant_Location_Phone_XRef_DataObjectType $Location_Phone_XRef
     */
    protected $Location_Phone_XRef = null;

    /**
     * @var EventsRegistrant_Location_Website_DataObjectType $Location_Website
     */
    protected $Location_Website = null;

    /**
     * @var EventsRegistrant_Event_Location_Room_Type_DataObjectType $Event_Location_Room_Type
     */
    protected $Event_Location_Room_Type = null;

    /**
     * @var EventsRegistrant_Room_Request_DataObjectType $Room_Request
     */
    protected $Room_Request = null;

    /**
     * @var EventsRegistrant_Registrant_Housing_DataObjectType $Registrant_Housing
     */
    protected $Registrant_Housing = null;

    /**
     * @var EventsRegistrant_RegistrantGuest_DataObjectType $RegistrantGuest
     */
    protected $RegistrantGuest = null;

    /**
     * @var EventsRegistrant_Invoice_DataObjectType $Invoice
     */
    protected $Invoice = null;

    /**
     * @var EventsRegistrant_Payment_DataObjectType $Payment
     */
    protected $Payment = null;

    /**
     * @var EventsRegistrant_Payment_Info_DataObjectType $Payment_Info
     */
    protected $Payment_Info = null;

    /**
     * @var EventsRegistrant_Payment_Method_DataObjectType $Payment_Method
     */
    protected $Payment_Method = null;

    /**
     * @var EventsRegistrant_Product_DataObjectType $Product
     */
    protected $Product = null;

    /**
     * @var EventsRegistrant_Price_DataObjectType $Price
     */
    protected $Price = null;

    /**
     * @var EventsRegistrant_Registrant_Type_DataObjectType $Registrant_Type
     */
    protected $Registrant_Type = null;

    /**
     * @var EventsRegistrant_Registrant_Custom_Demographics_DataObjectType $Registrant_Custom_Demographics
     */
    protected $Registrant_Custom_Demographics = null;

    /**
     * @var EventsRegistrant_Gift_DataObjectType $Gift
     */
    protected $Gift = null;

    /**
     * @var EventsRegistrant_source_code_DataObjectType $source_code
     */
    protected $source_code = null;

    /**
     * @var EventsRegistrant_Registrant_Session_DataObjectType $Registrant_Session
     */
    protected $Registrant_Session = null;

    /**
     * @var Registrant_SessionCollectionType $Registrant_SessionCollection
     */
    protected $Registrant_SessionCollection = null;

    /**
     * @var Invoice_DetailCollectionType $Invoice_DetailCollection
     */
    protected $Invoice_DetailCollection = null;

    /**
     * @var Additional_Invoice_DetailCollectionType $Additional_Invoice_DetailCollection
     */
    protected $Additional_Invoice_DetailCollection = null;

    /**
     * @param EventsRegistrant_Registrant_DataObjectType $Registrant
     * @param EventsRegistrant_Individual_DataObjectType $Individual
     * @param EventsRegistrant_Customer_DataObjectType $Customer
     * @param EventsRegistrant_Individual_X_Organization_DataObjectType $Individual_X_Organization
     * @param EventsRegistrant_Organization_DataObjectType $Organization
     * @param EventsRegistrant_Address_XRef_DataObjectType $Address_XRef
     * @param EventsRegistrant_Address_DataObjectType $Address
     * @param EventsRegistrant_Email_DataObjectType $Email
     * @param EventsRegistrant_Website_DataObjectType $Website
     * @param EventsRegistrant_Messaging_DataObjectType $Messaging
     * @param EventsRegistrant_Phone_XRef_DataObjectType $Phone_XRef
     * @param EventsRegistrant_Phone_DataObjectType $Phone
     * @param EventsRegistrant_Fax_XRef_DataObjectType $Fax_XRef
     * @param EventsRegistrant_Fax_DataObjectType $Fax
     * @param EventsRegistrant_Event_DataObjectType $Event
     * @param EventsRegistrant_Event_Location_DataObjectType $Event_Location
     * @param EventsRegistrant_Location_DataObjectType $Location
     * @param EventsRegistrant_Location_Customer_Address_DataObjectType $Location_Customer_Address
     * @param EventsRegistrant_Location_Address_DataObjectType $Location_Address
     * @param EventsRegistrant_Location_Phone_XRef_DataObjectType $Location_Phone_XRef
     * @param EventsRegistrant_Location_Website_DataObjectType $Location_Website
     * @param EventsRegistrant_Event_Location_Room_Type_DataObjectType $Event_Location_Room_Type
     * @param EventsRegistrant_Room_Request_DataObjectType $Room_Request
     * @param EventsRegistrant_Registrant_Housing_DataObjectType $Registrant_Housing
     * @param EventsRegistrant_RegistrantGuest_DataObjectType $RegistrantGuest
     * @param EventsRegistrant_Invoice_DataObjectType $Invoice
     * @param EventsRegistrant_Payment_DataObjectType $Payment
     * @param EventsRegistrant_Payment_Info_DataObjectType $Payment_Info
     * @param EventsRegistrant_Payment_Method_DataObjectType $Payment_Method
     * @param EventsRegistrant_Product_DataObjectType $Product
     * @param EventsRegistrant_Price_DataObjectType $Price
     * @param EventsRegistrant_Registrant_Type_DataObjectType $Registrant_Type
     * @param EventsRegistrant_Registrant_Custom_Demographics_DataObjectType $Registrant_Custom_Demographics
     * @param EventsRegistrant_Gift_DataObjectType $Gift
     * @param EventsRegistrant_source_code_DataObjectType $source_code
     * @param EventsRegistrant_Registrant_Session_DataObjectType $Registrant_Session
     * @param Registrant_SessionCollectionType $Registrant_SessionCollection
     * @param Invoice_DetailCollectionType $Invoice_DetailCollection
     * @param Additional_Invoice_DetailCollectionType $Additional_Invoice_DetailCollection
     */
    public function __construct($Registrant, $Individual, $Customer, $Individual_X_Organization, $Organization, $Address_XRef, $Address, $Email, $Website, $Messaging, $Phone_XRef, $Phone, $Fax_XRef, $Fax, $Event, $Event_Location, $Location, $Location_Customer_Address, $Location_Address, $Location_Phone_XRef, $Location_Website, $Event_Location_Room_Type, $Room_Request, $Registrant_Housing, $RegistrantGuest, $Invoice, $Payment, $Payment_Info, $Payment_Method, $Product, $Price, $Registrant_Type, $Registrant_Custom_Demographics, $Gift, $source_code, $Registrant_Session, $Registrant_SessionCollection, $Invoice_DetailCollection, $Additional_Invoice_DetailCollection)
    {
      $this->Registrant = $Registrant;
      $this->Individual = $Individual;
      $this->Customer = $Customer;
      $this->Individual_X_Organization = $Individual_X_Organization;
      $this->Organization = $Organization;
      $this->Address_XRef = $Address_XRef;
      $this->Address = $Address;
      $this->Email = $Email;
      $this->Website = $Website;
      $this->Messaging = $Messaging;
      $this->Phone_XRef = $Phone_XRef;
      $this->Phone = $Phone;
      $this->Fax_XRef = $Fax_XRef;
      $this->Fax = $Fax;
      $this->Event = $Event;
      $this->Event_Location = $Event_Location;
      $this->Location = $Location;
      $this->Location_Customer_Address = $Location_Customer_Address;
      $this->Location_Address = $Location_Address;
      $this->Location_Phone_XRef = $Location_Phone_XRef;
      $this->Location_Website = $Location_Website;
      $this->Event_Location_Room_Type = $Event_Location_Room_Type;
      $this->Room_Request = $Room_Request;
      $this->Registrant_Housing = $Registrant_Housing;
      $this->RegistrantGuest = $RegistrantGuest;
      $this->Invoice = $Invoice;
      $this->Payment = $Payment;
      $this->Payment_Info = $Payment_Info;
      $this->Payment_Method = $Payment_Method;
      $this->Product = $Product;
      $this->Price = $Price;
      $this->Registrant_Type = $Registrant_Type;
      $this->Registrant_Custom_Demographics = $Registrant_Custom_Demographics;
      $this->Gift = $Gift;
      $this->source_code = $source_code;
      $this->Registrant_Session = $Registrant_Session;
      $this->Registrant_SessionCollection = $Registrant_SessionCollection;
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
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setCurrentKey($CurrentKey)
    {
      $this->CurrentKey = $CurrentKey;
      return $this;
    }

    /**
     * @return EventsRegistrant_Registrant_DataObjectType
     */
    public function getRegistrant()
    {
      return $this->Registrant;
    }

    /**
     * @param EventsRegistrant_Registrant_DataObjectType $Registrant
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setRegistrant($Registrant)
    {
      $this->Registrant = $Registrant;
      return $this;
    }

    /**
     * @return EventsRegistrant_Individual_DataObjectType
     */
    public function getIndividual()
    {
      return $this->Individual;
    }

    /**
     * @param EventsRegistrant_Individual_DataObjectType $Individual
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setIndividual($Individual)
    {
      $this->Individual = $Individual;
      return $this;
    }

    /**
     * @return EventsRegistrant_Customer_DataObjectType
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param EventsRegistrant_Customer_DataObjectType $Customer
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return EventsRegistrant_Individual_X_Organization_DataObjectType
     */
    public function getIndividual_X_Organization()
    {
      return $this->Individual_X_Organization;
    }

    /**
     * @param EventsRegistrant_Individual_X_Organization_DataObjectType $Individual_X_Organization
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setIndividual_X_Organization($Individual_X_Organization)
    {
      $this->Individual_X_Organization = $Individual_X_Organization;
      return $this;
    }

    /**
     * @return EventsRegistrant_Organization_DataObjectType
     */
    public function getOrganization()
    {
      return $this->Organization;
    }

    /**
     * @param EventsRegistrant_Organization_DataObjectType $Organization
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setOrganization($Organization)
    {
      $this->Organization = $Organization;
      return $this;
    }

    /**
     * @return EventsRegistrant_Address_XRef_DataObjectType
     */
    public function getAddress_XRef()
    {
      return $this->Address_XRef;
    }

    /**
     * @param EventsRegistrant_Address_XRef_DataObjectType $Address_XRef
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setAddress_XRef($Address_XRef)
    {
      $this->Address_XRef = $Address_XRef;
      return $this;
    }

    /**
     * @return EventsRegistrant_Address_DataObjectType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param EventsRegistrant_Address_DataObjectType $Address
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return EventsRegistrant_Email_DataObjectType
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param EventsRegistrant_Email_DataObjectType $Email
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return EventsRegistrant_Website_DataObjectType
     */
    public function getWebsite()
    {
      return $this->Website;
    }

    /**
     * @param EventsRegistrant_Website_DataObjectType $Website
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setWebsite($Website)
    {
      $this->Website = $Website;
      return $this;
    }

    /**
     * @return EventsRegistrant_Messaging_DataObjectType
     */
    public function getMessaging()
    {
      return $this->Messaging;
    }

    /**
     * @param EventsRegistrant_Messaging_DataObjectType $Messaging
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setMessaging($Messaging)
    {
      $this->Messaging = $Messaging;
      return $this;
    }

    /**
     * @return EventsRegistrant_Phone_XRef_DataObjectType
     */
    public function getPhone_XRef()
    {
      return $this->Phone_XRef;
    }

    /**
     * @param EventsRegistrant_Phone_XRef_DataObjectType $Phone_XRef
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setPhone_XRef($Phone_XRef)
    {
      $this->Phone_XRef = $Phone_XRef;
      return $this;
    }

    /**
     * @return EventsRegistrant_Phone_DataObjectType
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param EventsRegistrant_Phone_DataObjectType $Phone
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return EventsRegistrant_Fax_XRef_DataObjectType
     */
    public function getFax_XRef()
    {
      return $this->Fax_XRef;
    }

    /**
     * @param EventsRegistrant_Fax_XRef_DataObjectType $Fax_XRef
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setFax_XRef($Fax_XRef)
    {
      $this->Fax_XRef = $Fax_XRef;
      return $this;
    }

    /**
     * @return EventsRegistrant_Fax_DataObjectType
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param EventsRegistrant_Fax_DataObjectType $Fax
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

    /**
     * @return EventsRegistrant_Event_DataObjectType
     */
    public function getEvent()
    {
      return $this->Event;
    }

    /**
     * @param EventsRegistrant_Event_DataObjectType $Event
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setEvent($Event)
    {
      $this->Event = $Event;
      return $this;
    }

    /**
     * @return EventsRegistrant_Event_Location_DataObjectType
     */
    public function getEvent_Location()
    {
      return $this->Event_Location;
    }

    /**
     * @param EventsRegistrant_Event_Location_DataObjectType $Event_Location
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setEvent_Location($Event_Location)
    {
      $this->Event_Location = $Event_Location;
      return $this;
    }

    /**
     * @return EventsRegistrant_Location_DataObjectType
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param EventsRegistrant_Location_DataObjectType $Location
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return EventsRegistrant_Location_Customer_Address_DataObjectType
     */
    public function getLocation_Customer_Address()
    {
      return $this->Location_Customer_Address;
    }

    /**
     * @param EventsRegistrant_Location_Customer_Address_DataObjectType $Location_Customer_Address
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setLocation_Customer_Address($Location_Customer_Address)
    {
      $this->Location_Customer_Address = $Location_Customer_Address;
      return $this;
    }

    /**
     * @return EventsRegistrant_Location_Address_DataObjectType
     */
    public function getLocation_Address()
    {
      return $this->Location_Address;
    }

    /**
     * @param EventsRegistrant_Location_Address_DataObjectType $Location_Address
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setLocation_Address($Location_Address)
    {
      $this->Location_Address = $Location_Address;
      return $this;
    }

    /**
     * @return EventsRegistrant_Location_Phone_XRef_DataObjectType
     */
    public function getLocation_Phone_XRef()
    {
      return $this->Location_Phone_XRef;
    }

    /**
     * @param EventsRegistrant_Location_Phone_XRef_DataObjectType $Location_Phone_XRef
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setLocation_Phone_XRef($Location_Phone_XRef)
    {
      $this->Location_Phone_XRef = $Location_Phone_XRef;
      return $this;
    }

    /**
     * @return EventsRegistrant_Location_Website_DataObjectType
     */
    public function getLocation_Website()
    {
      return $this->Location_Website;
    }

    /**
     * @param EventsRegistrant_Location_Website_DataObjectType $Location_Website
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setLocation_Website($Location_Website)
    {
      $this->Location_Website = $Location_Website;
      return $this;
    }

    /**
     * @return EventsRegistrant_Event_Location_Room_Type_DataObjectType
     */
    public function getEvent_Location_Room_Type()
    {
      return $this->Event_Location_Room_Type;
    }

    /**
     * @param EventsRegistrant_Event_Location_Room_Type_DataObjectType $Event_Location_Room_Type
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setEvent_Location_Room_Type($Event_Location_Room_Type)
    {
      $this->Event_Location_Room_Type = $Event_Location_Room_Type;
      return $this;
    }

    /**
     * @return EventsRegistrant_Room_Request_DataObjectType
     */
    public function getRoom_Request()
    {
      return $this->Room_Request;
    }

    /**
     * @param EventsRegistrant_Room_Request_DataObjectType $Room_Request
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setRoom_Request($Room_Request)
    {
      $this->Room_Request = $Room_Request;
      return $this;
    }

    /**
     * @return EventsRegistrant_Registrant_Housing_DataObjectType
     */
    public function getRegistrant_Housing()
    {
      return $this->Registrant_Housing;
    }

    /**
     * @param EventsRegistrant_Registrant_Housing_DataObjectType $Registrant_Housing
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setRegistrant_Housing($Registrant_Housing)
    {
      $this->Registrant_Housing = $Registrant_Housing;
      return $this;
    }

    /**
     * @return EventsRegistrant_RegistrantGuest_DataObjectType
     */
    public function getRegistrantGuest()
    {
      return $this->RegistrantGuest;
    }

    /**
     * @param EventsRegistrant_RegistrantGuest_DataObjectType $RegistrantGuest
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setRegistrantGuest($RegistrantGuest)
    {
      $this->RegistrantGuest = $RegistrantGuest;
      return $this;
    }

    /**
     * @return EventsRegistrant_Invoice_DataObjectType
     */
    public function getInvoice()
    {
      return $this->Invoice;
    }

    /**
     * @param EventsRegistrant_Invoice_DataObjectType $Invoice
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setInvoice($Invoice)
    {
      $this->Invoice = $Invoice;
      return $this;
    }

    /**
     * @return EventsRegistrant_Payment_DataObjectType
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param EventsRegistrant_Payment_DataObjectType $Payment
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return EventsRegistrant_Payment_Info_DataObjectType
     */
    public function getPayment_Info()
    {
      return $this->Payment_Info;
    }

    /**
     * @param EventsRegistrant_Payment_Info_DataObjectType $Payment_Info
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setPayment_Info($Payment_Info)
    {
      $this->Payment_Info = $Payment_Info;
      return $this;
    }

    /**
     * @return EventsRegistrant_Payment_Method_DataObjectType
     */
    public function getPayment_Method()
    {
      return $this->Payment_Method;
    }

    /**
     * @param EventsRegistrant_Payment_Method_DataObjectType $Payment_Method
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setPayment_Method($Payment_Method)
    {
      $this->Payment_Method = $Payment_Method;
      return $this;
    }

    /**
     * @return EventsRegistrant_Product_DataObjectType
     */
    public function getProduct()
    {
      return $this->Product;
    }

    /**
     * @param EventsRegistrant_Product_DataObjectType $Product
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setProduct($Product)
    {
      $this->Product = $Product;
      return $this;
    }

    /**
     * @return EventsRegistrant_Price_DataObjectType
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param EventsRegistrant_Price_DataObjectType $Price
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return EventsRegistrant_Registrant_Type_DataObjectType
     */
    public function getRegistrant_Type()
    {
      return $this->Registrant_Type;
    }

    /**
     * @param EventsRegistrant_Registrant_Type_DataObjectType $Registrant_Type
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setRegistrant_Type($Registrant_Type)
    {
      $this->Registrant_Type = $Registrant_Type;
      return $this;
    }

    /**
     * @return EventsRegistrant_Registrant_Custom_Demographics_DataObjectType
     */
    public function getRegistrant_Custom_Demographics()
    {
      return $this->Registrant_Custom_Demographics;
    }

    /**
     * @param EventsRegistrant_Registrant_Custom_Demographics_DataObjectType $Registrant_Custom_Demographics
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setRegistrant_Custom_Demographics($Registrant_Custom_Demographics)
    {
      $this->Registrant_Custom_Demographics = $Registrant_Custom_Demographics;
      return $this;
    }

    /**
     * @return EventsRegistrant_Gift_DataObjectType
     */
    public function getGift()
    {
      return $this->Gift;
    }

    /**
     * @param EventsRegistrant_Gift_DataObjectType $Gift
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setGift($Gift)
    {
      $this->Gift = $Gift;
      return $this;
    }

    /**
     * @return EventsRegistrant_source_code_DataObjectType
     */
    public function getSource_code()
    {
      return $this->source_code;
    }

    /**
     * @param EventsRegistrant_source_code_DataObjectType $source_code
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setSource_code($source_code)
    {
      $this->source_code = $source_code;
      return $this;
    }

    /**
     * @return EventsRegistrant_Registrant_Session_DataObjectType
     */
    public function getRegistrant_Session()
    {
      return $this->Registrant_Session;
    }

    /**
     * @param EventsRegistrant_Registrant_Session_DataObjectType $Registrant_Session
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setRegistrant_Session($Registrant_Session)
    {
      $this->Registrant_Session = $Registrant_Session;
      return $this;
    }

    /**
     * @return Registrant_SessionCollectionType
     */
    public function getRegistrant_SessionCollection()
    {
      return $this->Registrant_SessionCollection;
    }

    /**
     * @param Registrant_SessionCollectionType $Registrant_SessionCollection
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setRegistrant_SessionCollection($Registrant_SessionCollection)
    {
      $this->Registrant_SessionCollection = $Registrant_SessionCollection;
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
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
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
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantType
     */
    public function setAdditional_Invoice_DetailCollection($Additional_Invoice_DetailCollection)
    {
      $this->Additional_Invoice_DetailCollection = $Additional_Invoice_DetailCollection;
      return $this;
    }

}
