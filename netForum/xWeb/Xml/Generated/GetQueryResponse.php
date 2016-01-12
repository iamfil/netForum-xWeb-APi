<?php

namespace netForum\xWeb\Xml\Generated;

class GetQueryResponse
{

    /**
     * @var GetQueryResult $GetQueryResult
     */
    protected $GetQueryResult = null;

    /**
     * @param GetQueryResult $GetQueryResult
     */
    public function __construct($GetQueryResult)
    {
      $this->GetQueryResult = $GetQueryResult;
    }

    /**
     * @return GetQueryResult
     */
    public function getGetQueryResult()
    {
      return $this->GetQueryResult;
    }

    /**
     * @param GetQueryResult $GetQueryResult
     * @return \netForum\xWeb\Xml\Generated\GetQueryResponse
     */
    public function setGetQueryResult($GetQueryResult)
    {
      $this->GetQueryResult = $GetQueryResult;
      return $this;
    }

}
