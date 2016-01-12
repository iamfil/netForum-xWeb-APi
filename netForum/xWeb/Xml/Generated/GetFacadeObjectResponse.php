<?php

namespace netForum\xWeb\Xml\Generated;

class GetFacadeObjectResponse
{

    /**
     * @var GetFacadeObjectResult $GetFacadeObjectResult
     */
    protected $GetFacadeObjectResult = null;

    /**
     * @param GetFacadeObjectResult $GetFacadeObjectResult
     */
    public function __construct($GetFacadeObjectResult)
    {
      $this->GetFacadeObjectResult = $GetFacadeObjectResult;
    }

    /**
     * @return GetFacadeObjectResult
     */
    public function getGetFacadeObjectResult()
    {
      return $this->GetFacadeObjectResult;
    }

    /**
     * @param GetFacadeObjectResult $GetFacadeObjectResult
     * @return \netForum\xWeb\Xml\Generated\GetFacadeObjectResponse
     */
    public function setGetFacadeObjectResult($GetFacadeObjectResult)
    {
      $this->GetFacadeObjectResult = $GetFacadeObjectResult;
      return $this;
    }

}
