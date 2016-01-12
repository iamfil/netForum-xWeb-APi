<?php

namespace netForum\xWeb\Xml\Generated;

class WEBGetUsersInRole
{

    /**
     * @var string $roleName
     */
    protected $roleName = null;

    /**
     * @param string $roleName
     */
    public function __construct($roleName)
    {
      $this->roleName = $roleName;
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
     * @return \netForum\xWeb\Xml\Generated\WEBGetUsersInRole
     */
    public function setRoleName($roleName)
    {
      $this->roleName = $roleName;
      return $this;
    }

}
