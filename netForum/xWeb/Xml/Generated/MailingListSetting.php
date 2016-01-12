<?php

namespace netForum\xWeb\Xml\Generated;

class MailingListSetting
{

    /**
     * @var string $mailing_list_key
     */
    protected $mailing_list_key = null;

    /**
     * @var string $mailing_list_name
     */
    protected $mailing_list_name = null;

    /**
     * @var string $mailing_list_category
     */
    protected $mailing_list_category = null;

    /**
     * @var MailingPerferenceStatus $status
     */
    protected $status = null;

    /**
     * @var string $email_key
     */
    protected $email_key = null;

    /**
     * @var string $address_key
     */
    protected $address_key = null;

    /**
     * @var string $phone_key
     */
    protected $phone_key = null;

    /**
     * @var string $fax_key
     */
    protected $fax_key = null;

    /**
     * @param MailingPerferenceStatus $status
     */
    public function __construct($status)
    {
      $this->status = $status;
    }

    /**
     * @return string
     */
    public function getMailing_list_key()
    {
      return $this->mailing_list_key;
    }

    /**
     * @param string $mailing_list_key
     * @return \netForum\xWeb\Xml\Generated\MailingListSetting
     */
    public function setMailing_list_key($mailing_list_key)
    {
      $this->mailing_list_key = $mailing_list_key;
      return $this;
    }

    /**
     * @return string
     */
    public function getMailing_list_name()
    {
      return $this->mailing_list_name;
    }

    /**
     * @param string $mailing_list_name
     * @return \netForum\xWeb\Xml\Generated\MailingListSetting
     */
    public function setMailing_list_name($mailing_list_name)
    {
      $this->mailing_list_name = $mailing_list_name;
      return $this;
    }

    /**
     * @return string
     */
    public function getMailing_list_category()
    {
      return $this->mailing_list_category;
    }

    /**
     * @param string $mailing_list_category
     * @return \netForum\xWeb\Xml\Generated\MailingListSetting
     */
    public function setMailing_list_category($mailing_list_category)
    {
      $this->mailing_list_category = $mailing_list_category;
      return $this;
    }

    /**
     * @return MailingPerferenceStatus
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param MailingPerferenceStatus $status
     * @return \netForum\xWeb\Xml\Generated\MailingListSetting
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail_key()
    {
      return $this->email_key;
    }

    /**
     * @param string $email_key
     * @return \netForum\xWeb\Xml\Generated\MailingListSetting
     */
    public function setEmail_key($email_key)
    {
      $this->email_key = $email_key;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress_key()
    {
      return $this->address_key;
    }

    /**
     * @param string $address_key
     * @return \netForum\xWeb\Xml\Generated\MailingListSetting
     */
    public function setAddress_key($address_key)
    {
      $this->address_key = $address_key;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone_key()
    {
      return $this->phone_key;
    }

    /**
     * @param string $phone_key
     * @return \netForum\xWeb\Xml\Generated\MailingListSetting
     */
    public function setPhone_key($phone_key)
    {
      $this->phone_key = $phone_key;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax_key()
    {
      return $this->fax_key;
    }

    /**
     * @param string $fax_key
     * @return \netForum\xWeb\Xml\Generated\MailingListSetting
     */
    public function setFax_key($fax_key)
    {
      $this->fax_key = $fax_key;
      return $this;
    }

}
