<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserCreateResponse
{

    /**
     * @var WebUserType $WEBWebUserCreateResult
     */
    protected $WEBWebUserCreateResult = null;

    /**
     * @param WebUserType $WEBWebUserCreateResult
     */
    public function __construct($WEBWebUserCreateResult)
    {
      $this->WEBWebUserCreateResult = $WEBWebUserCreateResult;
    }

    /**
     * @return WebUserType
     */
    public function getWEBWebUserCreateResult()
    {
      return $this->WEBWebUserCreateResult;
    }

    /**
     * @param WebUserType $WEBWebUserCreateResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserCreateResponse
     */
    public function setWEBWebUserCreateResult($WEBWebUserCreateResult)
    {
      $this->WEBWebUserCreateResult = $WEBWebUserCreateResult;
      return $this;
    }

}
