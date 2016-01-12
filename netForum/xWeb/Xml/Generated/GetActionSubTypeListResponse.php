<?php

namespace netForum\xWeb\Xml\Generated;

class GetActionSubTypeListResponse
{

    /**
     * @var GetActionSubTypeListResult $GetActionSubTypeListResult
     */
    protected $GetActionSubTypeListResult = null;

    /**
     * @param GetActionSubTypeListResult $GetActionSubTypeListResult
     */
    public function __construct($GetActionSubTypeListResult)
    {
      $this->GetActionSubTypeListResult = $GetActionSubTypeListResult;
    }

    /**
     * @return GetActionSubTypeListResult
     */
    public function getGetActionSubTypeListResult()
    {
      return $this->GetActionSubTypeListResult;
    }

    /**
     * @param GetActionSubTypeListResult $GetActionSubTypeListResult
     * @return \netForum\xWeb\Xml\Generated\GetActionSubTypeListResponse
     */
    public function setGetActionSubTypeListResult($GetActionSubTypeListResult)
    {
      $this->GetActionSubTypeListResult = $GetActionSubTypeListResult;
      return $this;
    }

}
