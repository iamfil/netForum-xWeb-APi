<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetSponsorListBySessionKey
{

    /**
     * @var guid $SessionKey
     */
    protected $SessionKey = null;

    /**
     * @param guid $SessionKey
     */
    public function __construct($SessionKey)
    {
      $this->SessionKey = $SessionKey;
    }

    /**
     * @return guid
     */
    public function getSessionKey()
    {
      return $this->SessionKey;
    }

    /**
     * @param guid $SessionKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetSponsorListBySessionKey
     */
    public function setSessionKey($SessionKey)
    {
      $this->SessionKey = $SessionKey;
      return $this;
    }

}
