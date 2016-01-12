<?php

namespace netForum\xWeb\Xml\Generated;

class WEBRoleExistsResponse
{

    /**
     * @var boolean $WEBRoleExistsResult
     */
    protected $WEBRoleExistsResult = null;

    /**
     * @param boolean $WEBRoleExistsResult
     */
    public function __construct($WEBRoleExistsResult)
    {
      $this->WEBRoleExistsResult = $WEBRoleExistsResult;
    }

    /**
     * @return boolean
     */
    public function getWEBRoleExistsResult()
    {
      return $this->WEBRoleExistsResult;
    }

    /**
     * @param boolean $WEBRoleExistsResult
     * @return \netForum\xWeb\Xml\Generated\WEBRoleExistsResponse
     */
    public function setWEBRoleExistsResult($WEBRoleExistsResult)
    {
      $this->WEBRoleExistsResult = $WEBRoleExistsResult;
      return $this;
    }

}
