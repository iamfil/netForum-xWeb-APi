<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetProductSubstituteListByProductKey
{

    /**
     * @var guid $ProductKey
     */
    protected $ProductKey = null;

    /**
     * @param guid $ProductKey
     */
    public function __construct($ProductKey)
    {
      $this->ProductKey = $ProductKey;
    }

    /**
     * @return guid
     */
    public function getProductKey()
    {
      return $this->ProductKey;
    }

    /**
     * @param guid $ProductKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetProductSubstituteListByProductKey
     */
    public function setProductKey($ProductKey)
    {
      $this->ProductKey = $ProductKey;
      return $this;
    }

}
