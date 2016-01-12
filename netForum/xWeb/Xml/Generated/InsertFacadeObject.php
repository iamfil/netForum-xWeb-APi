<?php

namespace netForum\xWeb\Xml\Generated;

class InsertFacadeObject
{

    /**
     * @var string $szObjectName
     */
    protected $szObjectName = null;

    /**
     * @var oNode $oNode
     */
    protected $oNode = null;

    /**
     * @param string $szObjectName
     * @param oNode $oNode
     */
    public function __construct($szObjectName, $oNode)
    {
      $this->szObjectName = $szObjectName;
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
     * @return \netForum\xWeb\Xml\Generated\InsertFacadeObject
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
     * @return \netForum\xWeb\Xml\Generated\InsertFacadeObject
     */
    public function setONode($oNode)
    {
      $this->oNode = $oNode;
      return $this;
    }

}
