<?php

namespace netForum\xWeb\Xml\Generated;

class WEBAddressGetCountriesResponse
{

    /**
     * @var WEBAddressGetCountriesResult $WEBAddressGetCountriesResult
     */
    protected $WEBAddressGetCountriesResult = null;

    /**
     * @param WEBAddressGetCountriesResult $WEBAddressGetCountriesResult
     */
    public function __construct($WEBAddressGetCountriesResult)
    {
      $this->WEBAddressGetCountriesResult = $WEBAddressGetCountriesResult;
    }

    /**
     * @return WEBAddressGetCountriesResult
     */
    public function getWEBAddressGetCountriesResult()
    {
      return $this->WEBAddressGetCountriesResult;
    }

    /**
     * @param WEBAddressGetCountriesResult $WEBAddressGetCountriesResult
     * @return \netForum\xWeb\Xml\Generated\WEBAddressGetCountriesResponse
     */
    public function setWEBAddressGetCountriesResult($WEBAddressGetCountriesResult)
    {
      $this->WEBAddressGetCountriesResult = $WEBAddressGetCountriesResult;
      return $this;
    }

}
