<?php

namespace netForum\xWeb\Xml\Generated;

class WebUser_Email_DataObjectType
{

    /**
     * @var av_email_Type $eml_address
     */
    protected $eml_address = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return av_email_Type
     */
    public function getEml_address()
    {
      return $this->eml_address;
    }

    /**
     * @param av_email_Type $eml_address
     * @return \netForum\xWeb\Xml\Generated\WebUser_Email_DataObjectType
     */
    public function setEml_address($eml_address)
    {
      $this->eml_address = $eml_address;
      return $this;
    }

}
