<?php

namespace netForum\xWeb\Xml\Generated;

class MergeCustomerResult
{

    /**
     * @var guid $cst_key
     */
    protected $cst_key = null;

    /**
     * @var AfterMergeAction $AfterMergeAction
     */
    protected $AfterMergeAction = null;

    /**
     * @var MergeResult $Status
     */
    protected $Status = null;

    /**
     * @var ArrayOfModuleResult $ModuleResults
     */
    protected $ModuleResults = null;

    /**
     * @param guid $cst_key
     * @param AfterMergeAction $AfterMergeAction
     * @param MergeResult $Status
     */
    public function __construct($cst_key, $AfterMergeAction, $Status)
    {
      $this->cst_key = $cst_key;
      $this->AfterMergeAction = $AfterMergeAction;
      $this->Status = $Status;
    }

    /**
     * @return guid
     */
    public function getCst_key()
    {
      return $this->cst_key;
    }

    /**
     * @param guid $cst_key
     * @return \netForum\xWeb\Xml\Generated\MergeCustomerResult
     */
    public function setCst_key($cst_key)
    {
      $this->cst_key = $cst_key;
      return $this;
    }

    /**
     * @return AfterMergeAction
     */
    public function getAfterMergeAction()
    {
      return $this->AfterMergeAction;
    }

    /**
     * @param AfterMergeAction $AfterMergeAction
     * @return \netForum\xWeb\Xml\Generated\MergeCustomerResult
     */
    public function setAfterMergeAction($AfterMergeAction)
    {
      $this->AfterMergeAction = $AfterMergeAction;
      return $this;
    }

    /**
     * @return MergeResult
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param MergeResult $Status
     * @return \netForum\xWeb\Xml\Generated\MergeCustomerResult
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return ArrayOfModuleResult
     */
    public function getModuleResults()
    {
      return $this->ModuleResults;
    }

    /**
     * @param ArrayOfModuleResult $ModuleResults
     * @return \netForum\xWeb\Xml\Generated\MergeCustomerResult
     */
    public function setModuleResults($ModuleResults)
    {
      $this->ModuleResults = $ModuleResults;
      return $this;
    }

}
