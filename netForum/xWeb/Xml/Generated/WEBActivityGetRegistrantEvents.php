<?php

namespace netForum\xWeb\Xml\Generated;

class WEBActivityGetRegistrantEvents
{

    /**
     * @var guid $RegKey
     */
    protected $RegKey = null;

    /**
     * @param guid $RegKey
     */
    public function __construct($RegKey)
    {
      $this->RegKey = $RegKey;
    }

    /**
     * @return guid
     */
    public function getRegKey()
    {
      return $this->RegKey;
    }

    /**
     * @param guid $RegKey
     * @return \netForum\xWeb\Xml\Generated\WEBActivityGetRegistrantEvents
     */
    public function setRegKey($RegKey)
    {
      $this->RegKey = $RegKey;
      return $this;
    }

}
