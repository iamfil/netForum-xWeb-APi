<?php

namespace netForum\xWeb\Xml\Generated;

class GetDynamicQueryResponse
{

    /**
     * @var GetDynamicQueryResult $GetDynamicQueryResult
     */
    protected $GetDynamicQueryResult = null;

    /**
     * @param GetDynamicQueryResult $GetDynamicQueryResult
     */
    public function __construct($GetDynamicQueryResult)
    {
      $this->GetDynamicQueryResult = $GetDynamicQueryResult;
    }

    /**
     * @return GetDynamicQueryResult
     */
    public function getGetDynamicQueryResult()
    {
      return $this->GetDynamicQueryResult;
    }

    /**
     * @param GetDynamicQueryResult $GetDynamicQueryResult
     * @return \netForum\xWeb\Xml\Generated\GetDynamicQueryResponse
     */
    public function setGetDynamicQueryResult($GetDynamicQueryResult)
    {
      $this->GetDynamicQueryResult = $GetDynamicQueryResult;
      return $this;
    }

}
