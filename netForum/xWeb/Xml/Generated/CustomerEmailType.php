<?php

namespace netForum\xWeb\Xml\Generated;

class CustomerEmailType
{

    /**
     * @var av_key_Type $CurrentKey
     */
    protected $CurrentKey = null;

    /**
     * @var IndividualEmail_Email_DataObjectType $Email
     */
    protected $Email = null;

    /**
     * @var IndividualEmail_Customer_DataObjectType $Customer
     */
    protected $Customer = null;

    /**
     * @param IndividualEmail_Email_DataObjectType $Email
     * @param IndividualEmail_Customer_DataObjectType $Customer
     */
    public function __construct($Email, $Customer)
    {
      $this->Email = $Email;
      $this->Customer = $Customer;
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
     * @return \netForum\xWeb\Xml\Generated\CustomerEmailType
     */
    public function setCurrentKey($CurrentKey)
    {
      $this->CurrentKey = $CurrentKey;
      return $this;
    }

    /**
     * @return IndividualEmail_Email_DataObjectType
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param IndividualEmail_Email_DataObjectType $Email
     * @return \netForum\xWeb\Xml\Generated\CustomerEmailType
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return IndividualEmail_Customer_DataObjectType
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param IndividualEmail_Customer_DataObjectType $Customer
     * @return \netForum\xWeb\Xml\Generated\CustomerEmailType
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

}
