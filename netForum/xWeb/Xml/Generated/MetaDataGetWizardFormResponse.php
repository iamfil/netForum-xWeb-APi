<?php

namespace netForum\xWeb\Xml\Generated;

class MetaDataGetWizardFormResponse
{

    /**
     * @var AVForm $MetaDataGetWizardFormResult
     */
    protected $MetaDataGetWizardFormResult = null;

    /**
     * @param AVForm $MetaDataGetWizardFormResult
     */
    public function __construct($MetaDataGetWizardFormResult)
    {
      $this->MetaDataGetWizardFormResult = $MetaDataGetWizardFormResult;
    }

    /**
     * @return AVForm
     */
    public function getMetaDataGetWizardFormResult()
    {
      return $this->MetaDataGetWizardFormResult;
    }

    /**
     * @param AVForm $MetaDataGetWizardFormResult
     * @return \netForum\xWeb\Xml\Generated\MetaDataGetWizardFormResponse
     */
    public function setMetaDataGetWizardFormResult($MetaDataGetWizardFormResult)
    {
      $this->MetaDataGetWizardFormResult = $MetaDataGetWizardFormResult;
      return $this;
    }

}
