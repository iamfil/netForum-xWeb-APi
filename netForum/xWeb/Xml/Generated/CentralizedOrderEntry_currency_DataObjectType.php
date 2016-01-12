<?php

namespace netForum\xWeb\Xml\Generated;

class CentralizedOrderEntry_currency_DataObjectType
{

    /**
     * @var av_key_Type $cur_key
     */
    protected $cur_key = null;

    /**
     * @var stringLength10_Type $cur_code
     */
    protected $cur_code = null;

    /**
     * @var stringLength50_Type $cur_description
     */
    protected $cur_description = null;

    /**
     * @var stringLength10_Type $cur_symbol_prefix
     */
    protected $cur_symbol_prefix = null;

    /**
     * @var stringLength10_Type $cur_symbol_suffix
     */
    protected $cur_symbol_suffix = null;

    /**
     * @var stringLength2_Type $cur_negative_display
     */
    protected $cur_negative_display = null;

    /**
     * @var stringLength1_Type $cur_separator
     */
    protected $cur_separator = null;

    /**
     * @var av_integer_Type $cur_accuracy
     */
    protected $cur_accuracy = null;

    /**
     * @var stringLength10_Type $cur_calc_method
     */
    protected $cur_calc_method = null;

    /**
     * @var stringLength20_Type $cur_unit
     */
    protected $cur_unit = null;

    /**
     * @var stringLength20_Type $cur_sub_unit
     */
    protected $cur_sub_unit = null;

    /**
     * @var av_user_Type $cur_add_user
     */
    protected $cur_add_user = null;

    /**
     * @var av_date_Type $cur_add_date
     */
    protected $cur_add_date = null;

    /**
     * @var av_user_Type $cur_change_user
     */
    protected $cur_change_user = null;

    /**
     * @var av_date_Type $cur_change_date
     */
    protected $cur_change_date = null;

    /**
     * @var av_delete_flag_Type $cur_delete_flag
     */
    protected $cur_delete_flag = null;

    /**
     * @var av_key_Type $cur_entity_key
     */
    protected $cur_entity_key = null;

    /**
     * @var av_key_Type $cur_key_ext
     */
    protected $cur_key_ext = null;

    /**
     * @var stringLength1_Type $cur_fraction_separator
     */
    protected $cur_fraction_separator = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return av_key_Type
     */
    public function getCur_key()
    {
      return $this->cur_key;
    }

    /**
     * @param av_key_Type $cur_key
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_currency_DataObjectType
     */
    public function setCur_key($cur_key)
    {
      $this->cur_key = $cur_key;
      return $this;
    }

    /**
     * @return stringLength10_Type
     */
    public function getCur_code()
    {
      return $this->cur_code;
    }

    /**
     * @param stringLength10_Type $cur_code
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_currency_DataObjectType
     */
    public function setCur_code($cur_code)
    {
      $this->cur_code = $cur_code;
      return $this;
    }

    /**
     * @return stringLength50_Type
     */
    public function getCur_description()
    {
      return $this->cur_description;
    }

    /**
     * @param stringLength50_Type $cur_description
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_currency_DataObjectType
     */
    public function setCur_description($cur_description)
    {
      $this->cur_description = $cur_description;
      return $this;
    }

    /**
     * @return stringLength10_Type
     */
    public function getCur_symbol_prefix()
    {
      return $this->cur_symbol_prefix;
    }

    /**
     * @param stringLength10_Type $cur_symbol_prefix
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_currency_DataObjectType
     */
    public function setCur_symbol_prefix($cur_symbol_prefix)
    {
      $this->cur_symbol_prefix = $cur_symbol_prefix;
      return $this;
    }

    /**
     * @return stringLength10_Type
     */
    public function getCur_symbol_suffix()
    {
      return $this->cur_symbol_suffix;
    }

    /**
     * @param stringLength10_Type $cur_symbol_suffix
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_currency_DataObjectType
     */
    public function setCur_symbol_suffix($cur_symbol_suffix)
    {
      $this->cur_symbol_suffix = $cur_symbol_suffix;
      return $this;
    }

    /**
     * @return stringLength2_Type
     */
    public function getCur_negative_display()
    {
      return $this->cur_negative_display;
    }

    /**
     * @param stringLength2_Type $cur_negative_display
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_currency_DataObjectType
     */
    public function setCur_negative_display($cur_negative_display)
    {
      $this->cur_negative_display = $cur_negative_display;
      return $this;
    }

    /**
     * @return stringLength1_Type
     */
    public function getCur_separator()
    {
      return $this->cur_separator;
    }

    /**
     * @param stringLength1_Type $cur_separator
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_currency_DataObjectType
     */
    public function setCur_separator($cur_separator)
    {
      $this->cur_separator = $cur_separator;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getCur_accuracy()
    {
      return $this->cur_accuracy;
    }

    /**
     * @param av_integer_Type $cur_accuracy
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_currency_DataObjectType
     */
    public function setCur_accuracy($cur_accuracy)
    {
      $this->cur_accuracy = $cur_accuracy;
      return $this;
    }

    /**
     * @return stringLength10_Type
     */
    public function getCur_calc_method()
    {
      return $this->cur_calc_method;
    }

    /**
     * @param stringLength10_Type $cur_calc_method
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_currency_DataObjectType
     */
    public function setCur_calc_method($cur_calc_method)
    {
      $this->cur_calc_method = $cur_calc_method;
      return $this;
    }

    /**
     * @return stringLength20_Type
     */
    public function getCur_unit()
    {
      return $this->cur_unit;
    }

    /**
     * @param stringLength20_Type $cur_unit
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_currency_DataObjectType
     */
    public function setCur_unit($cur_unit)
    {
      $this->cur_unit = $cur_unit;
      return $this;
    }

    /**
     * @return stringLength20_Type
     */
    public function getCur_sub_unit()
    {
      return $this->cur_sub_unit;
    }

    /**
     * @param stringLength20_Type $cur_sub_unit
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_currency_DataObjectType
     */
    public function setCur_sub_unit($cur_sub_unit)
    {
      $this->cur_sub_unit = $cur_sub_unit;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getCur_add_user()
    {
      return $this->cur_add_user;
    }

    /**
     * @param av_user_Type $cur_add_user
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_currency_DataObjectType
     */
    public function setCur_add_user($cur_add_user)
    {
      $this->cur_add_user = $cur_add_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getCur_add_date()
    {
      return $this->cur_add_date;
    }

    /**
     * @param av_date_Type $cur_add_date
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_currency_DataObjectType
     */
    public function setCur_add_date($cur_add_date)
    {
      $this->cur_add_date = $cur_add_date;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getCur_change_user()
    {
      return $this->cur_change_user;
    }

    /**
     * @param av_user_Type $cur_change_user
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_currency_DataObjectType
     */
    public function setCur_change_user($cur_change_user)
    {
      $this->cur_change_user = $cur_change_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getCur_change_date()
    {
      return $this->cur_change_date;
    }

    /**
     * @param av_date_Type $cur_change_date
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_currency_DataObjectType
     */
    public function setCur_change_date($cur_change_date)
    {
      $this->cur_change_date = $cur_change_date;
      return $this;
    }

    /**
     * @return av_delete_flag_Type
     */
    public function getCur_delete_flag()
    {
      return $this->cur_delete_flag;
    }

    /**
     * @param av_delete_flag_Type $cur_delete_flag
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_currency_DataObjectType
     */
    public function setCur_delete_flag($cur_delete_flag)
    {
      $this->cur_delete_flag = $cur_delete_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getCur_entity_key()
    {
      return $this->cur_entity_key;
    }

    /**
     * @param av_key_Type $cur_entity_key
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_currency_DataObjectType
     */
    public function setCur_entity_key($cur_entity_key)
    {
      $this->cur_entity_key = $cur_entity_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getCur_key_ext()
    {
      return $this->cur_key_ext;
    }

    /**
     * @param av_key_Type $cur_key_ext
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_currency_DataObjectType
     */
    public function setCur_key_ext($cur_key_ext)
    {
      $this->cur_key_ext = $cur_key_ext;
      return $this;
    }

    /**
     * @return stringLength1_Type
     */
    public function getCur_fraction_separator()
    {
      return $this->cur_fraction_separator;
    }

    /**
     * @param stringLength1_Type $cur_fraction_separator
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_currency_DataObjectType
     */
    public function setCur_fraction_separator($cur_fraction_separator)
    {
      $this->cur_fraction_separator = $cur_fraction_separator;
      return $this;
    }

}
