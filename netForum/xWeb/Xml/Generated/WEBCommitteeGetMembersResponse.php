<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCommitteeGetMembersResponse
{

    /**
     * @var WEBCommitteeGetMembersResult $WEBCommitteeGetMembersResult
     */
    protected $WEBCommitteeGetMembersResult = null;

    /**
     * @param WEBCommitteeGetMembersResult $WEBCommitteeGetMembersResult
     */
    public function __construct($WEBCommitteeGetMembersResult)
    {
      $this->WEBCommitteeGetMembersResult = $WEBCommitteeGetMembersResult;
    }

    /**
     * @return WEBCommitteeGetMembersResult
     */
    public function getWEBCommitteeGetMembersResult()
    {
      return $this->WEBCommitteeGetMembersResult;
    }

    /**
     * @param WEBCommitteeGetMembersResult $WEBCommitteeGetMembersResult
     * @return \netForum\xWeb\Xml\Generated\WEBCommitteeGetMembersResponse
     */
    public function setWEBCommitteeGetMembersResult($WEBCommitteeGetMembersResult)
    {
      $this->WEBCommitteeGetMembersResult = $WEBCommitteeGetMembersResult;
      return $this;
    }

}
