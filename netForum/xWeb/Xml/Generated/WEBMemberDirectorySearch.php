<?php

namespace netForum\xWeb\Xml\Generated;

class WEBMemberDirectorySearch
{

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $OrganizationName
     */
    protected $OrganizationName = null;

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
     * @param string $FirstName
     * @param string $LastName
     * @param string $OrganizationName
     * @param string $City
     * @param string $State
     * @param string $Country
     */
    public function __construct($FirstName, $LastName, $OrganizationName, $City, $State, $Country)
    {
      $this->FirstName = $FirstName;
      $this->LastName = $LastName;
      $this->OrganizationName = $OrganizationName;
      $this->City = $City;
      $this->State = $State;
      $this->Country = $Country;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \netForum\xWeb\Xml\Generated\WEBMemberDirectorySearch
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \netForum\xWeb\Xml\Generated\WEBMemberDirectorySearch
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
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
     * @return \netForum\xWeb\Xml\Generated\WEBMemberDirectorySearch
     */
    public function setOrganizationName($OrganizationName)
    {
      $this->OrganizationName = $OrganizationName;
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
     * @return \netForum\xWeb\Xml\Generated\WEBMemberDirectorySearch
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
     * @return \netForum\xWeb\Xml\Generated\WEBMemberDirectorySearch
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
     * @return \netForum\xWeb\Xml\Generated\WEBMemberDirectorySearch
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

}
