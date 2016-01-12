<?php

namespace netForum\xWeb\Xml\Generated;

class WEBIsUserInRole
{

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $roleName
     */
    protected $roleName = null;

    /**
     * @param string $username
     * @param string $roleName
     */
    public function __construct($username, $roleName)
    {
      $this->username = $username;
      $this->roleName = $roleName;
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
     * @return \netForum\xWeb\Xml\Generated\WEBIsUserInRole
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoleName()
    {
      return $this->roleName;
    }

    /**
     * @param string $roleName
     * @return \netForum\xWeb\Xml\Generated\WEBIsUserInRole
     */
    public function setRoleName($roleName)
    {
      $this->roleName = $roleName;
      return $this;
    }

}
