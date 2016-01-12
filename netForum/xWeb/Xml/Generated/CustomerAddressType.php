<?php

namespace netForum\xWeb\Xml\Generated;

class CustomerAddressType
{

    /**
     * @var av_key_Type $CurrentKey
     */
    protected $CurrentKey = null;

    /**
     * @var IndividualAddress_Address_XRef_DataObjectType $Address_XRef
     */
    protected $Address_XRef = null;

    /**
     * @var IndividualAddress_Customer_DataObjectType $Customer
     */
    protected $Customer = null;

    /**
     * @var IndividualAddress_Individual_DataObjectType $Individual
     */
    protected $Individual = null;

    /**
     * @var IndividualAddress_Organization_DataObjectType $Organization
     */
    protected $Organization = null;

    /**
     * @var IndividualAddress_Chapter_DataObjectType $Chapter
     */
    protected $Chapter = null;

    /**
     * @var IndividualAddress_Address_DataObjectType $Address
     */
    protected $Address = null;

    /**
     * @var IndividualAddress_Address_Change_Log_DataObjectType $Address_Change_Log
     */
    protected $Address_Change_Log = null;

    /**
     * @var IndividualAddress_Country_DataObjectType $Country
     */
    protected $Country = null;

    /**
     * @var IndividualAddress_Primary_Affiliation_DataObjectType $Primary_Affiliation
     */
    protected $Primary_Affiliation = null;

    /**
     * @var IndividualAddress_StateTerritory_DataObjectType $StateTerritory
     */
    protected $StateTerritory = null;

    /**
     * @param IndividualAddress_Address_XRef_DataObjectType $Address_XRef
     * @param IndividualAddress_Customer_DataObjectType $Customer
     * @param IndividualAddress_Individual_DataObjectType $Individual
     * @param IndividualAddress_Organization_DataObjectType $Organization
     * @param IndividualAddress_Chapter_DataObjectType $Chapter
     * @param IndividualAddress_Address_DataObjectType $Address
     * @param IndividualAddress_Address_Change_Log_DataObjectType $Address_Change_Log
     * @param IndividualAddress_Country_DataObjectType $Country
     * @param IndividualAddress_Primary_Affiliation_DataObjectType $Primary_Affiliation
     * @param IndividualAddress_StateTerritory_DataObjectType $StateTerritory
     */
    public function __construct($Address_XRef, $Customer, $Individual, $Organization, $Chapter, $Address, $Address_Change_Log, $Country, $Primary_Affiliation, $StateTerritory)
    {
      $this->Address_XRef = $Address_XRef;
      $this->Customer = $Customer;
      $this->Individual = $Individual;
      $this->Organization = $Organization;
      $this->Chapter = $Chapter;
      $this->Address = $Address;
      $this->Address_Change_Log = $Address_Change_Log;
      $this->Country = $Country;
      $this->Primary_Affiliation = $Primary_Affiliation;
      $this->StateTerritory = $StateTerritory;
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
     * @return \netForum\xWeb\Xml\Generated\CustomerAddressType
     */
    public function setCurrentKey($CurrentKey)
    {
      $this->CurrentKey = $CurrentKey;
      return $this;
    }

    /**
     * @return IndividualAddress_Address_XRef_DataObjectType
     */
    public function getAddress_XRef()
    {
      return $this->Address_XRef;
    }

    /**
     * @param IndividualAddress_Address_XRef_DataObjectType $Address_XRef
     * @return \netForum\xWeb\Xml\Generated\CustomerAddressType
     */
    public function setAddress_XRef($Address_XRef)
    {
      $this->Address_XRef = $Address_XRef;
      return $this;
    }

    /**
     * @return IndividualAddress_Customer_DataObjectType
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param IndividualAddress_Customer_DataObjectType $Customer
     * @return \netForum\xWeb\Xml\Generated\CustomerAddressType
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return IndividualAddress_Individual_DataObjectType
     */
    public function getIndividual()
    {
      return $this->Individual;
    }

    /**
     * @param IndividualAddress_Individual_DataObjectType $Individual
     * @return \netForum\xWeb\Xml\Generated\CustomerAddressType
     */
    public function setIndividual($Individual)
    {
      $this->Individual = $Individual;
      return $this;
    }

    /**
     * @return IndividualAddress_Organization_DataObjectType
     */
    public function getOrganization()
    {
      return $this->Organization;
    }

    /**
     * @param IndividualAddress_Organization_DataObjectType $Organization
     * @return \netForum\xWeb\Xml\Generated\CustomerAddressType
     */
    public function setOrganization($Organization)
    {
      $this->Organization = $Organization;
      return $this;
    }

    /**
     * @return IndividualAddress_Chapter_DataObjectType
     */
    public function getChapter()
    {
      return $this->Chapter;
    }

    /**
     * @param IndividualAddress_Chapter_DataObjectType $Chapter
     * @return \netForum\xWeb\Xml\Generated\CustomerAddressType
     */
    public function setChapter($Chapter)
    {
      $this->Chapter = $Chapter;
      return $this;
    }

    /**
     * @return IndividualAddress_Address_DataObjectType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param IndividualAddress_Address_DataObjectType $Address
     * @return \netForum\xWeb\Xml\Generated\CustomerAddressType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return IndividualAddress_Address_Change_Log_DataObjectType
     */
    public function getAddress_Change_Log()
    {
      return $this->Address_Change_Log;
    }

    /**
     * @param IndividualAddress_Address_Change_Log_DataObjectType $Address_Change_Log
     * @return \netForum\xWeb\Xml\Generated\CustomerAddressType
     */
    public function setAddress_Change_Log($Address_Change_Log)
    {
      $this->Address_Change_Log = $Address_Change_Log;
      return $this;
    }

    /**
     * @return IndividualAddress_Country_DataObjectType
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param IndividualAddress_Country_DataObjectType $Country
     * @return \netForum\xWeb\Xml\Generated\CustomerAddressType
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return IndividualAddress_Primary_Affiliation_DataObjectType
     */
    public function getPrimary_Affiliation()
    {
      return $this->Primary_Affiliation;
    }

    /**
     * @param IndividualAddress_Primary_Affiliation_DataObjectType $Primary_Affiliation
     * @return \netForum\xWeb\Xml\Generated\CustomerAddressType
     */
    public function setPrimary_Affiliation($Primary_Affiliation)
    {
      $this->Primary_Affiliation = $Primary_Affiliation;
      return $this;
    }

    /**
     * @return IndividualAddress_StateTerritory_DataObjectType
     */
    public function getStateTerritory()
    {
      return $this->StateTerritory;
    }

    /**
     * @param IndividualAddress_StateTerritory_DataObjectType $StateTerritory
     * @return \netForum\xWeb\Xml\Generated\CustomerAddressType
     */
    public function setStateTerritory($StateTerritory)
    {
      $this->StateTerritory = $StateTerritory;
      return $this;
    }

}
