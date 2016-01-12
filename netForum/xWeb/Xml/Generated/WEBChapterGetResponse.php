<?php

namespace netForum\xWeb\Xml\Generated;

class WEBChapterGetResponse
{

    /**
     * @var ChapterType $WEBChapterGetResult
     */
    protected $WEBChapterGetResult = null;

    /**
     * @param ChapterType $WEBChapterGetResult
     */
    public function __construct($WEBChapterGetResult)
    {
      $this->WEBChapterGetResult = $WEBChapterGetResult;
    }

    /**
     * @return ChapterType
     */
    public function getWEBChapterGetResult()
    {
      return $this->WEBChapterGetResult;
    }

    /**
     * @param ChapterType $WEBChapterGetResult
     * @return \netForum\xWeb\Xml\Generated\WEBChapterGetResponse
     */
    public function setWEBChapterGetResult($WEBChapterGetResult)
    {
      $this->WEBChapterGetResult = $WEBChapterGetResult;
      return $this;
    }

}
