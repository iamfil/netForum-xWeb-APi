<?php

namespace netForum\xWeb\Xml\Generated;

class ModuleResult
{

    /**
     * @var string $Module
     */
    protected $Module = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var MergeResult $Status
     */
    protected $Status = null;

    /**
     * @param MergeResult $Status
     */
    public function __construct($Status)
    {
      $this->Status = $Status;
    }

    /**
     * @return string
     */
    public function getModule()
    {
      return $this->Module;
    }

    /**
     * @param string $Module
     * @return \netForum\xWeb\Xml\Generated\ModuleResult
     */
    public function setModule($Module)
    {
      $this->Module = $Module;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return \netForum\xWeb\Xml\Generated\ModuleResult
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

    /**
     * @return MergeResult
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param MergeResult $Status
     * @return \netForum\xWeb\Xml\Generated\ModuleResult
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
