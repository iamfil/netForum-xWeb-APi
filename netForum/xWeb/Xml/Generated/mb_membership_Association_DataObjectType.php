<?php

namespace netForum\xWeb\Xml\Generated;

class mb_membership_Association_DataObjectType
{

    /**
     * @var stringLength10_Type $asn_code
     */
    protected $asn_code = null;

    /**
     * @var stringLength80_Type $asn_name
     */
    protected $asn_name = null;

    /**
     * @var av_date_small_Type $asn_add_date
     */
    protected $asn_add_date = null;

    /**
     * @var av_user_Type $asn_add_user
     */
    protected $asn_add_user = null;

    /**
     * @var av_date_small_Type $asn_change_date
     */
    protected $asn_change_date = null;

    /**
     * @var av_user_Type $asn_change_user
     */
    protected $asn_change_user = null;

    /**
     * @var av_delete_flag_Type $asn_delete_flag
     */
    protected $asn_delete_flag = null;

    /**
     * @var av_key_Type $asn_key
     */
    protected $asn_key = null;

    /**
     * @var av_key_Type $asn_key_ext
     */
    protected $asn_key_ext = null;

    /**
     * @var av_flag_Type $asn_calendar_flag
     */
    protected $asn_calendar_flag = null;

    /**
     * @var av_integer_Type $asn_membership_start_month
     */
    protected $asn_membership_start_month = null;

    /**
     * @var av_integer_Type $asn_membership_start_day
     */
    protected $asn_membership_start_day = null;

    /**
     * @var av_integer_Type $asn_membership_sell_next_year_after_month
     */
    protected $asn_membership_sell_next_year_after_month = null;

    /**
     * @var av_integer_Type $asn_membership_sell_next_year_after_day
     */
    protected $asn_membership_sell_next_year_after_day = null;

    /**
     * @var stringLength10_Type $asn_membership_grace_period
     */
    protected $asn_membership_grace_period = null;

    /**
     * @var av_integer_Type $asn_membership_grace_length
     */
    protected $asn_membership_grace_length = null;

    /**
     * @var av_integer_Type $asn_membership_next_month_after_day
     */
    protected $asn_membership_next_month_after_day = null;

    /**
     * @var stringLength25_Type $asn_update_date_when
     */
    protected $asn_update_date_when = null;

    /**
     * @var av_integer_Type $asn_percent_paid
     */
    protected $asn_percent_paid = null;

    /**
     * @var stringLength10_Type $asn_invoice_type
     */
    protected $asn_invoice_type = null;

    /**
     * @var av_flag_Type $asn_set_on_paid_date_flag
     */
    protected $asn_set_on_paid_date_flag = null;

    /**
     * @var av_flag_Type $asn_flip_customer_member_flag
     */
    protected $asn_flip_customer_member_flag = null;

    /**
     * @var av_key_Type $asn_entity_key
     */
    protected $asn_entity_key = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return stringLength10_Type
     */
    public function getAsn_code()
    {
      return $this->asn_code;
    }

    /**
     * @param stringLength10_Type $asn_code
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_code($asn_code)
    {
      $this->asn_code = $asn_code;
      return $this;
    }

    /**
     * @return stringLength80_Type
     */
    public function getAsn_name()
    {
      return $this->asn_name;
    }

    /**
     * @param stringLength80_Type $asn_name
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_name($asn_name)
    {
      $this->asn_name = $asn_name;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getAsn_add_date()
    {
      return $this->asn_add_date;
    }

    /**
     * @param av_date_small_Type $asn_add_date
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_add_date($asn_add_date)
    {
      $this->asn_add_date = $asn_add_date;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getAsn_add_user()
    {
      return $this->asn_add_user;
    }

    /**
     * @param av_user_Type $asn_add_user
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_add_user($asn_add_user)
    {
      $this->asn_add_user = $asn_add_user;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getAsn_change_date()
    {
      return $this->asn_change_date;
    }

    /**
     * @param av_date_small_Type $asn_change_date
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_change_date($asn_change_date)
    {
      $this->asn_change_date = $asn_change_date;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getAsn_change_user()
    {
      return $this->asn_change_user;
    }

    /**
     * @param av_user_Type $asn_change_user
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_change_user($asn_change_user)
    {
      $this->asn_change_user = $asn_change_user;
      return $this;
    }

    /**
     * @return av_delete_flag_Type
     */
    public function getAsn_delete_flag()
    {
      return $this->asn_delete_flag;
    }

    /**
     * @param av_delete_flag_Type $asn_delete_flag
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_delete_flag($asn_delete_flag)
    {
      $this->asn_delete_flag = $asn_delete_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAsn_key()
    {
      return $this->asn_key;
    }

    /**
     * @param av_key_Type $asn_key
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_key($asn_key)
    {
      $this->asn_key = $asn_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAsn_key_ext()
    {
      return $this->asn_key_ext;
    }

    /**
     * @param av_key_Type $asn_key_ext
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_key_ext($asn_key_ext)
    {
      $this->asn_key_ext = $asn_key_ext;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getAsn_calendar_flag()
    {
      return $this->asn_calendar_flag;
    }

    /**
     * @param av_flag_Type $asn_calendar_flag
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_calendar_flag($asn_calendar_flag)
    {
      $this->asn_calendar_flag = $asn_calendar_flag;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getAsn_membership_start_month()
    {
      return $this->asn_membership_start_month;
    }

    /**
     * @param av_integer_Type $asn_membership_start_month
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_membership_start_month($asn_membership_start_month)
    {
      $this->asn_membership_start_month = $asn_membership_start_month;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getAsn_membership_start_day()
    {
      return $this->asn_membership_start_day;
    }

    /**
     * @param av_integer_Type $asn_membership_start_day
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_membership_start_day($asn_membership_start_day)
    {
      $this->asn_membership_start_day = $asn_membership_start_day;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getAsn_membership_sell_next_year_after_month()
    {
      return $this->asn_membership_sell_next_year_after_month;
    }

    /**
     * @param av_integer_Type $asn_membership_sell_next_year_after_month
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_membership_sell_next_year_after_month($asn_membership_sell_next_year_after_month)
    {
      $this->asn_membership_sell_next_year_after_month = $asn_membership_sell_next_year_after_month;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getAsn_membership_sell_next_year_after_day()
    {
      return $this->asn_membership_sell_next_year_after_day;
    }

    /**
     * @param av_integer_Type $asn_membership_sell_next_year_after_day
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_membership_sell_next_year_after_day($asn_membership_sell_next_year_after_day)
    {
      $this->asn_membership_sell_next_year_after_day = $asn_membership_sell_next_year_after_day;
      return $this;
    }

    /**
     * @return stringLength10_Type
     */
    public function getAsn_membership_grace_period()
    {
      return $this->asn_membership_grace_period;
    }

    /**
     * @param stringLength10_Type $asn_membership_grace_period
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_membership_grace_period($asn_membership_grace_period)
    {
      $this->asn_membership_grace_period = $asn_membership_grace_period;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getAsn_membership_grace_length()
    {
      return $this->asn_membership_grace_length;
    }

    /**
     * @param av_integer_Type $asn_membership_grace_length
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_membership_grace_length($asn_membership_grace_length)
    {
      $this->asn_membership_grace_length = $asn_membership_grace_length;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getAsn_membership_next_month_after_day()
    {
      return $this->asn_membership_next_month_after_day;
    }

    /**
     * @param av_integer_Type $asn_membership_next_month_after_day
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_membership_next_month_after_day($asn_membership_next_month_after_day)
    {
      $this->asn_membership_next_month_after_day = $asn_membership_next_month_after_day;
      return $this;
    }

    /**
     * @return stringLength25_Type
     */
    public function getAsn_update_date_when()
    {
      return $this->asn_update_date_when;
    }

    /**
     * @param stringLength25_Type $asn_update_date_when
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_update_date_when($asn_update_date_when)
    {
      $this->asn_update_date_when = $asn_update_date_when;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getAsn_percent_paid()
    {
      return $this->asn_percent_paid;
    }

    /**
     * @param av_integer_Type $asn_percent_paid
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_percent_paid($asn_percent_paid)
    {
      $this->asn_percent_paid = $asn_percent_paid;
      return $this;
    }

    /**
     * @return stringLength10_Type
     */
    public function getAsn_invoice_type()
    {
      return $this->asn_invoice_type;
    }

    /**
     * @param stringLength10_Type $asn_invoice_type
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_invoice_type($asn_invoice_type)
    {
      $this->asn_invoice_type = $asn_invoice_type;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getAsn_set_on_paid_date_flag()
    {
      return $this->asn_set_on_paid_date_flag;
    }

    /**
     * @param av_flag_Type $asn_set_on_paid_date_flag
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_set_on_paid_date_flag($asn_set_on_paid_date_flag)
    {
      $this->asn_set_on_paid_date_flag = $asn_set_on_paid_date_flag;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getAsn_flip_customer_member_flag()
    {
      return $this->asn_flip_customer_member_flag;
    }

    /**
     * @param av_flag_Type $asn_flip_customer_member_flag
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_flip_customer_member_flag($asn_flip_customer_member_flag)
    {
      $this->asn_flip_customer_member_flag = $asn_flip_customer_member_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getAsn_entity_key()
    {
      return $this->asn_entity_key;
    }

    /**
     * @param av_key_Type $asn_entity_key
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Association_DataObjectType
     */
    public function setAsn_entity_key($asn_entity_key)
    {
      $this->asn_entity_key = $asn_entity_key;
      return $this;
    }

}
