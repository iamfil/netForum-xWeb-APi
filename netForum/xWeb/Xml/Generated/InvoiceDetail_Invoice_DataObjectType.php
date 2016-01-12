<?php

namespace netForum\xWeb\Xml\Generated;

class InvoiceDetail_Invoice_DataObjectType
{

    /**
     * @var av_key_Type $inv_key
     */
    protected $inv_key = null;

    /**
     * @var av_flag_Type $inv_proforma
     */
    protected $inv_proforma = null;

    /**
     * @var stringLength50_Type $inv_code
     */
    protected $inv_code = null;

    /**
     * @var av_date_small_Type $inv_trx_date
     */
    protected $inv_trx_date = null;

    /**
     * @var av_key_Type $inv_cst_key
     */
    protected $inv_cst_key = null;

    /**
     * @var av_user_Type $inv_add_user
     */
    protected $inv_add_user = null;

    /**
     * @var av_date_Type $inv_add_date
     */
    protected $inv_add_date = null;

    /**
     * @var av_user_Type $inv_change_user
     */
    protected $inv_change_user = null;

    /**
     * @var av_date_Type $inv_change_date
     */
    protected $inv_change_date = null;

    /**
     * @var av_integer_Type $inv_code_count
     */
    protected $inv_code_count = null;

    /**
     * @var stringLength54_Type $inv_code_cp
     */
    protected $inv_code_cp = null;

    /**
     * @var av_delete_flag_Type $inv_delete_flag
     */
    protected $inv_delete_flag = null;

    /**
     * @var av_key_Type $inv_key_ext
     */
    protected $inv_key_ext = null;

    /**
     * @var av_key_Type $inv_ait_key
     */
    protected $inv_ait_key = null;

    /**
     * @var av_integer_Type $inv_print_count
     */
    protected $inv_print_count = null;

    /**
     * @var av_date_Type $inv_print_date
     */
    protected $inv_print_date = null;

    /**
     * @var av_user_Type $inv_print_user
     */
    protected $inv_print_user = null;

    /**
     * @var av_key_Type $inv_src_key
     */
    protected $inv_src_key = null;

    /**
     * @var av_key_Type $inv_med_key
     */
    protected $inv_med_key = null;

    /**
     * @var av_flag_Type $inv_post_flag
     */
    protected $inv_post_flag = null;

    /**
     * @var stringLength300_Type $inv_notes_internal
     */
    protected $inv_notes_internal = null;

    /**
     * @var av_key_Type $inv_bat_key
     */
    protected $inv_bat_key = null;

    /**
     * @var stringLength300_Type $inv_notes_external
     */
    protected $inv_notes_external = null;

    /**
     * @var av_date_small_Type $inv_ship_on_date
     */
    protected $inv_ship_on_date = null;

    /**
     * @var av_integer_Type $inv_ship_priority
     */
    protected $inv_ship_priority = null;

    /**
     * @var stringLength50_Type $inv_po_number
     */
    protected $inv_po_number = null;

    /**
     * @var stringLength20_Type $inv_orig_trans_type
     */
    protected $inv_orig_trans_type = null;

    /**
     * @var av_flag_Type $inv_fax_confirm_sent_flag
     */
    protected $inv_fax_confirm_sent_flag = null;

    /**
     * @var av_flag_Type $inv_email_confirm_sent_flag
     */
    protected $inv_email_confirm_sent_flag = null;

    /**
     * @var av_key_Type $inv_cxa_key
     */
    protected $inv_cxa_key = null;

    /**
     * @var av_key_Type $inv_cph_key
     */
    protected $inv_cph_key = null;

    /**
     * @var av_key_Type $inv_cfx_key
     */
    protected $inv_cfx_key = null;

    /**
     * @var av_key_Type $inv_eml_key
     */
    protected $inv_eml_key = null;

    /**
     * @var stringLength10_Type $inv_pref_comm_meth
     */
    protected $inv_pref_comm_meth = null;

    /**
     * @var stringLength10_Type $inv_billing_pref_comm_meth
     */
    protected $inv_billing_pref_comm_meth = null;

    /**
     * @var av_flag_Type $inv_close_flag
     */
    protected $inv_close_flag = null;

    /**
     * @var av_flag_Type $inv_bat_close_flag
     */
    protected $inv_bat_close_flag = null;

    /**
     * @var av_key_Type $inv_entity_key
     */
    protected $inv_entity_key = null;

    /**
     * @var av_key_Type $inv_col_key
     */
    protected $inv_col_key = null;

    /**
     * @var av_key_Type $inv_cst_billing_key
     */
    protected $inv_cst_billing_key = null;

    /**
     * @var av_key_Type $inv_ind_cst_billing_key
     */
    protected $inv_ind_cst_billing_key = null;

    /**
     * @var av_key_Type $inv_ord_key
     */
    protected $inv_ord_key = null;

    /**
     * @var stringLength50_Type $inv_tracking_number
     */
    protected $inv_tracking_number = null;

    /**
     * @var av_flag_Type $inv_group_flag
     */
    protected $inv_group_flag = null;

    /**
     * @var stringLength300_Type $inv_group_description
     */
    protected $inv_group_description = null;

    /**
     * @var av_key_Type $inv_cur_key
     */
    protected $inv_cur_key = null;

    /**
     * @var booleanLength1_Type $inv_allow_installments
     */
    protected $inv_allow_installments = null;

    /**
     * @var av_key_Type $inv_sfo_key
     */
    protected $inv_sfo_key = null;

    /**
     * @var av_key_Type $inv_pbs_key
     */
    protected $inv_pbs_key = null;

    /**
     * @var av_key_Type $inv_NewBatch_key
     */
    protected $inv_NewBatch_key = null;

    /**
     * @var av_key_Type $inv_pay_cst_key
     */
    protected $inv_pay_cst_key = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return av_key_Type
     */
    public function getInv_key()
    {
      return $this->inv_key;
    }

    /**
     * @param av_key_Type $inv_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_key($inv_key)
    {
      $this->inv_key = $inv_key;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getInv_proforma()
    {
      return $this->inv_proforma;
    }

    /**
     * @param av_flag_Type $inv_proforma
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_proforma($inv_proforma)
    {
      $this->inv_proforma = $inv_proforma;
      return $this;
    }

    /**
     * @return stringLength50_Type
     */
    public function getInv_code()
    {
      return $this->inv_code;
    }

    /**
     * @param stringLength50_Type $inv_code
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_code($inv_code)
    {
      $this->inv_code = $inv_code;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getInv_trx_date()
    {
      return $this->inv_trx_date;
    }

    /**
     * @param av_date_small_Type $inv_trx_date
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_trx_date($inv_trx_date)
    {
      $this->inv_trx_date = $inv_trx_date;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_cst_key()
    {
      return $this->inv_cst_key;
    }

    /**
     * @param av_key_Type $inv_cst_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_cst_key($inv_cst_key)
    {
      $this->inv_cst_key = $inv_cst_key;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getInv_add_user()
    {
      return $this->inv_add_user;
    }

    /**
     * @param av_user_Type $inv_add_user
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_add_user($inv_add_user)
    {
      $this->inv_add_user = $inv_add_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getInv_add_date()
    {
      return $this->inv_add_date;
    }

    /**
     * @param av_date_Type $inv_add_date
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_add_date($inv_add_date)
    {
      $this->inv_add_date = $inv_add_date;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getInv_change_user()
    {
      return $this->inv_change_user;
    }

    /**
     * @param av_user_Type $inv_change_user
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_change_user($inv_change_user)
    {
      $this->inv_change_user = $inv_change_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getInv_change_date()
    {
      return $this->inv_change_date;
    }

    /**
     * @param av_date_Type $inv_change_date
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_change_date($inv_change_date)
    {
      $this->inv_change_date = $inv_change_date;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getInv_code_count()
    {
      return $this->inv_code_count;
    }

    /**
     * @param av_integer_Type $inv_code_count
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_code_count($inv_code_count)
    {
      $this->inv_code_count = $inv_code_count;
      return $this;
    }

    /**
     * @return stringLength54_Type
     */
    public function getInv_code_cp()
    {
      return $this->inv_code_cp;
    }

    /**
     * @param stringLength54_Type $inv_code_cp
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_code_cp($inv_code_cp)
    {
      $this->inv_code_cp = $inv_code_cp;
      return $this;
    }

    /**
     * @return av_delete_flag_Type
     */
    public function getInv_delete_flag()
    {
      return $this->inv_delete_flag;
    }

    /**
     * @param av_delete_flag_Type $inv_delete_flag
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_delete_flag($inv_delete_flag)
    {
      $this->inv_delete_flag = $inv_delete_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_key_ext()
    {
      return $this->inv_key_ext;
    }

    /**
     * @param av_key_Type $inv_key_ext
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_key_ext($inv_key_ext)
    {
      $this->inv_key_ext = $inv_key_ext;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_ait_key()
    {
      return $this->inv_ait_key;
    }

    /**
     * @param av_key_Type $inv_ait_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_ait_key($inv_ait_key)
    {
      $this->inv_ait_key = $inv_ait_key;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getInv_print_count()
    {
      return $this->inv_print_count;
    }

    /**
     * @param av_integer_Type $inv_print_count
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_print_count($inv_print_count)
    {
      $this->inv_print_count = $inv_print_count;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getInv_print_date()
    {
      return $this->inv_print_date;
    }

    /**
     * @param av_date_Type $inv_print_date
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_print_date($inv_print_date)
    {
      $this->inv_print_date = $inv_print_date;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getInv_print_user()
    {
      return $this->inv_print_user;
    }

    /**
     * @param av_user_Type $inv_print_user
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_print_user($inv_print_user)
    {
      $this->inv_print_user = $inv_print_user;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_src_key()
    {
      return $this->inv_src_key;
    }

    /**
     * @param av_key_Type $inv_src_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_src_key($inv_src_key)
    {
      $this->inv_src_key = $inv_src_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_med_key()
    {
      return $this->inv_med_key;
    }

    /**
     * @param av_key_Type $inv_med_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_med_key($inv_med_key)
    {
      $this->inv_med_key = $inv_med_key;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getInv_post_flag()
    {
      return $this->inv_post_flag;
    }

    /**
     * @param av_flag_Type $inv_post_flag
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_post_flag($inv_post_flag)
    {
      $this->inv_post_flag = $inv_post_flag;
      return $this;
    }

    /**
     * @return stringLength300_Type
     */
    public function getInv_notes_internal()
    {
      return $this->inv_notes_internal;
    }

    /**
     * @param stringLength300_Type $inv_notes_internal
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_notes_internal($inv_notes_internal)
    {
      $this->inv_notes_internal = $inv_notes_internal;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_bat_key()
    {
      return $this->inv_bat_key;
    }

    /**
     * @param av_key_Type $inv_bat_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_bat_key($inv_bat_key)
    {
      $this->inv_bat_key = $inv_bat_key;
      return $this;
    }

    /**
     * @return stringLength300_Type
     */
    public function getInv_notes_external()
    {
      return $this->inv_notes_external;
    }

    /**
     * @param stringLength300_Type $inv_notes_external
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_notes_external($inv_notes_external)
    {
      $this->inv_notes_external = $inv_notes_external;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getInv_ship_on_date()
    {
      return $this->inv_ship_on_date;
    }

    /**
     * @param av_date_small_Type $inv_ship_on_date
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_ship_on_date($inv_ship_on_date)
    {
      $this->inv_ship_on_date = $inv_ship_on_date;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getInv_ship_priority()
    {
      return $this->inv_ship_priority;
    }

    /**
     * @param av_integer_Type $inv_ship_priority
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_ship_priority($inv_ship_priority)
    {
      $this->inv_ship_priority = $inv_ship_priority;
      return $this;
    }

    /**
     * @return stringLength50_Type
     */
    public function getInv_po_number()
    {
      return $this->inv_po_number;
    }

    /**
     * @param stringLength50_Type $inv_po_number
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_po_number($inv_po_number)
    {
      $this->inv_po_number = $inv_po_number;
      return $this;
    }

    /**
     * @return stringLength20_Type
     */
    public function getInv_orig_trans_type()
    {
      return $this->inv_orig_trans_type;
    }

    /**
     * @param stringLength20_Type $inv_orig_trans_type
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_orig_trans_type($inv_orig_trans_type)
    {
      $this->inv_orig_trans_type = $inv_orig_trans_type;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getInv_fax_confirm_sent_flag()
    {
      return $this->inv_fax_confirm_sent_flag;
    }

    /**
     * @param av_flag_Type $inv_fax_confirm_sent_flag
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_fax_confirm_sent_flag($inv_fax_confirm_sent_flag)
    {
      $this->inv_fax_confirm_sent_flag = $inv_fax_confirm_sent_flag;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getInv_email_confirm_sent_flag()
    {
      return $this->inv_email_confirm_sent_flag;
    }

    /**
     * @param av_flag_Type $inv_email_confirm_sent_flag
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_email_confirm_sent_flag($inv_email_confirm_sent_flag)
    {
      $this->inv_email_confirm_sent_flag = $inv_email_confirm_sent_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_cxa_key()
    {
      return $this->inv_cxa_key;
    }

    /**
     * @param av_key_Type $inv_cxa_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_cxa_key($inv_cxa_key)
    {
      $this->inv_cxa_key = $inv_cxa_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_cph_key()
    {
      return $this->inv_cph_key;
    }

    /**
     * @param av_key_Type $inv_cph_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_cph_key($inv_cph_key)
    {
      $this->inv_cph_key = $inv_cph_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_cfx_key()
    {
      return $this->inv_cfx_key;
    }

    /**
     * @param av_key_Type $inv_cfx_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_cfx_key($inv_cfx_key)
    {
      $this->inv_cfx_key = $inv_cfx_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_eml_key()
    {
      return $this->inv_eml_key;
    }

    /**
     * @param av_key_Type $inv_eml_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_eml_key($inv_eml_key)
    {
      $this->inv_eml_key = $inv_eml_key;
      return $this;
    }

    /**
     * @return stringLength10_Type
     */
    public function getInv_pref_comm_meth()
    {
      return $this->inv_pref_comm_meth;
    }

    /**
     * @param stringLength10_Type $inv_pref_comm_meth
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_pref_comm_meth($inv_pref_comm_meth)
    {
      $this->inv_pref_comm_meth = $inv_pref_comm_meth;
      return $this;
    }

    /**
     * @return stringLength10_Type
     */
    public function getInv_billing_pref_comm_meth()
    {
      return $this->inv_billing_pref_comm_meth;
    }

    /**
     * @param stringLength10_Type $inv_billing_pref_comm_meth
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_billing_pref_comm_meth($inv_billing_pref_comm_meth)
    {
      $this->inv_billing_pref_comm_meth = $inv_billing_pref_comm_meth;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getInv_close_flag()
    {
      return $this->inv_close_flag;
    }

    /**
     * @param av_flag_Type $inv_close_flag
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_close_flag($inv_close_flag)
    {
      $this->inv_close_flag = $inv_close_flag;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getInv_bat_close_flag()
    {
      return $this->inv_bat_close_flag;
    }

    /**
     * @param av_flag_Type $inv_bat_close_flag
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_bat_close_flag($inv_bat_close_flag)
    {
      $this->inv_bat_close_flag = $inv_bat_close_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_entity_key()
    {
      return $this->inv_entity_key;
    }

    /**
     * @param av_key_Type $inv_entity_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_entity_key($inv_entity_key)
    {
      $this->inv_entity_key = $inv_entity_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_col_key()
    {
      return $this->inv_col_key;
    }

    /**
     * @param av_key_Type $inv_col_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_col_key($inv_col_key)
    {
      $this->inv_col_key = $inv_col_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_cst_billing_key()
    {
      return $this->inv_cst_billing_key;
    }

    /**
     * @param av_key_Type $inv_cst_billing_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_cst_billing_key($inv_cst_billing_key)
    {
      $this->inv_cst_billing_key = $inv_cst_billing_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_ind_cst_billing_key()
    {
      return $this->inv_ind_cst_billing_key;
    }

    /**
     * @param av_key_Type $inv_ind_cst_billing_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_ind_cst_billing_key($inv_ind_cst_billing_key)
    {
      $this->inv_ind_cst_billing_key = $inv_ind_cst_billing_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_ord_key()
    {
      return $this->inv_ord_key;
    }

    /**
     * @param av_key_Type $inv_ord_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_ord_key($inv_ord_key)
    {
      $this->inv_ord_key = $inv_ord_key;
      return $this;
    }

    /**
     * @return stringLength50_Type
     */
    public function getInv_tracking_number()
    {
      return $this->inv_tracking_number;
    }

    /**
     * @param stringLength50_Type $inv_tracking_number
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_tracking_number($inv_tracking_number)
    {
      $this->inv_tracking_number = $inv_tracking_number;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getInv_group_flag()
    {
      return $this->inv_group_flag;
    }

    /**
     * @param av_flag_Type $inv_group_flag
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_group_flag($inv_group_flag)
    {
      $this->inv_group_flag = $inv_group_flag;
      return $this;
    }

    /**
     * @return stringLength300_Type
     */
    public function getInv_group_description()
    {
      return $this->inv_group_description;
    }

    /**
     * @param stringLength300_Type $inv_group_description
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_group_description($inv_group_description)
    {
      $this->inv_group_description = $inv_group_description;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_cur_key()
    {
      return $this->inv_cur_key;
    }

    /**
     * @param av_key_Type $inv_cur_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_cur_key($inv_cur_key)
    {
      $this->inv_cur_key = $inv_cur_key;
      return $this;
    }

    /**
     * @return booleanLength1_Type
     */
    public function getInv_allow_installments()
    {
      return $this->inv_allow_installments;
    }

    /**
     * @param booleanLength1_Type $inv_allow_installments
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_allow_installments($inv_allow_installments)
    {
      $this->inv_allow_installments = $inv_allow_installments;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_sfo_key()
    {
      return $this->inv_sfo_key;
    }

    /**
     * @param av_key_Type $inv_sfo_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_sfo_key($inv_sfo_key)
    {
      $this->inv_sfo_key = $inv_sfo_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_pbs_key()
    {
      return $this->inv_pbs_key;
    }

    /**
     * @param av_key_Type $inv_pbs_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_pbs_key($inv_pbs_key)
    {
      $this->inv_pbs_key = $inv_pbs_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_NewBatch_key()
    {
      return $this->inv_NewBatch_key;
    }

    /**
     * @param av_key_Type $inv_NewBatch_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_NewBatch_key($inv_NewBatch_key)
    {
      $this->inv_NewBatch_key = $inv_NewBatch_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInv_pay_cst_key()
    {
      return $this->inv_pay_cst_key;
    }

    /**
     * @param av_key_Type $inv_pay_cst_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_DataObjectType
     */
    public function setInv_pay_cst_key($inv_pay_cst_key)
    {
      $this->inv_pay_cst_key = $inv_pay_cst_key;
      return $this;
    }

}
