<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserValidateToken_Custom
{

    /**
     * @var string $authenticationToken
     */
    protected $authenticationToken = null;

    /**
     * @param string $authenticationToken
     */
    public function __construct($authenticationToken)
    {
      $this->authenticationToken = $authenticationToken;
    }

    /**
     * @return string
     */
    public function getAuthenticationToken()
    {
      return $this->authenticationToken;
    }

    /**
     * @param string $authenticationToken
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserValidateToken_Custom
     */
    public function setAuthenticationToken($authenticationToken)
    {
      $this->authenticationToken = $authenticationToken;
      return $this;
    }

}
