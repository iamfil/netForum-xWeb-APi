<?php

namespace netForum\xWeb\Xml\Generated;

class WebLogin
{

    /**
     * @var string $userLoginPlain
     */
    protected $userLoginPlain = null;

    /**
     * @var string $passwordPlain
     */
    protected $passwordPlain = null;

    /**
     * @var string $keyOverride
     */
    protected $keyOverride = null;

    /**
     * @param string $userLoginPlain
     * @param string $passwordPlain
     * @param string $keyOverride
     */
    public function __construct($userLoginPlain, $passwordPlain, $keyOverride)
    {
      $this->userLoginPlain = $userLoginPlain;
      $this->passwordPlain = $passwordPlain;
      $this->keyOverride = $keyOverride;
    }

    /**
     * @return string
     */
    public function getUserLoginPlain()
    {
      return $this->userLoginPlain;
    }

    /**
     * @param string $userLoginPlain
     * @return \netForum\xWeb\Xml\Generated\WebLogin
     */
    public function setUserLoginPlain($userLoginPlain)
    {
      $this->userLoginPlain = $userLoginPlain;
      return $this;
    }

    /**
     * @return string
     */
    public function getPasswordPlain()
    {
      return $this->passwordPlain;
    }

    /**
     * @param string $passwordPlain
     * @return \netForum\xWeb\Xml\Generated\WebLogin
     */
    public function setPasswordPlain($passwordPlain)
    {
      $this->passwordPlain = $passwordPlain;
      return $this;
    }

    /**
     * @return string
     */
    public function getKeyOverride()
    {
      return $this->keyOverride;
    }

    /**
     * @param string $keyOverride
     * @return \netForum\xWeb\Xml\Generated\WebLogin
     */
    public function setKeyOverride($keyOverride)
    {
      $this->keyOverride = $keyOverride;
      return $this;
    }

}
