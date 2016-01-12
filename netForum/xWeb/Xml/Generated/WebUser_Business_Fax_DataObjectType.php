<?php

namespace netForum\xWeb\Xml\Generated;

class WebUser_Business_Fax_DataObjectType
{

    /**
     * @var av_fax_Type $fax_number
     */
    protected $fax_number = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return av_fax_Type
     */
    public function getFax_number()
    {
      return $this->fax_number;
    }

    /**
     * @param av_fax_Type $fax_number
     * @return \netForum\xWeb\Xml\Generated\WebUser_Business_Fax_DataObjectType
     */
    public function setFax_number($fax_number)
    {
      $this->fax_number = $fax_number;
      return $this;
    }

}
