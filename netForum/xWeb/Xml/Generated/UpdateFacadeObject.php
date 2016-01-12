<?php

namespace netForum\xWeb\Xml\Generated;

class UpdateFacadeObject
{

    /**
     * @var string $szObjectName
     */
    protected $szObjectName = null;

    /**
     * @var string $szObjectKey
     */
    protected $szObjectKey = null;

    /**
     * @var oNode $oNode
     */
    protected $oNode = null;

    /**
     * @param string $szObjectName
     * @param string $szObjectKey
     * @param oNode $oNode
     */
    public function __construct($szObjectName, $szObjectKey, $oNode)
    {
      $this->szObjectName = $szObjectName;
      $this->szObjectKey = $szObjectKey;
      $this->oNode = $oNode;
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
     * @return \netForum\xWeb\Xml\Generated\UpdateFacadeObject
     */
    public function setSzObjectName($szObjectName)
    {
      $this->szObjectName = $szObjectName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSzObjectKey()
    {
      return $this->szObjectKey;
    }

    /**
     * @param string $szObjectKey
     * @return \netForum\xWeb\Xml\Generated\UpdateFacadeObject
     */
    public function setSzObjectKey($szObjectKey)
    {
      $this->szObjectKey = $szObjectKey;
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
     * @return \netForum\xWeb\Xml\Generated\UpdateFacadeObject
     */
    public function setONode($oNode)
    {
      $this->oNode = $oNode;
      return $this;
    }

}
