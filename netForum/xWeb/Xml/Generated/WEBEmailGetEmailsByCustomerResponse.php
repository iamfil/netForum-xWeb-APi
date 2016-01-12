<?php

namespace netForum\xWeb\Xml\Generated;

class WEBEmailGetEmailsByCustomerResponse
{

    /**
     * @var WEBEmailGetEmailsByCustomerResult $WEBEmailGetEmailsByCustomerResult
     */
    protected $WEBEmailGetEmailsByCustomerResult = null;

    /**
     * @param WEBEmailGetEmailsByCustomerResult $WEBEmailGetEmailsByCustomerResult
     */
    public function __construct($WEBEmailGetEmailsByCustomerResult)
    {
      $this->WEBEmailGetEmailsByCustomerResult = $WEBEmailGetEmailsByCustomerResult;
    }

    /**
     * @return WEBEmailGetEmailsByCustomerResult
     */
    public function getWEBEmailGetEmailsByCustomerResult()
    {
      return $this->WEBEmailGetEmailsByCustomerResult;
    }

    /**
     * @param WEBEmailGetEmailsByCustomerResult $WEBEmailGetEmailsByCustomerResult
     * @return \netForum\xWeb\Xml\Generated\WEBEmailGetEmailsByCustomerResponse
     */
    public function setWEBEmailGetEmailsByCustomerResult($WEBEmailGetEmailsByCustomerResult)
    {
      $this->WEBEmailGetEmailsByCustomerResult = $WEBEmailGetEmailsByCustomerResult;
      return $this;
    }

}
