<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCommitteeGetSubCommitteeListByCommitteeResponse
{

    /**
     * @var WEBCommitteeGetSubCommitteeListByCommitteeResult $WEBCommitteeGetSubCommitteeListByCommitteeResult
     */
    protected $WEBCommitteeGetSubCommitteeListByCommitteeResult = null;

    /**
     * @param WEBCommitteeGetSubCommitteeListByCommitteeResult $WEBCommitteeGetSubCommitteeListByCommitteeResult
     */
    public function __construct($WEBCommitteeGetSubCommitteeListByCommitteeResult)
    {
      $this->WEBCommitteeGetSubCommitteeListByCommitteeResult = $WEBCommitteeGetSubCommitteeListByCommitteeResult;
    }

    /**
     * @return WEBCommitteeGetSubCommitteeListByCommitteeResult
     */
    public function getWEBCommitteeGetSubCommitteeListByCommitteeResult()
    {
      return $this->WEBCommitteeGetSubCommitteeListByCommitteeResult;
    }

    /**
     * @param WEBCommitteeGetSubCommitteeListByCommitteeResult $WEBCommitteeGetSubCommitteeListByCommitteeResult
     * @return \netForum\xWeb\Xml\Generated\WEBCommitteeGetSubCommitteeListByCommitteeResponse
     */
    public function setWEBCommitteeGetSubCommitteeListByCommitteeResult($WEBCommitteeGetSubCommitteeListByCommitteeResult)
    {
      $this->WEBCommitteeGetSubCommitteeListByCommitteeResult = $WEBCommitteeGetSubCommitteeListByCommitteeResult;
      return $this;
    }

}
