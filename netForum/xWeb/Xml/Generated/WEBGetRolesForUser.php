<?php

namespace netForum\xWeb\Xml\Generated;

class WEBGetRolesForUser
{

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @param string $username
     */
    public function __construct($username)
    {
      $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @param string $username
     * @return \netForum\xWeb\Xml\Generated\WEBGetRolesForUser
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

}
