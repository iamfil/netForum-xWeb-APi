<?php

namespace netForum\xWeb\Xml\Generated;

class WEBEmailUpdate
{

    /**
     * @var CustomerEmailType $oFacadeObject
     */
    protected $oFacadeObject = null;

    /**
     * @param CustomerEmailType $oFacadeObject
     */
    public function __construct($oFacadeObject)
    {
      $this->oFacadeObject = $oFacadeObject;
    }

    /**
     * @return CustomerEmailType
     */
    public function getOFacadeObject()
    {
      return $this->oFacadeObject;
    }

    /**
     * @param CustomerEmailType $oFacadeObject
     * @return \netForum\xWeb\Xml\Generated\WEBEmailUpdate
     */
    public function setOFacadeObject($oFacadeObject)
    {
      $this->oFacadeObject = $oFacadeObject;
      return $this;
    }

}
