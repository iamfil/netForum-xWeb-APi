<?php

namespace netForum\xWeb\Xml\Generated;

class GetFacadeObjectListResponse
{

    /**
     * @var GetFacadeObjectListResult $GetFacadeObjectListResult
     */
    protected $GetFacadeObjectListResult = null;

    /**
     * @param GetFacadeObjectListResult $GetFacadeObjectListResult
     */
    public function __construct($GetFacadeObjectListResult)
    {
      $this->GetFacadeObjectListResult = $GetFacadeObjectListResult;
    }

    /**
     * @return GetFacadeObjectListResult
     */
    public function getGetFacadeObjectListResult()
    {
      return $this->GetFacadeObjectListResult;
    }

    /**
     * @param GetFacadeObjectListResult $GetFacadeObjectListResult
     * @return \netForum\xWeb\Xml\Generated\GetFacadeObjectListResponse
     */
    public function setGetFacadeObjectListResult($GetFacadeObjectListResult)
    {
      $this->GetFacadeObjectListResult = $GetFacadeObjectListResult;
      return $this;
    }

}
