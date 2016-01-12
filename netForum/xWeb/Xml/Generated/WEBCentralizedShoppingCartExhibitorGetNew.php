<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartExhibitorGetNew
{

    /**
     * @var guid $CustomerKey
     */
    protected $CustomerKey = null;

    /**
     * @var guid $ExhibitKey
     */
    protected $ExhibitKey = null;

    /**
     * @param guid $CustomerKey
     * @param guid $ExhibitKey
     */
    public function __construct($CustomerKey, $ExhibitKey)
    {
      $this->CustomerKey = $CustomerKey;
      $this->ExhibitKey = $ExhibitKey;
    }

    /**
     * @return guid
     */
    public function getCustomerKey()
    {
      return $this->CustomerKey;
    }

    /**
     * @param guid $CustomerKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartExhibitorGetNew
     */
    public function setCustomerKey($CustomerKey)
    {
      $this->CustomerKey = $CustomerKey;
      return $this;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartExhibitorGetNew
     */
    public function setExhibitKey($ExhibitKey)
    {
      $this->ExhibitKey = $ExhibitKey;
      return $this;
    }

}
