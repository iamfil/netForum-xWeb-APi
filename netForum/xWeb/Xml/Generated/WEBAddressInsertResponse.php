<?php

namespace netForum\xWeb\Xml\Generated;

class WEBAddressInsertResponse
{

    /**
     * @var CustomerAddressType $WEBAddressInsertResult
     */
    protected $WEBAddressInsertResult = null;

    /**
     * @param CustomerAddressType $WEBAddressInsertResult
     */
    public function __construct($WEBAddressInsertResult)
    {
      $this->WEBAddressInsertResult = $WEBAddressInsertResult;
    }

    /**
     * @return CustomerAddressType
     */
    public function getWEBAddressInsertResult()
    {
      return $this->WEBAddressInsertResult;
    }

    /**
     * @param CustomerAddressType $WEBAddressInsertResult
     * @return \netForum\xWeb\Xml\Generated\WEBAddressInsertResponse
     */
    public function setWEBAddressInsertResult($WEBAddressInsertResult)
    {
      $this->WEBAddressInsertResult = $WEBAddressInsertResult;
      return $this;
    }

}
