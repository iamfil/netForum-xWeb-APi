<?php

namespace netForum\xWeb\Xml\Generated;

class CentralizedOrderEntry_Payment_DataObjectType
{

    /**
     * @var av_key_Type $pay_key
     */
    protected $pay_key = null;

    /**
     * @var stringLength50_Type $pay_code
     */
    protected $pay_code = null;

    /**
     * @var av_date_Type $pay_trx_date
     */
    protected $pay_trx_date = null;

    /**
     * @var av_key_Type $pay_cst_key
     */
    protected $pay_cst_key = null;

    /**
     * @var av_user_Type $pay_add_user
     */
    protected $pay_add_user = null;

    /**
     * @var av_date_Type $pay_add_date
     */
    protected $pay_add_date = null;

    /**
     * @var av_user_Type $pay_change_user
     */
    protected $pay_change_user = null;

    /**
     * @var av_date_Type $pay_change_date
     */
    protected $pay_change_date = null;

    /**
     * @var av_delete_flag_Type $pay_delete_flag
     */
    protected $pay_delete_flag = null;

    /**
     * @var av_key_Type $pay_src_key
     */
    protected $pay_src_key = null;

    /**
     * @var av_key_Type $pay_key_ext
     */
    protected $pay_key_ext = null;

    /**
     * @var av_key_Type $pay_med_key
     */
    protected $pay_med_key = null;

    /**
     * @var av_flag_Type $pay_post_flag
     */
    protected $pay_post_flag = null;

    /**
     * @var av_flag_Type $pay_bat_close_flag
     */
    protected $pay_bat_close_flag = null;

    /**
     * @var av_key_Type $pay_bat_key
     */
    protected $pay_bat_key = null;

    /**
     * @var stringLength300_Type $pay_notes
     */
    protected $pay_notes = null;

    /**
     * @var av_key_Type $pay_entity_key
     */
    protected $pay_entity_key = null;

    /**
     * @var av_key_Type $pay_cur_key
     */
    protected $pay_cur_key = null;

    /**
     * @var av_key_Type $pay_pin_key
     */
    protected $pay_pin_key = null;

    /**
     * @var av_currency_Type $pay_charge_penalty_fee
     */
    protected $pay_charge_penalty_fee = null;

    /**
     * @var av_flag_Type $pay_send_email_confirmation
     */
    protected $pay_send_email_confirmation = null;

    /**
     * @var stringLength0_Type $pay_transaction_description
     */
    protected $pay_transaction_description = null;

    /**
     * @var av_flag_Type $pay_nsf_or_chargeback_fee_setup_exists_flag
     */
    protected $pay_nsf_or_chargeback_fee_setup_exists_flag = null;

    /**
     * @var stringLength0_Type $pay_void_type
     */
    protected $pay_void_type = null;

    /**
     * @var av_key_Type $pay_fee_prc_key
     */
    protected $pay_fee_prc_key = null;

    /**
     * @var av_key_Type $pay_new_batch_key
     */
    protected $pay_new_batch_key = null;

    /**
     * @var av_flag_Type $pay_allow_nsf_flag
     */
    protected $pay_allow_nsf_flag = null;

    /**
     * @var av_flag_Type $pay_allow_chargeback_flag
     */
    protected $pay_allow_chargeback_flag = null;

    /**
     * @var av_date_Type $pay_void_date
     */
    protected $pay_void_date = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return av_key_Type
     */
    public function getPay_key()
    {
      return $this->pay_key;
    }

    /**
     * @param av_key_Type $pay_key
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_key($pay_key)
    {
      $this->pay_key = $pay_key;
      return $this;
    }

    /**
     * @return stringLength50_Type
     */
    public function getPay_code()
    {
      return $this->pay_code;
    }

    /**
     * @param stringLength50_Type $pay_code
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_code($pay_code)
    {
      $this->pay_code = $pay_code;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getPay_trx_date()
    {
      return $this->pay_trx_date;
    }

    /**
     * @param av_date_Type $pay_trx_date
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_trx_date($pay_trx_date)
    {
      $this->pay_trx_date = $pay_trx_date;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPay_cst_key()
    {
      return $this->pay_cst_key;
    }

    /**
     * @param av_key_Type $pay_cst_key
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_cst_key($pay_cst_key)
    {
      $this->pay_cst_key = $pay_cst_key;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getPay_add_user()
    {
      return $this->pay_add_user;
    }

    /**
     * @param av_user_Type $pay_add_user
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_add_user($pay_add_user)
    {
      $this->pay_add_user = $pay_add_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getPay_add_date()
    {
      return $this->pay_add_date;
    }

    /**
     * @param av_date_Type $pay_add_date
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_add_date($pay_add_date)
    {
      $this->pay_add_date = $pay_add_date;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getPay_change_user()
    {
      return $this->pay_change_user;
    }

    /**
     * @param av_user_Type $pay_change_user
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_change_user($pay_change_user)
    {
      $this->pay_change_user = $pay_change_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getPay_change_date()
    {
      return $this->pay_change_date;
    }

    /**
     * @param av_date_Type $pay_change_date
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_change_date($pay_change_date)
    {
      $this->pay_change_date = $pay_change_date;
      return $this;
    }

    /**
     * @return av_delete_flag_Type
     */
    public function getPay_delete_flag()
    {
      return $this->pay_delete_flag;
    }

    /**
     * @param av_delete_flag_Type $pay_delete_flag
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_delete_flag($pay_delete_flag)
    {
      $this->pay_delete_flag = $pay_delete_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPay_src_key()
    {
      return $this->pay_src_key;
    }

    /**
     * @param av_key_Type $pay_src_key
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_src_key($pay_src_key)
    {
      $this->pay_src_key = $pay_src_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPay_key_ext()
    {
      return $this->pay_key_ext;
    }

    /**
     * @param av_key_Type $pay_key_ext
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_key_ext($pay_key_ext)
    {
      $this->pay_key_ext = $pay_key_ext;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPay_med_key()
    {
      return $this->pay_med_key;
    }

    /**
     * @param av_key_Type $pay_med_key
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_med_key($pay_med_key)
    {
      $this->pay_med_key = $pay_med_key;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPay_post_flag()
    {
      return $this->pay_post_flag;
    }

    /**
     * @param av_flag_Type $pay_post_flag
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_post_flag($pay_post_flag)
    {
      $this->pay_post_flag = $pay_post_flag;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPay_bat_close_flag()
    {
      return $this->pay_bat_close_flag;
    }

    /**
     * @param av_flag_Type $pay_bat_close_flag
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_bat_close_flag($pay_bat_close_flag)
    {
      $this->pay_bat_close_flag = $pay_bat_close_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPay_bat_key()
    {
      return $this->pay_bat_key;
    }

    /**
     * @param av_key_Type $pay_bat_key
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_bat_key($pay_bat_key)
    {
      $this->pay_bat_key = $pay_bat_key;
      return $this;
    }

    /**
     * @return stringLength300_Type
     */
    public function getPay_notes()
    {
      return $this->pay_notes;
    }

    /**
     * @param stringLength300_Type $pay_notes
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_notes($pay_notes)
    {
      $this->pay_notes = $pay_notes;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPay_entity_key()
    {
      return $this->pay_entity_key;
    }

    /**
     * @param av_key_Type $pay_entity_key
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_entity_key($pay_entity_key)
    {
      $this->pay_entity_key = $pay_entity_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPay_cur_key()
    {
      return $this->pay_cur_key;
    }

    /**
     * @param av_key_Type $pay_cur_key
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_cur_key($pay_cur_key)
    {
      $this->pay_cur_key = $pay_cur_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPay_pin_key()
    {
      return $this->pay_pin_key;
    }

    /**
     * @param av_key_Type $pay_pin_key
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_pin_key($pay_pin_key)
    {
      $this->pay_pin_key = $pay_pin_key;
      return $this;
    }

    /**
     * @return av_currency_Type
     */
    public function getPay_charge_penalty_fee()
    {
      return $this->pay_charge_penalty_fee;
    }

    /**
     * @param av_currency_Type $pay_charge_penalty_fee
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_charge_penalty_fee($pay_charge_penalty_fee)
    {
      $this->pay_charge_penalty_fee = $pay_charge_penalty_fee;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPay_send_email_confirmation()
    {
      return $this->pay_send_email_confirmation;
    }

    /**
     * @param av_flag_Type $pay_send_email_confirmation
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_send_email_confirmation($pay_send_email_confirmation)
    {
      $this->pay_send_email_confirmation = $pay_send_email_confirmation;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getPay_transaction_description()
    {
      return $this->pay_transaction_description;
    }

    /**
     * @param stringLength0_Type $pay_transaction_description
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_transaction_description($pay_transaction_description)
    {
      $this->pay_transaction_description = $pay_transaction_description;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPay_nsf_or_chargeback_fee_setup_exists_flag()
    {
      return $this->pay_nsf_or_chargeback_fee_setup_exists_flag;
    }

    /**
     * @param av_flag_Type $pay_nsf_or_chargeback_fee_setup_exists_flag
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_nsf_or_chargeback_fee_setup_exists_flag($pay_nsf_or_chargeback_fee_setup_exists_flag)
    {
      $this->pay_nsf_or_chargeback_fee_setup_exists_flag = $pay_nsf_or_chargeback_fee_setup_exists_flag;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getPay_void_type()
    {
      return $this->pay_void_type;
    }

    /**
     * @param stringLength0_Type $pay_void_type
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_void_type($pay_void_type)
    {
      $this->pay_void_type = $pay_void_type;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPay_fee_prc_key()
    {
      return $this->pay_fee_prc_key;
    }

    /**
     * @param av_key_Type $pay_fee_prc_key
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_fee_prc_key($pay_fee_prc_key)
    {
      $this->pay_fee_prc_key = $pay_fee_prc_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPay_new_batch_key()
    {
      return $this->pay_new_batch_key;
    }

    /**
     * @param av_key_Type $pay_new_batch_key
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_new_batch_key($pay_new_batch_key)
    {
      $this->pay_new_batch_key = $pay_new_batch_key;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPay_allow_nsf_flag()
    {
      return $this->pay_allow_nsf_flag;
    }

    /**
     * @param av_flag_Type $pay_allow_nsf_flag
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_allow_nsf_flag($pay_allow_nsf_flag)
    {
      $this->pay_allow_nsf_flag = $pay_allow_nsf_flag;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPay_allow_chargeback_flag()
    {
      return $this->pay_allow_chargeback_flag;
    }

    /**
     * @param av_flag_Type $pay_allow_chargeback_flag
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_allow_chargeback_flag($pay_allow_chargeback_flag)
    {
      $this->pay_allow_chargeback_flag = $pay_allow_chargeback_flag;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getPay_void_date()
    {
      return $this->pay_void_date;
    }

    /**
     * @param av_date_Type $pay_void_date
     * @return \netForum\xWeb\Xml\Generated\CentralizedOrderEntry_Payment_DataObjectType
     */
    public function setPay_void_date($pay_void_date)
    {
      $this->pay_void_date = $pay_void_date;
      return $this;
    }

}
