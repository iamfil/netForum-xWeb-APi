<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserLogin_Custom
{

    /**
     * @var string $LoginOrEmail
     */
    protected $LoginOrEmail = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param string $LoginOrEmail
     * @param string $password
     */
    public function __construct($LoginOrEmail, $password)
    {
      $this->LoginOrEmail = $LoginOrEmail;
      $this->password = $password;
    }

    /**
     * @return string
     */
    public function getLoginOrEmail()
    {
      return $this->LoginOrEmail;
    }

    /**
     * @param string $LoginOrEmail
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserLogin_Custom
     */
    public function setLoginOrEmail($LoginOrEmail)
    {
      $this->LoginOrEmail = $LoginOrEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserLogin_Custom
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
