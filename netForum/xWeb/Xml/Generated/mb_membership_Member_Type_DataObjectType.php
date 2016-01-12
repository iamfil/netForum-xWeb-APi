<?php

namespace netForum\xWeb\Xml\Generated;

class mb_membership_Member_Type_DataObjectType
{

    /**
     * @var av_key_Type $mbt_key
     */
    protected $mbt_key = null;

    /**
     * @var stringLength50_Type $mbt_code
     */
    protected $mbt_code = null;

    /**
     * @var stringLength10_Type $mbt_asn_code
     */
    protected $mbt_asn_code = null;

    /**
     * @var av_user_Type $mbt_add_user
     */
    protected $mbt_add_user = null;

    /**
     * @var av_date_small_Type $mbt_add_date
     */
    protected $mbt_add_date = null;

    /**
     * @var av_user_Type $mbt_change_user
     */
    protected $mbt_change_user = null;

    /**
     * @var av_date_small_Type $mbt_change_date
     */
    protected $mbt_change_date = null;

    /**
     * @var av_delete_flag_Type $mbt_delete_flag
     */
    protected $mbt_delete_flag = null;

    /**
     * @var av_key_Type $mbt_key_ext
     */
    protected $mbt_key_ext = null;

    /**
     * @var av_flag_Type $mbt_chapter_flag
     */
    protected $mbt_chapter_flag = null;

    /**
     * @var av_flag_Type $mbt_calendar_flag
     */
    protected $mbt_calendar_flag = null;

    /**
     * @var av_integer_Type $mbt_membership_start_month
     */
    protected $mbt_membership_start_month = null;

    /**
     * @var av_integer_Type $mbt_membership_start_day
     */
    protected $mbt_membership_start_day = null;

    /**
     * @var av_integer_Type $mbt_membership_next_month_after_day
     */
    protected $mbt_membership_next_month_after_day = null;

    /**
     * @var av_integer_Type $mbt_membership_sell_next_year_after_month
     */
    protected $mbt_membership_sell_next_year_after_month = null;

    /**
     * @var av_integer_Type $mbt_membership_sell_next_year_after_day
     */
    protected $mbt_membership_sell_next_year_after_day = null;

    /**
     * @var stringLength10_Type $mbt_membership_grace_period
     */
    protected $mbt_membership_grace_period = null;

    /**
     * @var av_integer_Type $mbt_membership_grace_length
     */
    protected $mbt_membership_grace_length = null;

    /**
     * @var stringLength25_Type $mbt_update_date_when
     */
    protected $mbt_update_date_when = null;

    /**
     * @var av_integer_Type $mbt_percent_paid
     */
    protected $mbt_percent_paid = null;

    /**
     * @var av_flag_Type $mbt_flow_down
     */
    protected $mbt_flow_down = null;

    /**
     * @var av_flag_Type $mbt_voting_rights
     */
    protected $mbt_voting_rights = null;

    /**
     * @var stringLength10_Type $mbt_invoice_type
     */
    protected $mbt_invoice_type = null;

    /**
     * @var av_flag_Type $mbt_flip_customer_member_flag
     */
    protected $mbt_flip_customer_member_flag = null;

    /**
     * @var av_flag_Type $mbt_set_on_paid_date_flag
     */
    protected $mbt_set_on_paid_date_flag = null;

    /**
     * @var av_key_Type $mbt_entity_key
     */
    protected $mbt_entity_key = null;

    /**
     * @var av_key_Type $mbt_mbs_drop_key
     */
    protected $mbt_mbs_drop_key = null;

    /**
     * @var av_key_Type $mbt_mbs_approval_key
     */
    protected $mbt_mbs_approval_key = null;

    /**
     * @var av_key_Type $mbt_mbt_dependency_key
     */
    protected $mbt_mbt_dependency_key = null;

    /**
     * @var av_key_Type $mbt_chp_cst_key
     */
    protected $mbt_chp_cst_key = null;

    /**
     * @var stringLength50_Type $mbt_description
     */
    protected $mbt_description = null;

    /**
     * @var av_key_Type $mbt_dyn_key
     */
    protected $mbt_dyn_key = null;

    /**
     * @var av_key_Type $mbt_wiz_key
     */
    protected $mbt_wiz_key = null;

    /**
     * @var stringLength20_Type $mbt_cst_type
     */
    protected $mbt_cst_type = null;

    /**
     * @var av_flag_Type $mbt_mbt_renewal_key
     */
    protected $mbt_mbt_renewal_key = null;

    /**
     * @var av_flag_Type $mbt_first_installment_flag
     */
    protected $mbt_first_installment_flag = null;

    /**
     * @var av_flag_Type $mbt_online_autopay_enroll
     */
    protected $mbt_online_autopay_enroll = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return av_key_Type
     */
    public function getMbt_key()
    {
      return $this->mbt_key;
    }

    /**
     * @param av_key_Type $mbt_key
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_key($mbt_key)
    {
      $this->mbt_key = $mbt_key;
      return $this;
    }

    /**
     * @return stringLength50_Type
     */
    public function getMbt_code()
    {
      return $this->mbt_code;
    }

    /**
     * @param stringLength50_Type $mbt_code
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_code($mbt_code)
    {
      $this->mbt_code = $mbt_code;
      return $this;
    }

    /**
     * @return stringLength10_Type
     */
    public function getMbt_asn_code()
    {
      return $this->mbt_asn_code;
    }

    /**
     * @param stringLength10_Type $mbt_asn_code
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_asn_code($mbt_asn_code)
    {
      $this->mbt_asn_code = $mbt_asn_code;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getMbt_add_user()
    {
      return $this->mbt_add_user;
    }

    /**
     * @param av_user_Type $mbt_add_user
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_add_user($mbt_add_user)
    {
      $this->mbt_add_user = $mbt_add_user;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getMbt_add_date()
    {
      return $this->mbt_add_date;
    }

    /**
     * @param av_date_small_Type $mbt_add_date
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_add_date($mbt_add_date)
    {
      $this->mbt_add_date = $mbt_add_date;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getMbt_change_user()
    {
      return $this->mbt_change_user;
    }

    /**
     * @param av_user_Type $mbt_change_user
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_change_user($mbt_change_user)
    {
      $this->mbt_change_user = $mbt_change_user;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getMbt_change_date()
    {
      return $this->mbt_change_date;
    }

    /**
     * @param av_date_small_Type $mbt_change_date
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_change_date($mbt_change_date)
    {
      $this->mbt_change_date = $mbt_change_date;
      return $this;
    }

    /**
     * @return av_delete_flag_Type
     */
    public function getMbt_delete_flag()
    {
      return $this->mbt_delete_flag;
    }

    /**
     * @param av_delete_flag_Type $mbt_delete_flag
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_delete_flag($mbt_delete_flag)
    {
      $this->mbt_delete_flag = $mbt_delete_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getMbt_key_ext()
    {
      return $this->mbt_key_ext;
    }

    /**
     * @param av_key_Type $mbt_key_ext
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_key_ext($mbt_key_ext)
    {
      $this->mbt_key_ext = $mbt_key_ext;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getMbt_chapter_flag()
    {
      return $this->mbt_chapter_flag;
    }

    /**
     * @param av_flag_Type $mbt_chapter_flag
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_chapter_flag($mbt_chapter_flag)
    {
      $this->mbt_chapter_flag = $mbt_chapter_flag;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getMbt_calendar_flag()
    {
      return $this->mbt_calendar_flag;
    }

    /**
     * @param av_flag_Type $mbt_calendar_flag
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_calendar_flag($mbt_calendar_flag)
    {
      $this->mbt_calendar_flag = $mbt_calendar_flag;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getMbt_membership_start_month()
    {
      return $this->mbt_membership_start_month;
    }

    /**
     * @param av_integer_Type $mbt_membership_start_month
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_membership_start_month($mbt_membership_start_month)
    {
      $this->mbt_membership_start_month = $mbt_membership_start_month;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getMbt_membership_start_day()
    {
      return $this->mbt_membership_start_day;
    }

    /**
     * @param av_integer_Type $mbt_membership_start_day
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_membership_start_day($mbt_membership_start_day)
    {
      $this->mbt_membership_start_day = $mbt_membership_start_day;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getMbt_membership_next_month_after_day()
    {
      return $this->mbt_membership_next_month_after_day;
    }

    /**
     * @param av_integer_Type $mbt_membership_next_month_after_day
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_membership_next_month_after_day($mbt_membership_next_month_after_day)
    {
      $this->mbt_membership_next_month_after_day = $mbt_membership_next_month_after_day;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getMbt_membership_sell_next_year_after_month()
    {
      return $this->mbt_membership_sell_next_year_after_month;
    }

    /**
     * @param av_integer_Type $mbt_membership_sell_next_year_after_month
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_membership_sell_next_year_after_month($mbt_membership_sell_next_year_after_month)
    {
      $this->mbt_membership_sell_next_year_after_month = $mbt_membership_sell_next_year_after_month;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getMbt_membership_sell_next_year_after_day()
    {
      return $this->mbt_membership_sell_next_year_after_day;
    }

    /**
     * @param av_integer_Type $mbt_membership_sell_next_year_after_day
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_membership_sell_next_year_after_day($mbt_membership_sell_next_year_after_day)
    {
      $this->mbt_membership_sell_next_year_after_day = $mbt_membership_sell_next_year_after_day;
      return $this;
    }

    /**
     * @return stringLength10_Type
     */
    public function getMbt_membership_grace_period()
    {
      return $this->mbt_membership_grace_period;
    }

    /**
     * @param stringLength10_Type $mbt_membership_grace_period
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_membership_grace_period($mbt_membership_grace_period)
    {
      $this->mbt_membership_grace_period = $mbt_membership_grace_period;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getMbt_membership_grace_length()
    {
      return $this->mbt_membership_grace_length;
    }

    /**
     * @param av_integer_Type $mbt_membership_grace_length
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_membership_grace_length($mbt_membership_grace_length)
    {
      $this->mbt_membership_grace_length = $mbt_membership_grace_length;
      return $this;
    }

    /**
     * @return stringLength25_Type
     */
    public function getMbt_update_date_when()
    {
      return $this->mbt_update_date_when;
    }

    /**
     * @param stringLength25_Type $mbt_update_date_when
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_update_date_when($mbt_update_date_when)
    {
      $this->mbt_update_date_when = $mbt_update_date_when;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getMbt_percent_paid()
    {
      return $this->mbt_percent_paid;
    }

    /**
     * @param av_integer_Type $mbt_percent_paid
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_percent_paid($mbt_percent_paid)
    {
      $this->mbt_percent_paid = $mbt_percent_paid;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getMbt_flow_down()
    {
      return $this->mbt_flow_down;
    }

    /**
     * @param av_flag_Type $mbt_flow_down
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_flow_down($mbt_flow_down)
    {
      $this->mbt_flow_down = $mbt_flow_down;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getMbt_voting_rights()
    {
      return $this->mbt_voting_rights;
    }

    /**
     * @param av_flag_Type $mbt_voting_rights
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_voting_rights($mbt_voting_rights)
    {
      $this->mbt_voting_rights = $mbt_voting_rights;
      return $this;
    }

    /**
     * @return stringLength10_Type
     */
    public function getMbt_invoice_type()
    {
      return $this->mbt_invoice_type;
    }

    /**
     * @param stringLength10_Type $mbt_invoice_type
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_invoice_type($mbt_invoice_type)
    {
      $this->mbt_invoice_type = $mbt_invoice_type;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getMbt_flip_customer_member_flag()
    {
      return $this->mbt_flip_customer_member_flag;
    }

    /**
     * @param av_flag_Type $mbt_flip_customer_member_flag
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_flip_customer_member_flag($mbt_flip_customer_member_flag)
    {
      $this->mbt_flip_customer_member_flag = $mbt_flip_customer_member_flag;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getMbt_set_on_paid_date_flag()
    {
      return $this->mbt_set_on_paid_date_flag;
    }

    /**
     * @param av_flag_Type $mbt_set_on_paid_date_flag
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_set_on_paid_date_flag($mbt_set_on_paid_date_flag)
    {
      $this->mbt_set_on_paid_date_flag = $mbt_set_on_paid_date_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getMbt_entity_key()
    {
      return $this->mbt_entity_key;
    }

    /**
     * @param av_key_Type $mbt_entity_key
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_entity_key($mbt_entity_key)
    {
      $this->mbt_entity_key = $mbt_entity_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getMbt_mbs_drop_key()
    {
      return $this->mbt_mbs_drop_key;
    }

    /**
     * @param av_key_Type $mbt_mbs_drop_key
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_mbs_drop_key($mbt_mbs_drop_key)
    {
      $this->mbt_mbs_drop_key = $mbt_mbs_drop_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getMbt_mbs_approval_key()
    {
      return $this->mbt_mbs_approval_key;
    }

    /**
     * @param av_key_Type $mbt_mbs_approval_key
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_mbs_approval_key($mbt_mbs_approval_key)
    {
      $this->mbt_mbs_approval_key = $mbt_mbs_approval_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getMbt_mbt_dependency_key()
    {
      return $this->mbt_mbt_dependency_key;
    }

    /**
     * @param av_key_Type $mbt_mbt_dependency_key
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_mbt_dependency_key($mbt_mbt_dependency_key)
    {
      $this->mbt_mbt_dependency_key = $mbt_mbt_dependency_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getMbt_chp_cst_key()
    {
      return $this->mbt_chp_cst_key;
    }

    /**
     * @param av_key_Type $mbt_chp_cst_key
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_chp_cst_key($mbt_chp_cst_key)
    {
      $this->mbt_chp_cst_key = $mbt_chp_cst_key;
      return $this;
    }

    /**
     * @return stringLength50_Type
     */
    public function getMbt_description()
    {
      return $this->mbt_description;
    }

    /**
     * @param stringLength50_Type $mbt_description
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_description($mbt_description)
    {
      $this->mbt_description = $mbt_description;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getMbt_dyn_key()
    {
      return $this->mbt_dyn_key;
    }

    /**
     * @param av_key_Type $mbt_dyn_key
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_dyn_key($mbt_dyn_key)
    {
      $this->mbt_dyn_key = $mbt_dyn_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getMbt_wiz_key()
    {
      return $this->mbt_wiz_key;
    }

    /**
     * @param av_key_Type $mbt_wiz_key
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_wiz_key($mbt_wiz_key)
    {
      $this->mbt_wiz_key = $mbt_wiz_key;
      return $this;
    }

    /**
     * @return stringLength20_Type
     */
    public function getMbt_cst_type()
    {
      return $this->mbt_cst_type;
    }

    /**
     * @param stringLength20_Type $mbt_cst_type
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_cst_type($mbt_cst_type)
    {
      $this->mbt_cst_type = $mbt_cst_type;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getMbt_mbt_renewal_key()
    {
      return $this->mbt_mbt_renewal_key;
    }

    /**
     * @param av_flag_Type $mbt_mbt_renewal_key
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_mbt_renewal_key($mbt_mbt_renewal_key)
    {
      $this->mbt_mbt_renewal_key = $mbt_mbt_renewal_key;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getMbt_first_installment_flag()
    {
      return $this->mbt_first_installment_flag;
    }

    /**
     * @param av_flag_Type $mbt_first_installment_flag
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_first_installment_flag($mbt_first_installment_flag)
    {
      $this->mbt_first_installment_flag = $mbt_first_installment_flag;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getMbt_online_autopay_enroll()
    {
      return $this->mbt_online_autopay_enroll;
    }

    /**
     * @param av_flag_Type $mbt_online_autopay_enroll
     * @return \netForum\xWeb\Xml\Generated\mb_membership_Member_Type_DataObjectType
     */
    public function setMbt_online_autopay_enroll($mbt_online_autopay_enroll)
    {
      $this->mbt_online_autopay_enroll = $mbt_online_autopay_enroll;
      return $this;
    }

}
