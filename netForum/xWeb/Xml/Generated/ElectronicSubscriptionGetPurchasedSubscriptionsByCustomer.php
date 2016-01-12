<?php

namespace netForum\xWeb\Xml\Generated;

class ElectronicSubscriptionGetPurchasedSubscriptionsByCustomer
{

    /**
     * @var guid $OrgCstKey
     */
    protected $OrgCstKey = null;

    /**
     * @var string $actionDate
     */
    protected $actionDate = null;

    /**
     * @var string $oIPAddress
     */
    protected $oIPAddress = null;

    /**
     * @param guid $OrgCstKey
     * @param string $actionDate
     * @param string $oIPAddress
     */
    public function __construct($OrgCstKey, $actionDate, $oIPAddress)
    {
      $this->OrgCstKey = $OrgCstKey;
      $this->actionDate = $actionDate;
      $this->oIPAddress = $oIPAddress;
    }

    /**
     * @return guid
     */
    public function getOrgCstKey()
    {
      return $this->OrgCstKey;
    }

    /**
     * @param guid $OrgCstKey
     * @return \netForum\xWeb\Xml\Generated\ElectronicSubscriptionGetPurchasedSubscriptionsByCustomer
     */
    public function setOrgCstKey($OrgCstKey)
    {
      $this->OrgCstKey = $OrgCstKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getActionDate()
    {
      return $this->actionDate;
    }

    /**
     * @param string $actionDate
     * @return \netForum\xWeb\Xml\Generated\ElectronicSubscriptionGetPurchasedSubscriptionsByCustomer
     */
    public function setActionDate($actionDate)
    {
      $this->actionDate = $actionDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getOIPAddress()
    {
      return $this->oIPAddress;
    }

    /**
     * @param string $oIPAddress
     * @return \netForum\xWeb\Xml\Generated\ElectronicSubscriptionGetPurchasedSubscriptionsByCustomer
     */
    public function setOIPAddress($oIPAddress)
    {
      $this->oIPAddress = $oIPAddress;
      return $this;
    }

}
