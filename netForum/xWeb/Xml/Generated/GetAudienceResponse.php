<?php

namespace netForum\xWeb\Xml\Generated;

class GetAudienceResponse
{

    /**
     * @var GetAudienceResult $GetAudienceResult
     */
    protected $GetAudienceResult = null;

    /**
     * @param GetAudienceResult $GetAudienceResult
     */
    public function __construct($GetAudienceResult)
    {
      $this->GetAudienceResult = $GetAudienceResult;
    }

    /**
     * @return GetAudienceResult
     */
    public function getGetAudienceResult()
    {
      return $this->GetAudienceResult;
    }

    /**
     * @param GetAudienceResult $GetAudienceResult
     * @return \netForum\xWeb\Xml\Generated\GetAudienceResponse
     */
    public function setGetAudienceResult($GetAudienceResult)
    {
      $this->GetAudienceResult = $GetAudienceResult;
      return $this;
    }

}
