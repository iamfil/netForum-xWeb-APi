<?php

namespace netForum\xWeb\Xml\Generated;

class AuthenticateLdapResponse
{

    /**
     * @var string $AuthenticateLdapResult
     */
    protected $AuthenticateLdapResult = null;

    /**
     * @param string $AuthenticateLdapResult
     */
    public function __construct($AuthenticateLdapResult)
    {
      $this->AuthenticateLdapResult = $AuthenticateLdapResult;
    }

    /**
     * @return string
     */
    public function getAuthenticateLdapResult()
    {
      return $this->AuthenticateLdapResult;
    }

    /**
     * @param string $AuthenticateLdapResult
     * @return \netForum\xWeb\Xml\Generated\AuthenticateLdapResponse
     */
    public function setAuthenticateLdapResult($AuthenticateLdapResult)
    {
      $this->AuthenticateLdapResult = $AuthenticateLdapResult;
      return $this;
    }

}
