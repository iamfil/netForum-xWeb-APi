<?php

namespace netForum\xWeb\Xml\Generated;

class Invoice_Credit_Available_DataObjectType
{

    /**
     * @var av_key_Type $caa_cst_key
     */
    protected $caa_cst_key = null;

    /**
     * @var decimal_Type $caa_cst_credit_available
     */
    protected $caa_cst_credit_available = null;

    /**
     * @var av_key_Type $caa_entity_key
     */
    protected $caa_entity_key = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return av_key_Type
     */
    public function getCaa_cst_key()
    {
      return $this->caa_cst_key;
    }

    /**
     * @param av_key_Type $caa_cst_key
     * @return \netForum\xWeb\Xml\Generated\Invoice_Credit_Available_DataObjectType
     */
    public function setCaa_cst_key($caa_cst_key)
    {
      $this->caa_cst_key = $caa_cst_key;
      return $this;
    }

    /**
     * @return decimal_Type
     */
    public function getCaa_cst_credit_available()
    {
      return $this->caa_cst_credit_available;
    }

    /**
     * @param decimal_Type $caa_cst_credit_available
     * @return \netForum\xWeb\Xml\Generated\Invoice_Credit_Available_DataObjectType
     */
    public function setCaa_cst_credit_available($caa_cst_credit_available)
    {
      $this->caa_cst_credit_available = $caa_cst_credit_available;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getCaa_entity_key()
    {
      return $this->caa_entity_key;
    }

    /**
     * @param av_key_Type $caa_entity_key
     * @return \netForum\xWeb\Xml\Generated\Invoice_Credit_Available_DataObjectType
     */
    public function setCaa_entity_key($caa_entity_key)
    {
      $this->caa_entity_key = $caa_entity_key;
      return $this;
    }

}
