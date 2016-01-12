<?php

namespace netForum\xWeb\Xml\Generated;

class WEBContactRequestInsert
{

    /**
     * @var ContactRequestType $oFacadeObject
     */
    protected $oFacadeObject = null;

    /**
     * @param ContactRequestType $oFacadeObject
     */
    public function __construct($oFacadeObject)
    {
      $this->oFacadeObject = $oFacadeObject;
    }

    /**
     * @return ContactRequestType
     */
    public function getOFacadeObject()
    {
      return $this->oFacadeObject;
    }

    /**
     * @param ContactRequestType $oFacadeObject
     * @return \netForum\xWeb\Xml\Generated\WEBContactRequestInsert
     */
    public function setOFacadeObject($oFacadeObject)
    {
      $this->oFacadeObject = $oFacadeObject;
      return $this;
    }

}
