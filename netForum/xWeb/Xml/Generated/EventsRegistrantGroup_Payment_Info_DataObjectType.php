<?php

namespace netForum\xWeb\Xml\Generated;

class EventsRegistrantGroup_Payment_Info_DataObjectType
{

    /**
     * @var av_key_Type $pin_key
     */
    protected $pin_key = null;

    /**
     * @var av_key_Type $pin_cst_key
     */
    protected $pin_cst_key = null;

    /**
     * @var av_key_Type $pin_apm_key
     */
    protected $pin_apm_key = null;

    /**
     * @var stringLength80_Type $pin_cc_number
     */
    protected $pin_cc_number = null;

    /**
     * @var stringLength20_Type $pin_cc_number_display
     */
    protected $pin_cc_number_display = null;

    /**
     * @var stringLength7_Type $pin_cc_expire
     */
    protected $pin_cc_expire = null;

    /**
     * @var stringLength150_Type $pin_cc_cardholder_name
     */
    protected $pin_cc_cardholder_name = null;

    /**
     * @var stringLength40_Type $pin_cc_auth
     */
    protected $pin_cc_auth = null;

    /**
     * @var stringLength10_Type $pin_cc_security_code
     */
    protected $pin_cc_security_code = null;

    /**
     * @var stringLength20_Type $pin_check_number
     */
    protected $pin_check_number = null;

    /**
     * @var stringLength20_Type $pin_eft_routing_number
     */
    protected $pin_eft_routing_number = null;

    /**
     * @var stringLength80_Type $pin_eft_account_number
     */
    protected $pin_eft_account_number = null;

    /**
     * @var stringLength40_Type $pin_other_ref_number
     */
    protected $pin_other_ref_number = null;

    /**
     * @var av_user_Type $pin_add_user
     */
    protected $pin_add_user = null;

    /**
     * @var av_date_Type $pin_add_date
     */
    protected $pin_add_date = null;

    /**
     * @var av_user_Type $pin_change_user
     */
    protected $pin_change_user = null;

    /**
     * @var av_date_Type $pin_change_date
     */
    protected $pin_change_date = null;

    /**
     * @var av_delete_flag_Type $pin_delete_flag
     */
    protected $pin_delete_flag = null;

    /**
     * @var av_currency_Type $pin_check_amount
     */
    protected $pin_check_amount = null;

    /**
     * @var av_key_Type $pin_key_ext
     */
    protected $pin_key_ext = null;

    /**
     * @var av_key_Type $pin_entity_key
     */
    protected $pin_entity_key = null;

    /**
     * @var stringLength25_Type $pin_merchant_option
     */
    protected $pin_merchant_option = null;

    /**
     * @var av_integer_Type $pin_enc_version
     */
    protected $pin_enc_version = null;

    /**
     * @var av_flag_Type $pin_cc_preauth_flag
     */
    protected $pin_cc_preauth_flag = null;

    /**
     * @var av_key_Type $pin_preauth_pin_key
     */
    protected $pin_preauth_pin_key = null;

    /**
     * @var stringLength75_Type $pin_street
     */
    protected $pin_street = null;

    /**
     * @var stringLength40_Type $pin_city
     */
    protected $pin_city = null;

    /**
     * @var stringLength40_Type $pin_state
     */
    protected $pin_state = null;

    /**
     * @var stringLength20_Type $pin_zip
     */
    protected $pin_zip = null;

    /**
     * @var av_email_Type $pin_email
     */
    protected $pin_email = null;

    /**
     * @var stringLength33_Type $pin_dl
     */
    protected $pin_dl = null;

    /**
     * @var stringLength150_Type $pin_name_on_check
     */
    protected $pin_name_on_check = null;

    /**
     * @var stringLength1_Type $pin_eft_account_type
     */
    protected $pin_eft_account_type = null;

    /**
     * @var stringLength20_Type $pin_eft_account_number_display
     */
    protected $pin_eft_account_number_display = null;

    /**
     * @var stringLength40_Type $pin_other_preauth_ref_number
     */
    protected $pin_other_preauth_ref_number = null;

    /**
     * @var stringLength3_Type $pin_cty_iso_number
     */
    protected $pin_cty_iso_number = null;

    /**
     * @var stringLength35_Type $pin_ss
     */
    protected $pin_ss = null;

    /**
     * @var stringLength25_Type $pin_vault_acount
     */
    protected $pin_vault_acount = null;

    /**
     * @var av_key_Type $pin_cpi_key
     */
    protected $pin_cpi_key = null;

    /**
     * @var stringLength80_Type $pin_description
     */
    protected $pin_description = null;

    /**
     * @var stringLength0_Type $pin_cc_error
     */
    protected $pin_cc_error = null;

    /**
     * @var av_flag_Type $pin_isvault
     */
    protected $pin_isvault = null;

    /**
     * @var av_flag_Type $pin_record_payment_only
     */
    protected $pin_record_payment_only = null;

    /**
     * @var av_currency_Type $pin_tax_amt
     */
    protected $pin_tax_amt = null;

    /**
     * @var av_flag_Type $pin_billing_info_required_for_ach_flag
     */
    protected $pin_billing_info_required_for_ach_flag = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return av_key_Type
     */
    public function getPin_key()
    {
      return $this->pin_key;
    }

    /**
     * @param av_key_Type $pin_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_key($pin_key)
    {
      $this->pin_key = $pin_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPin_cst_key()
    {
      return $this->pin_cst_key;
    }

    /**
     * @param av_key_Type $pin_cst_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_cst_key($pin_cst_key)
    {
      $this->pin_cst_key = $pin_cst_key;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPin_apm_key()
    {
      return $this->pin_apm_key;
    }

    /**
     * @param av_key_Type $pin_apm_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_apm_key($pin_apm_key)
    {
      $this->pin_apm_key = $pin_apm_key;
      return $this;
    }

    /**
     * @return stringLength80_Type
     */
    public function getPin_cc_number()
    {
      return $this->pin_cc_number;
    }

    /**
     * @param stringLength80_Type $pin_cc_number
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_cc_number($pin_cc_number)
    {
      $this->pin_cc_number = $pin_cc_number;
      return $this;
    }

    /**
     * @return stringLength20_Type
     */
    public function getPin_cc_number_display()
    {
      return $this->pin_cc_number_display;
    }

    /**
     * @param stringLength20_Type $pin_cc_number_display
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_cc_number_display($pin_cc_number_display)
    {
      $this->pin_cc_number_display = $pin_cc_number_display;
      return $this;
    }

    /**
     * @return stringLength7_Type
     */
    public function getPin_cc_expire()
    {
      return $this->pin_cc_expire;
    }

    /**
     * @param stringLength7_Type $pin_cc_expire
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_cc_expire($pin_cc_expire)
    {
      $this->pin_cc_expire = $pin_cc_expire;
      return $this;
    }

    /**
     * @return stringLength150_Type
     */
    public function getPin_cc_cardholder_name()
    {
      return $this->pin_cc_cardholder_name;
    }

    /**
     * @param stringLength150_Type $pin_cc_cardholder_name
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_cc_cardholder_name($pin_cc_cardholder_name)
    {
      $this->pin_cc_cardholder_name = $pin_cc_cardholder_name;
      return $this;
    }

    /**
     * @return stringLength40_Type
     */
    public function getPin_cc_auth()
    {
      return $this->pin_cc_auth;
    }

    /**
     * @param stringLength40_Type $pin_cc_auth
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_cc_auth($pin_cc_auth)
    {
      $this->pin_cc_auth = $pin_cc_auth;
      return $this;
    }

    /**
     * @return stringLength10_Type
     */
    public function getPin_cc_security_code()
    {
      return $this->pin_cc_security_code;
    }

    /**
     * @param stringLength10_Type $pin_cc_security_code
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_cc_security_code($pin_cc_security_code)
    {
      $this->pin_cc_security_code = $pin_cc_security_code;
      return $this;
    }

    /**
     * @return stringLength20_Type
     */
    public function getPin_check_number()
    {
      return $this->pin_check_number;
    }

    /**
     * @param stringLength20_Type $pin_check_number
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_check_number($pin_check_number)
    {
      $this->pin_check_number = $pin_check_number;
      return $this;
    }

    /**
     * @return stringLength20_Type
     */
    public function getPin_eft_routing_number()
    {
      return $this->pin_eft_routing_number;
    }

    /**
     * @param stringLength20_Type $pin_eft_routing_number
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_eft_routing_number($pin_eft_routing_number)
    {
      $this->pin_eft_routing_number = $pin_eft_routing_number;
      return $this;
    }

    /**
     * @return stringLength80_Type
     */
    public function getPin_eft_account_number()
    {
      return $this->pin_eft_account_number;
    }

    /**
     * @param stringLength80_Type $pin_eft_account_number
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_eft_account_number($pin_eft_account_number)
    {
      $this->pin_eft_account_number = $pin_eft_account_number;
      return $this;
    }

    /**
     * @return stringLength40_Type
     */
    public function getPin_other_ref_number()
    {
      return $this->pin_other_ref_number;
    }

    /**
     * @param stringLength40_Type $pin_other_ref_number
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_other_ref_number($pin_other_ref_number)
    {
      $this->pin_other_ref_number = $pin_other_ref_number;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getPin_add_user()
    {
      return $this->pin_add_user;
    }

    /**
     * @param av_user_Type $pin_add_user
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_add_user($pin_add_user)
    {
      $this->pin_add_user = $pin_add_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getPin_add_date()
    {
      return $this->pin_add_date;
    }

    /**
     * @param av_date_Type $pin_add_date
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_add_date($pin_add_date)
    {
      $this->pin_add_date = $pin_add_date;
      return $this;
    }

    /**
     * @return av_user_Type
     */
    public function getPin_change_user()
    {
      return $this->pin_change_user;
    }

    /**
     * @param av_user_Type $pin_change_user
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_change_user($pin_change_user)
    {
      $this->pin_change_user = $pin_change_user;
      return $this;
    }

    /**
     * @return av_date_Type
     */
    public function getPin_change_date()
    {
      return $this->pin_change_date;
    }

    /**
     * @param av_date_Type $pin_change_date
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_change_date($pin_change_date)
    {
      $this->pin_change_date = $pin_change_date;
      return $this;
    }

    /**
     * @return av_delete_flag_Type
     */
    public function getPin_delete_flag()
    {
      return $this->pin_delete_flag;
    }

    /**
     * @param av_delete_flag_Type $pin_delete_flag
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_delete_flag($pin_delete_flag)
    {
      $this->pin_delete_flag = $pin_delete_flag;
      return $this;
    }

    /**
     * @return av_currency_Type
     */
    public function getPin_check_amount()
    {
      return $this->pin_check_amount;
    }

    /**
     * @param av_currency_Type $pin_check_amount
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_check_amount($pin_check_amount)
    {
      $this->pin_check_amount = $pin_check_amount;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPin_key_ext()
    {
      return $this->pin_key_ext;
    }

    /**
     * @param av_key_Type $pin_key_ext
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_key_ext($pin_key_ext)
    {
      $this->pin_key_ext = $pin_key_ext;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPin_entity_key()
    {
      return $this->pin_entity_key;
    }

    /**
     * @param av_key_Type $pin_entity_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_entity_key($pin_entity_key)
    {
      $this->pin_entity_key = $pin_entity_key;
      return $this;
    }

    /**
     * @return stringLength25_Type
     */
    public function getPin_merchant_option()
    {
      return $this->pin_merchant_option;
    }

    /**
     * @param stringLength25_Type $pin_merchant_option
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_merchant_option($pin_merchant_option)
    {
      $this->pin_merchant_option = $pin_merchant_option;
      return $this;
    }

    /**
     * @return av_integer_Type
     */
    public function getPin_enc_version()
    {
      return $this->pin_enc_version;
    }

    /**
     * @param av_integer_Type $pin_enc_version
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_enc_version($pin_enc_version)
    {
      $this->pin_enc_version = $pin_enc_version;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPin_cc_preauth_flag()
    {
      return $this->pin_cc_preauth_flag;
    }

    /**
     * @param av_flag_Type $pin_cc_preauth_flag
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_cc_preauth_flag($pin_cc_preauth_flag)
    {
      $this->pin_cc_preauth_flag = $pin_cc_preauth_flag;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPin_preauth_pin_key()
    {
      return $this->pin_preauth_pin_key;
    }

    /**
     * @param av_key_Type $pin_preauth_pin_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_preauth_pin_key($pin_preauth_pin_key)
    {
      $this->pin_preauth_pin_key = $pin_preauth_pin_key;
      return $this;
    }

    /**
     * @return stringLength75_Type
     */
    public function getPin_street()
    {
      return $this->pin_street;
    }

    /**
     * @param stringLength75_Type $pin_street
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_street($pin_street)
    {
      $this->pin_street = $pin_street;
      return $this;
    }

    /**
     * @return stringLength40_Type
     */
    public function getPin_city()
    {
      return $this->pin_city;
    }

    /**
     * @param stringLength40_Type $pin_city
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_city($pin_city)
    {
      $this->pin_city = $pin_city;
      return $this;
    }

    /**
     * @return stringLength40_Type
     */
    public function getPin_state()
    {
      return $this->pin_state;
    }

    /**
     * @param stringLength40_Type $pin_state
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_state($pin_state)
    {
      $this->pin_state = $pin_state;
      return $this;
    }

    /**
     * @return stringLength20_Type
     */
    public function getPin_zip()
    {
      return $this->pin_zip;
    }

    /**
     * @param stringLength20_Type $pin_zip
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_zip($pin_zip)
    {
      $this->pin_zip = $pin_zip;
      return $this;
    }

    /**
     * @return av_email_Type
     */
    public function getPin_email()
    {
      return $this->pin_email;
    }

    /**
     * @param av_email_Type $pin_email
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_email($pin_email)
    {
      $this->pin_email = $pin_email;
      return $this;
    }

    /**
     * @return stringLength33_Type
     */
    public function getPin_dl()
    {
      return $this->pin_dl;
    }

    /**
     * @param stringLength33_Type $pin_dl
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_dl($pin_dl)
    {
      $this->pin_dl = $pin_dl;
      return $this;
    }

    /**
     * @return stringLength150_Type
     */
    public function getPin_name_on_check()
    {
      return $this->pin_name_on_check;
    }

    /**
     * @param stringLength150_Type $pin_name_on_check
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_name_on_check($pin_name_on_check)
    {
      $this->pin_name_on_check = $pin_name_on_check;
      return $this;
    }

    /**
     * @return stringLength1_Type
     */
    public function getPin_eft_account_type()
    {
      return $this->pin_eft_account_type;
    }

    /**
     * @param stringLength1_Type $pin_eft_account_type
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_eft_account_type($pin_eft_account_type)
    {
      $this->pin_eft_account_type = $pin_eft_account_type;
      return $this;
    }

    /**
     * @return stringLength20_Type
     */
    public function getPin_eft_account_number_display()
    {
      return $this->pin_eft_account_number_display;
    }

    /**
     * @param stringLength20_Type $pin_eft_account_number_display
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_eft_account_number_display($pin_eft_account_number_display)
    {
      $this->pin_eft_account_number_display = $pin_eft_account_number_display;
      return $this;
    }

    /**
     * @return stringLength40_Type
     */
    public function getPin_other_preauth_ref_number()
    {
      return $this->pin_other_preauth_ref_number;
    }

    /**
     * @param stringLength40_Type $pin_other_preauth_ref_number
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_other_preauth_ref_number($pin_other_preauth_ref_number)
    {
      $this->pin_other_preauth_ref_number = $pin_other_preauth_ref_number;
      return $this;
    }

    /**
     * @return stringLength3_Type
     */
    public function getPin_cty_iso_number()
    {
      return $this->pin_cty_iso_number;
    }

    /**
     * @param stringLength3_Type $pin_cty_iso_number
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_cty_iso_number($pin_cty_iso_number)
    {
      $this->pin_cty_iso_number = $pin_cty_iso_number;
      return $this;
    }

    /**
     * @return stringLength35_Type
     */
    public function getPin_ss()
    {
      return $this->pin_ss;
    }

    /**
     * @param stringLength35_Type $pin_ss
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_ss($pin_ss)
    {
      $this->pin_ss = $pin_ss;
      return $this;
    }

    /**
     * @return stringLength25_Type
     */
    public function getPin_vault_acount()
    {
      return $this->pin_vault_acount;
    }

    /**
     * @param stringLength25_Type $pin_vault_acount
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_vault_acount($pin_vault_acount)
    {
      $this->pin_vault_acount = $pin_vault_acount;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getPin_cpi_key()
    {
      return $this->pin_cpi_key;
    }

    /**
     * @param av_key_Type $pin_cpi_key
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_cpi_key($pin_cpi_key)
    {
      $this->pin_cpi_key = $pin_cpi_key;
      return $this;
    }

    /**
     * @return stringLength80_Type
     */
    public function getPin_description()
    {
      return $this->pin_description;
    }

    /**
     * @param stringLength80_Type $pin_description
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_description($pin_description)
    {
      $this->pin_description = $pin_description;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getPin_cc_error()
    {
      return $this->pin_cc_error;
    }

    /**
     * @param stringLength0_Type $pin_cc_error
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_cc_error($pin_cc_error)
    {
      $this->pin_cc_error = $pin_cc_error;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPin_isvault()
    {
      return $this->pin_isvault;
    }

    /**
     * @param av_flag_Type $pin_isvault
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_isvault($pin_isvault)
    {
      $this->pin_isvault = $pin_isvault;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPin_record_payment_only()
    {
      return $this->pin_record_payment_only;
    }

    /**
     * @param av_flag_Type $pin_record_payment_only
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_record_payment_only($pin_record_payment_only)
    {
      $this->pin_record_payment_only = $pin_record_payment_only;
      return $this;
    }

    /**
     * @return av_currency_Type
     */
    public function getPin_tax_amt()
    {
      return $this->pin_tax_amt;
    }

    /**
     * @param av_currency_Type $pin_tax_amt
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_tax_amt($pin_tax_amt)
    {
      $this->pin_tax_amt = $pin_tax_amt;
      return $this;
    }

    /**
     * @return av_flag_Type
     */
    public function getPin_billing_info_required_for_ach_flag()
    {
      return $this->pin_billing_info_required_for_ach_flag;
    }

    /**
     * @param av_flag_Type $pin_billing_info_required_for_ach_flag
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantGroup_Payment_Info_DataObjectType
     */
    public function setPin_billing_info_required_for_ach_flag($pin_billing_info_required_for_ach_flag)
    {
      $this->pin_billing_info_required_for_ach_flag = $pin_billing_info_required_for_ach_flag;
      return $this;
    }

}
