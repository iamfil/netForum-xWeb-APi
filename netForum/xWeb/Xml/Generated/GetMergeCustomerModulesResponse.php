<?php

namespace netForum\xWeb\Xml\Generated;

class GetMergeCustomerModulesResponse
{

    /**
     * @var GetMergeCustomerModulesResult $GetMergeCustomerModulesResult
     */
    protected $GetMergeCustomerModulesResult = null;

    /**
     * @param GetMergeCustomerModulesResult $GetMergeCustomerModulesResult
     */
    public function __construct($GetMergeCustomerModulesResult)
    {
      $this->GetMergeCustomerModulesResult = $GetMergeCustomerModulesResult;
    }

    /**
     * @return GetMergeCustomerModulesResult
     */
    public function getGetMergeCustomerModulesResult()
    {
      return $this->GetMergeCustomerModulesResult;
    }

    /**
     * @param GetMergeCustomerModulesResult $GetMergeCustomerModulesResult
     * @return \netForum\xWeb\Xml\Generated\GetMergeCustomerModulesResponse
     */
    public function setGetMergeCustomerModulesResult($GetMergeCustomerModulesResult)
    {
      $this->GetMergeCustomerModulesResult = $GetMergeCustomerModulesResult;
      return $this;
    }

}
