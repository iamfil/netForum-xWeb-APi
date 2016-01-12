<?php

namespace netForum\xWeb\Xml\Generated;

class InsertFacadeObjectResponse
{

    /**
     * @var InsertFacadeObjectResult $InsertFacadeObjectResult
     */
    protected $InsertFacadeObjectResult = null;

    /**
     * @param InsertFacadeObjectResult $InsertFacadeObjectResult
     */
    public function __construct($InsertFacadeObjectResult)
    {
      $this->InsertFacadeObjectResult = $InsertFacadeObjectResult;
    }

    /**
     * @return InsertFacadeObjectResult
     */
    public function getInsertFacadeObjectResult()
    {
      return $this->InsertFacadeObjectResult;
    }

    /**
     * @param InsertFacadeObjectResult $InsertFacadeObjectResult
     * @return \netForum\xWeb\Xml\Generated\InsertFacadeObjectResponse
     */
    public function setInsertFacadeObjectResult($InsertFacadeObjectResult)
    {
      $this->InsertFacadeObjectResult = $InsertFacadeObjectResult;
      return $this;
    }

}
