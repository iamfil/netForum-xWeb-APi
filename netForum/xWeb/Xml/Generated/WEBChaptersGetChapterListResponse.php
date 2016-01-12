<?php

namespace netForum\xWeb\Xml\Generated;

class WEBChaptersGetChapterListResponse
{

    /**
     * @var WEBChaptersGetChapterListResult $WEBChaptersGetChapterListResult
     */
    protected $WEBChaptersGetChapterListResult = null;

    /**
     * @param WEBChaptersGetChapterListResult $WEBChaptersGetChapterListResult
     */
    public function __construct($WEBChaptersGetChapterListResult)
    {
      $this->WEBChaptersGetChapterListResult = $WEBChaptersGetChapterListResult;
    }

    /**
     * @return WEBChaptersGetChapterListResult
     */
    public function getWEBChaptersGetChapterListResult()
    {
      return $this->WEBChaptersGetChapterListResult;
    }

    /**
     * @param WEBChaptersGetChapterListResult $WEBChaptersGetChapterListResult
     * @return \netForum\xWeb\Xml\Generated\WEBChaptersGetChapterListResponse
     */
    public function setWEBChaptersGetChapterListResult($WEBChaptersGetChapterListResult)
    {
      $this->WEBChaptersGetChapterListResult = $WEBChaptersGetChapterListResult;
      return $this;
    }

}
