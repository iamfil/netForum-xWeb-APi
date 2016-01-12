<?php

namespace netForum\xWeb\Xml\Generated;

class WEBChaptersGetChapterMembershipRosterResponse
{

    /**
     * @var WEBChaptersGetChapterMembershipRosterResult $WEBChaptersGetChapterMembershipRosterResult
     */
    protected $WEBChaptersGetChapterMembershipRosterResult = null;

    /**
     * @param WEBChaptersGetChapterMembershipRosterResult $WEBChaptersGetChapterMembershipRosterResult
     */
    public function __construct($WEBChaptersGetChapterMembershipRosterResult)
    {
      $this->WEBChaptersGetChapterMembershipRosterResult = $WEBChaptersGetChapterMembershipRosterResult;
    }

    /**
     * @return WEBChaptersGetChapterMembershipRosterResult
     */
    public function getWEBChaptersGetChapterMembershipRosterResult()
    {
      return $this->WEBChaptersGetChapterMembershipRosterResult;
    }

    /**
     * @param WEBChaptersGetChapterMembershipRosterResult $WEBChaptersGetChapterMembershipRosterResult
     * @return \netForum\xWeb\Xml\Generated\WEBChaptersGetChapterMembershipRosterResponse
     */
    public function setWEBChaptersGetChapterMembershipRosterResult($WEBChaptersGetChapterMembershipRosterResult)
    {
      $this->WEBChaptersGetChapterMembershipRosterResult = $WEBChaptersGetChapterMembershipRosterResult;
      return $this;
    }

}
