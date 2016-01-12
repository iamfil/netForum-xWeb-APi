<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetSessionListByEventKey
{

    /**
     * @var guid $EventKey
     */
    protected $EventKey = null;

    /**
     * @param guid $EventKey
     */
    public function __construct($EventKey)
    {
      $this->EventKey = $EventKey;
    }

    /**
     * @return guid
     */
    public function getEventKey()
    {
      return $this->EventKey;
    }

    /**
     * @param guid $EventKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetSessionListByEventKey
     */
    public function setEventKey($EventKey)
    {
      $this->EventKey = $EventKey;
      return $this;
    }

}
