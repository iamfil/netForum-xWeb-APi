<?php

namespace netForum\xWeb\Xml\Generated;

class WEBActivityNumberOfRegisteredGuests
{

    /**
     * @var guid $RegistrationKey
     */
    protected $RegistrationKey = null;

    /**
     * @param guid $RegistrationKey
     */
    public function __construct($RegistrationKey)
    {
      $this->RegistrationKey = $RegistrationKey;
    }

    /**
     * @return guid
     */
    public function getRegistrationKey()
    {
      return $this->RegistrationKey;
    }

    /**
     * @param guid $RegistrationKey
     * @return \netForum\xWeb\Xml\Generated\WEBActivityNumberOfRegisteredGuests
     */
    public function setRegistrationKey($RegistrationKey)
    {
      $this->RegistrationKey = $RegistrationKey;
      return $this;
    }

}
