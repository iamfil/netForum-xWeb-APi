<?php

namespace netForum\xWeb\Xml\Generated;

class Invoice_CompanyBusiness_Unit_DataObjectType
{

    /**
     * @var stringLength10_Type $atc_code
     */
    protected $atc_code = null;

    /**
     * @var stringLength90_Type $atc_name
     */
    protected $atc_name = null;

    /**
     * @var stringLength10_Type $atc_asn_code
     */
    protected $atc_asn_code = null;

    /**
     * @var av_user_Type $atc_add_user
     */
    protected $atc_add_user = null;

    /**
     * @var av_date_Type $atc_add_date
     */
    protected $atc_add_date = null;

    /**
     * @var av_user_Type $atc_change_user
     */
    protected $atc_change_user = null;

    /**
     * @var av_date_Type $atc_change_date
     */
    protected $atc_change_date = null;

    /**
     * @var av_delete_flag_Type $atc_delete_flag
     */
    protected $atc_delete_flag = null;

    /**
     * @var av_key_Type $atc_key
     */
    protected $atc_key = null;

    /**
     * @var av_key_Type $atc_key_ext
     */
    protected $atc_key_ext = null;

    /**
     * @var av_key_Type $atc_gla_revenue_key
     */
    protected $atc_gla_revenue_key = null;

    /**
     * @var av_key_Type $atc_gla_liability_key
     */
    protected $atc_gla_liability_key = null;

    /**
     * @var av_key_Type $atc_gla_return_key
     */
    protected $atc_gla_return_key = null;

    /**
     * @var av_key_Type $atc_gla_deferred_key
     */
    protected $atc_gla_deferred_key = null;

    /**
     * @var av_key_Type $atc_gla_writeoff_key
     */
    protected $atc_gla_writeoff_key = null;

    /**
     * @var av_key_Type $atc_gla_inventory_key
     */
    protected $atc_gla_inventory_key = null;

    /**
     * @var av_key_Type $atc_gla_cogs_key
     */
    protected $atc_gla_cogs_key = null;

    /**
     * @var av_key_Type $atc_gla_ar_key
     */
    protected $atc_gla_ar_key = null;

    /**
     * @var av_key_Type $atc_entity_key
     */
    protected $atc_entity_key = null;

    /**
     * @var av_key_Type $atc_gla_overpayment_key
     */
    protected $atc_gla_overpayment_key = null;

    /**
     * @var av_key_Type $atc_ait_key
     */
    protected $atc_ait_key = null;

    /**
     * @var stringLength3_Type $atc_currency_code
     */
    protected $atc_currency_code = null;

    /**
     * @var av_key_Type $atc_gla_realized_gain_key
     */
    protected $atc_gla_realized_gain_key = null;

    /**
     * @var av_key_Type $atc_gla_realized_loss_key
     */
    protected $atc_gla_realized_loss_key = null;

    /**
     * @var av_key_Type $atc_gla_rounding_key
     */
    protected $atc_gla_rounding_key = null;

    /**
     * @var stringLength20_Type $atc_tax_id
     */
    protected $atc_tax_id = null;

    /**
     * @var av_key_Type $atc_nsf_prc_key
     */
    protected $atc_nsf_prc_key = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return stringLength10_Type
     */
    public function getAtc_code()
    {
      return $this->atc_code;
    }

    /**
     * @param stringLength10_Type $atc_code
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_code($atc_code)
    {
      $this->atc_code = $atc_code;
      return $this;
    }

    /**
     * @return stringLength90_Type
     */
    public function getAtc_name()
    {
      return $this->atc_name;
    }

    /**
     * @param stringLength90_Type $atc_name
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_name($atc_name)
    {
      $this->atc_name = $atc_name;
      return $this;
    }

    /**
     * @return stringLength10_Type
     */
    public function getAtc_asn_code()
    {
      return $this->atc_asn_code;
    }

    /**
     * @param stringLength10_Type $atc_asn_code
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_asn_code($atc_asn_code)
    {
      $this->atc_asn_code = $atc_asn_code;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getAtc_add_user()
    {
      return $this->atc_add_user;
    }

    /**
     * @param av_user_Type $atc_add_user
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_add_user($atc_add_user)
    {
      $this->atc_add_user = $atc_add_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getAtc_add_date()
    {
      return $this->atc_add_date;
    }

    /**
     * @param av_date_Type $atc_add_date
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_add_date($atc_add_date)
    {
      $this->atc_add_date = $atc_add_date;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getAtc_change_user()
    {
      return $this->atc_change_user;
    }

    /**
     * @param av_user_Type $atc_change_user
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_change_user($atc_change_user)
    {
      $this->atc_change_user = $atc_change_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getAtc_change_date()
    {
      return $this->atc_change_date;
    }

    /**
     * @param av_date_Type $atc_change_date
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_change_date($atc_change_date)
    {
      $this->atc_change_date = $atc_change_date;
      return $this;
    }

    /**
     * @return av_delete_flag_Type
     */
    public function getAtc_delete_flag()
    {
      return $this->atc_delete_flag;
    }

    /**
     * @param av_delete_flag_Type $atc_delete_flag
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_delete_flag($atc_delete_flag)
    {
      $this->atc_delete_flag = $atc_delete_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAtc_key()
    {
      return $this->atc_key;
    }

    /**
     * @param av_key_Type $atc_key
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_key($atc_key)
    {
      $this->atc_key = $atc_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAtc_key_ext()
    {
      return $this->atc_key_ext;
    }

    /**
     * @param av_key_Type $atc_key_ext
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_key_ext($atc_key_ext)
    {
      $this->atc_key_ext = $atc_key_ext;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAtc_gla_revenue_key()
    {
      return $this->atc_gla_revenue_key;
    }

    /**
     * @param av_key_Type $atc_gla_revenue_key
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_gla_revenue_key($atc_gla_revenue_key)
    {
      $this->atc_gla_revenue_key = $atc_gla_revenue_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAtc_gla_liability_key()
    {
      return $this->atc_gla_liability_key;
    }

    /**
     * @param av_key_Type $atc_gla_liability_key
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_gla_liability_key($atc_gla_liability_key)
    {
      $this->atc_gla_liability_key = $atc_gla_liability_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAtc_gla_return_key()
    {
      return $this->atc_gla_return_key;
    }

    /**
     * @param av_key_Type $atc_gla_return_key
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_gla_return_key($atc_gla_return_key)
    {
      $this->atc_gla_return_key = $atc_gla_return_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAtc_gla_deferred_key()
    {
      return $this->atc_gla_deferred_key;
    }

    /**
     * @param av_key_Type $atc_gla_deferred_key
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_gla_deferred_key($atc_gla_deferred_key)
    {
      $this->atc_gla_deferred_key = $atc_gla_deferred_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAtc_gla_writeoff_key()
    {
      return $this->atc_gla_writeoff_key;
    }

    /**
     * @param av_key_Type $atc_gla_writeoff_key
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_gla_writeoff_key($atc_gla_writeoff_key)
    {
      $this->atc_gla_writeoff_key = $atc_gla_writeoff_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAtc_gla_inventory_key()
    {
      return $this->atc_gla_inventory_key;
    }

    /**
     * @param av_key_Type $atc_gla_inventory_key
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_gla_inventory_key($atc_gla_inventory_key)
    {
      $this->atc_gla_inventory_key = $atc_gla_inventory_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAtc_gla_cogs_key()
    {
      return $this->atc_gla_cogs_key;
    }

    /**
     * @param av_key_Type $atc_gla_cogs_key
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_gla_cogs_key($atc_gla_cogs_key)
    {
      $this->atc_gla_cogs_key = $atc_gla_cogs_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAtc_gla_ar_key()
    {
      return $this->atc_gla_ar_key;
    }

    /**
     * @param av_key_Type $atc_gla_ar_key
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_gla_ar_key($atc_gla_ar_key)
    {
      $this->atc_gla_ar_key = $atc_gla_ar_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAtc_entity_key()
    {
      return $this->atc_entity_key;
    }

    /**
     * @param av_key_Type $atc_entity_key
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_entity_key($atc_entity_key)
    {
      $this->atc_entity_key = $atc_entity_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAtc_gla_overpayment_key()
    {
      return $this->atc_gla_overpayment_key;
    }

    /**
     * @param av_key_Type $atc_gla_overpayment_key
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_gla_overpayment_key($atc_gla_overpayment_key)
    {
      $this->atc_gla_overpayment_key = $atc_gla_overpayment_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAtc_ait_key()
    {
      return $this->atc_ait_key;
    }

    /**
     * @param av_key_Type $atc_ait_key
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_ait_key($atc_ait_key)
    {
      $this->atc_ait_key = $atc_ait_key;
      return $this;
    }

    /**
     * @return stringLength3_Type
     */
    public function getAtc_currency_code()
    {
      return $this->atc_currency_code;
    }

    /**
     * @param stringLength3_Type $atc_currency_code
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_currency_code($atc_currency_code)
    {
      $this->atc_currency_code = $atc_currency_code;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAtc_gla_realized_gain_key()
    {
      return $this->atc_gla_realized_gain_key;
    }

    /**
     * @param av_key_Type $atc_gla_realized_gain_key
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_gla_realized_gain_key($atc_gla_realized_gain_key)
    {
      $this->atc_gla_realized_gain_key = $atc_gla_realized_gain_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAtc_gla_realized_loss_key()
    {
      return $this->atc_gla_realized_loss_key;
    }

    /**
     * @param av_key_Type $atc_gla_realized_loss_key
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_gla_realized_loss_key($atc_gla_realized_loss_key)
    {
      $this->atc_gla_realized_loss_key = $atc_gla_realized_loss_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAtc_gla_rounding_key()
    {
      return $this->atc_gla_rounding_key;
    }

    /**
     * @param av_key_Type $atc_gla_rounding_key
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_gla_rounding_key($atc_gla_rounding_key)
    {
      $this->atc_gla_rounding_key = $atc_gla_rounding_key;
      return $this;
    }

    /**
     * @return stringLength20_Type
     */
    public function getAtc_tax_id()
    {
      return $this->atc_tax_id;
    }

    /**
     * @param stringLength20_Type $atc_tax_id
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_tax_id($atc_tax_id)
    {
      $this->atc_tax_id = $atc_tax_id;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAtc_nsf_prc_key()
    {
      return $this->atc_nsf_prc_key;
    }

    /**
     * @param av_key_Type $atc_nsf_prc_key
     * @return \netForum\xWeb\Xml\Generated\Invoice_Company-Business_Unit_DataObjectType
     */
    public function setAtc_nsf_prc_key($atc_nsf_prc_key)
    {
      $this->atc_nsf_prc_key = $atc_nsf_prc_key;
      return $this;
    }

}
