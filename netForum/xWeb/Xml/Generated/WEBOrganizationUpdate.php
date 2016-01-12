<?php

namespace netForum\xWeb\Xml\Generated;

class WEBOrganizationUpdate
{

    /**
     * @var OrganizationType $oFacadeObject
     */
    protected $oFacadeObject = null;

    /**
     * @var string $bRefresh
     */
    protected $bRefresh = null;

    /**
     * @param OrganizationType $oFacadeObject
     * @param string $bRefresh
     */
    public function __construct($oFacadeObject, $bRefresh)
    {
      $this->oFacadeObject = $oFacadeObject;
      $this->bRefresh = $bRefresh;
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
     * @return \netForum\xWeb\Xml\Generated\WEBOrganizationUpdate
     */
    public function setOFacadeObject($oFacadeObject)
    {
      $this->oFacadeObject = $oFacadeObject;
      return $this;
    }

    /**
     * @return string
     */
    public function getBRefresh()
    {
      return $this->bRefresh;
    }

    /**
     * @param string $bRefresh
     * @return \netForum\xWeb\Xml\Generated\WEBOrganizationUpdate
     */
    public function setBRefresh($bRefresh)
    {
      $this->bRefresh = $bRefresh;
      return $this;
    }

}
