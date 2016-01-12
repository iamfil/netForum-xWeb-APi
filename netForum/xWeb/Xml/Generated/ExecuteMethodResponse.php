<?php

namespace netForum\xWeb\Xml\Generated;

class ExecuteMethodResponse
{

    /**
     * @var ExecuteMethodResult $ExecuteMethodResult
     */
    protected $ExecuteMethodResult = null;

    /**
     * @param ExecuteMethodResult $ExecuteMethodResult
     */
    public function __construct($ExecuteMethodResult)
    {
      $this->ExecuteMethodResult = $ExecuteMethodResult;
    }

    /**
     * @return ExecuteMethodResult
     */
    public function getExecuteMethodResult()
    {
      return $this->ExecuteMethodResult;
    }

    /**
     * @param ExecuteMethodResult $ExecuteMethodResult
     * @return \netForum\xWeb\Xml\Generated\ExecuteMethodResponse
     */
    public function setExecuteMethodResult($ExecuteMethodResult)
    {
      $this->ExecuteMethodResult = $ExecuteMethodResult;
      return $this;
    }

}
