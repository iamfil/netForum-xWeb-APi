<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCommitteeNominationInsertResponse
{

    /**
     * @var CommitteeNominationsType $WEBCommitteeNominationInsertResult
     */
    protected $WEBCommitteeNominationInsertResult = null;

    /**
     * @param CommitteeNominationsType $WEBCommitteeNominationInsertResult
     */
    public function __construct($WEBCommitteeNominationInsertResult)
    {
      $this->WEBCommitteeNominationInsertResult = $WEBCommitteeNominationInsertResult;
    }

    /**
     * @return CommitteeNominationsType
     */
    public function getWEBCommitteeNominationInsertResult()
    {
      return $this->WEBCommitteeNominationInsertResult;
    }

    /**
     * @param CommitteeNominationsType $WEBCommitteeNominationInsertResult
     * @return \netForum\xWeb\Xml\Generated\WEBCommitteeNominationInsertResponse
     */
    public function setWEBCommitteeNominationInsertResult($WEBCommitteeNominationInsertResult)
    {
      $this->WEBCommitteeNominationInsertResult = $WEBCommitteeNominationInsertResult;
      return $this;
    }

}
