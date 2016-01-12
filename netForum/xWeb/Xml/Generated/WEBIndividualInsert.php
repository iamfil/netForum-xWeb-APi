<?php

namespace netForum\xWeb\Xml\Generated;

class WEBIndividualInsert
{

    /**
     * @var IndividualType $oFacadeObject
     */
    protected $oFacadeObject = null;

    /**
     * @var string $bRefresh
     */
    protected $bRefresh = null;

    /**
     * @param IndividualType $oFacadeObject
     * @param string $bRefresh
     */
    public function __construct($oFacadeObject, $bRefresh)
    {
      $this->oFacadeObject = $oFacadeObject;
      $this->bRefresh = $bRefresh;
    }

    /**
     * @return IndividualType
     */
    public function getOFacadeObject()
    {
      return $this->oFacadeObject;
    }

    /**
     * @param IndividualType $oFacadeObject
     * @return \netForum\xWeb\Xml\Generated\WEBIndividualInsert
     */
    public function setOFacadeObject($oFacadeObject)
    {
      $this->oFacadeObject = $oFacadeObject;
      return $this;
    }

    /**
     * @return string
     */
    public function getBRefresh()
    {
      return $this->bRefresh;
    }

    /**
     * @param string $bRefresh
     * @return \netForum\xWeb\Xml\Generated\WEBIndividualInsert
     */
    public function setBRefresh($bRefresh)
    {
      $this->bRefresh = $bRefresh;
      return $this;
    }

}
