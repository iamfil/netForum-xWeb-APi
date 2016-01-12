<?php

namespace netForum\xWeb\Xml\Generated;

class MergeCustomerResults
{

    /**
     * @var guid $cst_key_keep
     */
    protected $cst_key_keep = null;

    /**
     * @var ArrayOfMergeCustomerResult $CustomerResults
     */
    protected $CustomerResults = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @param guid $cst_key_keep
     */
    public function __construct($cst_key_keep)
    {
      $this->cst_key_keep = $cst_key_keep;
    }

    /**
     * @return guid
     */
    public function getCst_key_keep()
    {
      return $this->cst_key_keep;
    }

    /**
     * @param guid $cst_key_keep
     * @return \netForum\xWeb\Xml\Generated\MergeCustomerResults
     */
    public function setCst_key_keep($cst_key_keep)
    {
      $this->cst_key_keep = $cst_key_keep;
      return $this;
    }

    /**
     * @return ArrayOfMergeCustomerResult
     */
    public function getCustomerResults()
    {
      return $this->CustomerResults;
    }

    /**
     * @param ArrayOfMergeCustomerResult $CustomerResults
     * @return \netForum\xWeb\Xml\Generated\MergeCustomerResults
     */
    public function setCustomerResults($CustomerResults)
    {
      $this->CustomerResults = $CustomerResults;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return \netForum\xWeb\Xml\Generated\MergeCustomerResults
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

}
