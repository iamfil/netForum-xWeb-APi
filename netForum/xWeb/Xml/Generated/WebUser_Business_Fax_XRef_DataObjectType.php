<?php

namespace netForum\xWeb\Xml\Generated;

class WebUser_Business_Fax_XRef_DataObjectType
{

    /**
     * @var stringLength10_Type $cfx_extension
     */
    protected $cfx_extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return stringLength10_Type
     */
    public function getCfx_extension()
    {
      return $this->cfx_extension;
    }

    /**
     * @param stringLength10_Type $cfx_extension
     * @return \netForum\xWeb\Xml\Generated\WebUser_Business_Fax_XRef_DataObjectType
     */
    public function setCfx_extension($cfx_extension)
    {
      $this->cfx_extension = $cfx_extension;
      return $this;
    }

}
