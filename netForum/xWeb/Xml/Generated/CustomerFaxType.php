<?php

namespace netForum\xWeb\Xml\Generated;

class CustomerFaxType
{

    /**
     * @var av_key_Type $CurrentKey
     */
    protected $CurrentKey = null;

    /**
     * @var IndividualFax_Fax_XRef_DataObjectType $Fax_XRef
     */
    protected $Fax_XRef = null;

    /**
     * @var IndividualFax_Customer_DataObjectType $Customer
     */
    protected $Customer = null;

    /**
     * @var IndividualFax_Fax_DataObjectType $Fax
     */
    protected $Fax = null;

    /**
     * @var IndividualFax_Country_DataObjectType $Country
     */
    protected $Country = null;

    /**
     * @param IndividualFax_Fax_XRef_DataObjectType $Fax_XRef
     * @param IndividualFax_Customer_DataObjectType $Customer
     * @param IndividualFax_Fax_DataObjectType $Fax
     * @param IndividualFax_Country_DataObjectType $Country
     */
    public function __construct($Fax_XRef, $Customer, $Fax, $Country)
    {
      $this->Fax_XRef = $Fax_XRef;
      $this->Customer = $Customer;
      $this->Fax = $Fax;
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
     * @return \netForum\xWeb\Xml\Generated\CustomerFaxType
     */
    public function setCurrentKey($CurrentKey)
    {
      $this->CurrentKey = $CurrentKey;
      return $this;
    }

    /**
     * @return IndividualFax_Fax_XRef_DataObjectType
     */
    public function getFax_XRef()
    {
      return $this->Fax_XRef;
    }

    /**
     * @param IndividualFax_Fax_XRef_DataObjectType $Fax_XRef
     * @return \netForum\xWeb\Xml\Generated\CustomerFaxType
     */
    public function setFax_XRef($Fax_XRef)
    {
      $this->Fax_XRef = $Fax_XRef;
      return $this;
    }

    /**
     * @return IndividualFax_Customer_DataObjectType
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param IndividualFax_Customer_DataObjectType $Customer
     * @return \netForum\xWeb\Xml\Generated\CustomerFaxType
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return IndividualFax_Fax_DataObjectType
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param IndividualFax_Fax_DataObjectType $Fax
     * @return \netForum\xWeb\Xml\Generated\CustomerFaxType
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

    /**
     * @return IndividualFax_Country_DataObjectType
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param IndividualFax_Country_DataObjectType $Country
     * @return \netForum\xWeb\Xml\Generated\CustomerFaxType
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

}
