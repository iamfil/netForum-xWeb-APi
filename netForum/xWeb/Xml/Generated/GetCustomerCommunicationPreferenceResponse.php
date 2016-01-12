<?php

namespace netForum\xWeb\Xml\Generated;

class GetCustomerCommunicationPreferenceResponse
{

    /**
     * @var MailingListSetting $mailing_list_setting
     */
    protected $mailing_list_setting = null;

    /**
     * @param MailingListSetting $mailing_list_setting
     */
    public function __construct($mailing_list_setting)
    {
      $this->mailing_list_setting = $mailing_list_setting;
    }

    /**
     * @return MailingListSetting
     */
    public function getMailing_list_setting()
    {
      return $this->mailing_list_setting;
    }

    /**
     * @param MailingListSetting $mailing_list_setting
     * @return \netForum\xWeb\Xml\Generated\GetCustomerCommunicationPreferenceResponse
     */
    public function setMailing_list_setting($mailing_list_setting)
    {
      $this->mailing_list_setting = $mailing_list_setting;
      return $this;
    }

}
