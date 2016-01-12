<?php

namespace netForum\xWeb\Xml\Generated;

class EventsRegistrantGroupType
{

    /**
     * @var av_key_Type $CurrentKey
     */
    protected $CurrentKey = null;

    /**
     * @var EventsRegistrantGroup_Group_Registration_DataObjectType $Group_Registration
     */
    protected $Group_Registration = null;

    /**
     * @var EventsRegistrantGroup_Organization_DataObjectType $Organization
     */
    protected $Organization = null;

    /**
     * @var EventsRegistrantGroup_Customer_DataObjectType $Customer
     */
    protected $Customer = null;

    /**
     * @var EventsRegistrantGroup_Individual_X_Organization_DataObjectType $Individual_X_Organization
     */
    protected $Individual_X_Organization = null;

    /**
     * @var EventsRegistrantGroup_Individual_DataObjectType $Individual
     */
    protected $Individual = null;

    /**
     * @var EventsRegistrantGroup_Address_DataObjectType $Address
     */
    protected $Address = null;

    /**
     * @var EventsRegistrantGroup_Address_XRef_DataObjectType $Address_XRef
     */
    protected $Address_XRef = null;

    /**
     * @var EventsRegistrantGroup_Email_DataObjectType $Email
     */
    protected $Email = null;

    /**
     * @var EventsRegistrantGroup_Website_DataObjectType $Website
     */
    protected $Website = null;

    /**
     * @var EventsRegistrantGroup_Messaging_DataObjectType $Messaging
     */
    protected $Messaging = null;

    /**
     * @var EventsRegistrantGroup_Phone_DataObjectType $Phone
     */
    protected $Phone = null;

    /**
     * @var EventsRegistrantGroup_Phone_XRef_DataObjectType $Phone_XRef
     */
    protected $Phone_XRef = null;

    /**
     * @var EventsRegistrantGroup_Fax_DataObjectType $Fax
     */
    protected $Fax = null;

    /**
     * @var EventsRegistrantGroup_Fax_XRef_DataObjectType $Fax_XRef
     */
    protected $Fax_XRef = null;

    /**
     * @var EventsRegistrantGroup_Event_DataObjectType $Event
     */
    protected $Event = null;

    /**
     * @var EventsRegistrantGroup_Event_Location_Room_Type_DataObjectType $Event_Location_Room_Type
     */
    protected $Event_Location_Room_Type = null;

    /**
     * @var EventsRegistrantGroup_Room_Request_DataObjectType $Room_Request
     */
    protected $Room_Request = null;

    /**
     * @var EventsRegistrantGroup_Invoice_DataObjectType $Invoice
     */
    protected $Invoice = null;

    /**
     * @var EventsRegistrantGroup_Payment_DataObjectType $Payment
     */
    protected $Payment = null;

    /**
     * @var EventsRegistrantGroup_Payment_Info_DataObjectType $Payment_Info
     */
    protected $Payment_Info = null;

    /**
     * @var EventsRegistrantGroup_Payment_Method_DataObjectType $Payment_Method
     */
    protected $Payment_Method = null;

    /**
     * @var EventsRegistrantGroup_source_code_DataObjectType $source_code
     */
    protected $source_code = null;

    /**
     * @var EventsRegistrantGroup_Registrant_DataObjectType $Registrant
     */
    protected $Registrant = null;

    /**
     * @var RegistrantCollectionType $RegistrantCollection
     */
    protected $RegistrantCollection = null;

    /**
     * @param EventsRegistrantGroup_Group_Registration_DataObjectType $Group_Registration
     * @param EventsRegistrantGroup_Organization_DataObjectType $Organization
     * @param EventsRegistrantGroup_Customer_DataObjectType $Customer
     * @param EventsRegistrantGroup_Individual_X_Organization_DataObjectType $Individual_X_Organization
     * @param EventsRegistrantGroup_Individual_DataObjectType $Individual
     * @param EventsRegistrantGroup_Address_DataObjectType $Address
     * @param EventsRegistrantGroup_Address_XRef_DataObjectType $Address_XRef
     * @param EventsRegistrantGroup_Email_DataObjectType $Email
     * @param EventsRegistrantGroup_Website_DataObjectType $Website
     * @param EventsRegistrantGroup_Messaging_DataObjectType $Messaging
     * @param EventsRegistrantGroup_Phone_DataObjectType $Phone
     * @param EventsRegistrantGroup_Phone_XRef_DataObjectType $Phone_XRef
     * @param EventsRegistrantGroup_Fax_DataObjectType $Fax
     * @param EventsRegistrantGroup_Fax_XRef_DataObjectType $Fax_XRef
     * @param EventsRegistrantGroup_Event_DataObjectType $Event
     * @param EventsRegistrantGroup_Event_Location_Room_Type_DataObjectType $Event_Location_Room_Type
     * @param EventsRegistrantGroup_Room_Request_DataObjectType $Room_Request
     * @param EventsRegistrantGroup_Invoice_DataObjectType $Invoice
     * @param EventsRegistrantGroup_Payment_DataObjectType $Payment
     * @param EventsRegistrantGroup_Payment_Info_DataObjectType $Payment_Info
     * @param EventsRegistrantGroup_Payment_Method_DataObjectType $Payment_Method
     * @param EventsRegistrantGroup_source_code_DataObjectType $source_code
     * @param EventsRegistrantGroup_Registrant_DataObjectType $Registrant
     * @param RegistrantCollectionType $RegistrantCollection
     */
    public function __construct($Group_Registration, $Organization, $Customer, $Individual_X_Organization, $Individual, $Address, $Address_XRef, $Email, $Website, $Messaging, $Phone, $Phone_XRef, $Fax, $Fax_XRef, $Event, $Event_Location_Room_Type, $Room_Request, $Invoice, $Payment, $Payment_Info, $Payment_Method, $source_code, $Registrant, $RegistrantCollection)
    {
      $this->Group_Registration = $Group_Registration;
      $this->Organization = $Organization;
      $this->Customer = $Customer;
      $this->Individual_X_Organization = $Individual_X_Organization;
      $this->Individual = $Individual;
      $this->Address = $Address;
      $this->Address_XRef = $Address_XRef;
      $this->Email = $Email;
      $this->Website = $Website;
      $this->Messaging = $Messaging;
      $this->Phone = $Phone;
      $this->Phone_XRef = $Phone_XRef;
      $this->Fax = $Fax;
      $this->Fax_XRef = $Fax_XRef;
      $this->Event = $Event;
      $this->Event_Location_Room_Type = $Event_Location_Room_Type;
      $this->Room_Request = $Room_Request;
      $this->Invoice = $Invoice;
      $this->Payment = $Payment;
      $this->Payment_Info = $Payment_Info;
      $this->Payment_Method = $Payment_Method;
      $this->source_code = $source_code;
      $this->Registrant = $Registrant;
      $this->RegistrantCollection = $RegistrantCollection;
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
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setCurrentKey($CurrentKey)
    {
      $this->CurrentKey = $CurrentKey;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Group_Registration_DataObjectType
     */
    public function getGroup_Registration()
    {
      return $this->Group_Registration;
    }

    /**
     * @param EventsRegistrantGroup_Group_Registration_DataObjectType $Group_Registration
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setGroup_Registration($Group_Registration)
    {
      $this->Group_Registration = $Group_Registration;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Organization_DataObjectType
     */
    public function getOrganization()
    {
      return $this->Organization;
    }

    /**
     * @param EventsRegistrantGroup_Organization_DataObjectType $Organization
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setOrganization($Organization)
    {
      $this->Organization = $Organization;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Customer_DataObjectType
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param EventsRegistrantGroup_Customer_DataObjectType $Customer
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Individual_X_Organization_DataObjectType
     */
    public function getIndividual_X_Organization()
    {
      return $this->Individual_X_Organization;
    }

    /**
     * @param EventsRegistrantGroup_Individual_X_Organization_DataObjectType $Individual_X_Organization
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setIndividual_X_Organization($Individual_X_Organization)
    {
      $this->Individual_X_Organization = $Individual_X_Organization;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Individual_DataObjectType
     */
    public function getIndividual()
    {
      return $this->Individual;
    }

    /**
     * @param EventsRegistrantGroup_Individual_DataObjectType $Individual
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setIndividual($Individual)
    {
      $this->Individual = $Individual;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Address_DataObjectType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param EventsRegistrantGroup_Address_DataObjectType $Address
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Address_XRef_DataObjectType
     */
    public function getAddress_XRef()
    {
      return $this->Address_XRef;
    }

    /**
     * @param EventsRegistrantGroup_Address_XRef_DataObjectType $Address_XRef
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setAddress_XRef($Address_XRef)
    {
      $this->Address_XRef = $Address_XRef;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Email_DataObjectType
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param EventsRegistrantGroup_Email_DataObjectType $Email
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Website_DataObjectType
     */
    public function getWebsite()
    {
      return $this->Website;
    }

    /**
     * @param EventsRegistrantGroup_Website_DataObjectType $Website
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setWebsite($Website)
    {
      $this->Website = $Website;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Messaging_DataObjectType
     */
    public function getMessaging()
    {
      return $this->Messaging;
    }

    /**
     * @param EventsRegistrantGroup_Messaging_DataObjectType $Messaging
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setMessaging($Messaging)
    {
      $this->Messaging = $Messaging;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Phone_DataObjectType
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param EventsRegistrantGroup_Phone_DataObjectType $Phone
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Phone_XRef_DataObjectType
     */
    public function getPhone_XRef()
    {
      return $this->Phone_XRef;
    }

    /**
     * @param EventsRegistrantGroup_Phone_XRef_DataObjectType $Phone_XRef
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setPhone_XRef($Phone_XRef)
    {
      $this->Phone_XRef = $Phone_XRef;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Fax_DataObjectType
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param EventsRegistrantGroup_Fax_DataObjectType $Fax
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Fax_XRef_DataObjectType
     */
    public function getFax_XRef()
    {
      return $this->Fax_XRef;
    }

    /**
     * @param EventsRegistrantGroup_Fax_XRef_DataObjectType $Fax_XRef
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setFax_XRef($Fax_XRef)
    {
      $this->Fax_XRef = $Fax_XRef;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Event_DataObjectType
     */
    public function getEvent()
    {
      return $this->Event;
    }

    /**
     * @param EventsRegistrantGroup_Event_DataObjectType $Event
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setEvent($Event)
    {
      $this->Event = $Event;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Event_Location_Room_Type_DataObjectType
     */
    public function getEvent_Location_Room_Type()
    {
      return $this->Event_Location_Room_Type;
    }

    /**
     * @param EventsRegistrantGroup_Event_Location_Room_Type_DataObjectType $Event_Location_Room_Type
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setEvent_Location_Room_Type($Event_Location_Room_Type)
    {
      $this->Event_Location_Room_Type = $Event_Location_Room_Type;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Room_Request_DataObjectType
     */
    public function getRoom_Request()
    {
      return $this->Room_Request;
    }

    /**
     * @param EventsRegistrantGroup_Room_Request_DataObjectType $Room_Request
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setRoom_Request($Room_Request)
    {
      $this->Room_Request = $Room_Request;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Invoice_DataObjectType
     */
    public function getInvoice()
    {
      return $this->Invoice;
    }

    /**
     * @param EventsRegistrantGroup_Invoice_DataObjectType $Invoice
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setInvoice($Invoice)
    {
      $this->Invoice = $Invoice;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Payment_DataObjectType
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param EventsRegistrantGroup_Payment_DataObjectType $Payment
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function getPayment_Info()
    {
      return $this->Payment_Info;
    }

    /**
     * @param EventsRegistrantGroup_Payment_Info_DataObjectType $Payment_Info
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setPayment_Info($Payment_Info)
    {
      $this->Payment_Info = $Payment_Info;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function getPayment_Method()
    {
      return $this->Payment_Method;
    }

    /**
     * @param EventsRegistrantGroup_Payment_Method_DataObjectType $Payment_Method
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setPayment_Method($Payment_Method)
    {
      $this->Payment_Method = $Payment_Method;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_source_code_DataObjectType
     */
    public function getSource_code()
    {
      return $this->source_code;
    }

    /**
     * @param EventsRegistrantGroup_source_code_DataObjectType $source_code
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setSource_code($source_code)
    {
      $this->source_code = $source_code;
      return $this;
    }

    /**
     * @return EventsRegistrantGroup_Registrant_DataObjectType
     */
    public function getRegistrant()
    {
      return $this->Registrant;
    }

    /**
     * @param EventsRegistrantGroup_Registrant_DataObjectType $Registrant
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setRegistrant($Registrant)
    {
      $this->Registrant = $Registrant;
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
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroupType
     */
    public function setRegistrantCollection($RegistrantCollection)
    {
      $this->RegistrantCollection = $RegistrantCollection;
      return $this;
    }

}
