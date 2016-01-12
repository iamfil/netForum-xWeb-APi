<?php

namespace netForum\xWeb\Xml\Generated;

class GetAudienceDefinitionResponse
{

    /**
     * @var AudienceDefinition $GetAudienceDefinitionResult
     */
    protected $GetAudienceDefinitionResult = null;

    /**
     * @param AudienceDefinition $GetAudienceDefinitionResult
     */
    public function __construct($GetAudienceDefinitionResult)
    {
      $this->GetAudienceDefinitionResult = $GetAudienceDefinitionResult;
    }

    /**
     * @return AudienceDefinition
     */
    public function getGetAudienceDefinitionResult()
    {
      return $this->GetAudienceDefinitionResult;
    }

    /**
     * @param AudienceDefinition $GetAudienceDefinitionResult
     * @return \netForum\xWeb\Xml\Generated\GetAudienceDefinitionResponse
     */
    public function setGetAudienceDefinitionResult($GetAudienceDefinitionResult)
    {
      $this->GetAudienceDefinitionResult = $GetAudienceDefinitionResult;
      return $this;
    }

}
