<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCommitteeGetCommitteeListByNameResponse
{

    /**
     * @var WEBCommitteeGetCommitteeListByNameResult $WEBCommitteeGetCommitteeListByNameResult
     */
    protected $WEBCommitteeGetCommitteeListByNameResult = null;

    /**
     * @param WEBCommitteeGetCommitteeListByNameResult $WEBCommitteeGetCommitteeListByNameResult
     */
    public function __construct($WEBCommitteeGetCommitteeListByNameResult)
    {
      $this->WEBCommitteeGetCommitteeListByNameResult = $WEBCommitteeGetCommitteeListByNameResult;
    }

    /**
     * @return WEBCommitteeGetCommitteeListByNameResult
     */
    public function getWEBCommitteeGetCommitteeListByNameResult()
    {
      return $this->WEBCommitteeGetCommitteeListByNameResult;
    }

    /**
     * @param WEBCommitteeGetCommitteeListByNameResult $WEBCommitteeGetCommitteeListByNameResult
     * @return \netForum\xWeb\Xml\Generated\WEBCommitteeGetCommitteeListByNameResponse
     */
    public function setWEBCommitteeGetCommitteeListByNameResult($WEBCommitteeGetCommitteeListByNameResult)
    {
      $this->WEBCommitteeGetCommitteeListByNameResult = $WEBCommitteeGetCommitteeListByNameResult;
      return $this;
    }

}
