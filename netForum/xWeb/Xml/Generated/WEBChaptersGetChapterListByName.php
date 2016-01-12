<?php

namespace netForum\xWeb\Xml\Generated;

class WEBChaptersGetChapterListByName
{

    /**
     * @var string $ChapterName
     */
    protected $ChapterName = null;

    /**
     * @param string $ChapterName
     */
    public function __construct($ChapterName)
    {
      $this->ChapterName = $ChapterName;
    }

    /**
     * @return string
     */
    public function getChapterName()
    {
      return $this->ChapterName;
    }

    /**
     * @param string $ChapterName
     * @return \netForum\xWeb\Xml\Generated\WEBChaptersGetChapterListByName
     */
    public function setChapterName($ChapterName)
    {
      $this->ChapterName = $ChapterName;
      return $this;
    }

}
