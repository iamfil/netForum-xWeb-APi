<?php

namespace netForum\xWeb\Xml\Generated;

class GetQueryDefinitionResponse
{

    /**
     * @var Object $GetQueryDefinitionResult
     */
    protected $GetQueryDefinitionResult = null;

    /**
     * @param Object $GetQueryDefinitionResult
     */
    public function __construct($GetQueryDefinitionResult)
    {
      $this->GetQueryDefinitionResult = $GetQueryDefinitionResult;
    }

    /**
     * @return Object
     */
    public function getGetQueryDefinitionResult()
    {
      return $this->GetQueryDefinitionResult;
    }

    /**
     * @param Object $GetQueryDefinitionResult
     * @return \netForum\xWeb\Xml\Generated\GetQueryDefinitionResponse
     */
    public function setGetQueryDefinitionResult($GetQueryDefinitionResult)
    {
      $this->GetQueryDefinitionResult = $GetQueryDefinitionResult;
      return $this;
    }

}
