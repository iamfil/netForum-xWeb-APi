<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCommitteeGetMembers
{

    /**
     * @var guid $CommitteeKey
     */
    protected $CommitteeKey = null;

    /**
     * @param guid $CommitteeKey
     */
    public function __construct($CommitteeKey)
    {
      $this->CommitteeKey = $CommitteeKey;
    }

    /**
     * @return guid
     */
    public function getCommitteeKey()
    {
      return $this->CommitteeKey;
    }

    /**
     * @param guid $CommitteeKey
     * @return \netForum\xWeb\Xml\Generated\WEBCommitteeGetMembers
     */
    public function setCommitteeKey($CommitteeKey)
    {
      $this->CommitteeKey = $CommitteeKey;
      return $this;
    }

}
