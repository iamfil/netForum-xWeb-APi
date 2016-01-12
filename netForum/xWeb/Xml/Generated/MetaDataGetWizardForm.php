<?php

namespace netForum\xWeb\Xml\Generated;

class MetaDataGetWizardForm
{

    /**
     * @var guid $WizardFormKey
     */
    protected $WizardFormKey = null;

    /**
     * @var string $szObjectName
     */
    protected $szObjectName = null;

    /**
     * @var oNode $oNode
     */
    protected $oNode = null;

    /**
     * @param guid $WizardFormKey
     * @param string $szObjectName
     * @param oNode $oNode
     */
    public function __construct($WizardFormKey, $szObjectName, $oNode)
    {
      $this->WizardFormKey = $WizardFormKey;
      $this->szObjectName = $szObjectName;
      $this->oNode = $oNode;
    }

    /**
     * @return guid
     */
    public function getWizardFormKey()
    {
      return $this->WizardFormKey;
    }

    /**
     * @param guid $WizardFormKey
     * @return \netForum\xWeb\Xml\Generated\MetaDataGetWizardForm
     */
    public function setWizardFormKey($WizardFormKey)
    {
      $this->WizardFormKey = $WizardFormKey;
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
     * @return \netForum\xWeb\Xml\Generated\MetaDataGetWizardForm
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
     * @return \netForum\xWeb\Xml\Generated\MetaDataGetWizardForm
     */
    public function setONode($oNode)
    {
      $this->oNode = $oNode;
      return $this;
    }

}
