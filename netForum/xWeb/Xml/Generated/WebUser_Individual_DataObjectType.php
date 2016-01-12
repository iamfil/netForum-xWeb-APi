<?php

namespace netForum\xWeb\Xml\Generated;

class WebUser_Individual_DataObjectType
{

    /**
     * @var av_key_Type $ind_cst_key
     */
    protected $ind_cst_key = null;

    /**
     * @var stringLength30_Type $ind_first_name
     */
    protected $ind_first_name = null;

    /**
     * @var stringLength30_Type $ind_mid_name
     */
    protected $ind_mid_name = null;

    /**
     * @var stringLength30_Type $ind_last_name
     */
    protected $ind_last_name = null;

    /**
     * @var stringLength187_Type $ind_full_name_cp
     */
    protected $ind_full_name_cp = null;

    /**
     * @var av_key_Type $ind_token
     */
    protected $ind_token = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return av_key_Type
     */
    public function getInd_cst_key()
    {
      return $this->ind_cst_key;
    }

    /**
     * @param av_key_Type $ind_cst_key
     * @return \netForum\xWeb\Xml\Generated\WebUser_Individual_DataObjectType
     */
    public function setInd_cst_key($ind_cst_key)
    {
      $this->ind_cst_key = $ind_cst_key;
      return $this;
    }

    /**
     * @return stringLength30_Type
     */
    public function getInd_first_name()
    {
      return $this->ind_first_name;
    }

    /**
     * @param stringLength30_Type $ind_first_name
     * @return \netForum\xWeb\Xml\Generated\WebUser_Individual_DataObjectType
     */
    public function setInd_first_name($ind_first_name)
    {
      $this->ind_first_name = $ind_first_name;
      return $this;
    }

    /**
     * @return stringLength30_Type
     */
    public function getInd_mid_name()
    {
      return $this->ind_mid_name;
    }

    /**
     * @param stringLength30_Type $ind_mid_name
     * @return \netForum\xWeb\Xml\Generated\WebUser_Individual_DataObjectType
     */
    public function setInd_mid_name($ind_mid_name)
    {
      $this->ind_mid_name = $ind_mid_name;
      return $this;
    }

    /**
     * @return stringLength30_Type
     */
    public function getInd_last_name()
    {
      return $this->ind_last_name;
    }

    /**
     * @param stringLength30_Type $ind_last_name
     * @return \netForum\xWeb\Xml\Generated\WebUser_Individual_DataObjectType
     */
    public function setInd_last_name($ind_last_name)
    {
      $this->ind_last_name = $ind_last_name;
      return $this;
    }

    /**
     * @return stringLength187_Type
     */
    public function getInd_full_name_cp()
    {
      return $this->ind_full_name_cp;
    }

    /**
     * @param stringLength187_Type $ind_full_name_cp
     * @return \netForum\xWeb\Xml\Generated\WebUser_Individual_DataObjectType
     */
    public function setInd_full_name_cp($ind_full_name_cp)
    {
      $this->ind_full_name_cp = $ind_full_name_cp;
      return $this;
    }

    /**
     * @return av_key_Type
     */
    public function getInd_token()
    {
      return $this->ind_token;
    }

    /**
     * @param av_key_Type $ind_token
     * @return \netForum\xWeb\Xml\Generated\WebUser_Individual_DataObjectType
     */
    public function setInd_token($ind_token)
    {
      $this->ind_token = $ind_token;
      return $this;
    }

}
