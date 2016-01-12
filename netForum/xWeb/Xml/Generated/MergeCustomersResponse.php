<?php

namespace netForum\xWeb\Xml\Generated;

class MergeCustomersResponse
{

    /**
     * @var MergeCustomerResults $MergeCustomersResult
     */
    protected $MergeCustomersResult = null;

    /**
     * @param MergeCustomerResults $MergeCustomersResult
     */
    public function __construct($MergeCustomersResult)
    {
      $this->MergeCustomersResult = $MergeCustomersResult;
    }

    /**
     * @return MergeCustomerResults
     */
    public function getMergeCustomersResult()
    {
      return $this->MergeCustomersResult;
    }

    /**
     * @param MergeCustomerResults $MergeCustomersResult
     * @return \netForum\xWeb\Xml\Generated\MergeCustomersResponse
     */
    public function setMergeCustomersResult($MergeCustomersResult)
    {
      $this->MergeCustomersResult = $MergeCustomersResult;
      return $this;
    }

}
