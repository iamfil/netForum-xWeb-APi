<?php

namespace netForum\xWeb\Xml\Generated;

class MetaDataGetFormForFacadeObject
{

    /**
     * @var guid $FormKey
     */
    protected $FormKey = null;

    /**
     * @var string $szObjectName
     */
    protected $szObjectName = null;

    /**
     * @var oNode $oNode
     */
    protected $oNode = null;

    /**
     * @param guid $FormKey
     * @param string $szObjectName
     * @param oNode $oNode
     */
    public function __construct($FormKey, $szObjectName, $oNode)
    {
      $this->FormKey = $FormKey;
      $this->szObjectName = $szObjectName;
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
     * @return \netForum\xWeb\Xml\Generated\MetaDataGetFormForFacadeObject
     */
    public function setFormKey($FormKey)
    {
      $this->FormKey = $FormKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getSzObjectName()
    {
      return $this->szObjectName;
    }

    /**
     * @param string $szObjectName
     * @return \netForum\xWeb\Xml\Generated\MetaDataGetFormForFacadeObject
     */
    public function setSzObjectName($szObjectName)
    {
      $this->szObjectName = $szObjectName;
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
     * @return \netForum\xWeb\Xml\Generated\MetaDataGetFormForFacadeObject
     */
    public function setONode($oNode)
    {
      $this->oNode = $oNode;
      return $this;
    }

}
