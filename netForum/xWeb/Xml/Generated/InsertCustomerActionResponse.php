<?php

namespace netForum\xWeb\Xml\Generated;

class InsertCustomerActionResponse
{

    /**
     * @var guid $InsertCustomerActionResult
     */
    protected $InsertCustomerActionResult = null;

    /**
     * @param guid $InsertCustomerActionResult
     */
    public function __construct($InsertCustomerActionResult)
    {
      $this->InsertCustomerActionResult = $InsertCustomerActionResult;
    }

    /**
     * @return guid
     */
    public function getInsertCustomerActionResult()
    {
      return $this->InsertCustomerActionResult;
    }

    /**
     * @param guid $InsertCustomerActionResult
     * @return \netForum\xWeb\Xml\Generated\InsertCustomerActionResponse
     */
    public function setInsertCustomerActionResult($InsertCustomerActionResult)
    {
      $this->InsertCustomerActionResult = $InsertCustomerActionResult;
      return $this;
    }

}
