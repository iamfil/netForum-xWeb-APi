<?php

namespace netForum\xWeb\Xml\Generated;

class WEBChaptersGetChapterOfficers
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
     * @return \netForum\xWeb\Xml\Generated\WEBChaptersGetChapterOfficers
     */
    public function setChapterKey($ChapterKey)
    {
      $this->ChapterKey = $ChapterKey;
      return $this;
    }

}
