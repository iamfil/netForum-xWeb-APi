<?php

namespace netForum\xWeb\Xml\Generated;

class GetVersionResponse
{

    /**
     * @var xWebVersion $GetVersionResult
     */
    protected $GetVersionResult = null;

    /**
     * @param xWebVersion $GetVersionResult
     */
    public function __construct($GetVersionResult)
    {
      $this->GetVersionResult = $GetVersionResult;
    }

    /**
     * @return xWebVersion
     */
    public function getGetVersionResult()
    {
      return $this->GetVersionResult;
    }

    /**
     * @param xWebVersion $GetVersionResult
     * @return \netForum\xWeb\Xml\Generated\GetVersionResponse
     */
    public function setGetVersionResult($GetVersionResult)
    {
      $this->GetVersionResult = $GetVersionResult;
      return $this;
    }

}
