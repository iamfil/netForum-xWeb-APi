<?php

namespace netForum\xWeb\Xml\Generated;

class WEBGetUsersInRoleResponse
{

    /**
     * @var WEBGetUsersInRoleResult $WEBGetUsersInRoleResult
     */
    protected $WEBGetUsersInRoleResult = null;

    /**
     * @param WEBGetUsersInRoleResult $WEBGetUsersInRoleResult
     */
    public function __construct($WEBGetUsersInRoleResult)
    {
      $this->WEBGetUsersInRoleResult = $WEBGetUsersInRoleResult;
    }

    /**
     * @return WEBGetUsersInRoleResult
     */
    public function getWEBGetUsersInRoleResult()
    {
      return $this->WEBGetUsersInRoleResult;
    }

    /**
     * @param WEBGetUsersInRoleResult $WEBGetUsersInRoleResult
     * @return \netForum\xWeb\Xml\Generated\WEBGetUsersInRoleResponse
     */
    public function setWEBGetUsersInRoleResult($WEBGetUsersInRoleResult)
    {
      $this->WEBGetUsersInRoleResult = $WEBGetUsersInRoleResult;
      return $this;
    }

}
