<?php

namespace netForum\xWeb\Xml\Generated;

class WEBPhoneGetResponse
{

    /**
     * @var CustomerPhoneType $WEBPhoneGetResult
     */
    protected $WEBPhoneGetResult = null;

    /**
     * @param CustomerPhoneType $WEBPhoneGetResult
     */
    public function __construct($WEBPhoneGetResult)
    {
      $this->WEBPhoneGetResult = $WEBPhoneGetResult;
    }

    /**
     * @return CustomerPhoneType
     */
    public function getWEBPhoneGetResult()
    {
      return $this->WEBPhoneGetResult;
    }

    /**
     * @param CustomerPhoneType $WEBPhoneGetResult
     * @return \netForum\xWeb\Xml\Generated\WEBPhoneGetResponse
     */
    public function setWEBPhoneGetResult($WEBPhoneGetResult)
    {
      $this->WEBPhoneGetResult = $WEBPhoneGetResult;
      return $this;
    }

}
