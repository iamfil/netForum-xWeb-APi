<?php

namespace netForum\xWeb\Xml\Generated;

class ExhibitorNew_Installment_Billing_DataObjectType
{

    /**
     * @var av_key_Type $ord_key
     */
    protected $ord_key = null;

    /**
     * @var av_key_Type $ord_cst_key
     */
    protected $ord_cst_key = null;

    /**
     * @var av_integer_Type $ord_frequency
     */
    protected $ord_frequency = null;

    /**
     * @var av_key_Type $ord_ptr_key
     */
    protected $ord_ptr_key = null;

    /**
     * @var av_date_Type $ord_last_bill_date
     */
    protected $ord_last_bill_date = null;

    /**
     * @var av_flag_Type $ord_proforma
     */
    protected $ord_proforma = null;

    /**
     * @var stringLength50_Type $ord_type
     */
    protected $ord_type = null;

    /**
     * @var av_key_Type $ord_pin_key
     */
    protected $ord_pin_key = null;

    /**
     * @var av_integer_Type $ord_num_of_installments
     */
    protected $ord_num_of_installments = null;

    /**
     * @var av_integer_Type $ord_num_invoices_to_date
     */
    protected $ord_num_invoices_to_date = null;

    /**
     * @var av_key_Type $ord_cst_billing_key
     */
    protected $ord_cst_billing_key = null;

    /**
     * @var av_key_Type $ord_ind_cst_billing_key
     */
    protected $ord_ind_cst_billing_key = null;

    /**
     * @var av_key_Type $ord_cxa_key
     */
    protected $ord_cxa_key = null;

    /**
     * @var av_key_Type $ord_cph_key
     */
    protected $ord_cph_key = null;

    /**
     * @var av_key_Type $ord_cfx_key
     */
    protected $ord_cfx_key = null;

    /**
     * @var av_key_Type $ord_eml_key
     */
    protected $ord_eml_key = null;

    /**
     * @var stringLength40_Type $ord_pref_comm_method
     */
    protected $ord_pref_comm_method = null;

    /**
     * @var av_key_Type $ord_src_key
     */
    protected $ord_src_key = null;

    /**
     * @var av_key_Type $ord_med_key
     */
    protected $ord_med_key = null;

    /**
     * @var stringLength300_Type $ord_notes_internal
     */
    protected $ord_notes_internal = null;

    /**
     * @var stringLength300_Type $ord_notes_external
     */
    protected $ord_notes_external = null;

    /**
     * @var av_user_Type $ord_add_user
     */
    protected $ord_add_user = null;

    /**
     * @var av_date_Type $ord_add_date
     */
    protected $ord_add_date = null;

    /**
     * @var av_user_Type $ord_change_user
     */
    protected $ord_change_user = null;

    /**
     * @var av_date_Type $ord_change_date
     */
    protected $ord_change_date = null;

    /**
     * @var av_delete_flag_Type $ord_delete_flag
     */
    protected $ord_delete_flag = null;

    /**
     * @var av_key_Type $ord_entity_key
     */
    protected $ord_entity_key = null;

    /**
     * @var av_key_Type $ord_key_ext
     */
    protected $ord_key_ext = null;

    /**
     * @var av_key_Type $ord_ait_key
     */
    protected $ord_ait_key = null;

    /**
     * @var av_date_Type $ord_first_process_date
     */
    protected $ord_first_process_date = null;

    /**
     * @var stringLength50_Type $ord_code
     */
    protected $ord_code = null;

    /**
     * @var av_flag_Type $ord_close_flag
     */
    protected $ord_close_flag = null;

    /**
     * @var av_flag_Type $ord_milestone_flag
     */
    protected $ord_milestone_flag = null;

    /**
     * @var av_key_Type $ord_cpi_key
     */
    protected $ord_cpi_key = null;

    /**
     * @var av_flag_Type $ord_auto_pay
     */
    protected $ord_auto_pay = null;

    /**
     * @var stringLength20_Type $ord_orig_trans_type
     */
    protected $ord_orig_trans_type = null;

    /**
     * @var stringLength50_Type $ord_po_number
     */
    protected $ord_po_number = null;

    /**
     * @var av_key_Type $ord_cur_key
     */
    protected $ord_cur_key = null;

    /**
     * @var av_date_small_Type $ord_trx_date
     */
    protected $ord_trx_date = null;

    /**
     * @var av_key_Type $ord_sfo_key
     */
    protected $ord_sfo_key = null;

    /**
     * @var av_flag_Type $ord_group_flag
     */
    protected $ord_group_flag = null;

    /**
     * @var stringLength300_Type $ord_group_description
     */
    protected $ord_group_description = null;

    /**
     * @var av_integer_Type $ord_recurring_date_1
     */
    protected $ord_recurring_date_1 = null;

    /**
     * @var av_integer_Type $ord_recurring_date_2
     */
    protected $ord_recurring_date_2 = null;

    /**
     * @var av_date_Type $ord_generate_from_date
     */
    protected $ord_generate_from_date = null;

    /**
     * @var av_date_Type $ord_generate_to_date
     */
    protected $ord_generate_to_date = null;

    /**
     * @var stringLength0_Type $ord_inst_gen_auto_pay_option
     */
    protected $ord_inst_gen_auto_pay_option = null;

    /**
     * @var av_flag_Type $ord_inst_distributed_only_flag
     */
    protected $ord_inst_distributed_only_flag = null;

    /**
     * @var av_flag_Type $ord_distributed_liability_flag
     */
    protected $ord_distributed_liability_flag = null;

    /**
     * @var stringLength0_Type $ord_individual_payment_return_option
     */
    protected $ord_individual_payment_return_option = null;

    /**
     * @var av_flag_Type $ord_payments_returns_flag
     */
    protected $ord_payments_returns_flag = null;

    /**
     * @var av_key_Type $ord_bat_key
     */
    protected $ord_bat_key = null;

    /**
     * @var stringLength0_Type $ord_processed_schedule_count
     */
    protected $ord_processed_schedule_count = null;

    /**
     * @var av_date_Type $ord_bat_trx_date
     */
    protected $ord_bat_trx_date = null;

    /**
     * @var av_key_Type $ord_current_schedule_processed
     */
    protected $ord_current_schedule_processed = null;

    /**
     * @var stringLength0_Type $ord_first_installment_amount
     */
    protected $ord_first_installment_amount = null;

    /**
     * @var stringLength0_Type $ord_balance
     */
    protected $ord_balance = null;

    /**
     * @var stringLength0_Type $ord_process
     */
    protected $ord_process = null;

    /**
     * @var av_flag_Type $ord_schedule_flag
     */
    protected $ord_schedule_flag = null;

    /**
     * @var av_date_Type $ord_task_start_date
     */
    protected $ord_task_start_date = null;

    /**
     * @var stringLength0_Type $ord_task_start_time
     */
    protected $ord_task_start_time = null;

    /**
     * @var stringLength0_Type $ord_eml_address
     */
    protected $ord_eml_address = null;

    /**
     * @var av_integer_Type $ord_frequency_user_readable_text
     */
    protected $ord_frequency_user_readable_text = null;

    /**
     * @var av_key_Type $ord_cct_key
     */
    protected $ord_cct_key = null;

    /**
     * @var av_key_Type $ord_oig_key
     */
    protected $ord_oig_key = null;

    /**
     * @var av_integer_Type $ord_num_of_paid_installments
     */
    protected $ord_num_of_paid_installments = null;

    /**
     * @var av_integer_Type $ord_payment_choice
     */
    protected $ord_payment_choice = null;

    /**
     * @var stringLength0_Type $ord_action_type_virt
     */
    protected $ord_action_type_virt = null;

    /**
     * @var stringLength0_Type $ord_cpi_status
     */
    protected $ord_cpi_status = null;

    /**
     * @var av_currency_Type $ord_amount_paid
     */
    protected $ord_amount_paid = null;

    /**
     * @var av_currency_Type $ord_first_installment_amount_user_edit
     */
    protected $ord_first_installment_amount_user_edit = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_key()
    {
      return $this->ord_key;
    }

    /**
     * @param av_key_Type $ord_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_key($ord_key)
    {
      $this->ord_key = $ord_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_cst_key()
    {
      return $this->ord_cst_key;
    }

    /**
     * @param av_key_Type $ord_cst_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_cst_key($ord_cst_key)
    {
      $this->ord_cst_key = $ord_cst_key;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getOrd_frequency()
    {
      return $this->ord_frequency;
    }

    /**
     * @param av_integer_Type $ord_frequency
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_frequency($ord_frequency)
    {
      $this->ord_frequency = $ord_frequency;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_ptr_key()
    {
      return $this->ord_ptr_key;
    }

    /**
     * @param av_key_Type $ord_ptr_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_ptr_key($ord_ptr_key)
    {
      $this->ord_ptr_key = $ord_ptr_key;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getOrd_last_bill_date()
    {
      return $this->ord_last_bill_date;
    }

    /**
     * @param av_date_Type $ord_last_bill_date
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_last_bill_date($ord_last_bill_date)
    {
      $this->ord_last_bill_date = $ord_last_bill_date;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getOrd_proforma()
    {
      return $this->ord_proforma;
    }

    /**
     * @param av_flag_Type $ord_proforma
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_proforma($ord_proforma)
    {
      $this->ord_proforma = $ord_proforma;
      return $this;
    }

    /**
     * @return stringLength50_Type
     */
    public function getOrd_type()
    {
      return $this->ord_type;
    }

    /**
     * @param stringLength50_Type $ord_type
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_type($ord_type)
    {
      $this->ord_type = $ord_type;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_pin_key()
    {
      return $this->ord_pin_key;
    }

    /**
     * @param av_key_Type $ord_pin_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_pin_key($ord_pin_key)
    {
      $this->ord_pin_key = $ord_pin_key;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getOrd_num_of_installments()
    {
      return $this->ord_num_of_installments;
    }

    /**
     * @param av_integer_Type $ord_num_of_installments
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_num_of_installments($ord_num_of_installments)
    {
      $this->ord_num_of_installments = $ord_num_of_installments;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getOrd_num_invoices_to_date()
    {
      return $this->ord_num_invoices_to_date;
    }

    /**
     * @param av_integer_Type $ord_num_invoices_to_date
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_num_invoices_to_date($ord_num_invoices_to_date)
    {
      $this->ord_num_invoices_to_date = $ord_num_invoices_to_date;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_cst_billing_key()
    {
      return $this->ord_cst_billing_key;
    }

    /**
     * @param av_key_Type $ord_cst_billing_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_cst_billing_key($ord_cst_billing_key)
    {
      $this->ord_cst_billing_key = $ord_cst_billing_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_ind_cst_billing_key()
    {
      return $this->ord_ind_cst_billing_key;
    }

    /**
     * @param av_key_Type $ord_ind_cst_billing_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_ind_cst_billing_key($ord_ind_cst_billing_key)
    {
      $this->ord_ind_cst_billing_key = $ord_ind_cst_billing_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_cxa_key()
    {
      return $this->ord_cxa_key;
    }

    /**
     * @param av_key_Type $ord_cxa_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_cxa_key($ord_cxa_key)
    {
      $this->ord_cxa_key = $ord_cxa_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_cph_key()
    {
      return $this->ord_cph_key;
    }

    /**
     * @param av_key_Type $ord_cph_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_cph_key($ord_cph_key)
    {
      $this->ord_cph_key = $ord_cph_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_cfx_key()
    {
      return $this->ord_cfx_key;
    }

    /**
     * @param av_key_Type $ord_cfx_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_cfx_key($ord_cfx_key)
    {
      $this->ord_cfx_key = $ord_cfx_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_eml_key()
    {
      return $this->ord_eml_key;
    }

    /**
     * @param av_key_Type $ord_eml_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_eml_key($ord_eml_key)
    {
      $this->ord_eml_key = $ord_eml_key;
      return $this;
    }

    /**
     * @return stringLength40_Type
     */
    public function getOrd_pref_comm_method()
    {
      return $this->ord_pref_comm_method;
    }

    /**
     * @param stringLength40_Type $ord_pref_comm_method
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_pref_comm_method($ord_pref_comm_method)
    {
      $this->ord_pref_comm_method = $ord_pref_comm_method;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_src_key()
    {
      return $this->ord_src_key;
    }

    /**
     * @param av_key_Type $ord_src_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_src_key($ord_src_key)
    {
      $this->ord_src_key = $ord_src_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_med_key()
    {
      return $this->ord_med_key;
    }

    /**
     * @param av_key_Type $ord_med_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_med_key($ord_med_key)
    {
      $this->ord_med_key = $ord_med_key;
      return $this;
    }

    /**
     * @return stringLength300_Type
     */
    public function getOrd_notes_internal()
    {
      return $this->ord_notes_internal;
    }

    /**
     * @param stringLength300_Type $ord_notes_internal
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_notes_internal($ord_notes_internal)
    {
      $this->ord_notes_internal = $ord_notes_internal;
      return $this;
    }

    /**
     * @return stringLength300_Type
     */
    public function getOrd_notes_external()
    {
      return $this->ord_notes_external;
    }

    /**
     * @param stringLength300_Type $ord_notes_external
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_notes_external($ord_notes_external)
    {
      $this->ord_notes_external = $ord_notes_external;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getOrd_add_user()
    {
      return $this->ord_add_user;
    }

    /**
     * @param av_user_Type $ord_add_user
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_add_user($ord_add_user)
    {
      $this->ord_add_user = $ord_add_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getOrd_add_date()
    {
      return $this->ord_add_date;
    }

    /**
     * @param av_date_Type $ord_add_date
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_add_date($ord_add_date)
    {
      $this->ord_add_date = $ord_add_date;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getOrd_change_user()
    {
      return $this->ord_change_user;
    }

    /**
     * @param av_user_Type $ord_change_user
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_change_user($ord_change_user)
    {
      $this->ord_change_user = $ord_change_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getOrd_change_date()
    {
      return $this->ord_change_date;
    }

    /**
     * @param av_date_Type $ord_change_date
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_change_date($ord_change_date)
    {
      $this->ord_change_date = $ord_change_date;
      return $this;
    }

    /**
     * @return av_delete_flag_Type
     */
    public function getOrd_delete_flag()
    {
      return $this->ord_delete_flag;
    }

    /**
     * @param av_delete_flag_Type $ord_delete_flag
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_delete_flag($ord_delete_flag)
    {
      $this->ord_delete_flag = $ord_delete_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_entity_key()
    {
      return $this->ord_entity_key;
    }

    /**
     * @param av_key_Type $ord_entity_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_entity_key($ord_entity_key)
    {
      $this->ord_entity_key = $ord_entity_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_key_ext()
    {
      return $this->ord_key_ext;
    }

    /**
     * @param av_key_Type $ord_key_ext
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_key_ext($ord_key_ext)
    {
      $this->ord_key_ext = $ord_key_ext;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_ait_key()
    {
      return $this->ord_ait_key;
    }

    /**
     * @param av_key_Type $ord_ait_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_ait_key($ord_ait_key)
    {
      $this->ord_ait_key = $ord_ait_key;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getOrd_first_process_date()
    {
      return $this->ord_first_process_date;
    }

    /**
     * @param av_date_Type $ord_first_process_date
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_first_process_date($ord_first_process_date)
    {
      $this->ord_first_process_date = $ord_first_process_date;
      return $this;
    }

    /**
     * @return stringLength50_Type
     */
    public function getOrd_code()
    {
      return $this->ord_code;
    }

    /**
     * @param stringLength50_Type $ord_code
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_code($ord_code)
    {
      $this->ord_code = $ord_code;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getOrd_close_flag()
    {
      return $this->ord_close_flag;
    }

    /**
     * @param av_flag_Type $ord_close_flag
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_close_flag($ord_close_flag)
    {
      $this->ord_close_flag = $ord_close_flag;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getOrd_milestone_flag()
    {
      return $this->ord_milestone_flag;
    }

    /**
     * @param av_flag_Type $ord_milestone_flag
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_milestone_flag($ord_milestone_flag)
    {
      $this->ord_milestone_flag = $ord_milestone_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_cpi_key()
    {
      return $this->ord_cpi_key;
    }

    /**
     * @param av_key_Type $ord_cpi_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_cpi_key($ord_cpi_key)
    {
      $this->ord_cpi_key = $ord_cpi_key;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getOrd_auto_pay()
    {
      return $this->ord_auto_pay;
    }

    /**
     * @param av_flag_Type $ord_auto_pay
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_auto_pay($ord_auto_pay)
    {
      $this->ord_auto_pay = $ord_auto_pay;
      return $this;
    }

    /**
     * @return stringLength20_Type
     */
    public function getOrd_orig_trans_type()
    {
      return $this->ord_orig_trans_type;
    }

    /**
     * @param stringLength20_Type $ord_orig_trans_type
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_orig_trans_type($ord_orig_trans_type)
    {
      $this->ord_orig_trans_type = $ord_orig_trans_type;
      return $this;
    }

    /**
     * @return stringLength50_Type
     */
    public function getOrd_po_number()
    {
      return $this->ord_po_number;
    }

    /**
     * @param stringLength50_Type $ord_po_number
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_po_number($ord_po_number)
    {
      $this->ord_po_number = $ord_po_number;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_cur_key()
    {
      return $this->ord_cur_key;
    }

    /**
     * @param av_key_Type $ord_cur_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_cur_key($ord_cur_key)
    {
      $this->ord_cur_key = $ord_cur_key;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getOrd_trx_date()
    {
      return $this->ord_trx_date;
    }

    /**
     * @param av_date_small_Type $ord_trx_date
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_trx_date($ord_trx_date)
    {
      $this->ord_trx_date = $ord_trx_date;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_sfo_key()
    {
      return $this->ord_sfo_key;
    }

    /**
     * @param av_key_Type $ord_sfo_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_sfo_key($ord_sfo_key)
    {
      $this->ord_sfo_key = $ord_sfo_key;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getOrd_group_flag()
    {
      return $this->ord_group_flag;
    }

    /**
     * @param av_flag_Type $ord_group_flag
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_group_flag($ord_group_flag)
    {
      $this->ord_group_flag = $ord_group_flag;
      return $this;
    }

    /**
     * @return stringLength300_Type
     */
    public function getOrd_group_description()
    {
      return $this->ord_group_description;
    }

    /**
     * @param stringLength300_Type $ord_group_description
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_group_description($ord_group_description)
    {
      $this->ord_group_description = $ord_group_description;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getOrd_recurring_date_1()
    {
      return $this->ord_recurring_date_1;
    }

    /**
     * @param av_integer_Type $ord_recurring_date_1
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_recurring_date_1($ord_recurring_date_1)
    {
      $this->ord_recurring_date_1 = $ord_recurring_date_1;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getOrd_recurring_date_2()
    {
      return $this->ord_recurring_date_2;
    }

    /**
     * @param av_integer_Type $ord_recurring_date_2
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_recurring_date_2($ord_recurring_date_2)
    {
      $this->ord_recurring_date_2 = $ord_recurring_date_2;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getOrd_generate_from_date()
    {
      return $this->ord_generate_from_date;
    }

    /**
     * @param av_date_Type $ord_generate_from_date
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_generate_from_date($ord_generate_from_date)
    {
      $this->ord_generate_from_date = $ord_generate_from_date;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getOrd_generate_to_date()
    {
      return $this->ord_generate_to_date;
    }

    /**
     * @param av_date_Type $ord_generate_to_date
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_generate_to_date($ord_generate_to_date)
    {
      $this->ord_generate_to_date = $ord_generate_to_date;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getOrd_inst_gen_auto_pay_option()
    {
      return $this->ord_inst_gen_auto_pay_option;
    }

    /**
     * @param stringLength0_Type $ord_inst_gen_auto_pay_option
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_inst_gen_auto_pay_option($ord_inst_gen_auto_pay_option)
    {
      $this->ord_inst_gen_auto_pay_option = $ord_inst_gen_auto_pay_option;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getOrd_inst_distributed_only_flag()
    {
      return $this->ord_inst_distributed_only_flag;
    }

    /**
     * @param av_flag_Type $ord_inst_distributed_only_flag
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_inst_distributed_only_flag($ord_inst_distributed_only_flag)
    {
      $this->ord_inst_distributed_only_flag = $ord_inst_distributed_only_flag;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getOrd_distributed_liability_flag()
    {
      return $this->ord_distributed_liability_flag;
    }

    /**
     * @param av_flag_Type $ord_distributed_liability_flag
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_distributed_liability_flag($ord_distributed_liability_flag)
    {
      $this->ord_distributed_liability_flag = $ord_distributed_liability_flag;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getOrd_individual_payment_return_option()
    {
      return $this->ord_individual_payment_return_option;
    }

    /**
     * @param stringLength0_Type $ord_individual_payment_return_option
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_individual_payment_return_option($ord_individual_payment_return_option)
    {
      $this->ord_individual_payment_return_option = $ord_individual_payment_return_option;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getOrd_payments_returns_flag()
    {
      return $this->ord_payments_returns_flag;
    }

    /**
     * @param av_flag_Type $ord_payments_returns_flag
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_payments_returns_flag($ord_payments_returns_flag)
    {
      $this->ord_payments_returns_flag = $ord_payments_returns_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_bat_key()
    {
      return $this->ord_bat_key;
    }

    /**
     * @param av_key_Type $ord_bat_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_bat_key($ord_bat_key)
    {
      $this->ord_bat_key = $ord_bat_key;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getOrd_processed_schedule_count()
    {
      return $this->ord_processed_schedule_count;
    }

    /**
     * @param stringLength0_Type $ord_processed_schedule_count
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_processed_schedule_count($ord_processed_schedule_count)
    {
      $this->ord_processed_schedule_count = $ord_processed_schedule_count;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getOrd_bat_trx_date()
    {
      return $this->ord_bat_trx_date;
    }

    /**
     * @param av_date_Type $ord_bat_trx_date
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_bat_trx_date($ord_bat_trx_date)
    {
      $this->ord_bat_trx_date = $ord_bat_trx_date;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_current_schedule_processed()
    {
      return $this->ord_current_schedule_processed;
    }

    /**
     * @param av_key_Type $ord_current_schedule_processed
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_current_schedule_processed($ord_current_schedule_processed)
    {
      $this->ord_current_schedule_processed = $ord_current_schedule_processed;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getOrd_first_installment_amount()
    {
      return $this->ord_first_installment_amount;
    }

    /**
     * @param stringLength0_Type $ord_first_installment_amount
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_first_installment_amount($ord_first_installment_amount)
    {
      $this->ord_first_installment_amount = $ord_first_installment_amount;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getOrd_balance()
    {
      return $this->ord_balance;
    }

    /**
     * @param stringLength0_Type $ord_balance
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_balance($ord_balance)
    {
      $this->ord_balance = $ord_balance;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getOrd_process()
    {
      return $this->ord_process;
    }

    /**
     * @param stringLength0_Type $ord_process
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_process($ord_process)
    {
      $this->ord_process = $ord_process;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getOrd_schedule_flag()
    {
      return $this->ord_schedule_flag;
    }

    /**
     * @param av_flag_Type $ord_schedule_flag
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_schedule_flag($ord_schedule_flag)
    {
      $this->ord_schedule_flag = $ord_schedule_flag;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getOrd_task_start_date()
    {
      return $this->ord_task_start_date;
    }

    /**
     * @param av_date_Type $ord_task_start_date
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_task_start_date($ord_task_start_date)
    {
      $this->ord_task_start_date = $ord_task_start_date;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getOrd_task_start_time()
    {
      return $this->ord_task_start_time;
    }

    /**
     * @param stringLength0_Type $ord_task_start_time
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_task_start_time($ord_task_start_time)
    {
      $this->ord_task_start_time = $ord_task_start_time;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getOrd_eml_address()
    {
      return $this->ord_eml_address;
    }

    /**
     * @param stringLength0_Type $ord_eml_address
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_eml_address($ord_eml_address)
    {
      $this->ord_eml_address = $ord_eml_address;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getOrd_frequency_user_readable_text()
    {
      return $this->ord_frequency_user_readable_text;
    }

    /**
     * @param av_integer_Type $ord_frequency_user_readable_text
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_frequency_user_readable_text($ord_frequency_user_readable_text)
    {
      $this->ord_frequency_user_readable_text = $ord_frequency_user_readable_text;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_cct_key()
    {
      return $this->ord_cct_key;
    }

    /**
     * @param av_key_Type $ord_cct_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_cct_key($ord_cct_key)
    {
      $this->ord_cct_key = $ord_cct_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrd_oig_key()
    {
      return $this->ord_oig_key;
    }

    /**
     * @param av_key_Type $ord_oig_key
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_oig_key($ord_oig_key)
    {
      $this->ord_oig_key = $ord_oig_key;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getOrd_num_of_paid_installments()
    {
      return $this->ord_num_of_paid_installments;
    }

    /**
     * @param av_integer_Type $ord_num_of_paid_installments
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_num_of_paid_installments($ord_num_of_paid_installments)
    {
      $this->ord_num_of_paid_installments = $ord_num_of_paid_installments;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getOrd_payment_choice()
    {
      return $this->ord_payment_choice;
    }

    /**
     * @param av_integer_Type $ord_payment_choice
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_payment_choice($ord_payment_choice)
    {
      $this->ord_payment_choice = $ord_payment_choice;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getOrd_action_type_virt()
    {
      return $this->ord_action_type_virt;
    }

    /**
     * @param stringLength0_Type $ord_action_type_virt
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_action_type_virt($ord_action_type_virt)
    {
      $this->ord_action_type_virt = $ord_action_type_virt;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getOrd_cpi_status()
    {
      return $this->ord_cpi_status;
    }

    /**
     * @param stringLength0_Type $ord_cpi_status
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_cpi_status($ord_cpi_status)
    {
      $this->ord_cpi_status = $ord_cpi_status;
      return $this;
    }

    /**
     * @return av_currency_Type
     */
    public function getOrd_amount_paid()
    {
      return $this->ord_amount_paid;
    }

    /**
     * @param av_currency_Type $ord_amount_paid
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_amount_paid($ord_amount_paid)
    {
      $this->ord_amount_paid = $ord_amount_paid;
      return $this;
    }

    /**
     * @return av_currency_Type
     */
    public function getOrd_first_installment_amount_user_edit()
    {
      return $this->ord_first_installment_amount_user_edit;
    }

    /**
     * @param av_currency_Type $ord_first_installment_amount_user_edit
     * @return \netForum\xWeb\Xml\Generated\ExhibitorNew_Installment_Billing_DataObjectType
     */
    public function setOrd_first_installment_amount_user_edit($ord_first_installment_amount_user_edit)
    {
      $this->ord_first_installment_amount_user_edit = $ord_first_installment_amount_user_edit;
      return $this;
    }

}
