<?php

namespace netForum\xWeb\Xml\Generated;

class WEBIsUserInRoleResponse
{

    /**
     * @var boolean $WEBIsUserInRoleResult
     */
    protected $WEBIsUserInRoleResult = null;

    /**
     * @param boolean $WEBIsUserInRoleResult
     */
    public function __construct($WEBIsUserInRoleResult)
    {
      $this->WEBIsUserInRoleResult = $WEBIsUserInRoleResult;
    }

    /**
     * @return boolean
     */
    public function getWEBIsUserInRoleResult()
    {
      return $this->WEBIsUserInRoleResult;
    }

    /**
     * @param boolean $WEBIsUserInRoleResult
     * @return \netForum\xWeb\Xml\Generated\WEBIsUserInRoleResponse
     */
    public function setWEBIsUserInRoleResult($WEBIsUserInRoleResult)
    {
      $this->WEBIsUserInRoleResult = $WEBIsUserInRoleResult;
      return $this;
    }

}
