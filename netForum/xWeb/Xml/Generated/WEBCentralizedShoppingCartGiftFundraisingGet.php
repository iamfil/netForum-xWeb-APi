<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGiftFundraisingGet
{

    /**
     * @var guid $Key
     */
    protected $Key = null;

    /**
     * @param guid $Key
     */
    public function __construct($Key)
    {
      $this->Key = $Key;
    }

    /**
     * @return guid
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param guid $Key
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGiftFundraisingGet
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}