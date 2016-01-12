<?php

namespace netForum\xWeb\Xml\Generated;

class WEBAddressInsert
{

    /**
     * @var CustomerAddressType $oFacadeObject
     */
    protected $oFacadeObject = null;

    /**
     * @param CustomerAddressType $oFacadeObject
     */
    public function __construct($oFacadeObject)
    {
      $this->oFacadeObject = $oFacadeObject;
    }

    /**
     * @return CustomerAddressType
     */
    public function getOFacadeObject()
    {
      return $this->oFacadeObject;
    }

    /**
     * @param CustomerAddressType $oFacadeObject
     * @return \netForum\xWeb\Xml\Generated\WEBAddressInsert
     */
    public function setOFacadeObject($oFacadeObject)
    {
      $this->oFacadeObject = $oFacadeObject;
      return $this;
    }

}
