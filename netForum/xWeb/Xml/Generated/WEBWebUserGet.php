<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserGet
{

    /**
     * @var string $cst_key
     */
    protected $cst_key = null;

    /**
     * @param string $cst_key
     */
    public function __construct($cst_key)
    {
      $this->cst_key = $cst_key;
    }

    /**
     * @return string
     */
    public function getCst_key()
    {
      return $this->cst_key;
    }

    /**
     * @param string $cst_key
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserGet
     */
    public function setCst_key($cst_key)
    {
      $this->cst_key = $cst_key;
      return $this;
    }

}
