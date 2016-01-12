<?php

namespace netForum\xWeb\Xml\Generated;

class WEBMemberDirectoryOrganizationSearch
{

    /**
     * @var string $OrganizationAcronym
     */
    protected $OrganizationAcronym = null;

    /**
     * @var string $OrganizationName
     */
    protected $OrganizationName = null;

    /**
     * @var string $OrganizationType
     */
    protected $OrganizationType = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @param string $OrganizationAcronym
     * @param string $OrganizationName
     * @param string $OrganizationType
     * @param string $City
     * @param string $State
     * @param string $Country
     */
    public function __construct($OrganizationAcronym, $OrganizationName, $OrganizationType, $City, $State, $Country)
    {
      $this->OrganizationAcronym = $OrganizationAcronym;
      $this->OrganizationName = $OrganizationName;
      $this->OrganizationType = $OrganizationType;
      $this->City = $City;
      $this->State = $State;
      $this->Country = $Country;
    }

    /**
     * @return string
     */
    public function getOrganizationAcronym()
    {
      return $this->OrganizationAcronym;
    }

    /**
     * @param string $OrganizationAcronym
     * @return \netForum\xWeb\Xml\Generated\WEBMemberDirectoryOrganizationSearch
     */
    public function setOrganizationAcronym($OrganizationAcronym)
    {
      $this->OrganizationAcronym = $OrganizationAcronym;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrganizationName()
    {
      return $this->OrganizationName;
    }

    /**
     * @param string $OrganizationName
     * @return \netForum\xWeb\Xml\Generated\WEBMemberDirectoryOrganizationSearch
     */
    public function setOrganizationName($OrganizationName)
    {
      $this->OrganizationName = $OrganizationName;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrganizationType()
    {
      return $this->OrganizationType;
    }

    /**
     * @param string $OrganizationType
     * @return \netForum\xWeb\Xml\Generated\WEBMemberDirectoryOrganizationSearch
     */
    public function setOrganizationType($OrganizationType)
    {
      $this->OrganizationType = $OrganizationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \netForum\xWeb\Xml\Generated\WEBMemberDirectoryOrganizationSearch
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return \netForum\xWeb\Xml\Generated\WEBMemberDirectoryOrganizationSearch
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return \netForum\xWeb\Xml\Generated\WEBMemberDirectoryOrganizationSearch
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

}
