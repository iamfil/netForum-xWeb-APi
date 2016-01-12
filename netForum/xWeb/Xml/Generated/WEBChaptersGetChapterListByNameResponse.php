<?php

namespace netForum\xWeb\Xml\Generated;

class WEBChaptersGetChapterListByNameResponse
{

    /**
     * @var WEBChaptersGetChapterListByNameResult $WEBChaptersGetChapterListByNameResult
     */
    protected $WEBChaptersGetChapterListByNameResult = null;

    /**
     * @param WEBChaptersGetChapterListByNameResult $WEBChaptersGetChapterListByNameResult
     */
    public function __construct($WEBChaptersGetChapterListByNameResult)
    {
      $this->WEBChaptersGetChapterListByNameResult = $WEBChaptersGetChapterListByNameResult;
    }

    /**
     * @return WEBChaptersGetChapterListByNameResult
     */
    public function getWEBChaptersGetChapterListByNameResult()
    {
      return $this->WEBChaptersGetChapterListByNameResult;
    }

    /**
     * @param WEBChaptersGetChapterListByNameResult $WEBChaptersGetChapterListByNameResult
     * @return \netForum\xWeb\Xml\Generated\WEBChaptersGetChapterListByNameResponse
     */
    public function setWEBChaptersGetChapterListByNameResult($WEBChaptersGetChapterListByNameResult)
    {
      $this->WEBChaptersGetChapterListByNameResult = $WEBChaptersGetChapterListByNameResult;
      return $this;
    }

}
