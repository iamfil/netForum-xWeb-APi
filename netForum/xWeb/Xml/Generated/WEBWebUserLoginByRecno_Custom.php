<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserLoginByRecno_Custom
{

    /**
     * @var string $cst_recno
     */
    protected $cst_recno = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param string $cst_recno
     * @param string $password
     */
    public function __construct($cst_recno, $password)
    {
      $this->cst_recno = $cst_recno;
      $this->password = $password;
    }

    /**
     * @return string
     */
    public function getCst_recno()
    {
      return $this->cst_recno;
    }

    /**
     * @param string $cst_recno
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserLoginByRecno_Custom
     */
    public function setCst_recno($cst_recno)
    {
      $this->cst_recno = $cst_recno;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserLoginByRecno_Custom
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
