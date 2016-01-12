<?php

namespace netForum\xWeb\Xml\Generated;

class WEBFindUsersInRole
{

    /**
     * @var string $roleName
     */
    protected $roleName = null;

    /**
     * @var string $usernameToMatch
     */
    protected $usernameToMatch = null;

    /**
     * @param string $roleName
     * @param string $usernameToMatch
     */
    public function __construct($roleName, $usernameToMatch)
    {
      $this->roleName = $roleName;
      $this->usernameToMatch = $usernameToMatch;
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
     * @return \netForum\xWeb\Xml\Generated\WEBFindUsersInRole
     */
    public function setRoleName($roleName)
    {
      $this->roleName = $roleName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsernameToMatch()
    {
      return $this->usernameToMatch;
    }

    /**
     * @param string $usernameToMatch
     * @return \netForum\xWeb\Xml\Generated\WEBFindUsersInRole
     */
    public function setUsernameToMatch($usernameToMatch)
    {
      $this->usernameToMatch = $usernameToMatch;
      return $this;
    }

}
