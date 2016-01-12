<?php

namespace netForum\xWeb\Xml\Generated;

class WEBPhoneInsert
{

    /**
     * @var CustomerPhoneType $oFacadeObject
     */
    protected $oFacadeObject = null;

    /**
     * @param CustomerPhoneType $oFacadeObject
     */
    public function __construct($oFacadeObject)
    {
      $this->oFacadeObject = $oFacadeObject;
    }

    /**
     * @return CustomerPhoneType
     */
    public function getOFacadeObject()
    {
      return $this->oFacadeObject;
    }

    /**
     * @param CustomerPhoneType $oFacadeObject
     * @return \netForum\xWeb\Xml\Generated\WEBPhoneInsert
     */
    public function setOFacadeObject($oFacadeObject)
    {
      $this->oFacadeObject = $oFacadeObject;
      return $this;
    }

}
