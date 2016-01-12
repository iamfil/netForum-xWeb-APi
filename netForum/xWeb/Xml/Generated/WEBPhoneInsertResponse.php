<?php

namespace netForum\xWeb\Xml\Generated;

class WEBPhoneInsertResponse
{

    /**
     * @var CustomerPhoneType $WEBPhoneInsertResult
     */
    protected $WEBPhoneInsertResult = null;

    /**
     * @param CustomerPhoneType $WEBPhoneInsertResult
     */
    public function __construct($WEBPhoneInsertResult)
    {
      $this->WEBPhoneInsertResult = $WEBPhoneInsertResult;
    }

    /**
     * @return CustomerPhoneType
     */
    public function getWEBPhoneInsertResult()
    {
      return $this->WEBPhoneInsertResult;
    }

    /**
     * @param CustomerPhoneType $WEBPhoneInsertResult
     * @return \netForum\xWeb\Xml\Generated\WEBPhoneInsertResponse
     */
    public function setWEBPhoneInsertResult($WEBPhoneInsertResult)
    {
      $this->WEBPhoneInsertResult = $WEBPhoneInsertResult;
      return $this;
    }

}
