<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCommitteeGetCommitteeByKeyResponse
{

    /**
     * @var WEBCommitteeGetCommitteeByKeyResult $WEBCommitteeGetCommitteeByKeyResult
     */
    protected $WEBCommitteeGetCommitteeByKeyResult = null;

    /**
     * @param WEBCommitteeGetCommitteeByKeyResult $WEBCommitteeGetCommitteeByKeyResult
     */
    public function __construct($WEBCommitteeGetCommitteeByKeyResult)
    {
      $this->WEBCommitteeGetCommitteeByKeyResult = $WEBCommitteeGetCommitteeByKeyResult;
    }

    /**
     * @return WEBCommitteeGetCommitteeByKeyResult
     */
    public function getWEBCommitteeGetCommitteeByKeyResult()
    {
      return $this->WEBCommitteeGetCommitteeByKeyResult;
    }

    /**
     * @param WEBCommitteeGetCommitteeByKeyResult $WEBCommitteeGetCommitteeByKeyResult
     * @return \netForum\xWeb\Xml\Generated\WEBCommitteeGetCommitteeByKeyResponse
     */
    public function setWEBCommitteeGetCommitteeByKeyResult($WEBCommitteeGetCommitteeByKeyResult)
    {
      $this->WEBCommitteeGetCommitteeByKeyResult = $WEBCommitteeGetCommitteeByKeyResult;
      return $this;
    }

}
