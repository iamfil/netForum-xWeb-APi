<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCommitteeNominationInsert
{

    /**
     * @var CommitteeNominationsType $oFacadeObject
     */
    protected $oFacadeObject = null;

    /**
     * @param CommitteeNominationsType $oFacadeObject
     */
    public function __construct($oFacadeObject)
    {
      $this->oFacadeObject = $oFacadeObject;
    }

    /**
     * @return CommitteeNominationsType
     */
    public function getOFacadeObject()
    {
      return $this->oFacadeObject;
    }

    /**
     * @param CommitteeNominationsType $oFacadeObject
     * @return \netForum\xWeb\Xml\Generated\WEBCommitteeNominationInsert
     */
    public function setOFacadeObject($oFacadeObject)
    {
      $this->oFacadeObject = $oFacadeObject;
      return $this;
    }

}
