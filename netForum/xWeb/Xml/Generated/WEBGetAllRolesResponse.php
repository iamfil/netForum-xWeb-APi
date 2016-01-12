<?php

namespace netForum\xWeb\Xml\Generated;

class WEBGetAllRolesResponse
{

    /**
     * @var WEBGetAllRolesResult $WEBGetAllRolesResult
     */
    protected $WEBGetAllRolesResult = null;

    /**
     * @param WEBGetAllRolesResult $WEBGetAllRolesResult
     */
    public function __construct($WEBGetAllRolesResult)
    {
      $this->WEBGetAllRolesResult = $WEBGetAllRolesResult;
    }

    /**
     * @return WEBGetAllRolesResult
     */
    public function getWEBGetAllRolesResult()
    {
      return $this->WEBGetAllRolesResult;
    }

    /**
     * @param WEBGetAllRolesResult $WEBGetAllRolesResult
     * @return \netForum\xWeb\Xml\Generated\WEBGetAllRolesResponse
     */
    public function setWEBGetAllRolesResult($WEBGetAllRolesResult)
    {
      $this->WEBGetAllRolesResult = $WEBGetAllRolesResult;
      return $this;
    }

}
