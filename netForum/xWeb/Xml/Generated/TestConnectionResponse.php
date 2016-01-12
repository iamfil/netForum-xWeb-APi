<?php

namespace netForum\xWeb\Xml\Generated;

class TestConnectionResponse
{

    /**
     * @var string $TestConnectionResult
     */
    protected $TestConnectionResult = null;

    /**
     * @param string $TestConnectionResult
     */
    public function __construct($TestConnectionResult)
    {
      $this->TestConnectionResult = $TestConnectionResult;
    }

    /**
     * @return string
     */
    public function getTestConnectionResult()
    {
      return $this->TestConnectionResult;
    }

    /**
     * @param string $TestConnectionResult
     * @return \netForum\xWeb\Xml\Generated\TestConnectionResponse
     */
    public function setTestConnectionResult($TestConnectionResult)
    {
      $this->TestConnectionResult = $TestConnectionResult;
      return $this;
    }

}
