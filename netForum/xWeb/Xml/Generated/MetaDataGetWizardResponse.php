<?php

namespace netForum\xWeb\Xml\Generated;

class MetaDataGetWizardResponse
{

    /**
     * @var AVWizard $MetaDataGetWizardResult
     */
    protected $MetaDataGetWizardResult = null;

    /**
     * @param AVWizard $MetaDataGetWizardResult
     */
    public function __construct($MetaDataGetWizardResult)
    {
      $this->MetaDataGetWizardResult = $MetaDataGetWizardResult;
    }

    /**
     * @return AVWizard
     */
    public function getMetaDataGetWizardResult()
    {
      return $this->MetaDataGetWizardResult;
    }

    /**
     * @param AVWizard $MetaDataGetWizardResult
     * @return \netForum\xWeb\Xml\Generated\MetaDataGetWizardResponse
     */
    public function setMetaDataGetWizardResult($MetaDataGetWizardResult)
    {
      $this->MetaDataGetWizardResult = $MetaDataGetWizardResult;
      return $this;
    }

}
