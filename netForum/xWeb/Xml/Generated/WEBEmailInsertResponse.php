<?php

namespace netForum\xWeb\Xml\Generated;

class WEBEmailInsertResponse
{

    /**
     * @var CustomerEmailType $WEBEmailInsertResult
     */
    protected $WEBEmailInsertResult = null;

    /**
     * @param CustomerEmailType $WEBEmailInsertResult
     */
    public function __construct($WEBEmailInsertResult)
    {
      $this->WEBEmailInsertResult = $WEBEmailInsertResult;
    }

    /**
     * @return CustomerEmailType
     */
    public function getWEBEmailInsertResult()
    {
      return $this->WEBEmailInsertResult;
    }

    /**
     * @param CustomerEmailType $WEBEmailInsertResult
     * @return \netForum\xWeb\Xml\Generated\WEBEmailInsertResponse
     */
    public function setWEBEmailInsertResult($WEBEmailInsertResult)
    {
      $this->WEBEmailInsertResult = $WEBEmailInsertResult;
      return $this;
    }

}
