<?php

namespace netForum\xWeb\Xml\Generated;

class WEBActivityGetRegistrantTracks
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
     * @return \netForum\xWeb\Xml\Generated\WEBActivityGetRegistrantTracks
     */
    public function setRegKey($RegKey)
    {
      $this->RegKey = $RegKey;
      return $this;
    }

}
