<?php

namespace netForum\xWeb\Xml\Generated;

class WEBAddressGetResponse
{

    /**
     * @var CustomerAddressType $WEBAddressGetResult
     */
    protected $WEBAddressGetResult = null;

    /**
     * @param CustomerAddressType $WEBAddressGetResult
     */
    public function __construct($WEBAddressGetResult)
    {
      $this->WEBAddressGetResult = $WEBAddressGetResult;
    }

    /**
     * @return CustomerAddressType
     */
    public function getWEBAddressGetResult()
    {
      return $this->WEBAddressGetResult;
    }

    /**
     * @param CustomerAddressType $WEBAddressGetResult
     * @return \netForum\xWeb\Xml\Generated\WEBAddressGetResponse
     */
    public function setWEBAddressGetResult($WEBAddressGetResult)
    {
      $this->WEBAddressGetResult = $WEBAddressGetResult;
      return $this;
    }

}
