<?php

namespace netForum\xWeb\Xml\Generated;

class GetAudienceListResponse
{

    /**
     * @var GetAudienceListResult $GetAudienceListResult
     */
    protected $GetAudienceListResult = null;

    /**
     * @param GetAudienceListResult $GetAudienceListResult
     */
    public function __construct($GetAudienceListResult)
    {
      $this->GetAudienceListResult = $GetAudienceListResult;
    }

    /**
     * @return GetAudienceListResult
     */
    public function getGetAudienceListResult()
    {
      return $this->GetAudienceListResult;
    }

    /**
     * @param GetAudienceListResult $GetAudienceListResult
     * @return \netForum\xWeb\Xml\Generated\GetAudienceListResponse
     */
    public function setGetAudienceListResult($GetAudienceListResult)
    {
      $this->GetAudienceListResult = $GetAudienceListResult;
      return $this;
    }

}
