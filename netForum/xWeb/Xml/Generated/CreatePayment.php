<?php

namespace netForum\xWeb\Xml\Generated;

class CreatePayment
{

    /**
     * @var oNode $oNode
     */
    protected $oNode = null;

    /**
     * @param oNode $oNode
     */
    public function __construct($oNode)
    {
      $this->oNode = $oNode;
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
     * @return \netForum\xWeb\Xml\Generated\CreatePayment
     */
    public function setONode($oNode)
    {
      $this->oNode = $oNode;
      return $this;
    }

}
