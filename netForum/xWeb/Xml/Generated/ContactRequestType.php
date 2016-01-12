<?php

namespace netForum\xWeb\Xml\Generated;

class ContactRequestType
{

    /**
     * @var av_key_Type $CurrentKey
     */
    protected $CurrentKey = null;

    /**
     * @var ContactRequest_Contact_Request_DataObjectType $Contact_Request
     */
    protected $Contact_Request = null;

    /**
     * @var ContactRequest_Customer_DataObjectType $Customer
     */
    protected $Customer = null;

    /**
     * @var ContactRequest_Individual_DataObjectType $Individual
     */
    protected $Individual = null;

    /**
     * @var ContactRequest_Comments_DataObjectType $Comments
     */
    protected $Comments = null;

    /**
     * @var ContactRequest_Document_DataObjectType $Document
     */
    protected $Document = null;

    /**
     * @var ContactRequest_Primary_Address_XRef_DataObjectType $Primary_Address_XRef
     */
    protected $Primary_Address_XRef = null;

    /**
     * @var ContactRequest_Primary_Address_DataObjectType $Primary_Address
     */
    protected $Primary_Address = null;

    /**
     * @var ContactRequest_Assignment_Customer_DataObjectType $Assignment_Customer
     */
    protected $Assignment_Customer = null;

    /**
     * @var ContactRequest_Customer_Alias_DataObjectType $Customer_Alias
     */
    protected $Customer_Alias = null;

    /**
     * @var ContactRequest_Customer_Activity_DataObjectType $Customer_Activity
     */
    protected $Customer_Activity = null;

    /**
     * @var ContactRequest_Assignment_DataObjectType $Assignment
     */
    protected $Assignment = null;

    /**
     * @var ContactRequest_Org_Customer_DataObjectType $Org_Customer
     */
    protected $Org_Customer = null;

    /**
     * @var ContactRequest_Org_Request_DataObjectType $Org_Request
     */
    protected $Org_Request = null;

    /**
     * @param ContactRequest_Contact_Request_DataObjectType $Contact_Request
     * @param ContactRequest_Customer_DataObjectType $Customer
     * @param ContactRequest_Individual_DataObjectType $Individual
     * @param ContactRequest_Comments_DataObjectType $Comments
     * @param ContactRequest_Document_DataObjectType $Document
     * @param ContactRequest_Primary_Address_XRef_DataObjectType $Primary_Address_XRef
     * @param ContactRequest_Primary_Address_DataObjectType $Primary_Address
     * @param ContactRequest_Assignment_Customer_DataObjectType $Assignment_Customer
     * @param ContactRequest_Customer_Alias_DataObjectType $Customer_Alias
     * @param ContactRequest_Customer_Activity_DataObjectType $Customer_Activity
     * @param ContactRequest_Assignment_DataObjectType $Assignment
     * @param ContactRequest_Org_Customer_DataObjectType $Org_Customer
     * @param ContactRequest_Org_Request_DataObjectType $Org_Request
     */
    public function __construct($Contact_Request, $Customer, $Individual, $Comments, $Document, $Primary_Address_XRef, $Primary_Address, $Assignment_Customer, $Customer_Alias, $Customer_Activity, $Assignment, $Org_Customer, $Org_Request)
    {
      $this->Contact_Request = $Contact_Request;
      $this->Customer = $Customer;
      $this->Individual = $Individual;
      $this->Comments = $Comments;
      $this->Document = $Document;
      $this->Primary_Address_XRef = $Primary_Address_XRef;
      $this->Primary_Address = $Primary_Address;
      $this->Assignment_Customer = $Assignment_Customer;
      $this->Customer_Alias = $Customer_Alias;
      $this->Customer_Activity = $Customer_Activity;
      $this->Assignment = $Assignment;
      $this->Org_Customer = $Org_Customer;
      $this->Org_Request = $Org_Request;
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
     * @return \netForum\xWeb\Xml\Generated\ContactRequestType
     */
    public function setCurrentKey($CurrentKey)
    {
      $this->CurrentKey = $CurrentKey;
      return $this;
    }

    /**
     * @return ContactRequest_Contact_Request_DataObjectType
     */
    public function getContact_Request()
    {
      return $this->Contact_Request;
    }

    /**
     * @param ContactRequest_Contact_Request_DataObjectType $Contact_Request
     * @return \netForum\xWeb\Xml\Generated\ContactRequestType
     */
    public function setContact_Request($Contact_Request)
    {
      $this->Contact_Request = $Contact_Request;
      return $this;
    }

    /**
     * @return ContactRequest_Customer_DataObjectType
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param ContactRequest_Customer_DataObjectType $Customer
     * @return \netForum\xWeb\Xml\Generated\ContactRequestType
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return ContactRequest_Individual_DataObjectType
     */
    public function getIndividual()
    {
      return $this->Individual;
    }

    /**
     * @param ContactRequest_Individual_DataObjectType $Individual
     * @return \netForum\xWeb\Xml\Generated\ContactRequestType
     */
    public function setIndividual($Individual)
    {
      $this->Individual = $Individual;
      return $this;
    }

    /**
     * @return ContactRequest_Comments_DataObjectType
     */
    public function getComments()
    {
      return $this->Comments;
    }

    /**
     * @param ContactRequest_Comments_DataObjectType $Comments
     * @return \netForum\xWeb\Xml\Generated\ContactRequestType
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
      return $this;
    }

    /**
     * @return ContactRequest_Document_DataObjectType
     */
    public function getDocument()
    {
      return $this->Document;
    }

    /**
     * @param ContactRequest_Document_DataObjectType $Document
     * @return \netForum\xWeb\Xml\Generated\ContactRequestType
     */
    public function setDocument($Document)
    {
      $this->Document = $Document;
      return $this;
    }

    /**
     * @return ContactRequest_Primary_Address_XRef_DataObjectType
     */
    public function getPrimary_Address_XRef()
    {
      return $this->Primary_Address_XRef;
    }

    /**
     * @param ContactRequest_Primary_Address_XRef_DataObjectType $Primary_Address_XRef
     * @return \netForum\xWeb\Xml\Generated\ContactRequestType
     */
    public function setPrimary_Address_XRef($Primary_Address_XRef)
    {
      $this->Primary_Address_XRef = $Primary_Address_XRef;
      return $this;
    }

    /**
     * @return ContactRequest_Primary_Address_DataObjectType
     */
    public function getPrimary_Address()
    {
      return $this->Primary_Address;
    }

    /**
     * @param ContactRequest_Primary_Address_DataObjectType $Primary_Address
     * @return \netForum\xWeb\Xml\Generated\ContactRequestType
     */
    public function setPrimary_Address($Primary_Address)
    {
      $this->Primary_Address = $Primary_Address;
      return $this;
    }

    /**
     * @return ContactRequest_Assignment_Customer_DataObjectType
     */
    public function getAssignment_Customer()
    {
      return $this->Assignment_Customer;
    }

    /**
     * @param ContactRequest_Assignment_Customer_DataObjectType $Assignment_Customer
     * @return \netForum\xWeb\Xml\Generated\ContactRequestType
     */
    public function setAssignment_Customer($Assignment_Customer)
    {
      $this->Assignment_Customer = $Assignment_Customer;
      return $this;
    }

    /**
     * @return ContactRequest_Customer_Alias_DataObjectType
     */
    public function getCustomer_Alias()
    {
      return $this->Customer_Alias;
    }

    /**
     * @param ContactRequest_Customer_Alias_DataObjectType $Customer_Alias
     * @return \netForum\xWeb\Xml\Generated\ContactRequestType
     */
    public function setCustomer_Alias($Customer_Alias)
    {
      $this->Customer_Alias = $Customer_Alias;
      return $this;
    }

    /**
     * @return ContactRequest_Customer_Activity_DataObjectType
     */
    public function getCustomer_Activity()
    {
      return $this->Customer_Activity;
    }

    /**
     * @param ContactRequest_Customer_Activity_DataObjectType $Customer_Activity
     * @return \netForum\xWeb\Xml\Generated\ContactRequestType
     */
    public function setCustomer_Activity($Customer_Activity)
    {
      $this->Customer_Activity = $Customer_Activity;
      return $this;
    }

    /**
     * @return ContactRequest_Assignment_DataObjectType
     */
    public function getAssignment()
    {
      return $this->Assignment;
    }

    /**
     * @param ContactRequest_Assignment_DataObjectType $Assignment
     * @return \netForum\xWeb\Xml\Generated\ContactRequestType
     */
    public function setAssignment($Assignment)
    {
      $this->Assignment = $Assignment;
      return $this;
    }

    /**
     * @return ContactRequest_Org_Customer_DataObjectType
     */
    public function getOrg_Customer()
    {
      return $this->Org_Customer;
    }

    /**
     * @param ContactRequest_Org_Customer_DataObjectType $Org_Customer
     * @return \netForum\xWeb\Xml\Generated\ContactRequestType
     */
    public function setOrg_Customer($Org_Customer)
    {
      $this->Org_Customer = $Org_Customer;
      return $this;
    }

    /**
     * @return ContactRequest_Org_Request_DataObjectType
     */
    public function getOrg_Request()
    {
      return $this->Org_Request;
    }

    /**
     * @param ContactRequest_Org_Request_DataObjectType $Org_Request
     * @return \netForum\xWeb\Xml\Generated\ContactRequestType
     */
    public function setOrg_Request($Org_Request)
    {
      $this->Org_Request = $Org_Request;
      return $this;
    }

}
