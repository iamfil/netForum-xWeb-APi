<?php

namespace netForum\xWeb\Xml\Generated;

class WEBPhoneGetPhonesByCustomerResponse
{

    /**
     * @var WEBPhoneGetPhonesByCustomerResult $WEBPhoneGetPhonesByCustomerResult
     */
    protected $WEBPhoneGetPhonesByCustomerResult = null;

    /**
     * @param WEBPhoneGetPhonesByCustomerResult $WEBPhoneGetPhonesByCustomerResult
     */
    public function __construct($WEBPhoneGetPhonesByCustomerResult)
    {
      $this->WEBPhoneGetPhonesByCustomerResult = $WEBPhoneGetPhonesByCustomerResult;
    }

    /**
     * @return WEBPhoneGetPhonesByCustomerResult
     */
    public function getWEBPhoneGetPhonesByCustomerResult()
    {
      return $this->WEBPhoneGetPhonesByCustomerResult;
    }

    /**
     * @param WEBPhoneGetPhonesByCustomerResult $WEBPhoneGetPhonesByCustomerResult
     * @return \netForum\xWeb\Xml\Generated\WEBPhoneGetPhonesByCustomerResponse
     */
    public function setWEBPhoneGetPhonesByCustomerResult($WEBPhoneGetPhonesByCustomerResult)
    {
      $this->WEBPhoneGetPhonesByCustomerResult = $WEBPhoneGetPhonesByCustomerResult;
      return $this;
    }

}
