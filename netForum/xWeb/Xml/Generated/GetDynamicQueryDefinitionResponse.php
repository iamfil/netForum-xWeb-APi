<?php

namespace netForum\xWeb\Xml\Generated;

class GetDynamicQueryDefinitionResponse
{

    /**
     * @var QueryDefinition $GetDynamicQueryDefinitionResult
     */
    protected $GetDynamicQueryDefinitionResult = null;

    /**
     * @param QueryDefinition $GetDynamicQueryDefinitionResult
     */
    public function __construct($GetDynamicQueryDefinitionResult)
    {
      $this->GetDynamicQueryDefinitionResult = $GetDynamicQueryDefinitionResult;
    }

    /**
     * @return QueryDefinition
     */
    public function getGetDynamicQueryDefinitionResult()
    {
      return $this->GetDynamicQueryDefinitionResult;
    }

    /**
     * @param QueryDefinition $GetDynamicQueryDefinitionResult
     * @return \netForum\xWeb\Xml\Generated\GetDynamicQueryDefinitionResponse
     */
    public function setGetDynamicQueryDefinitionResult($GetDynamicQueryDefinitionResult)
    {
      $this->GetDynamicQueryDefinitionResult = $GetDynamicQueryDefinitionResult;
      return $this;
    }

}
