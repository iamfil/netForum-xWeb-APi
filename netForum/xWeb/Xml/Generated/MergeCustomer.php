<?php

namespace netForum\xWeb\Xml\Generated;

class MergeCustomer
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
     * @var ArrayOfString1 $Modules
     */
    protected $Modules = null;

    /**
     * @param guid $cst_key
     * @param AfterMergeAction $AfterMergeAction
     */
    public function __construct($cst_key, $AfterMergeAction)
    {
      $this->cst_key = $cst_key;
      $this->AfterMergeAction = $AfterMergeAction;
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
     * @return \netForum\xWeb\Xml\Generated\MergeCustomer
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
     * @return \netForum\xWeb\Xml\Generated\MergeCustomer
     */
    public function setAfterMergeAction($AfterMergeAction)
    {
      $this->AfterMergeAction = $AfterMergeAction;
      return $this;
    }

    /**
     * @return ArrayOfString1
     */
    public function getModules()
    {
      return $this->Modules;
    }

    /**
     * @param ArrayOfString1 $Modules
     * @return \netForum\xWeb\Xml\Generated\MergeCustomer
     */
    public function setModules($Modules)
    {
      $this->Modules = $Modules;
      return $this;
    }

}
