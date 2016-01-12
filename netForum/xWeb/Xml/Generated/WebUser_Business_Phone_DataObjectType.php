<?php

namespace netForum\xWeb\Xml\Generated;

class WebUser_Business_Phone_DataObjectType
{

    /**
     * @var av_phone_Type $phn_number
     */
    protected $phn_number = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return av_phone_Type
     */
    public function getPhn_number()
    {
      return $this->phn_number;
    }

    /**
     * @param av_phone_Type $phn_number
     * @return \netForum\xWeb\Xml\Generated\WebUser_Business_Phone_DataObjectType
     */
    public function setPhn_number($phn_number)
    {
      $this->phn_number = $phn_number;
      return $this;
    }

}
