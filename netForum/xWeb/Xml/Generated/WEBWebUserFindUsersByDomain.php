<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserFindUsersByDomain
{

    /**
     * @var string $domainToMatch
     */
    protected $domainToMatch = null;

    /**
     * @param string $domainToMatch
     */
    public function __construct($domainToMatch)
    {
      $this->domainToMatch = $domainToMatch;
    }

    /**
     * @return string
     */
    public function getDomainToMatch()
    {
      return $this->domainToMatch;
    }

    /**
     * @param string $domainToMatch
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserFindUsersByDomain
     */
    public function setDomainToMatch($domainToMatch)
    {
      $this->domainToMatch = $domainToMatch;
      return $this;
    }

}
