<?php

namespace netForum\xWeb\Xml\Generated;

class GetActionTypeListResponse
{

    /**
     * @var GetActionTypeListResult $GetActionTypeListResult
     */
    protected $GetActionTypeListResult = null;

    /**
     * @param GetActionTypeListResult $GetActionTypeListResult
     */
    public function __construct($GetActionTypeListResult)
    {
      $this->GetActionTypeListResult = $GetActionTypeListResult;
    }

    /**
     * @return GetActionTypeListResult
     */
    public function getGetActionTypeListResult()
    {
      return $this->GetActionTypeListResult;
    }

    /**
     * @param GetActionTypeListResult $GetActionTypeListResult
     * @return \netForum\xWeb\Xml\Generated\GetActionTypeListResponse
     */
    public function setGetActionTypeListResult($GetActionTypeListResult)
    {
      $this->GetActionTypeListResult = $GetActionTypeListResult;
      return $this;
    }

}
