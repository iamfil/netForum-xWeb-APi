<?php

namespace netForum\xWeb\Xml\Generated;

class WEBChaptersGetChapterOfficersResponse
{

    /**
     * @var WEBChaptersGetChapterOfficersResult $WEBChaptersGetChapterOfficersResult
     */
    protected $WEBChaptersGetChapterOfficersResult = null;

    /**
     * @param WEBChaptersGetChapterOfficersResult $WEBChaptersGetChapterOfficersResult
     */
    public function __construct($WEBChaptersGetChapterOfficersResult)
    {
      $this->WEBChaptersGetChapterOfficersResult = $WEBChaptersGetChapterOfficersResult;
    }

    /**
     * @return WEBChaptersGetChapterOfficersResult
     */
    public function getWEBChaptersGetChapterOfficersResult()
    {
      return $this->WEBChaptersGetChapterOfficersResult;
    }

    /**
     * @param WEBChaptersGetChapterOfficersResult $WEBChaptersGetChapterOfficersResult
     * @return \netForum\xWeb\Xml\Generated\WEBChaptersGetChapterOfficersResponse
     */
    public function setWEBChaptersGetChapterOfficersResult($WEBChaptersGetChapterOfficersResult)
    {
      $this->WEBChaptersGetChapterOfficersResult = $WEBChaptersGetChapterOfficersResult;
      return $this;
    }

}
