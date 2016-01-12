<?php

namespace netForum\xWeb\Xml\Generated;

class WEBFaxGetResponse
{

    /**
     * @var CustomerFaxType $WEBFaxGetResult
     */
    protected $WEBFaxGetResult = null;

    /**
     * @param CustomerFaxType $WEBFaxGetResult
     */
    public function __construct($WEBFaxGetResult)
    {
      $this->WEBFaxGetResult = $WEBFaxGetResult;
    }

    /**
     * @return CustomerFaxType
     */
    public function getWEBFaxGetResult()
    {
      return $this->WEBFaxGetResult;
    }

    /**
     * @param CustomerFaxType $WEBFaxGetResult
     * @return \netForum\xWeb\Xml\Generated\WEBFaxGetResponse
     */
    public function setWEBFaxGetResult($WEBFaxGetResult)
    {
      $this->WEBFaxGetResult = $WEBFaxGetResult;
      return $this;
    }

}
