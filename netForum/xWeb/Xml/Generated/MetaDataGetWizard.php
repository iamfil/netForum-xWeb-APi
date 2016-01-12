<?php

namespace netForum\xWeb\Xml\Generated;

class MetaDataGetWizard
{

    /**
     * @var guid $WizardKey
     */
    protected $WizardKey = null;

    /**
     * @param guid $WizardKey
     */
    public function __construct($WizardKey)
    {
      $this->WizardKey = $WizardKey;
    }

    /**
     * @return guid
     */
    public function getWizardKey()
    {
      return $this->WizardKey;
    }

    /**
     * @param guid $WizardKey
     * @return \netForum\xWeb\Xml\Generated\MetaDataGetWizard
     */
    public function setWizardKey($WizardKey)
    {
      $this->WizardKey = $WizardKey;
      return $this;
    }

}
