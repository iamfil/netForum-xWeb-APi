<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartExhibitorGet
{

    /**
     * @var guid $ExhibitorKey
     */
    protected $ExhibitorKey = null;

    /**
     * @param guid $ExhibitorKey
     */
    public function __construct($ExhibitorKey)
    {
      $this->ExhibitorKey = $ExhibitorKey;
    }

    /**
     * @return guid
     */
    public function getExhibitorKey()
    {
      return $this->ExhibitorKey;
    }

    /**
     * @param guid $ExhibitorKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartExhibitorGet
     */
    public function setExhibitorKey($ExhibitorKey)
    {
      $this->ExhibitorKey = $ExhibitorKey;
      return $this;
    }

}
