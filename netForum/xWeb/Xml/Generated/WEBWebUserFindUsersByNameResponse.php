<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserFindUsersByNameResponse
{

    /**
     * @var WEBWebUserFindUsersByNameResult $WEBWebUserFindUsersByNameResult
     */
    protected $WEBWebUserFindUsersByNameResult = null;

    /**
     * @param WEBWebUserFindUsersByNameResult $WEBWebUserFindUsersByNameResult
     */
    public function __construct($WEBWebUserFindUsersByNameResult)
    {
      $this->WEBWebUserFindUsersByNameResult = $WEBWebUserFindUsersByNameResult;
    }

    /**
     * @return WEBWebUserFindUsersByNameResult
     */
    public function getWEBWebUserFindUsersByNameResult()
    {
      return $this->WEBWebUserFindUsersByNameResult;
    }

    /**
     * @param WEBWebUserFindUsersByNameResult $WEBWebUserFindUsersByNameResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserFindUsersByNameResponse
     */
    public function setWEBWebUserFindUsersByNameResult($WEBWebUserFindUsersByNameResult)
    {
      $this->WEBWebUserFindUsersByNameResult = $WEBWebUserFindUsersByNameResult;
      return $this;
    }

}
