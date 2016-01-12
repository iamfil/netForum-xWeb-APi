<?php

namespace netForum\xWeb\Xml\Generated;

class WEBChaptersGetChapterByKey
{

    /**
     * @var guid $ChapterKey
     */
    protected $ChapterKey = null;

    /**
     * @param guid $ChapterKey
     */
    public function __construct($ChapterKey)
    {
      $this->ChapterKey = $ChapterKey;
    }

    /**
     * @return guid
     */
    public function getChapterKey()
    {
      return $this->ChapterKey;
    }

    /**
     * @param guid $ChapterKey
     * @return \netForum\xWeb\Xml\Generated\WEBChaptersGetChapterByKey
     */
    public function setChapterKey($ChapterKey)
    {
      $this->ChapterKey = $ChapterKey;
      return $this;
    }

}
