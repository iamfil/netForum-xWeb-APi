<?php

namespace netForum\xWeb\Xml\Generated;

class WEBFaxInsert
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
     * @return \netForum\xWeb\Xml\Generated\WEBFaxInsert
     */
    public function setOFacadeObject($oFacadeObject)
    {
      $this->oFacadeObject = $oFacadeObject;
      return $this;
    }

}
