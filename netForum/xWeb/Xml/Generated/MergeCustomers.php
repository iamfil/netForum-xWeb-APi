<?php

namespace netForum\xWeb\Xml\Generated;

class MergeCustomers
{

    /**
     * @var guid $cst_key_keep
     */
    protected $cst_key_keep = null;

    /**
     * @var ArrayOfMergeCustomer $customersToMerge
     */
    protected $customersToMerge = null;

    /**
     * @param guid $cst_key_keep
     * @param ArrayOfMergeCustomer $customersToMerge
     */
    public function __construct($cst_key_keep, $customersToMerge)
    {
      $this->cst_key_keep = $cst_key_keep;
      $this->customersToMerge = $customersToMerge;
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
     * @return \netForum\xWeb\Xml\Generated\MergeCustomers
     */
    public function setCst_key_keep($cst_key_keep)
    {
      $this->cst_key_keep = $cst_key_keep;
      return $this;
    }

    /**
     * @return ArrayOfMergeCustomer
     */
    public function getCustomersToMerge()
    {
      return $this->customersToMerge;
    }

    /**
     * @param ArrayOfMergeCustomer $customersToMerge
     * @return \netForum\xWeb\Xml\Generated\MergeCustomers
     */
    public function setCustomersToMerge($customersToMerge)
    {
      $this->customersToMerge = $customersToMerge;
      return $this;
    }

}
