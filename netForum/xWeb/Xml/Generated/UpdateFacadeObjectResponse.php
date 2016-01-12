<?php

namespace netForum\xWeb\Xml\Generated;

class UpdateFacadeObjectResponse
{

    /**
     * @var UpdateFacadeObjectResult $UpdateFacadeObjectResult
     */
    protected $UpdateFacadeObjectResult = null;

    /**
     * @param UpdateFacadeObjectResult $UpdateFacadeObjectResult
     */
    public function __construct($UpdateFacadeObjectResult)
    {
      $this->UpdateFacadeObjectResult = $UpdateFacadeObjectResult;
    }

    /**
     * @return UpdateFacadeObjectResult
     */
    public function getUpdateFacadeObjectResult()
    {
      return $this->UpdateFacadeObjectResult;
    }

    /**
     * @param UpdateFacadeObjectResult $UpdateFacadeObjectResult
     * @return \netForum\xWeb\Xml\Generated\UpdateFacadeObjectResponse
     */
    public function setUpdateFacadeObjectResult($UpdateFacadeObjectResult)
    {
      $this->UpdateFacadeObjectResult = $UpdateFacadeObjectResult;
      return $this;
    }

}
