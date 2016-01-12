<?php

namespace netForum\xWeb\Xml\Generated;

class WEBFaxInsertResponse
{

    /**
     * @var CustomerFaxType $WEBFaxInsertResult
     */
    protected $WEBFaxInsertResult = null;

    /**
     * @param CustomerFaxType $WEBFaxInsertResult
     */
    public function __construct($WEBFaxInsertResult)
    {
      $this->WEBFaxInsertResult = $WEBFaxInsertResult;
    }

    /**
     * @return CustomerFaxType
     */
    public function getWEBFaxInsertResult()
    {
      return $this->WEBFaxInsertResult;
    }

    /**
     * @param CustomerFaxType $WEBFaxInsertResult
     * @return \netForum\xWeb\Xml\Generated\WEBFaxInsertResponse
     */
    public function setWEBFaxInsertResult($WEBFaxInsertResult)
    {
      $this->WEBFaxInsertResult = $WEBFaxInsertResult;
      return $this;
    }

}
