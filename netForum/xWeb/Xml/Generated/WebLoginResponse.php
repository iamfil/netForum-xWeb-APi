<?php

namespace netForum\xWeb\Xml\Generated;

class WebLoginResponse
{

    /**
     * @var string $WebLoginResult
     */
    protected $WebLoginResult = null;

    /**
     * @param string $WebLoginResult
     */
    public function __construct($WebLoginResult)
    {
      $this->WebLoginResult = $WebLoginResult;
    }

    /**
     * @return string
     */
    public function getWebLoginResult()
    {
      return $this->WebLoginResult;
    }

    /**
     * @param string $WebLoginResult
     * @return \netForum\xWeb\Xml\Generated\WebLoginResponse
     */
    public function setWebLoginResult($WebLoginResult)
    {
      $this->WebLoginResult = $WebLoginResult;
      return $this;
    }

}
