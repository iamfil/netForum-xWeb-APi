<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserCreate
{

    /**
     * @var WebUserType $oWebUser
     */
    protected $oWebUser = null;

    /**
     * @param WebUserType $oWebUser
     */
    public function __construct($oWebUser)
    {
      $this->oWebUser = $oWebUser;
    }

    /**
     * @return WebUserType
     */
    public function getOWebUser()
    {
      return $this->oWebUser;
    }

    /**
     * @param WebUserType $oWebUser
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserCreate
     */
    public function setOWebUser($oWebUser)
    {
      $this->oWebUser = $oWebUser;
      return $this;
    }

}
