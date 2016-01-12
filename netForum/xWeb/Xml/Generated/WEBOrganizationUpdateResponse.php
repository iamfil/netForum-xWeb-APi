<?php

namespace netForum\xWeb\Xml\Generated;

class WEBOrganizationUpdateResponse
{

    /**
     * @var boolean $WEBOrganizationUpdateResult
     */
    protected $WEBOrganizationUpdateResult = null;

    /**
     * @param boolean $WEBOrganizationUpdateResult
     */
    public function __construct($WEBOrganizationUpdateResult)
    {
      $this->WEBOrganizationUpdateResult = $WEBOrganizationUpdateResult;
    }

    /**
     * @return boolean
     */
    public function getWEBOrganizationUpdateResult()
    {
      return $this->WEBOrganizationUpdateResult;
    }

    /**
     * @param boolean $WEBOrganizationUpdateResult
     * @return \netForum\xWeb\Xml\Generated\WEBOrganizationUpdateResponse
     */
    public function setWEBOrganizationUpdateResult($WEBOrganizationUpdateResult)
    {
      $this->WEBOrganizationUpdateResult = $WEBOrganizationUpdateResult;
      return $this;
    }

}
