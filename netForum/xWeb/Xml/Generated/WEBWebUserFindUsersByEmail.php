<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserFindUsersByEmail
{

    /**
     * @var string $emailToMatch
     */
    protected $emailToMatch = null;

    /**
     * @param string $emailToMatch
     */
    public function __construct($emailToMatch)
    {
      $this->emailToMatch = $emailToMatch;
    }

    /**
     * @return string
     */
    public function getEmailToMatch()
    {
      return $this->emailToMatch;
    }

    /**
     * @param string $emailToMatch
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserFindUsersByEmail
     */
    public function setEmailToMatch($emailToMatch)
    {
      $this->emailToMatch = $emailToMatch;
      return $this;
    }

}
