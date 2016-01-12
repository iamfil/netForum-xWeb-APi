<?php

namespace netForum\xWeb\Xml\Generated;

class AuthenticateResponse
{

    /**
     * @var string $AuthenticateResult
     */
    protected $AuthenticateResult = null;

    /**
     * @param string $AuthenticateResult
     */
    public function __construct($AuthenticateResult)
    {
      $this->AuthenticateResult = $AuthenticateResult;
    }

    /**
     * @return string
     */
    public function getAuthenticateResult()
    {
      return $this->AuthenticateResult;
    }

    /**
     * @param string $AuthenticateResult
     * @return \netForum\xWeb\Xml\Generated\AuthenticateResponse
     */
    public function setAuthenticateResult($AuthenticateResult)
    {
      $this->AuthenticateResult = $AuthenticateResult;
      return $this;
    }

}
