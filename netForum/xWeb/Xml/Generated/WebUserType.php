<?php

namespace netForum\xWeb\Xml\Generated;

class WebUserType
{

    /**
     * @var av_key_Type $CurrentKey
     */
    protected $CurrentKey = null;

    /**
     * @var WebUser_Individual_DataObjectType $Individual
     */
    protected $Individual = null;

    /**
     * @var WebUser_Customer_DataObjectType $Customer
     */
    protected $Customer = null;

    /**
     * @var WebUser_Email_DataObjectType $Email
     */
    protected $Email = null;

    /**
     * @var WebUser_Business_Address_DataObjectType $Business_Address
     */
    protected $Business_Address = null;

    /**
     * @var WebUser_Business_Phone_XRef_DataObjectType $Business_Phone_XRef
     */
    protected $Business_Phone_XRef = null;

    /**
     * @var WebUser_Business_Phone_DataObjectType $Business_Phone
     */
    protected $Business_Phone = null;

    /**
     * @var WebUser_Business_Fax_XRef_DataObjectType $Business_Fax_XRef
     */
    protected $Business_Fax_XRef = null;

    /**
     * @var WebUser_Business_Fax_DataObjectType $Business_Fax
     */
    protected $Business_Fax = null;

    /**
     * @param WebUser_Individual_DataObjectType $Individual
     * @param WebUser_Customer_DataObjectType $Customer
     * @param WebUser_Email_DataObjectType $Email
     * @param WebUser_Business_Address_DataObjectType $Business_Address
     * @param WebUser_Business_Phone_XRef_DataObjectType $Business_Phone_XRef
     * @param WebUser_Business_Phone_DataObjectType $Business_Phone
     * @param WebUser_Business_Fax_XRef_DataObjectType $Business_Fax_XRef
     * @param WebUser_Business_Fax_DataObjectType $Business_Fax
     */
    public function __construct($Individual, $Customer, $Email, $Business_Address, $Business_Phone_XRef, $Business_Phone, $Business_Fax_XRef, $Business_Fax)
    {
      $this->Individual = $Individual;
      $this->Customer = $Customer;
      $this->Email = $Email;
      $this->Business_Address = $Business_Address;
      $this->Business_Phone_XRef = $Business_Phone_XRef;
      $this->Business_Phone = $Business_Phone;
      $this->Business_Fax_XRef = $Business_Fax_XRef;
      $this->Business_Fax = $Business_Fax;
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
     * @return \netForum\xWeb\Xml\Generated\WebUserType
     */
    public function setCurrentKey($CurrentKey)
    {
      $this->CurrentKey = $CurrentKey;
      return $this;
    }

    /**
     * @return WebUser_Individual_DataObjectType
     */
    public function getIndividual()
    {
      return $this->Individual;
    }

    /**
     * @param WebUser_Individual_DataObjectType $Individual
     * @return \netForum\xWeb\Xml\Generated\WebUserType
     */
    public function setIndividual($Individual)
    {
      $this->Individual = $Individual;
      return $this;
    }

    /**
     * @return WebUser_Customer_DataObjectType
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param WebUser_Customer_DataObjectType $Customer
     * @return \netForum\xWeb\Xml\Generated\WebUserType
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return WebUser_Email_DataObjectType
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param WebUser_Email_DataObjectType $Email
     * @return \netForum\xWeb\Xml\Generated\WebUserType
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return WebUser_Business_Address_DataObjectType
     */
    public function getBusiness_Address()
    {
      return $this->Business_Address;
    }

    /**
     * @param WebUser_Business_Address_DataObjectType $Business_Address
     * @return \netForum\xWeb\Xml\Generated\WebUserType
     */
    public function setBusiness_Address($Business_Address)
    {
      $this->Business_Address = $Business_Address;
      return $this;
    }

    /**
     * @return WebUser_Business_Phone_XRef_DataObjectType
     */
    public function getBusiness_Phone_XRef()
    {
      return $this->Business_Phone_XRef;
    }

    /**
     * @param WebUser_Business_Phone_XRef_DataObjectType $Business_Phone_XRef
     * @return \netForum\xWeb\Xml\Generated\WebUserType
     */
    public function setBusiness_Phone_XRef($Business_Phone_XRef)
    {
      $this->Business_Phone_XRef = $Business_Phone_XRef;
      return $this;
    }

    /**
     * @return WebUser_Business_Phone_DataObjectType
     */
    public function getBusiness_Phone()
    {
      return $this->Business_Phone;
    }

    /**
     * @param WebUser_Business_Phone_DataObjectType $Business_Phone
     * @return \netForum\xWeb\Xml\Generated\WebUserType
     */
    public function setBusiness_Phone($Business_Phone)
    {
      $this->Business_Phone = $Business_Phone;
      return $this;
    }

    /**
     * @return WebUser_Business_Fax_XRef_DataObjectType
     */
    public function getBusiness_Fax_XRef()
    {
      return $this->Business_Fax_XRef;
    }

    /**
     * @param WebUser_Business_Fax_XRef_DataObjectType $Business_Fax_XRef
     * @return \netForum\xWeb\Xml\Generated\WebUserType
     */
    public function setBusiness_Fax_XRef($Business_Fax_XRef)
    {
      $this->Business_Fax_XRef = $Business_Fax_XRef;
      return $this;
    }

    /**
     * @return WebUser_Business_Fax_DataObjectType
     */
    public function getBusiness_Fax()
    {
      return $this->Business_Fax;
    }

    /**
     * @param WebUser_Business_Fax_DataObjectType $Business_Fax
     * @return \netForum\xWeb\Xml\Generated\WebUserType
     */
    public function setBusiness_Fax($Business_Fax)
    {
      $this->Business_Fax = $Business_Fax;
      return $this;
    }

}
