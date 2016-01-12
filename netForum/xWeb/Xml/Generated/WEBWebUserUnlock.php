<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserUnlock
{

    /**
     * @var string $cst_recno
     */
    protected $cst_recno = null;

    /**
     * @param string $cst_recno
     */
    public function __construct($cst_recno)
    {
      $this->cst_recno = $cst_recno;
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
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserUnlock
     */
    public function setCst_recno($cst_recno)
    {
      $this->cst_recno = $cst_recno;
      return $this;
    }

}
