<?php

namespace netForum\xWeb\Xml\Generated;

class WEBAddressGetTypesResponse
{

    /**
     * @var WEBAddressGetTypesResult $WEBAddressGetTypesResult
     */
    protected $WEBAddressGetTypesResult = null;

    /**
     * @param WEBAddressGetTypesResult $WEBAddressGetTypesResult
     */
    public function __construct($WEBAddressGetTypesResult)
    {
      $this->WEBAddressGetTypesResult = $WEBAddressGetTypesResult;
    }

    /**
     * @return WEBAddressGetTypesResult
     */
    public function getWEBAddressGetTypesResult()
    {
      return $this->WEBAddressGetTypesResult;
    }

    /**
     * @param WEBAddressGetTypesResult $WEBAddressGetTypesResult
     * @return \netForum\xWeb\Xml\Generated\WEBAddressGetTypesResponse
     */
    public function setWEBAddressGetTypesResult($WEBAddressGetTypesResult)
    {
      $this->WEBAddressGetTypesResult = $WEBAddressGetTypesResult;
      return $this;
    }

}
