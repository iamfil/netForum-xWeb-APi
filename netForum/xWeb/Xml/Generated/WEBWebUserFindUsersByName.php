<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserFindUsersByName
{

    /**
     * @var string $usernameToMatch
     */
    protected $usernameToMatch = null;

    /**
     * @param string $usernameToMatch
     */
    public function __construct($usernameToMatch)
    {
      $this->usernameToMatch = $usernameToMatch;
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
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserFindUsersByName
     */
    public function setUsernameToMatch($usernameToMatch)
    {
      $this->usernameToMatch = $usernameToMatch;
      return $this;
    }

}
