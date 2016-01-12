<?php

namespace netForum\xWeb\Xml\Generated;

class WEBFindUsersInRoleResponse
{

    /**
     * @var WEBFindUsersInRoleResult $WEBFindUsersInRoleResult
     */
    protected $WEBFindUsersInRoleResult = null;

    /**
     * @param WEBFindUsersInRoleResult $WEBFindUsersInRoleResult
     */
    public function __construct($WEBFindUsersInRoleResult)
    {
      $this->WEBFindUsersInRoleResult = $WEBFindUsersInRoleResult;
    }

    /**
     * @return WEBFindUsersInRoleResult
     */
    public function getWEBFindUsersInRoleResult()
    {
      return $this->WEBFindUsersInRoleResult;
    }

    /**
     * @param WEBFindUsersInRoleResult $WEBFindUsersInRoleResult
     * @return \netForum\xWeb\Xml\Generated\WEBFindUsersInRoleResponse
     */
    public function setWEBFindUsersInRoleResult($WEBFindUsersInRoleResult)
    {
      $this->WEBFindUsersInRoleResult = $WEBFindUsersInRoleResult;
      return $this;
    }

}
