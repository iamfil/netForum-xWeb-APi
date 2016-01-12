<?php

namespace netForum\xWeb\Xml\Generated;

class SetIndividualInformation
{

    /**
     * @var string $IndividualKey
     */
    protected $IndividualKey = null;

    /**
     * @var oUpdateNode $oUpdateNode
     */
    protected $oUpdateNode = null;

    /**
     * @param string $IndividualKey
     * @param oUpdateNode $oUpdateNode
     */
    public function __construct($IndividualKey, $oUpdateNode)
    {
      $this->IndividualKey = $IndividualKey;
      $this->oUpdateNode = $oUpdateNode;
    }

    /**
     * @return string
     */
    public function getIndividualKey()
    {
      return $this->IndividualKey;
    }

    /**
     * @param string $IndividualKey
     * @return \netForum\xWeb\Xml\Generated\SetIndividualInformation
     */
    public function setIndividualKey($IndividualKey)
    {
      $this->IndividualKey = $IndividualKey;
      return $this;
    }

    /**
     * @return oUpdateNode
     */
    public function getOUpdateNode()
    {
      return $this->oUpdateNode;
    }

    /**
     * @param oUpdateNode $oUpdateNode
     * @return \netForum\xWeb\Xml\Generated\SetIndividualInformation
     */
    public function setOUpdateNode($oUpdateNode)
    {
      $this->oUpdateNode = $oUpdateNode;
      return $this;
    }

}
