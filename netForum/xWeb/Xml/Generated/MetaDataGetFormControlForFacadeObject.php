<?php

namespace netForum\xWeb\Xml\Generated;

class MetaDataGetFormControlForFacadeObject
{

    /**
     * @var guid $FormKey
     */
    protected $FormKey = null;

    /**
     * @var string $controlName
     */
    protected $controlName = null;

    /**
     * @var oNode $oNode
     */
    protected $oNode = null;

    /**
     * @param guid $FormKey
     * @param string $controlName
     * @param oNode $oNode
     */
    public function __construct($FormKey, $controlName, $oNode)
    {
      $this->FormKey = $FormKey;
      $this->controlName = $controlName;
      $this->oNode = $oNode;
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
     * @return \netForum\xWeb\Xml\Generated\MetaDataGetFormControlForFacadeObject
     */
    public function setFormKey($FormKey)
    {
      $this->FormKey = $FormKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getControlName()
    {
      return $this->controlName;
    }

    /**
     * @param string $controlName
     * @return \netForum\xWeb\Xml\Generated\MetaDataGetFormControlForFacadeObject
     */
    public function setControlName($controlName)
    {
      $this->controlName = $controlName;
      return $this;
    }

    /**
     * @return oNode
     */
    public function getONode()
    {
      return $this->oNode;
    }

    /**
     * @param oNode $oNode
     * @return \netForum\xWeb\Xml\Generated\MetaDataGetFormControlForFacadeObject
     */
    public function setONode($oNode)
    {
      $this->oNode = $oNode;
      return $this;
    }

}
