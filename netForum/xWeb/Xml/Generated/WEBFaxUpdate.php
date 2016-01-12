<?php

namespace netForum\xWeb\Xml\Generated;

class WEBFaxUpdate
{

    /**
     * @var CustomerFaxType $oFacadeObject
     */
    protected $oFacadeObject = null;

    /**
     * @param CustomerFaxType $oFacadeObject
     */
    public function __construct($oFacadeObject)
    {
      $this->oFacadeObject = $oFacadeObject;
    }

    /**
     * @return CustomerFaxType
     */
    public function getOFacadeObject()
    {
      return $this->oFacadeObject;
    }

    /**
     * @param CustomerFaxType $oFacadeObject
     * @return \netForum\xWeb\Xml\Generated\WEBFaxUpdate
     */
    public function setOFacadeObject($oFacadeObject)
    {
      $this->oFacadeObject = $oFacadeObject;
      return $this;
    }

}
