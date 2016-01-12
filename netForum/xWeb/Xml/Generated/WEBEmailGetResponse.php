<?php

namespace netForum\xWeb\Xml\Generated;

class WEBEmailGetResponse
{

    /**
     * @var CustomerEmailType $WEBEmailGetResult
     */
    protected $WEBEmailGetResult = null;

    /**
     * @param CustomerEmailType $WEBEmailGetResult
     */
    public function __construct($WEBEmailGetResult)
    {
      $this->WEBEmailGetResult = $WEBEmailGetResult;
    }

    /**
     * @return CustomerEmailType
     */
    public function getWEBEmailGetResult()
    {
      return $this->WEBEmailGetResult;
    }

    /**
     * @param CustomerEmailType $WEBEmailGetResult
     * @return \netForum\xWeb\Xml\Generated\WEBEmailGetResponse
     */
    public function setWEBEmailGetResult($WEBEmailGetResult)
    {
      $this->WEBEmailGetResult = $WEBEmailGetResult;
      return $this;
    }

}
