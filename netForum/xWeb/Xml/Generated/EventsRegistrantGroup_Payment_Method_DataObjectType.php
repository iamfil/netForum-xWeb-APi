<?php

namespace netForum\xWeb\Xml\Generated;

class EventsRegistrantGroup_Payment_Method_DataObjectType
{

    /**
     * @var av_key_Type $apm_key
     */
    protected $apm_key = null;

    /**
     * @var av_key_Type $apm_atc_key
     */
    protected $apm_atc_key = null;

    /**
     * @var stringLength15_Type $apm_type
     */
    protected $apm_type = null;

    /**
     * @var stringLength30_Type $apm_method
     */
    protected $apm_method = null;

    /**
     * @var av_user_Type $apm_add_user
     */
    protected $apm_add_user = null;

    /**
     * @var av_date_Type $apm_add_date
     */
    protected $apm_add_date = null;

    /**
     * @var av_date_Type $apm_change_date
     */
    protected $apm_change_date = null;

    /**
     * @var av_user_Type $apm_change_user
     */
    protected $apm_change_user = null;

    /**
     * @var av_delete_flag_Type $apm_delete_flag
     */
    protected $apm_delete_flag = null;

    /**
     * @var av_key_Type $apm_gla_key
     */
    protected $apm_gla_key = null;

    /**
     * @var av_key_Type $apm_entity_key
     */
    protected $apm_entity_key = null;

    /**
     * @var av_key_Type $apm_key_ext
     */
    protected $apm_key_ext = null;

    /**
     * @var av_flag_Type $apm_iweb_flag
     */
    protected $apm_iweb_flag = null;

    /**
     * @var av_flag_Type $apm_eweb_flag
     */
    protected $apm_eweb_flag = null;

    /**
     * @var stringLength25_Type $apm_merchant_option
     */
    protected $apm_merchant_option = null;

    /**
     * @var stringLength10_Type $apm_batch_suffix
     */
    protected $apm_batch_suffix = null;

    /**
     * @var stringLength3_Type $apm_currency_code
     */
    protected $apm_currency_code = null;

    /**
     * @var av_flag_Type $apm_csc_flag
     */
    protected $apm_csc_flag = null;

    /**
     * @var stringLength200_Type $apm_cc_format
     */
    protected $apm_cc_format = null;

    /**
     * @var av_key_Type $apm_pma_key
     */
    protected $apm_pma_key = null;

    /**
     * @var av_flag_Type $apm_gateway_is_frozen_flag
     */
    protected $apm_gateway_is_frozen_flag = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return av_key_Type
     */
    public function getApm_key()
    {
      return $this->apm_key;
    }

    /**
     * @param av_key_Type $apm_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_key($apm_key)
    {
      $this->apm_key = $apm_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getApm_atc_key()
    {
      return $this->apm_atc_key;
    }

    /**
     * @param av_key_Type $apm_atc_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_atc_key($apm_atc_key)
    {
      $this->apm_atc_key = $apm_atc_key;
      return $this;
    }

    /**
     * @return stringLength15_Type
     */
    public function getApm_type()
    {
      return $this->apm_type;
    }

    /**
     * @param stringLength15_Type $apm_type
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_type($apm_type)
    {
      $this->apm_type = $apm_type;
      return $this;
    }

    /**
     * @return stringLength30_Type
     */
    public function getApm_method()
    {
      return $this->apm_method;
    }

    /**
     * @param stringLength30_Type $apm_method
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_method($apm_method)
    {
      $this->apm_method = $apm_method;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getApm_add_user()
    {
      return $this->apm_add_user;
    }

    /**
     * @param av_user_Type $apm_add_user
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_add_user($apm_add_user)
    {
      $this->apm_add_user = $apm_add_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getApm_add_date()
    {
      return $this->apm_add_date;
    }

    /**
     * @param av_date_Type $apm_add_date
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_add_date($apm_add_date)
    {
      $this->apm_add_date = $apm_add_date;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getApm_change_date()
    {
      return $this->apm_change_date;
    }

    /**
     * @param av_date_Type $apm_change_date
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_change_date($apm_change_date)
    {
      $this->apm_change_date = $apm_change_date;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getApm_change_user()
    {
      return $this->apm_change_user;
    }

    /**
     * @param av_user_Type $apm_change_user
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_change_user($apm_change_user)
    {
      $this->apm_change_user = $apm_change_user;
      return $this;
    }

    /**
     * @return av_delete_flag_Type
     */
    public function getApm_delete_flag()
    {
      return $this->apm_delete_flag;
    }

    /**
     * @param av_delete_flag_Type $apm_delete_flag
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_delete_flag($apm_delete_flag)
    {
      $this->apm_delete_flag = $apm_delete_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getApm_gla_key()
    {
      return $this->apm_gla_key;
    }

    /**
     * @param av_key_Type $apm_gla_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_gla_key($apm_gla_key)
    {
      $this->apm_gla_key = $apm_gla_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getApm_entity_key()
    {
      return $this->apm_entity_key;
    }

    /**
     * @param av_key_Type $apm_entity_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_entity_key($apm_entity_key)
    {
      $this->apm_entity_key = $apm_entity_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getApm_key_ext()
    {
      return $this->apm_key_ext;
    }

    /**
     * @param av_key_Type $apm_key_ext
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_key_ext($apm_key_ext)
    {
      $this->apm_key_ext = $apm_key_ext;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getApm_iweb_flag()
    {
      return $this->apm_iweb_flag;
    }

    /**
     * @param av_flag_Type $apm_iweb_flag
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_iweb_flag($apm_iweb_flag)
    {
      $this->apm_iweb_flag = $apm_iweb_flag;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getApm_eweb_flag()
    {
      return $this->apm_eweb_flag;
    }

    /**
     * @param av_flag_Type $apm_eweb_flag
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_eweb_flag($apm_eweb_flag)
    {
      $this->apm_eweb_flag = $apm_eweb_flag;
      return $this;
    }

    /**
     * @return stringLength25_Type
     */
    public function getApm_merchant_option()
    {
      return $this->apm_merchant_option;
    }

    /**
     * @param stringLength25_Type $apm_merchant_option
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_merchant_option($apm_merchant_option)
    {
      $this->apm_merchant_option = $apm_merchant_option;
      return $this;
    }

    /**
     * @return stringLength10_Type
     */
    public function getApm_batch_suffix()
    {
      return $this->apm_batch_suffix;
    }

    /**
     * @param stringLength10_Type $apm_batch_suffix
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_batch_suffix($apm_batch_suffix)
    {
      $this->apm_batch_suffix = $apm_batch_suffix;
      return $this;
    }

    /**
     * @return stringLength3_Type
     */
    public function getApm_currency_code()
    {
      return $this->apm_currency_code;
    }

    /**
     * @param stringLength3_Type $apm_currency_code
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_currency_code($apm_currency_code)
    {
      $this->apm_currency_code = $apm_currency_code;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getApm_csc_flag()
    {
      return $this->apm_csc_flag;
    }

    /**
     * @param av_flag_Type $apm_csc_flag
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_csc_flag($apm_csc_flag)
    {
      $this->apm_csc_flag = $apm_csc_flag;
      return $this;
    }

    /**
     * @return stringLength200_Type
     */
    public function getApm_cc_format()
    {
      return $this->apm_cc_format;
    }

    /**
     * @param stringLength200_Type $apm_cc_format
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_cc_format($apm_cc_format)
    {
      $this->apm_cc_format = $apm_cc_format;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getApm_pma_key()
    {
      return $this->apm_pma_key;
    }

    /**
     * @param av_key_Type $apm_pma_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_pma_key($apm_pma_key)
    {
      $this->apm_pma_key = $apm_pma_key;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getApm_gateway_is_frozen_flag()
    {
      return $this->apm_gateway_is_frozen_flag;
    }

    /**
     * @param av_flag_Type $apm_gateway_is_frozen_flag
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Method_DataObjectType
     */
    public function setApm_gateway_is_frozen_flag($apm_gateway_is_frozen_flag)
    {
      $this->apm_gateway_is_frozen_flag = $apm_gateway_is_frozen_flag;
      return $this;
    }

}
