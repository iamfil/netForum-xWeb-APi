<?php

namespace netForum\xWeb\Xml\Generated;

class WebValidateResponse
{

    /**
     * @var string $WebValidateResult
     */
    protected $WebValidateResult = null;

    /**
     * @param string $WebValidateResult
     */
    public function __construct($WebValidateResult)
    {
      $this->WebValidateResult = $WebValidateResult;
    }

    /**
     * @return string
     */
    public function getWebValidateResult()
    {
      return $this->WebValidateResult;
    }

    /**
     * @param string $WebValidateResult
     * @return \netForum\xWeb\Xml\Generated\WebValidateResponse
     */
    public function setWebValidateResult($WebValidateResult)
    {
      $this->WebValidateResult = $WebValidateResult;
      return $this;
    }

}
