<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCommitteeGetDocumentsResponse
{

    /**
     * @var WEBCommitteeGetDocumentsResult $WEBCommitteeGetDocumentsResult
     */
    protected $WEBCommitteeGetDocumentsResult = null;

    /**
     * @param WEBCommitteeGetDocumentsResult $WEBCommitteeGetDocumentsResult
     */
    public function __construct($WEBCommitteeGetDocumentsResult)
    {
      $this->WEBCommitteeGetDocumentsResult = $WEBCommitteeGetDocumentsResult;
    }

    /**
     * @return WEBCommitteeGetDocumentsResult
     */
    public function getWEBCommitteeGetDocumentsResult()
    {
      return $this->WEBCommitteeGetDocumentsResult;
    }

    /**
     * @param WEBCommitteeGetDocumentsResult $WEBCommitteeGetDocumentsResult
     * @return \netForum\xWeb\Xml\Generated\WEBCommitteeGetDocumentsResponse
     */
    public function setWEBCommitteeGetDocumentsResult($WEBCommitteeGetDocumentsResult)
    {
      $this->WEBCommitteeGetDocumentsResult = $WEBCommitteeGetDocumentsResult;
      return $this;
    }

}
