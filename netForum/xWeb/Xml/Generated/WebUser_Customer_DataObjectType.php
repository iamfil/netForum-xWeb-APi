<?php

namespace netForum\xWeb\Xml\Generated;

class WebUser_Customer_DataObjectType
{

    /**
     * @var av_recno_Type $cst_recno
     */
    protected $cst_recno = null;

    /**
     * @var stringLength80_Type $cst_web_login
     */
    protected $cst_web_login = null;

    /**
     * @var stringLength0_Type $cst_new_password
     */
    protected $cst_new_password = null;

    /**
     * @var stringLength0_Type $cst_new_password_confirm
     */
    protected $cst_new_password_confirm = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return av_recno_Type
     */
    public function getCst_recno()
    {
      return $this->cst_recno;
    }

    /**
     * @param av_recno_Type $cst_recno
     * @return \netForum\xWeb\Xml\Generated\WebUser_Customer_DataObjectType
     */
    public function setCst_recno($cst_recno)
    {
      $this->cst_recno = $cst_recno;
      return $this;
    }

    /**
     * @return stringLength80_Type
     */
    public function getCst_web_login()
    {
      return $this->cst_web_login;
    }

    /**
     * @param stringLength80_Type $cst_web_login
     * @return \netForum\xWeb\Xml\Generated\WebUser_Customer_DataObjectType
     */
    public function setCst_web_login($cst_web_login)
    {
      $this->cst_web_login = $cst_web_login;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getCst_new_password()
    {
      return $this->cst_new_password;
    }

    /**
     * @param stringLength0_Type $cst_new_password
     * @return \netForum\xWeb\Xml\Generated\WebUser_Customer_DataObjectType
     */
    public function setCst_new_password($cst_new_password)
    {
      $this->cst_new_password = $cst_new_password;
      return $this;
    }

    /**
     * @return stringLength0_Type
     */
    public function getCst_new_password_confirm()
    {
      return $this->cst_new_password_confirm;
    }

    /**
     * @param stringLength0_Type $cst_new_password_confirm
     * @return \netForum\xWeb\Xml\Generated\WebUser_Customer_DataObjectType
     */
    public function setCst_new_password_confirm($cst_new_password_confirm)
    {
      $this->cst_new_password_confirm = $cst_new_password_confirm;
      return $this;
    }

}
