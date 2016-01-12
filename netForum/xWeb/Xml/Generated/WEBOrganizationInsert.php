<?php

namespace netForum\xWeb\Xml\Generated;

class WEBOrganizationInsert
{

    /**
     * @var OrganizationType $oFacadeObject
     */
    protected $oFacadeObject = null;

    /**
     * @param OrganizationType $oFacadeObject
     */
    public function __construct($oFacadeObject)
    {
      $this->oFacadeObject = $oFacadeObject;
    }

    /**
     * @return OrganizationType
     */
    public function getOFacadeObject()
    {
      return $this->oFacadeObject;
    }

    /**
     * @param OrganizationType $oFacadeObject
     * @return \netForum\xWeb\Xml\Generated\WEBOrganizationInsert
     */
    public function setOFacadeObject($oFacadeObject)
    {
      $this->oFacadeObject = $oFacadeObject;
      return $this;
    }

}
