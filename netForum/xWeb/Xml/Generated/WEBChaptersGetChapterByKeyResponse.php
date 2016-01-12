<?php

namespace netForum\xWeb\Xml\Generated;

class WEBChaptersGetChapterByKeyResponse
{

    /**
     * @var WEBChaptersGetChapterByKeyResult $WEBChaptersGetChapterByKeyResult
     */
    protected $WEBChaptersGetChapterByKeyResult = null;

    /**
     * @param WEBChaptersGetChapterByKeyResult $WEBChaptersGetChapterByKeyResult
     */
    public function __construct($WEBChaptersGetChapterByKeyResult)
    {
      $this->WEBChaptersGetChapterByKeyResult = $WEBChaptersGetChapterByKeyResult;
    }

    /**
     * @return WEBChaptersGetChapterByKeyResult
     */
    public function getWEBChaptersGetChapterByKeyResult()
    {
      return $this->WEBChaptersGetChapterByKeyResult;
    }

    /**
     * @param WEBChaptersGetChapterByKeyResult $WEBChaptersGetChapterByKeyResult
     * @return \netForum\xWeb\Xml\Generated\WEBChaptersGetChapterByKeyResponse
     */
    public function setWEBChaptersGetChapterByKeyResult($WEBChaptersGetChapterByKeyResult)
    {
      $this->WEBChaptersGetChapterByKeyResult = $WEBChaptersGetChapterByKeyResult;
      return $this;
    }

}
