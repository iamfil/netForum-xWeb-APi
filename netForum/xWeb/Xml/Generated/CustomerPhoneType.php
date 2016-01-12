<?php

namespace netForum\xWeb\Xml\Generated;

class CustomerPhoneType
{

    /**
     * @var av_key_Type $CurrentKey
     */
    protected $CurrentKey = null;

    /**
     * @var IndividualPhone_Phone_XRef_DataObjectType $Phone_XRef
     */
    protected $Phone_XRef = null;

    /**
     * @var IndividualPhone_Customer_DataObjectType $Customer
     */
    protected $Customer = null;

    /**
     * @var IndividualPhone_Phone_DataObjectType $Phone
     */
    protected $Phone = null;

    /**
     * @var IndividualPhone_Country_DataObjectType $Country
     */
    protected $Country = null;

    /**
     * @param IndividualPhone_Phone_XRef_DataObjectType $Phone_XRef
     * @param IndividualPhone_Customer_DataObjectType $Customer
     * @param IndividualPhone_Phone_DataObjectType $Phone
     * @param IndividualPhone_Country_DataObjectType $Country
     */
    public function __construct($Phone_XRef, $Customer, $Phone, $Country)
    {
      $this->Phone_XRef = $Phone_XRef;
      $this->Customer = $Customer;
      $this->Phone = $Phone;
      $this->Country = $Country;
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
     * @return \netForum\xWeb\Xml\Generated\CustomerPhoneType
     */
    public function setCurrentKey($CurrentKey)
    {
      $this->CurrentKey = $CurrentKey;
      return $this;
    }

    /**
     * @return IndividualPhone_Phone_XRef_DataObjectType
     */
    public function getPhone_XRef()
    {
      return $this->Phone_XRef;
    }

    /**
     * @param IndividualPhone_Phone_XRef_DataObjectType $Phone_XRef
     * @return \netForum\xWeb\Xml\Generated\CustomerPhoneType
     */
    public function setPhone_XRef($Phone_XRef)
    {
      $this->Phone_XRef = $Phone_XRef;
      return $this;
    }

    /**
     * @return IndividualPhone_Customer_DataObjectType
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param IndividualPhone_Customer_DataObjectType $Customer
     * @return \netForum\xWeb\Xml\Generated\CustomerPhoneType
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return IndividualPhone_Phone_DataObjectType
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param IndividualPhone_Phone_DataObjectType $Phone
     * @return \netForum\xWeb\Xml\Generated\CustomerPhoneType
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return IndividualPhone_Country_DataObjectType
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param IndividualPhone_Country_DataObjectType $Country
     * @return \netForum\xWeb\Xml\Generated\CustomerPhoneType
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

}
