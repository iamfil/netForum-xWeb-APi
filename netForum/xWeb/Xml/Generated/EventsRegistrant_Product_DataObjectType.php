<?php

namespace netForum\xWeb\Xml\Generated;

class EventsRegistrant_Product_DataObjectType
{

    /**
     * @var av_key_Type $prd_key
     */
    protected $prd_key = null;

    /**
     * @var stringLength255_Type $prd_name
     */
    protected $prd_name = null;

    /**
     * @var av_user_Type $prd_add_user
     */
    protected $prd_add_user = null;

    /**
     * @var av_date_Type $prd_add_date
     */
    protected $prd_add_date = null;

    /**
     * @var av_user_Type $prd_change_user
     */
    protected $prd_change_user = null;

    /**
     * @var av_date_Type $prd_change_date
     */
    protected $prd_change_date = null;

    /**
     * @var av_delete_flag_Type $prd_delete_flag
     */
    protected $prd_delete_flag = null;

    /**
     * @var av_key_Type $prd_key_ext
     */
    protected $prd_key_ext = null;

    /**
     * @var av_text_Type $prd_description
     */
    protected $prd_description = null;

    /**
     * @var av_flag_Type $prd_allow_partial_ship_flag
     */
    protected $prd_allow_partial_ship_flag = null;

    /**
     * @var av_flag_Type $prd_track_inventory_flag
     */
    protected $prd_track_inventory_flag = null;

    /**
     * @var av_key_Type $prd_gla_cogs_key
     */
    protected $prd_gla_cogs_key = null;

    /**
     * @var av_key_Type $prd_gla_inventory_key
     */
    protected $prd_gla_inventory_key = null;

    /**
     * @var av_key_Type $prd_ptp_key
     */
    protected $prd_ptp_key = null;

    /**
     * @var av_date_small_Type $prd_start_date
     */
    protected $prd_start_date = null;

    /**
     * @var av_flag_Type $prd_taxable_flag
     */
    protected $prd_taxable_flag = null;

    /**
     * @var av_flag_Type $prd_allow_backorder
     */
    protected $prd_allow_backorder = null;

    /**
     * @var av_date_small_Type $prd_end_date
     */
    protected $prd_end_date = null;

    /**
     * @var av_key_Type $prd_atc_key
     */
    protected $prd_atc_key = null;

    /**
     * @var av_decimal4_Type $prd_qty_reorder
     */
    protected $prd_qty_reorder = null;

    /**
     * @var av_currency_Type $prd_restock_fee
     */
    protected $prd_restock_fee = null;

    /**
     * @var av_decimal4_Type $prd_restock_percent
     */
    protected $prd_restock_percent = null;

    /**
     * @var decimal_Type $prd_restock_percent_cp
     */
    protected $prd_restock_percent_cp = null;

    /**
     * @var av_flag_Type $prd_mail
     */
    protected $prd_mail = null;

    /**
     * @var av_flag_Type $prd_email
     */
    protected $prd_email = null;

    /**
     * @var av_flag_Type $prd_fax
     */
    protected $prd_fax = null;

    /**
     * @var av_flag_Type $prd_sell_online
     */
    protected $prd_sell_online = null;

    /**
     * @var av_text_Type $prd_online_abstract
     */
    protected $prd_online_abstract = null;

    /**
     * @var stringLength20_Type $prd_code
     */
    protected $prd_code = null;

    /**
     * @var stringLength400_Type $prd_short_description
     */
    protected $prd_short_description = null;

    /**
     * @var av_key_Type $prd_thumbnail_doc_key
     */
    protected $prd_thumbnail_doc_key = null;

    /**
     * @var av_key_Type $prd_entity_key
     */
    protected $prd_entity_key = null;

    /**
     * @var av_flag_Type $prd_web
     */
    protected $prd_web = null;

    /**
     * @var av_flag_Type $prd_microfiche
     */
    protected $prd_microfiche = null;

    /**
     * @var av_date_Type $prd_post_to_web_date
     */
    protected $prd_post_to_web_date = null;

    /**
     * @var av_date_Type $prd_remove_from_web_date
     */
    protected $prd_remove_from_web_date = null;

    /**
     * @var av_key_Type $prd_ptc_key
     */
    protected $prd_ptc_key = null;

    /**
     * @var stringLength25_Type $prd_format
     */
    protected $prd_format = null;

    /**
     * @var av_url_Type $prd_download_url
     */
    protected $prd_download_url = null;

    /**
     * @var av_date_Type $prd_show_as_new_until
     */
    protected $prd_show_as_new_until = null;

    /**
     * @var av_key_Type $prd_pjt_key
     */
    protected $prd_pjt_key = null;

    /**
     * @var av_key_Type $prd_gla_damaged_goods_key
     */
    protected $prd_gla_damaged_goods_key = null;

    /**
     * @var av_integer_Type $prd_order
     */
    protected $prd_order = null;

    /**
     * @var av_integer_Type $prd_download_available_days
     */
    protected $prd_download_available_days = null;

    /**
     * @var av_decimal4_Type $prd_weighted_average_cost
     */
    protected $prd_weighted_average_cost = null;

    /**
     * @var av_flag_Type $prd_featured_product_flag
     */
    protected $prd_featured_product_flag = null;

    /**
     * @var av_integer_Type $prd_download_available_count
     */
    protected $prd_download_available_count = null;

    /**
     * @var av_key_Type $prd_cct_key
     */
    protected $prd_cct_key = null;

    /**
     * @var av_key_Type $prd_pts_key
     */
    protected $prd_pts_key = null;

    /**
     * @var av_key_Type $prd_cmo_key
     */
    protected $prd_cmo_key = null;

    /**
     * @var stringLength0_Type $prd_out_of_stock_override_message
     */
    protected $prd_out_of_stock_override_message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return av_key_Type
     */
    public function getPrd_key()
    {
      return $this->prd_key;
    }

    /**
     * @param av_key_Type $prd_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_key($prd_key)
    {
      $this->prd_key = $prd_key;
      return $this;
    }

    /**
     * @return stringLength255_Type
     */
    public function getPrd_name()
    {
      return $this->prd_name;
    }

    /**
     * @param stringLength255_Type $prd_name
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_name($prd_name)
    {
      $this->prd_name = $prd_name;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getPrd_add_user()
    {
      return $this->prd_add_user;
    }

    /**
     * @param av_user_Type $prd_add_user
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_add_user($prd_add_user)
    {
      $this->prd_add_user = $prd_add_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getPrd_add_date()
    {
      return $this->prd_add_date;
    }

    /**
     * @param av_date_Type $prd_add_date
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_add_date($prd_add_date)
    {
      $this->prd_add_date = $prd_add_date;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getPrd_change_user()
    {
      return $this->prd_change_user;
    }

    /**
     * @param av_user_Type $prd_change_user
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_change_user($prd_change_user)
    {
      $this->prd_change_user = $prd_change_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getPrd_change_date()
    {
      return $this->prd_change_date;
    }

    /**
     * @param av_date_Type $prd_change_date
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_change_date($prd_change_date)
    {
      $this->prd_change_date = $prd_change_date;
      return $this;
    }

    /**
     * @return av_delete_flag_Type
     */
    public function getPrd_delete_flag()
    {
      return $this->prd_delete_flag;
    }

    /**
     * @param av_delete_flag_Type $prd_delete_flag
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_delete_flag($prd_delete_flag)
    {
      $this->prd_delete_flag = $prd_delete_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPrd_key_ext()
    {
      return $this->prd_key_ext;
    }

    /**
     * @param av_key_Type $prd_key_ext
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_key_ext($prd_key_ext)
    {
      $this->prd_key_ext = $prd_key_ext;
      return $this;
    }

    /**
     * @return av_text_Type
     */
    public function getPrd_description()
    {
      return $this->prd_description;
    }

    /**
     * @param av_text_Type $prd_description
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_description($prd_description)
    {
      $this->prd_description = $prd_description;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPrd_allow_partial_ship_flag()
    {
      return $this->prd_allow_partial_ship_flag;
    }

    /**
     * @param av_flag_Type $prd_allow_partial_ship_flag
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_allow_partial_ship_flag($prd_allow_partial_ship_flag)
    {
      $this->prd_allow_partial_ship_flag = $prd_allow_partial_ship_flag;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPrd_track_inventory_flag()
    {
      return $this->prd_track_inventory_flag;
    }

    /**
     * @param av_flag_Type $prd_track_inventory_flag
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_track_inventory_flag($prd_track_inventory_flag)
    {
      $this->prd_track_inventory_flag = $prd_track_inventory_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPrd_gla_cogs_key()
    {
      return $this->prd_gla_cogs_key;
    }

    /**
     * @param av_key_Type $prd_gla_cogs_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_gla_cogs_key($prd_gla_cogs_key)
    {
      $this->prd_gla_cogs_key = $prd_gla_cogs_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPrd_gla_inventory_key()
    {
      return $this->prd_gla_inventory_key;
    }

    /**
     * @param av_key_Type $prd_gla_inventory_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_gla_inventory_key($prd_gla_inventory_key)
    {
      $this->prd_gla_inventory_key = $prd_gla_inventory_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPrd_ptp_key()
    {
      return $this->prd_ptp_key;
    }

    /**
     * @param av_key_Type $prd_ptp_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_ptp_key($prd_ptp_key)
    {
      $this->prd_ptp_key = $prd_ptp_key;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getPrd_start_date()
    {
      return $this->prd_start_date;
    }

    /**
     * @param av_date_small_Type $prd_start_date
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_start_date($prd_start_date)
    {
      $this->prd_start_date = $prd_start_date;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPrd_taxable_flag()
    {
      return $this->prd_taxable_flag;
    }

    /**
     * @param av_flag_Type $prd_taxable_flag
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_taxable_flag($prd_taxable_flag)
    {
      $this->prd_taxable_flag = $prd_taxable_flag;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPrd_allow_backorder()
    {
      return $this->prd_allow_backorder;
    }

    /**
     * @param av_flag_Type $prd_allow_backorder
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_allow_backorder($prd_allow_backorder)
    {
      $this->prd_allow_backorder = $prd_allow_backorder;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getPrd_end_date()
    {
      return $this->prd_end_date;
    }

    /**
     * @param av_date_small_Type $prd_end_date
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_end_date($prd_end_date)
    {
      $this->prd_end_date = $prd_end_date;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPrd_atc_key()
    {
      return $this->prd_atc_key;
    }

    /**
     * @param av_key_Type $prd_atc_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_atc_key($prd_atc_key)
    {
      $this->prd_atc_key = $prd_atc_key;
      return $this;
    }

    /**
     * @return av_decimal4_Type
     */
    public function getPrd_qty_reorder()
    {
      return $this->prd_qty_reorder;
    }

    /**
     * @param av_decimal4_Type $prd_qty_reorder
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_qty_reorder($prd_qty_reorder)
    {
      $this->prd_qty_reorder = $prd_qty_reorder;
      return $this;
    }

    /**
     * @return av_currency_Type
     */
    public function getPrd_restock_fee()
    {
      return $this->prd_restock_fee;
    }

    /**
     * @param av_currency_Type $prd_restock_fee
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_restock_fee($prd_restock_fee)
    {
      $this->prd_restock_fee = $prd_restock_fee;
      return $this;
    }

    /**
     * @return av_decimal4_Type
     */
    public function getPrd_restock_percent()
    {
      return $this->prd_restock_percent;
    }

    /**
     * @param av_decimal4_Type $prd_restock_percent
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_restock_percent($prd_restock_percent)
    {
      $this->prd_restock_percent = $prd_restock_percent;
      return $this;
    }

    /**
     * @return decimal_Type
     */
    public function getPrd_restock_percent_cp()
    {
      return $this->prd_restock_percent_cp;
    }

    /**
     * @param decimal_Type $prd_restock_percent_cp
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_restock_percent_cp($prd_restock_percent_cp)
    {
      $this->prd_restock_percent_cp = $prd_restock_percent_cp;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPrd_mail()
    {
      return $this->prd_mail;
    }

    /**
     * @param av_flag_Type $prd_mail
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_mail($prd_mail)
    {
      $this->prd_mail = $prd_mail;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPrd_email()
    {
      return $this->prd_email;
    }

    /**
     * @param av_flag_Type $prd_email
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_email($prd_email)
    {
      $this->prd_email = $prd_email;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPrd_fax()
    {
      return $this->prd_fax;
    }

    /**
     * @param av_flag_Type $prd_fax
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_fax($prd_fax)
    {
      $this->prd_fax = $prd_fax;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPrd_sell_online()
    {
      return $this->prd_sell_online;
    }

    /**
     * @param av_flag_Type $prd_sell_online
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_sell_online($prd_sell_online)
    {
      $this->prd_sell_online = $prd_sell_online;
      return $this;
    }

    /**
     * @return av_text_Type
     */
    public function getPrd_online_abstract()
    {
      return $this->prd_online_abstract;
    }

    /**
     * @param av_text_Type $prd_online_abstract
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_online_abstract($prd_online_abstract)
    {
      $this->prd_online_abstract = $prd_online_abstract;
      return $this;
    }

    /**
     * @return stringLength20_Type
     */
    public function getPrd_code()
    {
      return $this->prd_code;
    }

    /**
     * @param stringLength20_Type $prd_code
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_code($prd_code)
    {
      $this->prd_code = $prd_code;
      return $this;
    }

    /**
     * @return stringLength400_Type
     */
    public function getPrd_short_description()
    {
      return $this->prd_short_description;
    }

    /**
     * @param stringLength400_Type $prd_short_description
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_short_description($prd_short_description)
    {
      $this->prd_short_description = $prd_short_description;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPrd_thumbnail_doc_key()
    {
      return $this->prd_thumbnail_doc_key;
    }

    /**
     * @param av_key_Type $prd_thumbnail_doc_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_thumbnail_doc_key($prd_thumbnail_doc_key)
    {
      $this->prd_thumbnail_doc_key = $prd_thumbnail_doc_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPrd_entity_key()
    {
      return $this->prd_entity_key;
    }

    /**
     * @param av_key_Type $prd_entity_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_entity_key($prd_entity_key)
    {
      $this->prd_entity_key = $prd_entity_key;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPrd_web()
    {
      return $this->prd_web;
    }

    /**
     * @param av_flag_Type $prd_web
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_web($prd_web)
    {
      $this->prd_web = $prd_web;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPrd_microfiche()
    {
      return $this->prd_microfiche;
    }

    /**
     * @param av_flag_Type $prd_microfiche
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_microfiche($prd_microfiche)
    {
      $this->prd_microfiche = $prd_microfiche;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getPrd_post_to_web_date()
    {
      return $this->prd_post_to_web_date;
    }

    /**
     * @param av_date_Type $prd_post_to_web_date
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_post_to_web_date($prd_post_to_web_date)
    {
      $this->prd_post_to_web_date = $prd_post_to_web_date;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getPrd_remove_from_web_date()
    {
      return $this->prd_remove_from_web_date;
    }

    /**
     * @param av_date_Type $prd_remove_from_web_date
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_remove_from_web_date($prd_remove_from_web_date)
    {
      $this->prd_remove_from_web_date = $prd_remove_from_web_date;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPrd_ptc_key()
    {
      return $this->prd_ptc_key;
    }

    /**
     * @param av_key_Type $prd_ptc_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_ptc_key($prd_ptc_key)
    {
      $this->prd_ptc_key = $prd_ptc_key;
      return $this;
    }

    /**
     * @return stringLength25_Type
     */
    public function getPrd_format()
    {
      return $this->prd_format;
    }

    /**
     * @param stringLength25_Type $prd_format
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_format($prd_format)
    {
      $this->prd_format = $prd_format;
      return $this;
    }

    /**
     * @return av_url_Type
     */
    public function getPrd_download_url()
    {
      return $this->prd_download_url;
    }

    /**
     * @param av_url_Type $prd_download_url
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_download_url($prd_download_url)
    {
      $this->prd_download_url = $prd_download_url;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getPrd_show_as_new_until()
    {
      return $this->prd_show_as_new_until;
    }

    /**
     * @param av_date_Type $prd_show_as_new_until
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_show_as_new_until($prd_show_as_new_until)
    {
      $this->prd_show_as_new_until = $prd_show_as_new_until;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPrd_pjt_key()
    {
      return $this->prd_pjt_key;
    }

    /**
     * @param av_key_Type $prd_pjt_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_pjt_key($prd_pjt_key)
    {
      $this->prd_pjt_key = $prd_pjt_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPrd_gla_damaged_goods_key()
    {
      return $this->prd_gla_damaged_goods_key;
    }

    /**
     * @param av_key_Type $prd_gla_damaged_goods_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_gla_damaged_goods_key($prd_gla_damaged_goods_key)
    {
      $this->prd_gla_damaged_goods_key = $prd_gla_damaged_goods_key;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getPrd_order()
    {
      return $this->prd_order;
    }

    /**
     * @param av_integer_Type $prd_order
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_order($prd_order)
    {
      $this->prd_order = $prd_order;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getPrd_download_available_days()
    {
      return $this->prd_download_available_days;
    }

    /**
     * @param av_integer_Type $prd_download_available_days
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_download_available_days($prd_download_available_days)
    {
      $this->prd_download_available_days = $prd_download_available_days;
      return $this;
    }

    /**
     * @return av_decimal4_Type
     */
    public function getPrd_weighted_average_cost()
    {
      return $this->prd_weighted_average_cost;
    }

    /**
     * @param av_decimal4_Type $prd_weighted_average_cost
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_weighted_average_cost($prd_weighted_average_cost)
    {
      $this->prd_weighted_average_cost = $prd_weighted_average_cost;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPrd_featured_product_flag()
    {
      return $this->prd_featured_product_flag;
    }

    /**
     * @param av_flag_Type $prd_featured_product_flag
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_featured_product_flag($prd_featured_product_flag)
    {
      $this->prd_featured_product_flag = $prd_featured_product_flag;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getPrd_download_available_count()
    {
      return $this->prd_download_available_count;
    }

    /**
     * @param av_integer_Type $prd_download_available_count
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_download_available_count($prd_download_available_count)
    {
      $this->prd_download_available_count = $prd_download_available_count;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPrd_cct_key()
    {
      return $this->prd_cct_key;
    }

    /**
     * @param av_key_Type $prd_cct_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_cct_key($prd_cct_key)
    {
      $this->prd_cct_key = $prd_cct_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPrd_pts_key()
    {
      return $this->prd_pts_key;
    }

    /**
     * @param av_key_Type $prd_pts_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_pts_key($prd_pts_key)
    {
      $this->prd_pts_key = $prd_pts_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPrd_cmo_key()
    {
      return $this->prd_cmo_key;
    }

    /**
     * @param av_key_Type $prd_cmo_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_cmo_key($prd_cmo_key)
    {
      $this->prd_cmo_key = $prd_cmo_key;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getPrd_out_of_stock_override_message()
    {
      return $this->prd_out_of_stock_override_message;
    }

    /**
     * @param stringLength0_Type $prd_out_of_stock_override_message
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrant_Product_DataObjectType
     */
    public function setPrd_out_of_stock_override_message($prd_out_of_stock_override_message)
    {
      $this->prd_out_of_stock_override_message = $prd_out_of_stock_override_message;
      return $this;
    }

}
