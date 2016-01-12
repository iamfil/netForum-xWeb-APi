<?php

namespace netForum\xWeb\Xml\Generated;

class EventsRegistrantSession_ev_session_DataObjectType
{

    /**
     * @var av_key_Type $ses_key
     */
    protected $ses_key = null;

    /**
     * @var stringLength10_Type $ses_code
     */
    protected $ses_code = null;

    /**
     * @var av_user_Type $ses_add_user
     */
    protected $ses_add_user = null;

    /**
     * @var av_date_small_Type $ses_add_date
     */
    protected $ses_add_date = null;

    /**
     * @var av_user_Type $ses_change_user
     */
    protected $ses_change_user = null;

    /**
     * @var av_date_small_Type $ses_change_date
     */
    protected $ses_change_date = null;

    /**
     * @var av_delete_flag_Type $ses_delete_flag
     */
    protected $ses_delete_flag = null;

    /**
     * @var av_key_Type $ses_key_ext
     */
    protected $ses_key_ext = null;

    /**
     * @var av_key_Type $ses_evt_key
     */
    protected $ses_evt_key = null;

    /**
     * @var stringLength200_Type $ses_title
     */
    protected $ses_title = null;

    /**
     * @var av_key_Type $ses_set_key
     */
    protected $ses_set_key = null;

    /**
     * @var av_integer_Type $ses_capacity
     */
    protected $ses_capacity = null;

    /**
     * @var av_integer_Type $ses_registrant_goal
     */
    protected $ses_registrant_goal = null;

    /**
     * @var av_integer_Type $ses_revenue_goal
     */
    protected $ses_revenue_goal = null;

    /**
     * @var av_integer_Type $ses_display_order
     */
    protected $ses_display_order = null;

    /**
     * @var av_flag_Type $ses_wait_list_flag
     */
    protected $ses_wait_list_flag = null;

    /**
     * @var av_flag_Type $ses_auto_register_wait_list
     */
    protected $ses_auto_register_wait_list = null;

    /**
     * @var av_flag_Type $ses_check_wait_list_flag
     */
    protected $ses_check_wait_list_flag = null;

    /**
     * @var av_flag_Type $ses_registration_required
     */
    protected $ses_registration_required = null;

    /**
     * @var av_integer_Type $ses_estimated_attendance
     */
    protected $ses_estimated_attendance = null;

    /**
     * @var av_integer_Type $ses_guaranteed_attendance
     */
    protected $ses_guaranteed_attendance = null;

    /**
     * @var av_flag_Type $ses_restricted
     */
    protected $ses_restricted = null;

    /**
     * @var stringLength200_Type $ses_short_description
     */
    protected $ses_short_description = null;

    /**
     * @var stringLength1600_Type $ses_description
     */
    protected $ses_description = null;

    /**
     * @var av_text_Type $ses_description_html
     */
    protected $ses_description_html = null;

    /**
     * @var av_date_small_Type $ses_start_date
     */
    protected $ses_start_date = null;

    /**
     * @var stringLength10_Type $ses_start_time
     */
    protected $ses_start_time = null;

    /**
     * @var av_date_small_Type $ses_end_date
     */
    protected $ses_end_date = null;

    /**
     * @var stringLength10_Type $ses_end_time
     */
    protected $ses_end_time = null;

    /**
     * @var av_date_small_Type $ses_early_registration_date
     */
    protected $ses_early_registration_date = null;

    /**
     * @var av_date_small_Type $ses_late_registration
     */
    protected $ses_late_registration = null;

    /**
     * @var av_date_small_Type $ses_cutoff_date
     */
    protected $ses_cutoff_date = null;

    /**
     * @var av_date_small_Type $ses_post_to_web_date
     */
    protected $ses_post_to_web_date = null;

    /**
     * @var av_integer_Type $ses_sponsor_limit
     */
    protected $ses_sponsor_limit = null;

    /**
     * @var av_date_small_Type $ses_pre_registration_date
     */
    protected $ses_pre_registration_date = null;

    /**
     * @var av_date_small_Type $ses_remove_from_web_date
     */
    protected $ses_remove_from_web_date = null;

    /**
     * @var stringLength10_Type $ses_ceu_type
     */
    protected $ses_ceu_type = null;

    /**
     * @var stringLength100_Type $ses_session_url
     */
    protected $ses_session_url = null;

    /**
     * @var av_decimal2_Type $ses_ceu
     */
    protected $ses_ceu = null;

    /**
     * @var av_key_Type $ses_entity_key
     */
    protected $ses_entity_key = null;

    /**
     * @var av_flag_Type $ses_ticketed
     */
    protected $ses_ticketed = null;

    /**
     * @var av_key_Type $ses_cec_key
     */
    protected $ses_cec_key = null;

    /**
     * @var av_flag_Type $ses_abstract_flag
     */
    protected $ses_abstract_flag = null;

    /**
     * @var stringLength50_Type $ses_abstract_member_option
     */
    protected $ses_abstract_member_option = null;

    /**
     * @var av_date_Type $ses_abstract_deadline
     */
    protected $ses_abstract_deadline = null;

    /**
     * @var av_flag_Type $ses_free_session_flag
     */
    protected $ses_free_session_flag = null;

    /**
     * @var av_flag_Type $ses_free_guest_flag
     */
    protected $ses_free_guest_flag = null;

    /**
     * @var av_integer_Type $ses_wait_list_limit
     */
    protected $ses_wait_list_limit = null;

    /**
     * @var av_key_Type $ses_fpc_prd_key
     */
    protected $ses_fpc_prd_key = null;

    /**
     * @var stringLength50_Type $ses_sample_text_ext
     */
    protected $ses_sample_text_ext = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return av_key_Type
     */
    public function getSes_key()
    {
      return $this->ses_key;
    }

    /**
     * @param av_key_Type $ses_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_key($ses_key)
    {
      $this->ses_key = $ses_key;
      return $this;
    }

    /**
     * @return stringLength10_Type
     */
    public function getSes_code()
    {
      return $this->ses_code;
    }

    /**
     * @param stringLength10_Type $ses_code
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_code($ses_code)
    {
      $this->ses_code = $ses_code;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getSes_add_user()
    {
      return $this->ses_add_user;
    }

    /**
     * @param av_user_Type $ses_add_user
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_add_user($ses_add_user)
    {
      $this->ses_add_user = $ses_add_user;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getSes_add_date()
    {
      return $this->ses_add_date;
    }

    /**
     * @param av_date_small_Type $ses_add_date
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_add_date($ses_add_date)
    {
      $this->ses_add_date = $ses_add_date;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getSes_change_user()
    {
      return $this->ses_change_user;
    }

    /**
     * @param av_user_Type $ses_change_user
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_change_user($ses_change_user)
    {
      $this->ses_change_user = $ses_change_user;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getSes_change_date()
    {
      return $this->ses_change_date;
    }

    /**
     * @param av_date_small_Type $ses_change_date
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_change_date($ses_change_date)
    {
      $this->ses_change_date = $ses_change_date;
      return $this;
    }

    /**
     * @return av_delete_flag_Type
     */
    public function getSes_delete_flag()
    {
      return $this->ses_delete_flag;
    }

    /**
     * @param av_delete_flag_Type $ses_delete_flag
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_delete_flag($ses_delete_flag)
    {
      $this->ses_delete_flag = $ses_delete_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getSes_key_ext()
    {
      return $this->ses_key_ext;
    }

    /**
     * @param av_key_Type $ses_key_ext
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_key_ext($ses_key_ext)
    {
      $this->ses_key_ext = $ses_key_ext;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getSes_evt_key()
    {
      return $this->ses_evt_key;
    }

    /**
     * @param av_key_Type $ses_evt_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_evt_key($ses_evt_key)
    {
      $this->ses_evt_key = $ses_evt_key;
      return $this;
    }

    /**
     * @return stringLength200_Type
     */
    public function getSes_title()
    {
      return $this->ses_title;
    }

    /**
     * @param stringLength200_Type $ses_title
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_title($ses_title)
    {
      $this->ses_title = $ses_title;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getSes_set_key()
    {
      return $this->ses_set_key;
    }

    /**
     * @param av_key_Type $ses_set_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_set_key($ses_set_key)
    {
      $this->ses_set_key = $ses_set_key;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getSes_capacity()
    {
      return $this->ses_capacity;
    }

    /**
     * @param av_integer_Type $ses_capacity
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_capacity($ses_capacity)
    {
      $this->ses_capacity = $ses_capacity;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getSes_registrant_goal()
    {
      return $this->ses_registrant_goal;
    }

    /**
     * @param av_integer_Type $ses_registrant_goal
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_registrant_goal($ses_registrant_goal)
    {
      $this->ses_registrant_goal = $ses_registrant_goal;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getSes_revenue_goal()
    {
      return $this->ses_revenue_goal;
    }

    /**
     * @param av_integer_Type $ses_revenue_goal
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_revenue_goal($ses_revenue_goal)
    {
      $this->ses_revenue_goal = $ses_revenue_goal;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getSes_display_order()
    {
      return $this->ses_display_order;
    }

    /**
     * @param av_integer_Type $ses_display_order
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_display_order($ses_display_order)
    {
      $this->ses_display_order = $ses_display_order;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getSes_wait_list_flag()
    {
      return $this->ses_wait_list_flag;
    }

    /**
     * @param av_flag_Type $ses_wait_list_flag
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_wait_list_flag($ses_wait_list_flag)
    {
      $this->ses_wait_list_flag = $ses_wait_list_flag;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getSes_auto_register_wait_list()
    {
      return $this->ses_auto_register_wait_list;
    }

    /**
     * @param av_flag_Type $ses_auto_register_wait_list
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_auto_register_wait_list($ses_auto_register_wait_list)
    {
      $this->ses_auto_register_wait_list = $ses_auto_register_wait_list;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getSes_check_wait_list_flag()
    {
      return $this->ses_check_wait_list_flag;
    }

    /**
     * @param av_flag_Type $ses_check_wait_list_flag
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_check_wait_list_flag($ses_check_wait_list_flag)
    {
      $this->ses_check_wait_list_flag = $ses_check_wait_list_flag;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getSes_registration_required()
    {
      return $this->ses_registration_required;
    }

    /**
     * @param av_flag_Type $ses_registration_required
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_registration_required($ses_registration_required)
    {
      $this->ses_registration_required = $ses_registration_required;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getSes_estimated_attendance()
    {
      return $this->ses_estimated_attendance;
    }

    /**
     * @param av_integer_Type $ses_estimated_attendance
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_estimated_attendance($ses_estimated_attendance)
    {
      $this->ses_estimated_attendance = $ses_estimated_attendance;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getSes_guaranteed_attendance()
    {
      return $this->ses_guaranteed_attendance;
    }

    /**
     * @param av_integer_Type $ses_guaranteed_attendance
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_guaranteed_attendance($ses_guaranteed_attendance)
    {
      $this->ses_guaranteed_attendance = $ses_guaranteed_attendance;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getSes_restricted()
    {
      return $this->ses_restricted;
    }

    /**
     * @param av_flag_Type $ses_restricted
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_restricted($ses_restricted)
    {
      $this->ses_restricted = $ses_restricted;
      return $this;
    }

    /**
     * @return stringLength200_Type
     */
    public function getSes_short_description()
    {
      return $this->ses_short_description;
    }

    /**
     * @param stringLength200_Type $ses_short_description
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_short_description($ses_short_description)
    {
      $this->ses_short_description = $ses_short_description;
      return $this;
    }

    /**
     * @return stringLength1600_Type
     */
    public function getSes_description()
    {
      return $this->ses_description;
    }

    /**
     * @param stringLength1600_Type $ses_description
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_description($ses_description)
    {
      $this->ses_description = $ses_description;
      return $this;
    }

    /**
     * @return av_text_Type
     */
    public function getSes_description_html()
    {
      return $this->ses_description_html;
    }

    /**
     * @param av_text_Type $ses_description_html
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_description_html($ses_description_html)
    {
      $this->ses_description_html = $ses_description_html;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getSes_start_date()
    {
      return $this->ses_start_date;
    }

    /**
     * @param av_date_small_Type $ses_start_date
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_start_date($ses_start_date)
    {
      $this->ses_start_date = $ses_start_date;
      return $this;
    }

    /**
     * @return stringLength10_Type
     */
    public function getSes_start_time()
    {
      return $this->ses_start_time;
    }

    /**
     * @param stringLength10_Type $ses_start_time
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_start_time($ses_start_time)
    {
      $this->ses_start_time = $ses_start_time;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getSes_end_date()
    {
      return $this->ses_end_date;
    }

    /**
     * @param av_date_small_Type $ses_end_date
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_end_date($ses_end_date)
    {
      $this->ses_end_date = $ses_end_date;
      return $this;
    }

    /**
     * @return stringLength10_Type
     */
    public function getSes_end_time()
    {
      return $this->ses_end_time;
    }

    /**
     * @param stringLength10_Type $ses_end_time
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_end_time($ses_end_time)
    {
      $this->ses_end_time = $ses_end_time;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getSes_early_registration_date()
    {
      return $this->ses_early_registration_date;
    }

    /**
     * @param av_date_small_Type $ses_early_registration_date
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_early_registration_date($ses_early_registration_date)
    {
      $this->ses_early_registration_date = $ses_early_registration_date;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getSes_late_registration()
    {
      return $this->ses_late_registration;
    }

    /**
     * @param av_date_small_Type $ses_late_registration
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_late_registration($ses_late_registration)
    {
      $this->ses_late_registration = $ses_late_registration;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getSes_cutoff_date()
    {
      return $this->ses_cutoff_date;
    }

    /**
     * @param av_date_small_Type $ses_cutoff_date
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_cutoff_date($ses_cutoff_date)
    {
      $this->ses_cutoff_date = $ses_cutoff_date;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getSes_post_to_web_date()
    {
      return $this->ses_post_to_web_date;
    }

    /**
     * @param av_date_small_Type $ses_post_to_web_date
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_post_to_web_date($ses_post_to_web_date)
    {
      $this->ses_post_to_web_date = $ses_post_to_web_date;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getSes_sponsor_limit()
    {
      return $this->ses_sponsor_limit;
    }

    /**
     * @param av_integer_Type $ses_sponsor_limit
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_sponsor_limit($ses_sponsor_limit)
    {
      $this->ses_sponsor_limit = $ses_sponsor_limit;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getSes_pre_registration_date()
    {
      return $this->ses_pre_registration_date;
    }

    /**
     * @param av_date_small_Type $ses_pre_registration_date
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_pre_registration_date($ses_pre_registration_date)
    {
      $this->ses_pre_registration_date = $ses_pre_registration_date;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getSes_remove_from_web_date()
    {
      return $this->ses_remove_from_web_date;
    }

    /**
     * @param av_date_small_Type $ses_remove_from_web_date
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_remove_from_web_date($ses_remove_from_web_date)
    {
      $this->ses_remove_from_web_date = $ses_remove_from_web_date;
      return $this;
    }

    /**
     * @return stringLength10_Type
     */
    public function getSes_ceu_type()
    {
      return $this->ses_ceu_type;
    }

    /**
     * @param stringLength10_Type $ses_ceu_type
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_ceu_type($ses_ceu_type)
    {
      $this->ses_ceu_type = $ses_ceu_type;
      return $this;
    }

    /**
     * @return stringLength100_Type
     */
    public function getSes_session_url()
    {
      return $this->ses_session_url;
    }

    /**
     * @param stringLength100_Type $ses_session_url
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_session_url($ses_session_url)
    {
      $this->ses_session_url = $ses_session_url;
      return $this;
    }

    /**
     * @return av_decimal2_Type
     */
    public function getSes_ceu()
    {
      return $this->ses_ceu;
    }

    /**
     * @param av_decimal2_Type $ses_ceu
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_ceu($ses_ceu)
    {
      $this->ses_ceu = $ses_ceu;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getSes_entity_key()
    {
      return $this->ses_entity_key;
    }

    /**
     * @param av_key_Type $ses_entity_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_entity_key($ses_entity_key)
    {
      $this->ses_entity_key = $ses_entity_key;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getSes_ticketed()
    {
      return $this->ses_ticketed;
    }

    /**
     * @param av_flag_Type $ses_ticketed
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_ticketed($ses_ticketed)
    {
      $this->ses_ticketed = $ses_ticketed;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getSes_cec_key()
    {
      return $this->ses_cec_key;
    }

    /**
     * @param av_key_Type $ses_cec_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_cec_key($ses_cec_key)
    {
      $this->ses_cec_key = $ses_cec_key;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getSes_abstract_flag()
    {
      return $this->ses_abstract_flag;
    }

    /**
     * @param av_flag_Type $ses_abstract_flag
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_abstract_flag($ses_abstract_flag)
    {
      $this->ses_abstract_flag = $ses_abstract_flag;
      return $this;
    }

    /**
     * @return stringLength50_Type
     */
    public function getSes_abstract_member_option()
    {
      return $this->ses_abstract_member_option;
    }

    /**
     * @param stringLength50_Type $ses_abstract_member_option
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_abstract_member_option($ses_abstract_member_option)
    {
      $this->ses_abstract_member_option = $ses_abstract_member_option;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getSes_abstract_deadline()
    {
      return $this->ses_abstract_deadline;
    }

    /**
     * @param av_date_Type $ses_abstract_deadline
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_abstract_deadline($ses_abstract_deadline)
    {
      $this->ses_abstract_deadline = $ses_abstract_deadline;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getSes_free_session_flag()
    {
      return $this->ses_free_session_flag;
    }

    /**
     * @param av_flag_Type $ses_free_session_flag
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_free_session_flag($ses_free_session_flag)
    {
      $this->ses_free_session_flag = $ses_free_session_flag;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getSes_free_guest_flag()
    {
      return $this->ses_free_guest_flag;
    }

    /**
     * @param av_flag_Type $ses_free_guest_flag
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_free_guest_flag($ses_free_guest_flag)
    {
      $this->ses_free_guest_flag = $ses_free_guest_flag;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getSes_wait_list_limit()
    {
      return $this->ses_wait_list_limit;
    }

    /**
     * @param av_integer_Type $ses_wait_list_limit
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_wait_list_limit($ses_wait_list_limit)
    {
      $this->ses_wait_list_limit = $ses_wait_list_limit;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getSes_fpc_prd_key()
    {
      return $this->ses_fpc_prd_key;
    }

    /**
     * @param av_key_Type $ses_fpc_prd_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_fpc_prd_key($ses_fpc_prd_key)
    {
      $this->ses_fpc_prd_key = $ses_fpc_prd_key;
      return $this;
    }

    /**
     * @return stringLength50_Type
     */
    public function getSes_sample_text_ext()
    {
      return $this->ses_sample_text_ext;
    }

    /**
     * @param stringLength50_Type $ses_sample_text_ext
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSession_ev_session_DataObjectType
     */
    public function setSes_sample_text_ext($ses_sample_text_ext)
    {
      $this->ses_sample_text_ext = $ses_sample_text_ext;
      return $this;
    }

}
