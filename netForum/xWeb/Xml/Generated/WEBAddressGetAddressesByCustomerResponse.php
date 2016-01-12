<?php

namespace netForum\xWeb\Xml\Generated;

class WEBAddressGetAddressesByCustomerResponse
{

    /**
     * @var WEBAddressGetAddressesByCustomerResult $WEBAddressGetAddressesByCustomerResult
     */
    protected $WEBAddressGetAddressesByCustomerResult = null;

    /**
     * @param WEBAddressGetAddressesByCustomerResult $WEBAddressGetAddressesByCustomerResult
     */
    public function __construct($WEBAddressGetAddressesByCustomerResult)
    {
      $this->WEBAddressGetAddressesByCustomerResult = $WEBAddressGetAddressesByCustomerResult;
    }

    /**
     * @return WEBAddressGetAddressesByCustomerResult
     */
    public function getWEBAddressGetAddressesByCustomerResult()
    {
      return $this->WEBAddressGetAddressesByCustomerResult;
    }

    /**
     * @param WEBAddressGetAddressesByCustomerResult $WEBAddressGetAddressesByCustomerResult
     * @return \netForum\xWeb\Xml\Generated\WEBAddressGetAddressesByCustomerResponse
     */
    public function setWEBAddressGetAddressesByCustomerResult($WEBAddressGetAddressesByCustomerResult)
    {
      $this->WEBAddressGetAddressesByCustomerResult = $WEBAddressGetAddressesByCustomerResult;
      return $this;
    }

}
