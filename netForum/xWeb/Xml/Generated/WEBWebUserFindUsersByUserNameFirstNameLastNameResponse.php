<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserFindUsersByUserNameFirstNameLastNameResponse
{

    /**
     * @var WEBWebUserFindUsersByUserNameFirstNameLastNameResult $WEBWebUserFindUsersByUserNameFirstNameLastNameResult
     */
    protected $WEBWebUserFindUsersByUserNameFirstNameLastNameResult = null;

    /**
     * @param WEBWebUserFindUsersByUserNameFirstNameLastNameResult $WEBWebUserFindUsersByUserNameFirstNameLastNameResult
     */
    public function __construct($WEBWebUserFindUsersByUserNameFirstNameLastNameResult)
    {
      $this->WEBWebUserFindUsersByUserNameFirstNameLastNameResult = $WEBWebUserFindUsersByUserNameFirstNameLastNameResult;
    }

    /**
     * @return WEBWebUserFindUsersByUserNameFirstNameLastNameResult
     */
    public function getWEBWebUserFindUsersByUserNameFirstNameLastNameResult()
    {
      return $this->WEBWebUserFindUsersByUserNameFirstNameLastNameResult;
    }

    /**
     * @param WEBWebUserFindUsersByUserNameFirstNameLastNameResult $WEBWebUserFindUsersByUserNameFirstNameLastNameResult
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserFindUsersByUserNameFirstNameLastNameResponse
     */
    public function setWEBWebUserFindUsersByUserNameFirstNameLastNameResult($WEBWebUserFindUsersByUserNameFirstNameLastNameResult)
    {
      $this->WEBWebUserFindUsersByUserNameFirstNameLastNameResult = $WEBWebUserFindUsersByUserNameFirstNameLastNameResult;
      return $this;
    }

}
