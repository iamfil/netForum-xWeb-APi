<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetProductListByName
{

    /**
     * @var string $ProductName
     */
    protected $ProductName = null;

    /**
     * @param string $ProductName
     */
    public function __construct($ProductName)
    {
      $this->ProductName = $ProductName;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
      return $this->ProductName;
    }

    /**
     * @param string $ProductName
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetProductListByName
     */
    public function setProductName($ProductName)
    {
      $this->ProductName = $ProductName;
      return $this;
    }

}
