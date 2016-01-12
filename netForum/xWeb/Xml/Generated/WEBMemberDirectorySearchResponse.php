<?php

namespace netForum\xWeb\Xml\Generated;

class WEBMemberDirectorySearchResponse
{

    /**
     * @var WEBMemberDirectorySearchResult $WEBMemberDirectorySearchResult
     */
    protected $WEBMemberDirectorySearchResult = null;

    /**
     * @param WEBMemberDirectorySearchResult $WEBMemberDirectorySearchResult
     */
    public function __construct($WEBMemberDirectorySearchResult)
    {
      $this->WEBMemberDirectorySearchResult = $WEBMemberDirectorySearchResult;
    }

    /**
     * @return WEBMemberDirectorySearchResult
     */
    public function getWEBMemberDirectorySearchResult()
    {
      return $this->WEBMemberDirectorySearchResult;
    }

    /**
     * @param WEBMemberDirectorySearchResult $WEBMemberDirectorySearchResult
     * @return \netForum\xWeb\Xml\Generated\WEBMemberDirectorySearchResponse
     */
    public function setWEBMemberDirectorySearchResult($WEBMemberDirectorySearchResult)
    {
      $this->WEBMemberDirectorySearchResult = $WEBMemberDirectorySearchResult;
      return $this;
    }

}
