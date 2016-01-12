<?php

namespace netForum\xWeb\Xml\Generated;

class Fee
{

    /**
     * @var guid $prc_key
     */
    protected $prc_key = null;

    /**
     * @var guid $ivd_key
     */
    protected $ivd_key = null;

    /**
     * @var int $qty
     */
    protected $qty = null;

    /**
     * @var float $overrideamount
     */
    protected $overrideamount = null;

    /**
     * @var FeeAction $action
     */
    protected $action = null;

    /**
     * @param guid $prc_key
     * @param guid $ivd_key
     * @param int $qty
     * @param float $overrideamount
     * @param FeeAction $action
     */
    public function __construct($prc_key, $ivd_key, $qty, $overrideamount, $action)
    {
      $this->prc_key = $prc_key;
      $this->ivd_key = $ivd_key;
      $this->qty = $qty;
      $this->overrideamount = $overrideamount;
      $this->action = $action;
    }

    /**
     * @return guid
     */
    public function getPrc_key()
    {
      return $this->prc_key;
    }

    /**
     * @param guid $prc_key
     * @return \netForum\xWeb\Xml\Generated\Fee
     */
    public function setPrc_key($prc_key)
    {
      $this->prc_key = $prc_key;
      return $this;
    }

    /**
     * @return guid
     */
    public function getIvd_key()
    {
      return $this->ivd_key;
    }

    /**
     * @param guid $ivd_key
     * @return \netForum\xWeb\Xml\Generated\Fee
     */
    public function setIvd_key($ivd_key)
    {
      $this->ivd_key = $ivd_key;
      return $this;
    }

    /**
     * @return int
     */
    public function getQty()
    {
      return $this->qty;
    }

    /**
     * @param int $qty
     * @return \netForum\xWeb\Xml\Generated\Fee
     */
    public function setQty($qty)
    {
      $this->qty = $qty;
      return $this;
    }

    /**
     * @return float
     */
    public function getOverrideamount()
    {
      return $this->overrideamount;
    }

    /**
     * @param float $overrideamount
     * @return \netForum\xWeb\Xml\Generated\Fee
     */
    public function setOverrideamount($overrideamount)
    {
      $this->overrideamount = $overrideamount;
      return $this;
    }

    /**
     * @return FeeAction
     */
    public function getAction()
    {
      return $this->action;
    }

    /**
     * @param FeeAction $action
     * @return \netForum\xWeb\Xml\Generated\Fee
     */
    public function setAction($action)
    {
      $this->action = $action;
      return $this;
    }

}
