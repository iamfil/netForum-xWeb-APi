<?php

namespace netForum\xWeb\Xml\Generated;

class AuthorizationToken
{

    /**
     * @var string $Token
     */
    protected $Token = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->Token;
    }

    /**
     * @param string $Token
     * @return \netForum\xWeb\Xml\Generated\AuthorizationToken
     */
    public function setToken($Token)
    {
      $this->Token = $Token;
      return $this;
    }

}
