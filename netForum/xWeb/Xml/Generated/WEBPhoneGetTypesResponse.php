<?php

namespace netForum\xWeb\Xml\Generated;

class WEBPhoneGetTypesResponse
{

    /**
     * @var WEBPhoneGetTypesResult $WEBPhoneGetTypesResult
     */
    protected $WEBPhoneGetTypesResult = null;

    /**
     * @param WEBPhoneGetTypesResult $WEBPhoneGetTypesResult
     */
    public function __construct($WEBPhoneGetTypesResult)
    {
      $this->WEBPhoneGetTypesResult = $WEBPhoneGetTypesResult;
    }

    /**
     * @return WEBPhoneGetTypesResult
     */
    public function getWEBPhoneGetTypesResult()
    {
      return $this->WEBPhoneGetTypesResult;
    }

    /**
     * @param WEBPhoneGetTypesResult $WEBPhoneGetTypesResult
     * @return \netForum\xWeb\Xml\Generated\WEBPhoneGetTypesResponse
     */
    public function setWEBPhoneGetTypesResult($WEBPhoneGetTypesResult)
    {
      $this->WEBPhoneGetTypesResult = $WEBPhoneGetTypesResult;
      return $this;
    }

}
