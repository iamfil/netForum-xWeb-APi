<?php

namespace netForum\xWeb\Xml\Generated;

class WebUser_Business_Phone_XRef_DataObjectType
{

    /**
     * @var stringLength10_Type $cph_extension
     */
    protected $cph_extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return stringLength10_Type
     */
    public function getCph_extension()
    {
      return $this->cph_extension;
    }

    /**
     * @param stringLength10_Type $cph_extension
     * @return \netForum\xWeb\Xml\Generated\WebUser_Business_Phone_XRef_DataObjectType
     */
    public function setCph_extension($cph_extension)
    {
      $this->cph_extension = $cph_extension;
      return $this;
    }

}
