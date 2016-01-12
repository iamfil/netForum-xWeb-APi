<?php

namespace netForum\xWeb\Xml\Generated;

class WebUser_Business_Address_DataObjectType
{

    /**
     * @var stringLength40_Type $adr_city
     */
    protected $adr_city = null;

    /**
     * @var stringLength40_Type $adr_state
     */
    protected $adr_state = null;

    /**
     * @var stringLength20_Type $adr_post_code
     */
    protected $adr_post_code = null;

    /**
     * @var stringLength60_Type $adr_country
     */
    protected $adr_country = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return stringLength40_Type
     */
    public function getAdr_city()
    {
      return $this->adr_city;
    }

    /**
     * @param stringLength40_Type $adr_city
     * @return \netForum\xWeb\Xml\Generated\WebUser_Business_Address_DataObjectType
     */
    public function setAdr_city($adr_city)
    {
      $this->adr_city = $adr_city;
      return $this;
    }

    /**
     * @return stringLength40_Type
     */
    public function getAdr_state()
    {
      return $this->adr_state;
    }

    /**
     * @param stringLength40_Type $adr_state
     * @return \netForum\xWeb\Xml\Generated\WebUser_Business_Address_DataObjectType
     */
    public function setAdr_state($adr_state)
    {
      $this->adr_state = $adr_state;
      return $this;
    }

    /**
     * @return stringLength20_Type
     */
    public function getAdr_post_code()
    {
      return $this->adr_post_code;
    }

    /**
     * @param stringLength20_Type $adr_post_code
     * @return \netForum\xWeb\Xml\Generated\WebUser_Business_Address_DataObjectType
     */
    public function setAdr_post_code($adr_post_code)
    {
      $this->adr_post_code = $adr_post_code;
      return $this;
    }

    /**
     * @return stringLength60_Type
     */
    public function getAdr_country()
    {
      return $this->adr_country;
    }

    /**
     * @param stringLength60_Type $adr_country
     * @return \netForum\xWeb\Xml\Generated\WebUser_Business_Address_DataObjectType
     */
    public function setAdr_country($adr_country)
    {
      $this->adr_country = $adr_country;
      return $this;
    }

}
