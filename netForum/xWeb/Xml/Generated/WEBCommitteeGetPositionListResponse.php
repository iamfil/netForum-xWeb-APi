<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCommitteeGetPositionListResponse
{

    /**
     * @var WEBCommitteeGetPositionListResult $WEBCommitteeGetPositionListResult
     */
    protected $WEBCommitteeGetPositionListResult = null;

    /**
     * @param WEBCommitteeGetPositionListResult $WEBCommitteeGetPositionListResult
     */
    public function __construct($WEBCommitteeGetPositionListResult)
    {
      $this->WEBCommitteeGetPositionListResult = $WEBCommitteeGetPositionListResult;
    }

    /**
     * @return WEBCommitteeGetPositionListResult
     */
    public function getWEBCommitteeGetPositionListResult()
    {
      return $this->WEBCommitteeGetPositionListResult;
    }

    /**
     * @param WEBCommitteeGetPositionListResult $WEBCommitteeGetPositionListResult
     * @return \netForum\xWeb\Xml\Generated\WEBCommitteeGetPositionListResponse
     */
    public function setWEBCommitteeGetPositionListResult($WEBCommitteeGetPositionListResult)
    {
      $this->WEBCommitteeGetPositionListResult = $WEBCommitteeGetPositionListResult;
      return $this;
    }

}
