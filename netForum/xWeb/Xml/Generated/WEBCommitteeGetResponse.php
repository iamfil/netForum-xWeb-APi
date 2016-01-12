<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCommitteeGetResponse
{

    /**
     * @var CommitteeType $WEBCommitteeGetResult
     */
    protected $WEBCommitteeGetResult = null;

    /**
     * @param CommitteeType $WEBCommitteeGetResult
     */
    public function __construct($WEBCommitteeGetResult)
    {
      $this->WEBCommitteeGetResult = $WEBCommitteeGetResult;
    }

    /**
     * @return CommitteeType
     */
    public function getWEBCommitteeGetResult()
    {
      return $this->WEBCommitteeGetResult;
    }

    /**
     * @param CommitteeType $WEBCommitteeGetResult
     * @return \netForum\xWeb\Xml\Generated\WEBCommitteeGetResponse
     */
    public function setWEBCommitteeGetResult($WEBCommitteeGetResult)
    {
      $this->WEBCommitteeGetResult = $WEBCommitteeGetResult;
      return $this;
    }

}
