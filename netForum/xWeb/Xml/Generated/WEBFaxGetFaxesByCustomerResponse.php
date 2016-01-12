<?php

namespace netForum\xWeb\Xml\Generated;

class WEBFaxGetFaxesByCustomerResponse
{

    /**
     * @var WEBFaxGetFaxesByCustomerResult $WEBFaxGetFaxesByCustomerResult
     */
    protected $WEBFaxGetFaxesByCustomerResult = null;

    /**
     * @param WEBFaxGetFaxesByCustomerResult $WEBFaxGetFaxesByCustomerResult
     */
    public function __construct($WEBFaxGetFaxesByCustomerResult)
    {
      $this->WEBFaxGetFaxesByCustomerResult = $WEBFaxGetFaxesByCustomerResult;
    }

    /**
     * @return WEBFaxGetFaxesByCustomerResult
     */
    public function getWEBFaxGetFaxesByCustomerResult()
    {
      return $this->WEBFaxGetFaxesByCustomerResult;
    }

    /**
     * @param WEBFaxGetFaxesByCustomerResult $WEBFaxGetFaxesByCustomerResult
     * @return \netForum\xWeb\Xml\Generated\WEBFaxGetFaxesByCustomerResponse
     */
    public function setWEBFaxGetFaxesByCustomerResult($WEBFaxGetFaxesByCustomerResult)
    {
      $this->WEBFaxGetFaxesByCustomerResult = $WEBFaxGetFaxesByCustomerResult;
      return $this;
    }

}
