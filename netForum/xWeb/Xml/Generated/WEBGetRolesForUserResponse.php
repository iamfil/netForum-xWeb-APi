<?php

namespace netForum\xWeb\Xml\Generated;

class WEBGetRolesForUserResponse
{

    /**
     * @var WEBGetRolesForUserResult $WEBGetRolesForUserResult
     */
    protected $WEBGetRolesForUserResult = null;

    /**
     * @param WEBGetRolesForUserResult $WEBGetRolesForUserResult
     */
    public function __construct($WEBGetRolesForUserResult)
    {
      $this->WEBGetRolesForUserResult = $WEBGetRolesForUserResult;
    }

    /**
     * @return WEBGetRolesForUserResult
     */
    public function getWEBGetRolesForUserResult()
    {
      return $this->WEBGetRolesForUserResult;
    }

    /**
     * @param WEBGetRolesForUserResult $WEBGetRolesForUserResult
     * @return \netForum\xWeb\Xml\Generated\WEBGetRolesForUserResponse
     */
    public function setWEBGetRolesForUserResult($WEBGetRolesForUserResult)
    {
      $this->WEBGetRolesForUserResult = $WEBGetRolesForUserResult;
      return $this;
    }

}
