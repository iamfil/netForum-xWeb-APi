<?php

namespace netForum\xWeb\Xml\Generated;

class MetaDataGetFormForIndividual
{

    /**
     * @var guid $FormKey
     */
    protected $FormKey = null;

    /**
     * @var IndividualType $oFacadeObject
     */
    protected $oFacadeObject = null;

    /**
     * @param guid $FormKey
     * @param IndividualType $oFacadeObject
     */
    public function __construct($FormKey, $oFacadeObject)
    {
      $this->FormKey = $FormKey;
      $this->oFacadeObject = $oFacadeObject;
    }

    /**
     * @return guid
     */
    public function getFormKey()
    {
      return $this->FormKey;
    }

    /**
     * @param guid $FormKey
     * @return \netForum\xWeb\Xml\Generated\MetaDataGetFormForIndividual
     */
    public function setFormKey($FormKey)
    {
      $this->FormKey = $FormKey;
      return $this;
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
     * @return \netForum\xWeb\Xml\Generated\MetaDataGetFormForIndividual
     */
    public function setOFacadeObject($oFacadeObject)
    {
      $this->oFacadeObject = $oFacadeObject;
      return $this;
    }

}
