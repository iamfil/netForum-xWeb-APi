<?php

namespace netForum\xWeb\Xml\Generated;

class SetOrganizationInformation
{

    /**
     * @var string $OrganizationKey
     */
    protected $OrganizationKey = null;

    /**
     * @var oUpdateNode $oUpdateNode
     */
    protected $oUpdateNode = null;

    /**
     * @param string $OrganizationKey
     * @param oUpdateNode $oUpdateNode
     */
    public function __construct($OrganizationKey, $oUpdateNode)
    {
      $this->OrganizationKey = $OrganizationKey;
      $this->oUpdateNode = $oUpdateNode;
    }

    /**
     * @return string
     */
    public function getOrganizationKey()
    {
      return $this->OrganizationKey;
    }

    /**
     * @param string $OrganizationKey
     * @return \netForum\xWeb\Xml\Generated\SetOrganizationInformation
     */
    public function setOrganizationKey($OrganizationKey)
    {
      $this->OrganizationKey = $OrganizationKey;
      return $this;
    }

    /**
     * @return oUpdateNode
     */
    public function getOUpdateNode()
    {
      return $this->oUpdateNode;
    }

    /**
     * @param oUpdateNode $oUpdateNode
     * @return \netForum\xWeb\Xml\Generated\SetOrganizationInformation
     */
    public function setOUpdateNode($oUpdateNode)
    {
      $this->oUpdateNode = $oUpdateNode;
      return $this;
    }

}
