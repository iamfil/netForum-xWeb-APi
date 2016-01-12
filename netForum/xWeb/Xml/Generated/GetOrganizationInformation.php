<?php

namespace netForum\xWeb\Xml\Generated;

class GetOrganizationInformation
{

    /**
     * @var string $OrganizationKey
     */
    protected $OrganizationKey = null;

    /**
     * @param string $OrganizationKey
     */
    public function __construct($OrganizationKey)
    {
      $this->OrganizationKey = $OrganizationKey;
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
     * @return \netForum\xWeb\Xml\Generated\GetOrganizationInformation
     */
    public function setOrganizationKey($OrganizationKey)
    {
      $this->OrganizationKey = $OrganizationKey;
      return $this;
    }

}
