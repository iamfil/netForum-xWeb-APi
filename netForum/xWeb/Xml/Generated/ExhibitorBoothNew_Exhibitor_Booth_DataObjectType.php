<?php

namespace netForum\xWeb\Xml\Generated;

class ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
{

    /**
     * @var av_key_Type $hxb_key
     */
    protected $hxb_key = null;

    /**
     * @var av_key_Type $hxb_exh_key
     */
    protected $hxb_exh_key = null;

    /**
     * @var stringLength53_Type $hxb_inv_code_cp
     */
    protected $hxb_inv_code_cp = null;

    /**
     * @var av_user_Type $hxb_add_user
     */
    protected $hxb_add_user = null;

    /**
     * @var av_date_Type $hxb_add_date
     */
    protected $hxb_add_date = null;

    /**
     * @var av_user_Type $hxb_change_user
     */
    protected $hxb_change_user = null;

    /**
     * @var av_date_Type $hxb_change_date
     */
    protected $hxb_change_date = null;

    /**
     * @var av_delete_flag_Type $hxb_delete_flag
     */
    protected $hxb_delete_flag = null;

    /**
     * @var av_key_Type $hxb_key_ext
     */
    protected $hxb_key_ext = null;

    /**
     * @var av_flag_Type $hxb_received_comp
     */
    protected $hxb_received_comp = null;

    /**
     * @var av_key_Type $hxb_bct_key
     */
    protected $hxb_bct_key = null;

    /**
     * @var av_key_Type $hxb_bty_key
     */
    protected $hxb_bty_key = null;

    /**
     * @var av_integer_Type $hxb_booth_number
     */
    protected $hxb_booth_number = null;

    /**
     * @var av_key_Type $hxb_entity_key
     */
    protected $hxb_entity_key = null;

    /**
     * @var av_decimal2_Type $hxb_priority_points_override
     */
    protected $hxb_priority_points_override = null;

    /**
     * @var stringLength200_Type $hxb_notes
     */
    protected $hxb_notes = null;

    /**
     * @var av_flag_Type $hxb_shared_flag
     */
    protected $hxb_shared_flag = null;

    /**
     * @var av_date_small_Type $hxb_cancel_date
     */
    protected $hxb_cancel_date = null;

    /**
     * @var av_flag_Type $hxb_wait_list_flag
     */
    protected $hxb_wait_list_flag = null;

    /**
     * @var stringLength50_Type $hxb_booth_status
     */
    protected $hxb_booth_status = null;

    /**
     * @var av_key_Type $hxb_ebn_key
     */
    protected $hxb_ebn_key = null;

    /**
     * @var av_key_Type $hxb_bfe_prd_key
     */
    protected $hxb_bfe_prd_key = null;

    /**
     * @var av_key_Type $hxb_sbt_key
     */
    protected $hxb_sbt_key = null;

    /**
     * @var av_integer_Type $hxb_comp_booth_personnel_override
     */
    protected $hxb_comp_booth_personnel_override = null;

    /**
     * @var stringLength50_Type $hxb_inv_code
     */
    protected $hxb_inv_code = null;

    /**
     * @var av_key_Type $hxb_ivd_key
     */
    protected $hxb_ivd_key = null;

    /**
     * @var av_decimal2_Type $hxb_width
     */
    protected $hxb_width = null;

    /**
     * @var av_decimal2_Type $hxb_depth
     */
    protected $hxb_depth = null;

    /**
     * @var av_decimal2_Type $hxb_square_footage
     */
    protected $hxb_square_footage = null;

    /**
     * @var decimal_Type $hxb_square_footage_cp
     */
    protected $hxb_square_footage_cp = null;

    /**
     * @var av_key_Type $hxb_odd_key
     */
    protected $hxb_odd_key = null;

    /**
     * @var av_integer_Type $hxb_total_booths_to_sell
     */
    protected $hxb_total_booths_to_sell = null;

    /**
     * @var av_integer_Type $hxb_comp_registrations
     */
    protected $hxb_comp_registrations = null;

    /**
     * @var stringLength0_Type $hxb__bty_available
     */
    protected $hxb__bty_available = null;

    /**
     * @var stringLength0_Type $hxb__bty_sold
     */
    protected $hxb__bty_sold = null;

    /**
     * @var stringLength0_Type $hxb__bty_inventory_qty
     */
    protected $hxb__bty_inventory_qty = null;

    /**
     * @var stringLength0_Type $hxb__bct_available
     */
    protected $hxb__bct_available = null;

    /**
     * @var stringLength0_Type $hxb__bct_sold
     */
    protected $hxb__bct_sold = null;

    /**
     * @var stringLength0_Type $hxb__bct_inventory_qty
     */
    protected $hxb__bct_inventory_qty = null;

    /**
     * @var stringLength0_Type $hxb_shared_responsibility
     */
    protected $hxb_shared_responsibility = null;

    /**
     * @var av_flag_Type $hxb_display_wait_list
     */
    protected $hxb_display_wait_list = null;

    /**
     * @var stringLength0_Type $hxb_search_by_booth_type
     */
    protected $hxb_search_by_booth_type = null;

    /**
     * @var stringLength0_Type $hxb_search_by_booth_category
     */
    protected $hxb_search_by_booth_category = null;

    /**
     * @var av_text_Type $hxb_search_by_booth_product
     */
    protected $hxb_search_by_booth_product = null;

    /**
     * @var av_flag_Type $hxb_cancel_flag
     */
    protected $hxb_cancel_flag = null;

    /**
     * @var av_flag_Type $hxb_sell_space
     */
    protected $hxb_sell_space = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return av_key_Type
     */
    public function getHxb_key()
    {
      return $this->hxb_key;
    }

    /**
     * @param av_key_Type $hxb_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_key($hxb_key)
    {
      $this->hxb_key = $hxb_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getHxb_exh_key()
    {
      return $this->hxb_exh_key;
    }

    /**
     * @param av_key_Type $hxb_exh_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_exh_key($hxb_exh_key)
    {
      $this->hxb_exh_key = $hxb_exh_key;
      return $this;
    }

    /**
     * @return stringLength53_Type
     */
    public function getHxb_inv_code_cp()
    {
      return $this->hxb_inv_code_cp;
    }

    /**
     * @param stringLength53_Type $hxb_inv_code_cp
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_inv_code_cp($hxb_inv_code_cp)
    {
      $this->hxb_inv_code_cp = $hxb_inv_code_cp;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getHxb_add_user()
    {
      return $this->hxb_add_user;
    }

    /**
     * @param av_user_Type $hxb_add_user
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_add_user($hxb_add_user)
    {
      $this->hxb_add_user = $hxb_add_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getHxb_add_date()
    {
      return $this->hxb_add_date;
    }

    /**
     * @param av_date_Type $hxb_add_date
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_add_date($hxb_add_date)
    {
      $this->hxb_add_date = $hxb_add_date;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getHxb_change_user()
    {
      return $this->hxb_change_user;
    }

    /**
     * @param av_user_Type $hxb_change_user
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_change_user($hxb_change_user)
    {
      $this->hxb_change_user = $hxb_change_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getHxb_change_date()
    {
      return $this->hxb_change_date;
    }

    /**
     * @param av_date_Type $hxb_change_date
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_change_date($hxb_change_date)
    {
      $this->hxb_change_date = $hxb_change_date;
      return $this;
    }

    /**
     * @return av_delete_flag_Type
     */
    public function getHxb_delete_flag()
    {
      return $this->hxb_delete_flag;
    }

    /**
     * @param av_delete_flag_Type $hxb_delete_flag
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_delete_flag($hxb_delete_flag)
    {
      $this->hxb_delete_flag = $hxb_delete_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getHxb_key_ext()
    {
      return $this->hxb_key_ext;
    }

    /**
     * @param av_key_Type $hxb_key_ext
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_key_ext($hxb_key_ext)
    {
      $this->hxb_key_ext = $hxb_key_ext;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getHxb_received_comp()
    {
      return $this->hxb_received_comp;
    }

    /**
     * @param av_flag_Type $hxb_received_comp
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_received_comp($hxb_received_comp)
    {
      $this->hxb_received_comp = $hxb_received_comp;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getHxb_bct_key()
    {
      return $this->hxb_bct_key;
    }

    /**
     * @param av_key_Type $hxb_bct_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_bct_key($hxb_bct_key)
    {
      $this->hxb_bct_key = $hxb_bct_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getHxb_bty_key()
    {
      return $this->hxb_bty_key;
    }

    /**
     * @param av_key_Type $hxb_bty_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_bty_key($hxb_bty_key)
    {
      $this->hxb_bty_key = $hxb_bty_key;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getHxb_booth_number()
    {
      return $this->hxb_booth_number;
    }

    /**
     * @param av_integer_Type $hxb_booth_number
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_booth_number($hxb_booth_number)
    {
      $this->hxb_booth_number = $hxb_booth_number;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getHxb_entity_key()
    {
      return $this->hxb_entity_key;
    }

    /**
     * @param av_key_Type $hxb_entity_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_entity_key($hxb_entity_key)
    {
      $this->hxb_entity_key = $hxb_entity_key;
      return $this;
    }

    /**
     * @return av_decimal2_Type
     */
    public function getHxb_priority_points_override()
    {
      return $this->hxb_priority_points_override;
    }

    /**
     * @param av_decimal2_Type $hxb_priority_points_override
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_priority_points_override($hxb_priority_points_override)
    {
      $this->hxb_priority_points_override = $hxb_priority_points_override;
      return $this;
    }

    /**
     * @return stringLength200_Type
     */
    public function getHxb_notes()
    {
      return $this->hxb_notes;
    }

    /**
     * @param stringLength200_Type $hxb_notes
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_notes($hxb_notes)
    {
      $this->hxb_notes = $hxb_notes;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getHxb_shared_flag()
    {
      return $this->hxb_shared_flag;
    }

    /**
     * @param av_flag_Type $hxb_shared_flag
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_shared_flag($hxb_shared_flag)
    {
      $this->hxb_shared_flag = $hxb_shared_flag;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getHxb_cancel_date()
    {
      return $this->hxb_cancel_date;
    }

    /**
     * @param av_date_small_Type $hxb_cancel_date
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_cancel_date($hxb_cancel_date)
    {
      $this->hxb_cancel_date = $hxb_cancel_date;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getHxb_wait_list_flag()
    {
      return $this->hxb_wait_list_flag;
    }

    /**
     * @param av_flag_Type $hxb_wait_list_flag
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_wait_list_flag($hxb_wait_list_flag)
    {
      $this->hxb_wait_list_flag = $hxb_wait_list_flag;
      return $this;
    }

    /**
     * @return stringLength50_Type
     */
    public function getHxb_booth_status()
    {
      return $this->hxb_booth_status;
    }

    /**
     * @param stringLength50_Type $hxb_booth_status
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_booth_status($hxb_booth_status)
    {
      $this->hxb_booth_status = $hxb_booth_status;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getHxb_ebn_key()
    {
      return $this->hxb_ebn_key;
    }

    /**
     * @param av_key_Type $hxb_ebn_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_ebn_key($hxb_ebn_key)
    {
      $this->hxb_ebn_key = $hxb_ebn_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getHxb_bfe_prd_key()
    {
      return $this->hxb_bfe_prd_key;
    }

    /**
     * @param av_key_Type $hxb_bfe_prd_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_bfe_prd_key($hxb_bfe_prd_key)
    {
      $this->hxb_bfe_prd_key = $hxb_bfe_prd_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getHxb_sbt_key()
    {
      return $this->hxb_sbt_key;
    }

    /**
     * @param av_key_Type $hxb_sbt_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_sbt_key($hxb_sbt_key)
    {
      $this->hxb_sbt_key = $hxb_sbt_key;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getHxb_comp_booth_personnel_override()
    {
      return $this->hxb_comp_booth_personnel_override;
    }

    /**
     * @param av_integer_Type $hxb_comp_booth_personnel_override
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_comp_booth_personnel_override($hxb_comp_booth_personnel_override)
    {
      $this->hxb_comp_booth_personnel_override = $hxb_comp_booth_personnel_override;
      return $this;
    }

    /**
     * @return stringLength50_Type
     */
    public function getHxb_inv_code()
    {
      return $this->hxb_inv_code;
    }

    /**
     * @param stringLength50_Type $hxb_inv_code
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_inv_code($hxb_inv_code)
    {
      $this->hxb_inv_code = $hxb_inv_code;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getHxb_ivd_key()
    {
      return $this->hxb_ivd_key;
    }

    /**
     * @param av_key_Type $hxb_ivd_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_ivd_key($hxb_ivd_key)
    {
      $this->hxb_ivd_key = $hxb_ivd_key;
      return $this;
    }

    /**
     * @return av_decimal2_Type
     */
    public function getHxb_width()
    {
      return $this->hxb_width;
    }

    /**
     * @param av_decimal2_Type $hxb_width
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_width($hxb_width)
    {
      $this->hxb_width = $hxb_width;
      return $this;
    }

    /**
     * @return av_decimal2_Type
     */
    public function getHxb_depth()
    {
      return $this->hxb_depth;
    }

    /**
     * @param av_decimal2_Type $hxb_depth
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_depth($hxb_depth)
    {
      $this->hxb_depth = $hxb_depth;
      return $this;
    }

    /**
     * @return av_decimal2_Type
     */
    public function getHxb_square_footage()
    {
      return $this->hxb_square_footage;
    }

    /**
     * @param av_decimal2_Type $hxb_square_footage
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_square_footage($hxb_square_footage)
    {
      $this->hxb_square_footage = $hxb_square_footage;
      return $this;
    }

    /**
     * @return decimal_Type
     */
    public function getHxb_square_footage_cp()
    {
      return $this->hxb_square_footage_cp;
    }

    /**
     * @param decimal_Type $hxb_square_footage_cp
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_square_footage_cp($hxb_square_footage_cp)
    {
      $this->hxb_square_footage_cp = $hxb_square_footage_cp;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getHxb_odd_key()
    {
      return $this->hxb_odd_key;
    }

    /**
     * @param av_key_Type $hxb_odd_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_odd_key($hxb_odd_key)
    {
      $this->hxb_odd_key = $hxb_odd_key;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getHxb_total_booths_to_sell()
    {
      return $this->hxb_total_booths_to_sell;
    }

    /**
     * @param av_integer_Type $hxb_total_booths_to_sell
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_total_booths_to_sell($hxb_total_booths_to_sell)
    {
      $this->hxb_total_booths_to_sell = $hxb_total_booths_to_sell;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getHxb_comp_registrations()
    {
      return $this->hxb_comp_registrations;
    }

    /**
     * @param av_integer_Type $hxb_comp_registrations
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_comp_registrations($hxb_comp_registrations)
    {
      $this->hxb_comp_registrations = $hxb_comp_registrations;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getHxb__bty_available()
    {
      return $this->hxb__bty_available;
    }

    /**
     * @param stringLength0_Type $hxb__bty_available
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb__bty_available($hxb__bty_available)
    {
      $this->hxb__bty_available = $hxb__bty_available;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getHxb__bty_sold()
    {
      return $this->hxb__bty_sold;
    }

    /**
     * @param stringLength0_Type $hxb__bty_sold
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb__bty_sold($hxb__bty_sold)
    {
      $this->hxb__bty_sold = $hxb__bty_sold;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getHxb__bty_inventory_qty()
    {
      return $this->hxb__bty_inventory_qty;
    }

    /**
     * @param stringLength0_Type $hxb__bty_inventory_qty
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb__bty_inventory_qty($hxb__bty_inventory_qty)
    {
      $this->hxb__bty_inventory_qty = $hxb__bty_inventory_qty;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getHxb__bct_available()
    {
      return $this->hxb__bct_available;
    }

    /**
     * @param stringLength0_Type $hxb__bct_available
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb__bct_available($hxb__bct_available)
    {
      $this->hxb__bct_available = $hxb__bct_available;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getHxb__bct_sold()
    {
      return $this->hxb__bct_sold;
    }

    /**
     * @param stringLength0_Type $hxb__bct_sold
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb__bct_sold($hxb__bct_sold)
    {
      $this->hxb__bct_sold = $hxb__bct_sold;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getHxb__bct_inventory_qty()
    {
      return $this->hxb__bct_inventory_qty;
    }

    /**
     * @param stringLength0_Type $hxb__bct_inventory_qty
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb__bct_inventory_qty($hxb__bct_inventory_qty)
    {
      $this->hxb__bct_inventory_qty = $hxb__bct_inventory_qty;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getHxb_shared_responsibility()
    {
      return $this->hxb_shared_responsibility;
    }

    /**
     * @param stringLength0_Type $hxb_shared_responsibility
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_shared_responsibility($hxb_shared_responsibility)
    {
      $this->hxb_shared_responsibility = $hxb_shared_responsibility;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getHxb_display_wait_list()
    {
      return $this->hxb_display_wait_list;
    }

    /**
     * @param av_flag_Type $hxb_display_wait_list
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_display_wait_list($hxb_display_wait_list)
    {
      $this->hxb_display_wait_list = $hxb_display_wait_list;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getHxb_search_by_booth_type()
    {
      return $this->hxb_search_by_booth_type;
    }

    /**
     * @param stringLength0_Type $hxb_search_by_booth_type
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_search_by_booth_type($hxb_search_by_booth_type)
    {
      $this->hxb_search_by_booth_type = $hxb_search_by_booth_type;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getHxb_search_by_booth_category()
    {
      return $this->hxb_search_by_booth_category;
    }

    /**
     * @param stringLength0_Type $hxb_search_by_booth_category
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_search_by_booth_category($hxb_search_by_booth_category)
    {
      $this->hxb_search_by_booth_category = $hxb_search_by_booth_category;
      return $this;
    }

    /**
     * @return av_text_Type
     */
    public function getHxb_search_by_booth_product()
    {
      return $this->hxb_search_by_booth_product;
    }

    /**
     * @param av_text_Type $hxb_search_by_booth_product
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_search_by_booth_product($hxb_search_by_booth_product)
    {
      $this->hxb_search_by_booth_product = $hxb_search_by_booth_product;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getHxb_cancel_flag()
    {
      return $this->hxb_cancel_flag;
    }

    /**
     * @param av_flag_Type $hxb_cancel_flag
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_cancel_flag($hxb_cancel_flag)
    {
      $this->hxb_cancel_flag = $hxb_cancel_flag;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getHxb_sell_space()
    {
      return $this->hxb_sell_space;
    }

    /**
     * @param av_flag_Type $hxb_sell_space
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function setHxb_sell_space($hxb_sell_space)
    {
      $this->hxb_sell_space = $hxb_sell_space;
      return $this;
    }

}