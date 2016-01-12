<?php

namespace netForum\xWeb\Xml\Generated;

class Organization_Firm_DataObjectType
{

    /**
     * @var av_key_Type $orf_org_cst_key
     */
    protected $orf_org_cst_key = null;

    /**
     * @var av_integer_Type $orf_num_cpa_profs
     */
    protected $orf_num_cpa_profs = null;

    /**
     * @var av_integer_Type $orf_num_non_cpa
     */
    protected $orf_num_non_cpa = null;

    /**
     * @var av_integer_Type $orf_num_partners
     */
    protected $orf_num_partners = null;

    /**
     * @var av_integer_Type $orf_num_professionals
     */
    protected $orf_num_professionals = null;

    /**
     * @var av_integer_Type $orf_num_peer_review
     */
    protected $orf_num_peer_review = null;

    /**
     * @var av_flag_Type $orf_firm_paid_dues_flag
     */
    protected $orf_firm_paid_dues_flag = null;

    /**
     * @var av_key_Type $orf_firm_chapter
     */
    protected $orf_firm_chapter = null;

    /**
     * @var av_flag_Type $orf_firm_chapter_override_flag
     */
    protected $orf_firm_chapter_override_flag = null;

    /**
     * @var av_user_Type $orf_add_user
     */
    protected $orf_add_user = null;

    /**
     * @var av_date_Type $orf_add_date
     */
    protected $orf_add_date = null;

    /**
     * @var av_user_Type $orf_change_user
     */
    protected $orf_change_user = null;

    /**
     * @var av_date_Type $orf_change_date
     */
    protected $orf_change_date = null;

    /**
     * @var av_delete_flag_Type $orf_delete_flag
     */
    protected $orf_delete_flag = null;

    /**
     * @var av_key_Type $orf_entity_key
     */
    protected $orf_entity_key = null;

    /**
     * @var av_key_Type $orf_org_cst_key_ext
     */
    protected $orf_org_cst_key_ext = null;

    /**
     * @var stringLength15_Type $orf_aicpa_firm_number
     */
    protected $orf_aicpa_firm_number = null;

    /**
     * @var stringLength50_Type $orf_auditing
     */
    protected $orf_auditing = null;

    /**
     * @var av_flag_Type $orf_aa_flag
     */
    protected $orf_aa_flag = null;

    /**
     * @var stringLength50_Type $orf_firm_status
     */
    protected $orf_firm_status = null;

    /**
     * @var av_integer_Type $orf_review_number
     */
    protected $orf_review_number = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return av_key_Type
     */
    public function getOrf_org_cst_key()
    {
      return $this->orf_org_cst_key;
    }

    /**
     * @param av_key_Type $orf_org_cst_key
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_org_cst_key($orf_org_cst_key)
    {
      $this->orf_org_cst_key = $orf_org_cst_key;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getOrf_num_cpa_profs()
    {
      return $this->orf_num_cpa_profs;
    }

    /**
     * @param av_integer_Type $orf_num_cpa_profs
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_num_cpa_profs($orf_num_cpa_profs)
    {
      $this->orf_num_cpa_profs = $orf_num_cpa_profs;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getOrf_num_non_cpa()
    {
      return $this->orf_num_non_cpa;
    }

    /**
     * @param av_integer_Type $orf_num_non_cpa
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_num_non_cpa($orf_num_non_cpa)
    {
      $this->orf_num_non_cpa = $orf_num_non_cpa;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getOrf_num_partners()
    {
      return $this->orf_num_partners;
    }

    /**
     * @param av_integer_Type $orf_num_partners
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_num_partners($orf_num_partners)
    {
      $this->orf_num_partners = $orf_num_partners;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getOrf_num_professionals()
    {
      return $this->orf_num_professionals;
    }

    /**
     * @param av_integer_Type $orf_num_professionals
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_num_professionals($orf_num_professionals)
    {
      $this->orf_num_professionals = $orf_num_professionals;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getOrf_num_peer_review()
    {
      return $this->orf_num_peer_review;
    }

    /**
     * @param av_integer_Type $orf_num_peer_review
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_num_peer_review($orf_num_peer_review)
    {
      $this->orf_num_peer_review = $orf_num_peer_review;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getOrf_firm_paid_dues_flag()
    {
      return $this->orf_firm_paid_dues_flag;
    }

    /**
     * @param av_flag_Type $orf_firm_paid_dues_flag
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_firm_paid_dues_flag($orf_firm_paid_dues_flag)
    {
      $this->orf_firm_paid_dues_flag = $orf_firm_paid_dues_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrf_firm_chapter()
    {
      return $this->orf_firm_chapter;
    }

    /**
     * @param av_key_Type $orf_firm_chapter
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_firm_chapter($orf_firm_chapter)
    {
      $this->orf_firm_chapter = $orf_firm_chapter;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getOrf_firm_chapter_override_flag()
    {
      return $this->orf_firm_chapter_override_flag;
    }

    /**
     * @param av_flag_Type $orf_firm_chapter_override_flag
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_firm_chapter_override_flag($orf_firm_chapter_override_flag)
    {
      $this->orf_firm_chapter_override_flag = $orf_firm_chapter_override_flag;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getOrf_add_user()
    {
      return $this->orf_add_user;
    }

    /**
     * @param av_user_Type $orf_add_user
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_add_user($orf_add_user)
    {
      $this->orf_add_user = $orf_add_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getOrf_add_date()
    {
      return $this->orf_add_date;
    }

    /**
     * @param av_date_Type $orf_add_date
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_add_date($orf_add_date)
    {
      $this->orf_add_date = $orf_add_date;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getOrf_change_user()
    {
      return $this->orf_change_user;
    }

    /**
     * @param av_user_Type $orf_change_user
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_change_user($orf_change_user)
    {
      $this->orf_change_user = $orf_change_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getOrf_change_date()
    {
      return $this->orf_change_date;
    }

    /**
     * @param av_date_Type $orf_change_date
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_change_date($orf_change_date)
    {
      $this->orf_change_date = $orf_change_date;
      return $this;
    }

    /**
     * @return av_delete_flag_Type
     */
    public function getOrf_delete_flag()
    {
      return $this->orf_delete_flag;
    }

    /**
     * @param av_delete_flag_Type $orf_delete_flag
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_delete_flag($orf_delete_flag)
    {
      $this->orf_delete_flag = $orf_delete_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrf_entity_key()
    {
      return $this->orf_entity_key;
    }

    /**
     * @param av_key_Type $orf_entity_key
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_entity_key($orf_entity_key)
    {
      $this->orf_entity_key = $orf_entity_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getOrf_org_cst_key_ext()
    {
      return $this->orf_org_cst_key_ext;
    }

    /**
     * @param av_key_Type $orf_org_cst_key_ext
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_org_cst_key_ext($orf_org_cst_key_ext)
    {
      $this->orf_org_cst_key_ext = $orf_org_cst_key_ext;
      return $this;
    }

    /**
     * @return stringLength15_Type
     */
    public function getOrf_aicpa_firm_number()
    {
      return $this->orf_aicpa_firm_number;
    }

    /**
     * @param stringLength15_Type $orf_aicpa_firm_number
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_aicpa_firm_number($orf_aicpa_firm_number)
    {
      $this->orf_aicpa_firm_number = $orf_aicpa_firm_number;
      return $this;
    }

    /**
     * @return stringLength50_Type
     */
    public function getOrf_auditing()
    {
      return $this->orf_auditing;
    }

    /**
     * @param stringLength50_Type $orf_auditing
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_auditing($orf_auditing)
    {
      $this->orf_auditing = $orf_auditing;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getOrf_aa_flag()
    {
      return $this->orf_aa_flag;
    }

    /**
     * @param av_flag_Type $orf_aa_flag
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_aa_flag($orf_aa_flag)
    {
      $this->orf_aa_flag = $orf_aa_flag;
      return $this;
    }

    /**
     * @return stringLength50_Type
     */
    public function getOrf_firm_status()
    {
      return $this->orf_firm_status;
    }

    /**
     * @param stringLength50_Type $orf_firm_status
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_firm_status($orf_firm_status)
    {
      $this->orf_firm_status = $orf_firm_status;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getOrf_review_number()
    {
      return $this->orf_review_number;
    }

    /**
     * @param av_integer_Type $orf_review_number
     * @return \netForum\xWeb\Xml\Generated\Organization_Firm_DataObjectType
     */
    public function setOrf_review_number($orf_review_number)
    {
      $this->orf_review_number = $orf_review_number;
      return $this;
    }

}
