<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetEventRegistrantGroupIndividualList
{

    /**
     * @var guid $EventKey
     */
    protected $EventKey = null;

    /**
     * @var guid $IndividualCustomerKey
     */
    protected $IndividualCustomerKey = null;

    /**
     * @var guid $OrganizationCustomerKey
     */
    protected $OrganizationCustomerKey = null;

    /**
     * @param guid $EventKey
     * @param guid $IndividualCustomerKey
     * @param guid $OrganizationCustomerKey
     */
    public function __construct($EventKey, $IndividualCustomerKey, $OrganizationCustomerKey)
    {
      $this->EventKey = $EventKey;
      $this->IndividualCustomerKey = $IndividualCustomerKey;
      $this->OrganizationCustomerKey = $OrganizationCustomerKey;
    }

    /**
     * @return guid
     */
    public function getEventKey()
    {
      return $this->EventKey;
    }

    /**
     * @param guid $EventKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetEventRegistrantGroupIndividualList
     */
    public function setEventKey($EventKey)
    {
      $this->EventKey = $EventKey;
      return $this;
    }

    /**
     * @return guid
     */
    public function getIndividualCustomerKey()
    {
      return $this->IndividualCustomerKey;
    }

    /**
     * @param guid $IndividualCustomerKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetEventRegistrantGroupIndividualList
     */
    public function setIndividualCustomerKey($IndividualCustomerKey)
    {
      $this->IndividualCustomerKey = $IndividualCustomerKey;
      return $this;
    }

    /**
     * @return guid
     */
    public function getOrganizationCustomerKey()
    {
      return $this->OrganizationCustomerKey;
    }

    /**
     * @param guid $OrganizationCustomerKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetEventRegistrantGroupIndividualList
     */
    public function setOrganizationCustomerKey($OrganizationCustomerKey)
    {
      $this->OrganizationCustomerKey = $OrganizationCustomerKey;
      return $this;
    }

}
