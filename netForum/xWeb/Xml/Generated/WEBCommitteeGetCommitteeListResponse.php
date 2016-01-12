<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCommitteeGetCommitteeListResponse
{

    /**
     * @var WEBCommitteeGetCommitteeListResult $WEBCommitteeGetCommitteeListResult
     */
    protected $WEBCommitteeGetCommitteeListResult = null;

    /**
     * @param WEBCommitteeGetCommitteeListResult $WEBCommitteeGetCommitteeListResult
     */
    public function __construct($WEBCommitteeGetCommitteeListResult)
    {
      $this->WEBCommitteeGetCommitteeListResult = $WEBCommitteeGetCommitteeListResult;
    }

    /**
     * @return WEBCommitteeGetCommitteeListResult
     */
    public function getWEBCommitteeGetCommitteeListResult()
    {
      return $this->WEBCommitteeGetCommitteeListResult;
    }

    /**
     * @param WEBCommitteeGetCommitteeListResult $WEBCommitteeGetCommitteeListResult
     * @return \netForum\xWeb\Xml\Generated\WEBCommitteeGetCommitteeListResponse
     */
    public function setWEBCommitteeGetCommitteeListResult($WEBCommitteeGetCommitteeListResult)
    {
      $this->WEBCommitteeGetCommitteeListResult = $WEBCommitteeGetCommitteeListResult;
      return $this;
    }

}
