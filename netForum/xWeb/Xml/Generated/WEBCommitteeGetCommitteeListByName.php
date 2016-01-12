<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCommitteeGetCommitteeListByName
{

    /**
     * @var string $CommitteeName
     */
    protected $CommitteeName = null;

    /**
     * @param string $CommitteeName
     */
    public function __construct($CommitteeName)
    {
      $this->CommitteeName = $CommitteeName;
    }

    /**
     * @return string
     */
    public function getCommitteeName()
    {
      return $this->CommitteeName;
    }

    /**
     * @param string $CommitteeName
     * @return \netForum\xWeb\Xml\Generated\WEBCommitteeGetCommitteeListByName
     */
    public function setCommitteeName($CommitteeName)
    {
      $this->CommitteeName = $CommitteeName;
      return $this;
    }

}
