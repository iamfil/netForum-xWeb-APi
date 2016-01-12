<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartExhibitorGetBoothTypeList
{

    /**
     * @var guid $ExhibitKey
     */
    protected $ExhibitKey = null;

    /**
     * @param guid $ExhibitKey
     */
    public function __construct($ExhibitKey)
    {
      $this->ExhibitKey = $ExhibitKey;
    }

    /**
     * @return guid
     */
    public function getExhibitKey()
    {
      return $this->ExhibitKey;
    }

    /**
     * @param guid $ExhibitKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartExhibitorGetBoothTypeList
     */
    public function setExhibitKey($ExhibitKey)
    {
      $this->ExhibitKey = $ExhibitKey;
      return $this;
    }

}
