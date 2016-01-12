<?php

namespace netForum\xWeb\Xml\Generated;

class InvoiceDetail_Invoice_Detail_Term_DataObjectType
{

    /**
     * @var av_key_Type $trm_ivd_key
     */
    protected $trm_ivd_key = null;

    /**
     * @var av_date_small_Type $trm_start_date
     */
    protected $trm_start_date = null;

    /**
     * @var av_date_small_Type $trm_end_date
     */
    protected $trm_end_date = null;

    /**
     * @var av_date_small_Type $trm_original_end_date
     */
    protected $trm_original_end_date = null;

    /**
     * @var av_user_Type $trm_add_user
     */
    protected $trm_add_user = null;

    /**
     * @var av_date_Type $trm_add_date
     */
    protected $trm_add_date = null;

    /**
     * @var av_user_Type $trm_change_user
     */
    protected $trm_change_user = null;

    /**
     * @var av_key_Type $trm_entity_key
     */
    protected $trm_entity_key = null;

    /**
     * @var av_date_Type $trm_change_date
     */
    protected $trm_change_date = null;

    /**
     * @var av_key_Type $trm_ivd_key_previous
     */
    protected $trm_ivd_key_previous = null;

    /**
     * @var av_delete_flag_Type $trm_delete_flag
     */
    protected $trm_delete_flag = null;

    /**
     * @var av_flag_Type $trm_do_not_renew_flag
     */
    protected $trm_do_not_renew_flag = null;

    /**
     * @var av_key_Type $trm_ivd_key_ext
     */
    protected $trm_ivd_key_ext = null;

    /**
     * @var av_key_Type $trm_sui_prd_key_start
     */
    protected $trm_sui_prd_key_start = null;

    /**
     * @var av_key_Type $trm_sui_prd_key_hold_start
     */
    protected $trm_sui_prd_key_hold_start = null;

    /**
     * @var av_integer_Type $trm_number_fulfilled
     */
    protected $trm_number_fulfilled = null;

    /**
     * @var av_key_Type $trm_sui_prd_key_hold_end
     */
    protected $trm_sui_prd_key_hold_end = null;

    /**
     * @var av_integer_Type $trm_num_issues
     */
    protected $trm_num_issues = null;

    /**
     * @var av_integer_Type $trm_num_issues_remain_cp
     */
    protected $trm_num_issues_remain_cp = null;

    /**
     * @var av_key_Type $trm_cla_key
     */
    protected $trm_cla_key = null;

    /**
     * @var av_flag_Type $trm_qualified_flag
     */
    protected $trm_qualified_flag = null;

    /**
     * @var av_date_Type $trm_qualified_date
     */
    protected $trm_qualified_date = null;

    /**
     * @var av_key_Type $trm_rqt_key
     */
    protected $trm_rqt_key = null;

    /**
     * @var av_flag_Type $trm_controlled_flag
     */
    protected $trm_controlled_flag = null;

    /**
     * @var av_flag_Type $trm_requested_flag
     */
    protected $trm_requested_flag = null;

    /**
     * @var av_key_Type $trm_sin_key
     */
    protected $trm_sin_key = null;

    /**
     * @var av_key_Type $trm_ttl_key
     */
    protected $trm_ttl_key = null;

    /**
     * @var av_key_Type $trm_jfn_key
     */
    protected $trm_jfn_key = null;

    /**
     * @var stringLength100_Type $trm_demog1
     */
    protected $trm_demog1 = null;

    /**
     * @var stringLength100_Type $trm_demog2
     */
    protected $trm_demog2 = null;

    /**
     * @var stringLength100_Type $trm_demog3
     */
    protected $trm_demog3 = null;

    /**
     * @var stringLength100_Type $trm_demog4
     */
    protected $trm_demog4 = null;

    /**
     * @var stringLength100_Type $trm_demog5
     */
    protected $trm_demog5 = null;

    /**
     * @var av_flag_Type $trm_cancel_flag
     */
    protected $trm_cancel_flag = null;

    /**
     * @var av_key_Type $trm_ivd_prc_prd_key
     */
    protected $trm_ivd_prc_prd_key = null;

    /**
     * @var av_flag_Type $trm_lifetime_flag
     */
    protected $trm_lifetime_flag = null;

    /**
     * @var av_integer_Type $trm_grace_issues_cp
     */
    protected $trm_grace_issues_cp = null;

    /**
     * @var av_key_Type $trm_sui_prd_key_drop
     */
    protected $trm_sui_prd_key_drop = null;

    /**
     * @var av_flag_Type $trm_add_drop_flag
     */
    protected $trm_add_drop_flag = null;

    /**
     * @var av_key_Type $trm_mbr_key
     */
    protected $trm_mbr_key = null;

    /**
     * @var av_key_Type $trm_mxi_key
     */
    protected $trm_mxi_key = null;

    /**
     * @var stringLength50_Type $trm_reference_num
     */
    protected $trm_reference_num = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return av_key_Type
     */
    public function getTrm_ivd_key()
    {
      return $this->trm_ivd_key;
    }

    /**
     * @param av_key_Type $trm_ivd_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_ivd_key($trm_ivd_key)
    {
      $this->trm_ivd_key = $trm_ivd_key;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getTrm_start_date()
    {
      return $this->trm_start_date;
    }

    /**
     * @param av_date_small_Type $trm_start_date
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_start_date($trm_start_date)
    {
      $this->trm_start_date = $trm_start_date;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getTrm_end_date()
    {
      return $this->trm_end_date;
    }

    /**
     * @param av_date_small_Type $trm_end_date
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_end_date($trm_end_date)
    {
      $this->trm_end_date = $trm_end_date;
      return $this;
    }

    /**
     * @return av_date_small_Type
     */
    public function getTrm_original_end_date()
    {
      return $this->trm_original_end_date;
    }

    /**
     * @param av_date_small_Type $trm_original_end_date
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_original_end_date($trm_original_end_date)
    {
      $this->trm_original_end_date = $trm_original_end_date;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getTrm_add_user()
    {
      return $this->trm_add_user;
    }

    /**
     * @param av_user_Type $trm_add_user
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_add_user($trm_add_user)
    {
      $this->trm_add_user = $trm_add_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getTrm_add_date()
    {
      return $this->trm_add_date;
    }

    /**
     * @param av_date_Type $trm_add_date
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_add_date($trm_add_date)
    {
      $this->trm_add_date = $trm_add_date;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getTrm_change_user()
    {
      return $this->trm_change_user;
    }

    /**
     * @param av_user_Type $trm_change_user
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_change_user($trm_change_user)
    {
      $this->trm_change_user = $trm_change_user;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getTrm_entity_key()
    {
      return $this->trm_entity_key;
    }

    /**
     * @param av_key_Type $trm_entity_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_entity_key($trm_entity_key)
    {
      $this->trm_entity_key = $trm_entity_key;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getTrm_change_date()
    {
      return $this->trm_change_date;
    }

    /**
     * @param av_date_Type $trm_change_date
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_change_date($trm_change_date)
    {
      $this->trm_change_date = $trm_change_date;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getTrm_ivd_key_previous()
    {
      return $this->trm_ivd_key_previous;
    }

    /**
     * @param av_key_Type $trm_ivd_key_previous
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_ivd_key_previous($trm_ivd_key_previous)
    {
      $this->trm_ivd_key_previous = $trm_ivd_key_previous;
      return $this;
    }

    /**
     * @return av_delete_flag_Type
     */
    public function getTrm_delete_flag()
    {
      return $this->trm_delete_flag;
    }

    /**
     * @param av_delete_flag_Type $trm_delete_flag
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_delete_flag($trm_delete_flag)
    {
      $this->trm_delete_flag = $trm_delete_flag;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getTrm_do_not_renew_flag()
    {
      return $this->trm_do_not_renew_flag;
    }

    /**
     * @param av_flag_Type $trm_do_not_renew_flag
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_do_not_renew_flag($trm_do_not_renew_flag)
    {
      $this->trm_do_not_renew_flag = $trm_do_not_renew_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getTrm_ivd_key_ext()
    {
      return $this->trm_ivd_key_ext;
    }

    /**
     * @param av_key_Type $trm_ivd_key_ext
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_ivd_key_ext($trm_ivd_key_ext)
    {
      $this->trm_ivd_key_ext = $trm_ivd_key_ext;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getTrm_sui_prd_key_start()
    {
      return $this->trm_sui_prd_key_start;
    }

    /**
     * @param av_key_Type $trm_sui_prd_key_start
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_sui_prd_key_start($trm_sui_prd_key_start)
    {
      $this->trm_sui_prd_key_start = $trm_sui_prd_key_start;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getTrm_sui_prd_key_hold_start()
    {
      return $this->trm_sui_prd_key_hold_start;
    }

    /**
     * @param av_key_Type $trm_sui_prd_key_hold_start
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_sui_prd_key_hold_start($trm_sui_prd_key_hold_start)
    {
      $this->trm_sui_prd_key_hold_start = $trm_sui_prd_key_hold_start;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getTrm_number_fulfilled()
    {
      return $this->trm_number_fulfilled;
    }

    /**
     * @param av_integer_Type $trm_number_fulfilled
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_number_fulfilled($trm_number_fulfilled)
    {
      $this->trm_number_fulfilled = $trm_number_fulfilled;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getTrm_sui_prd_key_hold_end()
    {
      return $this->trm_sui_prd_key_hold_end;
    }

    /**
     * @param av_key_Type $trm_sui_prd_key_hold_end
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_sui_prd_key_hold_end($trm_sui_prd_key_hold_end)
    {
      $this->trm_sui_prd_key_hold_end = $trm_sui_prd_key_hold_end;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getTrm_num_issues()
    {
      return $this->trm_num_issues;
    }

    /**
     * @param av_integer_Type $trm_num_issues
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_num_issues($trm_num_issues)
    {
      $this->trm_num_issues = $trm_num_issues;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getTrm_num_issues_remain_cp()
    {
      return $this->trm_num_issues_remain_cp;
    }

    /**
     * @param av_integer_Type $trm_num_issues_remain_cp
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_num_issues_remain_cp($trm_num_issues_remain_cp)
    {
      $this->trm_num_issues_remain_cp = $trm_num_issues_remain_cp;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getTrm_cla_key()
    {
      return $this->trm_cla_key;
    }

    /**
     * @param av_key_Type $trm_cla_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_cla_key($trm_cla_key)
    {
      $this->trm_cla_key = $trm_cla_key;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getTrm_qualified_flag()
    {
      return $this->trm_qualified_flag;
    }

    /**
     * @param av_flag_Type $trm_qualified_flag
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_qualified_flag($trm_qualified_flag)
    {
      $this->trm_qualified_flag = $trm_qualified_flag;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getTrm_qualified_date()
    {
      return $this->trm_qualified_date;
    }

    /**
     * @param av_date_Type $trm_qualified_date
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_qualified_date($trm_qualified_date)
    {
      $this->trm_qualified_date = $trm_qualified_date;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getTrm_rqt_key()
    {
      return $this->trm_rqt_key;
    }

    /**
     * @param av_key_Type $trm_rqt_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_rqt_key($trm_rqt_key)
    {
      $this->trm_rqt_key = $trm_rqt_key;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getTrm_controlled_flag()
    {
      return $this->trm_controlled_flag;
    }

    /**
     * @param av_flag_Type $trm_controlled_flag
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_controlled_flag($trm_controlled_flag)
    {
      $this->trm_controlled_flag = $trm_controlled_flag;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getTrm_requested_flag()
    {
      return $this->trm_requested_flag;
    }

    /**
     * @param av_flag_Type $trm_requested_flag
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_requested_flag($trm_requested_flag)
    {
      $this->trm_requested_flag = $trm_requested_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getTrm_sin_key()
    {
      return $this->trm_sin_key;
    }

    /**
     * @param av_key_Type $trm_sin_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_sin_key($trm_sin_key)
    {
      $this->trm_sin_key = $trm_sin_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getTrm_ttl_key()
    {
      return $this->trm_ttl_key;
    }

    /**
     * @param av_key_Type $trm_ttl_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_ttl_key($trm_ttl_key)
    {
      $this->trm_ttl_key = $trm_ttl_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getTrm_jfn_key()
    {
      return $this->trm_jfn_key;
    }

    /**
     * @param av_key_Type $trm_jfn_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_jfn_key($trm_jfn_key)
    {
      $this->trm_jfn_key = $trm_jfn_key;
      return $this;
    }

    /**
     * @return stringLength100_Type
     */
    public function getTrm_demog1()
    {
      return $this->trm_demog1;
    }

    /**
     * @param stringLength100_Type $trm_demog1
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_demog1($trm_demog1)
    {
      $this->trm_demog1 = $trm_demog1;
      return $this;
    }

    /**
     * @return stringLength100_Type
     */
    public function getTrm_demog2()
    {
      return $this->trm_demog2;
    }

    /**
     * @param stringLength100_Type $trm_demog2
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_demog2($trm_demog2)
    {
      $this->trm_demog2 = $trm_demog2;
      return $this;
    }

    /**
     * @return stringLength100_Type
     */
    public function getTrm_demog3()
    {
      return $this->trm_demog3;
    }

    /**
     * @param stringLength100_Type $trm_demog3
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_demog3($trm_demog3)
    {
      $this->trm_demog3 = $trm_demog3;
      return $this;
    }

    /**
     * @return stringLength100_Type
     */
    public function getTrm_demog4()
    {
      return $this->trm_demog4;
    }

    /**
     * @param stringLength100_Type $trm_demog4
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_demog4($trm_demog4)
    {
      $this->trm_demog4 = $trm_demog4;
      return $this;
    }

    /**
     * @return stringLength100_Type
     */
    public function getTrm_demog5()
    {
      return $this->trm_demog5;
    }

    /**
     * @param stringLength100_Type $trm_demog5
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_demog5($trm_demog5)
    {
      $this->trm_demog5 = $trm_demog5;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getTrm_cancel_flag()
    {
      return $this->trm_cancel_flag;
    }

    /**
     * @param av_flag_Type $trm_cancel_flag
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_cancel_flag($trm_cancel_flag)
    {
      $this->trm_cancel_flag = $trm_cancel_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getTrm_ivd_prc_prd_key()
    {
      return $this->trm_ivd_prc_prd_key;
    }

    /**
     * @param av_key_Type $trm_ivd_prc_prd_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_ivd_prc_prd_key($trm_ivd_prc_prd_key)
    {
      $this->trm_ivd_prc_prd_key = $trm_ivd_prc_prd_key;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getTrm_lifetime_flag()
    {
      return $this->trm_lifetime_flag;
    }

    /**
     * @param av_flag_Type $trm_lifetime_flag
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_lifetime_flag($trm_lifetime_flag)
    {
      $this->trm_lifetime_flag = $trm_lifetime_flag;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getTrm_grace_issues_cp()
    {
      return $this->trm_grace_issues_cp;
    }

    /**
     * @param av_integer_Type $trm_grace_issues_cp
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_grace_issues_cp($trm_grace_issues_cp)
    {
      $this->trm_grace_issues_cp = $trm_grace_issues_cp;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getTrm_sui_prd_key_drop()
    {
      return $this->trm_sui_prd_key_drop;
    }

    /**
     * @param av_key_Type $trm_sui_prd_key_drop
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_sui_prd_key_drop($trm_sui_prd_key_drop)
    {
      $this->trm_sui_prd_key_drop = $trm_sui_prd_key_drop;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getTrm_add_drop_flag()
    {
      return $this->trm_add_drop_flag;
    }

    /**
     * @param av_flag_Type $trm_add_drop_flag
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_add_drop_flag($trm_add_drop_flag)
    {
      $this->trm_add_drop_flag = $trm_add_drop_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getTrm_mbr_key()
    {
      return $this->trm_mbr_key;
    }

    /**
     * @param av_key_Type $trm_mbr_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_mbr_key($trm_mbr_key)
    {
      $this->trm_mbr_key = $trm_mbr_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getTrm_mxi_key()
    {
      return $this->trm_mxi_key;
    }

    /**
     * @param av_key_Type $trm_mxi_key
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_mxi_key($trm_mxi_key)
    {
      $this->trm_mxi_key = $trm_mxi_key;
      return $this;
    }

    /**
     * @return stringLength50_Type
     */
    public function getTrm_reference_num()
    {
      return $this->trm_reference_num;
    }

    /**
     * @param stringLength50_Type $trm_reference_num
     * @return \netForum\xWeb\Xml\Generated\InvoiceDetail_Invoice_Detail_Term_DataObjectType
     */
    public function setTrm_reference_num($trm_reference_num)
    {
      $this->trm_reference_num = $trm_reference_num;
      return $this;
    }

}
