<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserFindUsersByUserNameFirstNameLastName
{

    /**
     * @var string $usernameToMatch
     */
    protected $usernameToMatch = null;

    /**
     * @var string $firstnameToMatch
     */
    protected $firstnameToMatch = null;

    /**
     * @var string $lastnameToMatch
     */
    protected $lastnameToMatch = null;

    /**
     * @param string $usernameToMatch
     * @param string $firstnameToMatch
     * @param string $lastnameToMatch
     */
    public function __construct($usernameToMatch, $firstnameToMatch, $lastnameToMatch)
    {
      $this->usernameToMatch = $usernameToMatch;
      $this->firstnameToMatch = $firstnameToMatch;
      $this->lastnameToMatch = $lastnameToMatch;
    }

    /**
     * @return string
     */
    public function getUsernameToMatch()
    {
      return $this->usernameToMatch;
    }

    /**
     * @param string $usernameToMatch
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserFindUsersByUserNameFirstNameLastName
     */
    public function setUsernameToMatch($usernameToMatch)
    {
      $this->usernameToMatch = $usernameToMatch;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstnameToMatch()
    {
      return $this->firstnameToMatch;
    }

    /**
     * @param string $firstnameToMatch
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserFindUsersByUserNameFirstNameLastName
     */
    public function setFirstnameToMatch($firstnameToMatch)
    {
      $this->firstnameToMatch = $firstnameToMatch;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastnameToMatch()
    {
      return $this->lastnameToMatch;
    }

    /**
     * @param string $lastnameToMatch
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserFindUsersByUserNameFirstNameLastName
     */
    public function setLastnameToMatch($lastnameToMatch)
    {
      $this->lastnameToMatch = $lastnameToMatch;
      return $this;
    }

}
